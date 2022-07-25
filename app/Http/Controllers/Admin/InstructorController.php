<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstructorRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;
use Spatie\Activitylog\Models\Activity;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:instructor-list');
        $this->middleware('permission:instructor-create', ['only' => ['create','store']]);
        $this->middleware('permission:instructor-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:instructor-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $allInstructors = User::count();
        $instructors = User::status('active')->type('instructor')->orderBy('id','DESC')->where(function ($q) use($request){
        if($request->keyword){
            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhere('nickname' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhere('phone2' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhere('whatsApp' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhere('address' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhere('facebook' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhere('twitter' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhere('linkedin' , 'LIKE' , '%'.$request->keyword.'%')
                ->orWhereHas('level', function ($q) use ($request){
                    if($request->keyword){
                        $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                    }
                })->orWhereHas('subjects', function ($q) use ($request){
                    if($request->keyword){
                        $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                    }
                });
        }})->paginate(25);;
        activity()
            ->event('d')

            ->causedBy(Auth::user()->id)
            ->withProperties(['customProperty' => 'customValue'])
            ->log('Look, I logged something');
        return view('admin.users.instructors.index',compact('allInstructors','instructors','request'));
    }


    public function create()
    {
        return view('admin.users.instructors.create');
    }



    public function store(InstructorRequest $request)
    {
        $instructor = User::create($request->all());
        $instructor->subjects()->sync($request->subject_id);
        $instructor->password = bcrypt($request->input('password'));
        $instructor->userType = 'instructor';

        if($request->file('photo')) {
            $instructor
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('user');
        }
        $instructor->save();

        return redirect()->route('instructors.index')
            ->with(['success' => __('home.User created successfully')]);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $model = User::status('active')->type('instructor')->findOrFail($id);
        return view('admin.users.instructors.edit',compact('model'));
    }


    public function update(InstructorRequest $request, $id)
    {


        $instructor = User::findOrFail($id);

        $instructor->update($request->all());
        $instructor->subjects()->sync($request->subject_id);
        $instructor->password = bcrypt($request->input('password'));
        if($request->hasFile('photo')) {
            $instructor
                ->clearMediaCollection('user')
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate('30'))
                ->UsingFileName($random)
                ->toMediaCollection('user');
        }

        $instructor->save();


        return redirect()->route('instructors.index')
            ->with(['success' => __('home.User successfully edited')]);
    }


    public function destroy($id)
    {
        $instructors = User::findOrFail($id);
        $instructors->delete();
        return redirect()->route('instructors.index')
            ->with(['success' => __('home.User deleted successfully')]);
    }
}
