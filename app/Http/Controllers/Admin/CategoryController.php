<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $user = Category::create($request->all());

        return redirect()->route('categories.index')
            ->with(['success' => __('category.Category created successfully')]);
    }
    public function edit($id)
    {
        $model = Category::findOrFail($id);
        return view('admin.categories.edit',compact('model'));
    }

    public function update(CategoryRequest $request,$id)
    {
        $user = Category::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('categories.index')
            ->with(['success' => __('category.Category successfully edited')]);
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('categories.index')
            ->with(['success' => __('category.Category deleted successfully')]);
    }
}
