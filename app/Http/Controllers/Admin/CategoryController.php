<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:category-list');
        $this->middleware('permission:category-create', ['only' => ['create','store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $categories = Category::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('subject', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);
        return view('admin.categories.index',compact('categories','request'));
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
