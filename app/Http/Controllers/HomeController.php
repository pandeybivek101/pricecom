<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Common;
use Goutte;

class HomeController extends Controller
{
    // 
    public function index(){
        $products=Product::all();
        return view('home.index')->with(compact('products'));
    }


    

    //https://linux4one.com/how-to-install-xampp-on-linux-mint-19

    public function scrapvalue($value){
        if(isset($value)){
            return $value;
        }
    }


    
    /*public function fetch_data($url, $site, Object $obj){

        $crawler = Goutte::request('GET', $url);


        switch ($site) {
            case "Daraz":

                $nodes = $crawler->filter('[type="application/ld+json"]:contains(lowPrice)');
                $nodes->each(function ($item) {
                    $json = json_decode($item->text());
                    foreach($json as $js){
                        if(isset($js->lowPrice)){
                        $name=scrapvalue($js->lowPrice);
                       // print_r($name);
                        }
                        
                        
                    }
                });

                return 'aaaa';

            break;

            case "Sasto Deal":


                $crawler->filter('.price-box.price-final_price')->each(function ($node) {
                    $object = json_encode($node->children()->each(function ($product) {
                        return $product->text();
                }));
                
                $a = json_decode($object);
                $data[]=$a;
                
                });

                print_r($data);
                
                return $obj;
                

            break;

            default:
              echo "invali";
          }
    }*/



    public function detail($id){
        $product=Product::findorfail($id);

        $commons = DB::table('products')
            ->join('commons', 'products.id', '=', 'commons.products_id')
            ->join('websites', 'websites.id', '=', 'commons.websites_id')
            ->select('websites.*', 'commons.product_url')
            ->where('products.id', '=', $id)
            ->get();


            //print_r($commons);

            print_r($commons);

            foreach($commons as $common){

               if($common->name=='Sasto Deal'){
                    $crawler = Goutte::request('GET', $common->product_url);
                    $crawler->filter('.price-box.price-final_price')->each(function ($node) {
                        $object = json_encode($node->children()->each(function ($product) {
                            return $product->text();
                    }));
                    $a= json_decode($object);

                    $common=new Common();
                    $common->discount=$a[2];
                    $common->old_price=$a[0];
                    $common->new_price=$a[1];


                    //print_r($common);
                        
                });
                

               }
               
            }

            print_r($commons);

                
        
        return view('home.detail')->with(compact('product', 'commons'));
    }

    public function dotan(){
        return view('home.dotan');
    }
}
