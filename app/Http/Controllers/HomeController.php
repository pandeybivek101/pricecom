<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Common;
use Session;
use Goutte;

class HomeController extends Controller
{
    // 
    public function index(){
        $products=Product::all();
        return view('home.index')->with(compact('products'));
    }


    public static function crawling($tags, $cra){
        $final = $cra->filter($tags)->each(function($node) {
            session::push('data', $node->text());
            
        }); 
    }


    public function scrapvalue($value){
        if(isset($value)){
            return $value;
        }
    }


    
    public static function fetch_data($url, $site, Object $obj){

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
                Session::forget('data');
                self::crawling('span[data-price-type=finalPrice]', $crawler);
                self::crawling('span[data-price-type=oldPrice]', $crawler);
                self::crawling('.disPrice', $crawler);
                return Session::get('data');
            break;

            default:
              echo "invalid";
          }
    }
    


    public function detail($id){
        $product=Product::findorfail($id);

        $commons = DB::table('products')
            ->join('commons', 'products.id', '=', 'commons.products_id')
            ->join('websites', 'websites.id', '=', 'commons.websites_id')
            ->select('websites.*', 'commons.product_url')
            ->where('products.id', '=', $id)
            ->get();
                
        
        return view('home.detail')->with(compact('product', 'commons'));
    }

    public function dotan(){
        return view('home.dotan');
    }
}
