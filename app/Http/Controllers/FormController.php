<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
class FormController extends Controller
{
    public function form(){
        return view('form');
    }
    public function store(Request $request){
        $data=new form();
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->save();
        return redirect()->route('create.table')->with('success','Data is inserted successfully');
    }
    public function table(){
        $data=Form::paginate(10);
        return view('table',compact('data'));
    }
    public function edit($id){
        $data=Form::find($id);
    return view('edit',compact('data'));

    }
    public function update(Request $request,$id){
        $data=Form::find($id);
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->phone=$request->phone;
        $data->address=$request->address;



 $data->save();
 return redirect()->route('create.table')->with('success','Data Updated Successfully');
}
 public function delete($id){
 $data=Form::find($id);
 $data->delete();
 return redirect()->route('create.table')->with('success','Data delete Successfully');
 }

}


