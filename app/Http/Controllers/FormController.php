<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Validator;
use App\Models\Form;
use App\Models\Category;

class FormController extends Controller
{
    public function form(){
        $categories=Category::all();
        return view('form',compact('categories'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone' =>['required', 'digits:10'],

         ]);
        $data=new form();
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->category_id=$request->category_id;

        $data->save();
        return redirect()->route('create.table')->with('success','Data is inserted successfully');
    }
    public function table(){
        $data=Form::paginate(10);
        return view('table',compact('data'));
    }
    public function edit($id){
        $data=Form::find($id);
        $categories=Category::all();

    return view('edit',compact('data','categories'));

    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required'
         ]);


        $data=Form::find($id);
     
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->category_id=$request->category_id;

        $data->save();
         return redirect()->route('create.table')->with('success','Data Updated Successfully');
}
 public function delete($id){

 $data=Form::find($id);
 $data->delete();
 return redirect()->route('create.table')->with('success','Data delete Successfully');
 }

}


