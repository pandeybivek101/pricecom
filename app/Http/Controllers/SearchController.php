<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use Response;
use URL;


class SearchController extends Controller
{
    //seach controller

    public function search_product_query($value){
        $query=Product::where('title', 'like', '%'.$value.'%')
        ->orWhere('models', 'like', '%'.$value.'%')
        ->orWhere('brands', 'like', '%'.$value.'%')
        ->orWhere('series', 'like', '%'.$value.'%')
        ->get();
        return $query;

    }

    
    public function search(Request $request){
        $data=$request->all();
        $results = self::search_product_query($data['q']);
        $total=$results->count();
        return view('home.search')->with(compact('results', 'total'));

    }


    function live_html($result){
        $base_url=URL::to("/");
        $html='';
        $html.='<div class="col-md-4">
                    <div class="product-card text-center">
                        <div class="image-section">
                            <div class="image">
                                <a href="'. $base_url .'/products/'.$result->id.'">
                                    <img src="'. $base_url .'/uploads/products/'.$result->image.'" alt="dell">
                                </a>
                            </div>
                        </div>
                        <div class="product-model">
                            <div class="brand-name">'.$result->title.'</div>
                        </div>
                        <div class="product-price">
                            <div class="price">Best Price: <span>Rs '.$result->price.'</span></div>
                        </div>
                    </div>
                </div>';
        return $html;
    }




    public function ajax_search(Request $request){
        $results = self::search_product_query($_POST['input']);
        $total=$results->count();
        $content='';
        
        if(!empty($results)){
            foreach($results as $result):
                $content.=self::live_html($result);
            endforeach;
        }
        $response['products']=$content;
        $response['total']=$total;
        
        return Response($response);
       
    }


    function brands_ajax_search(Request $request){
        $results = Product::where('brands', $_POST['input'])->get();
        $total=$results->count();
        $content='';
        
        if(!empty($results)){
            foreach($results as $result):
                $content.=self::live_html($result);
            endforeach;
        }
        $response['products']=$content;
        $response['total']=$total;
        
        return Response($response); 


    }
    

}