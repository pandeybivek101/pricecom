<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;


class ProductController extends Controller
{
    //
    public function add_product(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            $product=new Product();
            $product->title=$data['title'];
            $product->description=$data['description'];
            $product->brands=$data['brand'];
            $product->series=$data['series'];
            $product->models=$data['models'];
            $product->generation=$data['generation'];
            $product->ram=$data['ram'];
            $product->storage=$data['storage'];
            $product->display=$data['display'];
            $product->users=Auth::User()->ID;
            if ($request->hasfile('image')){
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/products/', $filename);
                $product->image=$filename;
            }
            $product->save();
            return redirect()->back();
            

        }
        return view('admin.add-product');
    }


    public function view_product(Request $request){
        $products=Product::all();
        return view('admin.view-product')->with(compact('products'));
    }

    public function delete_product($id){
        perform_delete($id, Product::class);
    }

    public function edit_product(Request $request, $id){
        $product=Product::findorfail($id);
        if($request->isMethod('post')){
            $data=$request->all();

            if($request->hasfile('image')){
                $file=$data['image'];
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/products/', $filename);
            }else{
                $filename=$data['old_image'];
            }

            print_r($filename);
            Product::where('id', $id)->update([
                'title'=>$data['title'],
                'description'=>$data['description'],
                'brands'=>$data['brand'],
                'series'=>$data['series'],
                'models'=>$data['models'],
                'generation'=>$data['generation'],
                'ram'=>$data['ram'],
                'storage'=>$data['storage'],
                'display'=>$data['display'],
                'image'=>$filename,
            ]);
            return redirect()->back();
        }
        return view('admin.edit-product')->with(compact('product'));
    }
    
}
