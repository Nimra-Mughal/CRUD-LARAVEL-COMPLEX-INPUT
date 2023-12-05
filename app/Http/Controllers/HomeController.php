<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function addproduct(){
        return view('addproduct');
    }
    function insertproduct(Request $request){
        $data=new product();
        $num=mt_rand(1000000000,9999999999);
        $barcode=$request['barcode']=$num;
        if($this->barcodeexist($num)){
            $num=mt_rand(1000000000,999999999);
        }
        $data->barcode=$barcode;

        $data->name= $request->input('name');
        $data->price=$request->input('price');
        $data->brand=$request->input('brand');
        $data->description=$request->input('description');
        if($request->hasFile('image')){
            $image=$request->file('image');
            $ext=$image->getClientOriginalExtension();
            $image_name=time().".".$ext;
            $image->move('images',$image_name);
            $data->image= $image_name;
        }
        $data->save();
        return back();

       

    }
    public function barcodeexist($num){
        return product::wherebarcode($num)->exists();
    }
    function viewproduct(){
        $data=product::all();
        return view('viewproduct',compact('data'));
    }

}
