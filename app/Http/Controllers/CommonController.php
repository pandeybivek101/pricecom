<?php

namespace App\Http\Controllers;
use App\Models\Common;
use Validator;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function edit_com(Request $request, $id){
        if($request->isMethod('post')){
            $data=$request->all();
            $common=Common::findorfail($id);
            $common->product_url=$data['url'];
            $common->websites_id=$data['website_name'];
            $common->save();
            return  redirect()->back();
        }
        return view('admin.edit-product');

    }

    public function delete_common(Request $request, $id){
        
            return  redirect()->back();
        
        //return '<h1>nice</h1>';
    }
}
