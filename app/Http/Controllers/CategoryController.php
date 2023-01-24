<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(request $request){
        $data=new Category();
        $data->name=$request->name;
        $data->save();

    }
    public function table(){
        $data=Category::all();
        return view('cat_table',compact ('data'));
    }
    public function edit($id){
        $data=Category::find($id);
        return view('cat_edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data=category::find($id);
        $data->name=$request->name;
        $data->save();
        return redirect()->route('category.table' );
    }
    public function delete($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->route('category.table');
    }
}
