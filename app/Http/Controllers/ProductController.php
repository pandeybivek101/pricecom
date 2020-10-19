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
            if ($request->hasfile('image')){
                $product->image=image_store($data['image']);
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
        $website=Website::all();
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
        return view('admin.edit-product')->with(compact('product', 'website'));
    }

    public function add_common(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            $common=new Common();
            $common->product_url=$data['url'];
            $common->website_id=$data['website_name'];
            $common->users_id=Auth::id();
            $common->description='nn';
            $common->save();
            return redirect()->back();
        }
        return view('admin.edit-product');
    }

    public function scrapvalue($value){
        if(isset($value)){
            return $value;
        }
    }


    public function fetch_data(){
        $crawler = Goutte::request('GET', 'https://www.daraz.com.np/products/fujitsu-lh532038-i3-3110m-2gb-500g-bluetooth-141-laptop-i104470530-s1025522249.html?spm=a2a0e.searchlist.list.1.48765d726X3nSp&search=1');
        $nodes = $crawler->filter('[type="application/ld+json"]');
        $nodes->each(function ($item) {
            print_r($item->text());exit;
            $json = json_decode($item->text());
            foreach($json as $js){

                $name= self::scrapvalue($js->lowPrice);
                $record['lowerprice']=$js->lowPrice;
                
                   
            }
        });


        /*$crawler = Goutte::request('GET', 'https://www.sastodeal.com/alpha-home-mixer-grinder-magic-550-watt-3-jar-alpha-mx-072.html');
        
        $nodes = $crawler->filter('.product-info-main');
        $nodes->each(function ($item) {
            echo $item->text();

        });*/
    }

    public function detail($id){
        $product=Product::findorfail($id);
        //self::fetch_data();
        return view('home.detail')->with(compact('product'));
    }
    
    
}
