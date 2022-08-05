<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:city-list');
        $this->middleware('permission:city-create', ['only' => ['create','store']]);
        $this->middleware('permission:city-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:city-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $cities = City::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('city' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(25);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See cities'));
        return view('admin.cities.index',compact('cities','request'));
    }

    public function create()
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create cities'));
        return view('admin.cities.create');
    }

    public function store(CityRequest $request)
    {
        $city = City::create($request->all());


        activity()
            ->performedOn($city)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new city'));
        return redirect()->route('cities.index')
            ->with(['success' => __('city.City created successfully')]);
    }
    public function edit($id)
    {
        $model = City::findOrFail($id);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See show categories'));
        return view('admin.cities.edit',compact('model'));
    }

    public function update(CityRequest $request,$id)
    {
        $city = City::findOrFail($id);
        $city->update($request->all());


        activity()
            ->performedOn($city)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update city'));
        return redirect()->route('cities.index')
            ->with(['success' => __('city.City successfully edited')]);
    }

    public function destroy($id)
    {
        $cities = City::findOrFail($id);
        $cities->delete();


        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete city'));
        return redirect()->route('cities.index')
            ->with(['success' => __('city.City deleted successfully')]);
    }
}
