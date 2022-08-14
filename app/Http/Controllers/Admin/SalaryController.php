<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalaryRequest;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:salaries-list');
        $this->middleware('permission:salaries-create', ['only' => ['create','store']]);
        $this->middleware('permission:salaries-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:salaries-delete', ['only' => ['destroy']]);
        $this->middleware('permission:reports-salaries', ['only' => ['salaries']]);
    }

    public function index(Request $request)
    {
        $users = User::orderBy('id','DESC')->status('active')->type('admin')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('job' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('salary' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(25);

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See salaries'));

        return view('admin.users.salary.index',compact('users','request'));
    }


    public function salaries(Request $request)
    {
        $salaries = Salary::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('job' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('salary' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('date' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);

        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See reports salaries'));

        return view('admin.reports.salary',compact('salaries','request'));
    }

    public function salary($id)
    {
        $invoice = Salary::findOrFail($id);
        return view('admin.users.salary.invoice',compact('invoice'));
    }

    public function store(SalaryRequest $request)
    {
        $salaries = Salary::create($request->all());


        activity()
            ->performedOn($salaries)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new salary'));
        return redirect()->route('reports.salaries')
            ->with(['success' => __('salary.Salary created successfully')]);
    }

    public function edit($id)
    {
        $model = Salary::findOrFail($id);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit reports salaries'));
        return view('admin.users.salary.edit',compact('model'));
    }

    public function update(SalaryRequest $request,$id)
    {
        $salary = Salary::findOrFail($id);
        $salary->update($request->all());


        activity()
            ->performedOn($salary)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update salary'));
        return redirect()->route('reports.salaries')
            ->with(['success' => __('salary.Salary successfully edited')]);
    }

    public function destroy($id)
    {
        $salaries = Salary::findOrFail($id);
        $salaries->delete();


        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete salary'));
        return redirect()->route('reports.salaries')
            ->with(['success' => __('salary.Salary deleted successfully')]);
    }
}
