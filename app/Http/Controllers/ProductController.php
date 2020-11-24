<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Common;
use App\Models\Website;
use Auth;
use Goutte;


class ProductController extends Controller
{
    //
    public function add_product(Request $request){
        if($request->isMethod('post')){

            $data=$request->all();
            //print_r($data['image']);exit;
            //print_r($data);exit;
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
            $product->price=$data['price'];
            $product->discount_type=$data['discount_type'];
            $product->discount=$data['discount'];
            $product->users=Auth::id();
            $pro=[];
            if ($request->hasfile('image')){

                foreach($data['image'] as $img){
                    $thumb=image_store($img);
                    array_push($pro, $thumb);

                }

                
                
            }

            $product->image=json_encode($pro);
            $product->save();
            //print_r('saved');
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
        $website=Website::all();
        $similar=Common::where('products_id', $id)->get();
        if($request->isMethod('post')){
            $data=$request->all();
            $filename=$request->hasfile('image') ? image_store($data['image']) : $data['old_image'];
            Product::where('id', $id)->update([
                'title'=>$data['title'],
                'description'=>$data['description'],
                'brands'=>$data['brand'],
                'series'=>$data['series'],
                'models'=>$data['models'],
                'price'=>$data['price'],
                'generation'=>$data['generation'],
                'ram'=>$data['ram'],
                'storage'=>$data['storage'],
                'display'=>$data['display'],
                'image'=>$filename,
                'discount_type'=>$data['discount_type'],
                'discount'=>$data['discount'],
            ]);
            return redirect()->back();
        }
        return view('admin.edit-product')->with(compact('product', 'website','similar'));
    }

    public function add_common(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            $common=new Common();
            $common->product_url=$data['url'];
            $common->websites_id=$data['website_name'];
            $common->users_id=Auth::id();
            $common->products_id=$data['product_id'];
            $common->save();
            return redirect()->back();
        }
        return view('admin.edit-product');
    }
    
    public function view_product_detail(Request $request, $id){
        $product=Product::findorfail($id);
        $product->image=json_decode($product->image);
        return view('admin.view-product-detail')->with(compact('product'));
    }

    public function edit_common(Request $request, $id){
        if($request->isMethod('post')){
            print_r('dhdhhdhhd');exit;
        }
       
    }


    public function edit_com(Request $request, $productid){
        if($request->isMethod('post')){
            return  redirect()->back();
        }
        return view('admin.edit-product');

    }

    
    
}
