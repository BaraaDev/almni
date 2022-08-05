<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpenseRequest;
use App\Models\City;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:expenses-list');
        $this->middleware('permission:expenses-create', ['only' => ['create','store']]);
        $this->middleware('permission:expenses-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:expenses-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $expenses = Expense::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('price' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('count' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('date' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See expenses'));
        $total = Expense::sum('price');
        return view('admin.expenses.index',compact('expenses','request','total'));
    }


    public function create()
    {
        activity()
        ->causedBy(Auth::user()->id)
        ->log(__('log.See create expenses'));
        return view('admin.expenses.create');
    }

    public function store(ExpenseRequest $request)
    {
        $expenses = Expense::create($request->all());


        activity()
            ->performedOn($expenses)
            ->event(__('home.create'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.create new expense'));
        return redirect()->route('expenses.index')
            ->with(['success' => __('expenses.Expense created successfully')]);
    }

    public function edit($id)
    {
        $model = Expense::findOrFail($id);


        activity()
            ->causedBy(Auth::user()->id)
            ->log(__('log.See show expenses'));
        return view('admin.expenses.edit',compact('model'));
    }

    public function update(ExpenseRequest $request,$id)
    {
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());


        activity()
            ->performedOn($expense)
            ->event(__('home.update'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.update expense'));
        return redirect()->route('expenses.index')
            ->with(['success' => __('expenses.Expense successfully edited')]);
    }


    public function destroy($id)
    {
        $expenses = Expense::findOrFail($id);
        $expenses->delete();


        activity()
            ->event(__('home.delete'))
            ->causedBy(Auth::user()->id)
            ->log(__('log.delete city'));
        return redirect()->route('expenses.index')
            ->with(['success' => __('expenses.Expense deleted successfully')]);
    }
}
