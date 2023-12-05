<?php

namespace App\Http\Controllers;
use App\Models\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class Formcontroller extends Controller
{
    function form(){
        return view('form');
    }
    function store_data(Request $request){
        $data = new form;
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->country = $request->input('country');

        $checkbox_data=$request->input('skill');
        $data->skill=implode(',',$checkbox_data);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $ext=$image->getClientOriginalExtension();
            $image_name=time().".".$ext;
            $image->move('storage/images',$image_name);
            $data->image=$image_name;
        }
        $data->save();
        return redirect('/show');

    }
    function search_data(Request $request){
        $data=$request->input('search');
        $data=DB::table('forms')->where('name','like','%'.$data.'%')->get();
        return view('show',compact('data'));
    }
    function show(){
        $data=form::paginate(3);
        return view('show',compact('data'));
    }
    function delete($id){
        form::destroy($id);
        return back();
    }
    function update($id){
        $data = form::find($id);
        return view('edit_form',compact('data'));
    }
    function update_data(Request $request , $id){
        $data = form::find($id);
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->country = $request->input('country');
        if($request->hasFile('image')){
            $destination='images/'.$data->image;
            if(File::exists($destination)){
                File::delete();
            }
            $image=$request->file('image');
            $ext=$image->getClientOriginalExtension();
            $image_name=time().".".$ext;
            $image->move('storage/images',$image_name);
            $data->image=$image_name;
        }
        $checkbox_data=$request->input('skill');
        $data->skill=implode(',',$checkbox_data);
        $data->save();
        return redirect('/show');
    }
}
