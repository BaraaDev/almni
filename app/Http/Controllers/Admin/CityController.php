<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('admin.cities.index',compact('cities'));
    }

    public function create()
    {
        return view('admin.cities.create');
    }

    public function store(CityRequest $request)
    {
        $user = City::create($request->all());

        return redirect()->route('cities.index')
            ->with(['success' => __('city.City created successfully')]);
    }
    public function edit($id)
    {
        $model = City::findOrFail($id);
        return view('admin.cities.edit',compact('model'));
    }

    public function update(CityRequest $request,$id)
    {
        $user = City::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('cities.index')
            ->with(['success' => __('city.City successfully edited')]);
    }

    public function destroy($id)
    {
        $cities = City::findOrFail($id);
        $cities->delete();
        return redirect()->route('cities.index')
            ->with(['success' => __('city.City deleted successfully')]);
    }
}
