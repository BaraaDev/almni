<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See categories'));
        return view('admin.categories.index',compact('categories','request'));
    }

    public function create()
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See create categories'));

        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        $category->slug  = Str::slug($request->name);
        $category->save();
        activity()
            ->performedOn($category)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new category'));

        return redirect()->route('categories.index')
            ->with(['success' => __('category.Category created successfully')]);
    }
    public function edit($id)
    {
        $model = Category::findOrFail($id);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See edit categories'));
        return view('admin.categories.edit',compact('model'));
    }

    public function update(CategoryRequest $request,$id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        $category->slug  = Str::slug($request->name);
        $category->save();

        activity()
            ->performedOn($category)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update category'));
        return redirect()->route('categories.index')
            ->with(['success' => __('category.Category successfully edited')]);
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();


        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete category'));
        return redirect()->route('categories.index')
            ->with(['success' => __('category.Category deleted successfully')]);
    }
}
