<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Product;
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

    
    public function fetch_data($url, $site){

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

            break;

            case "Sasto Deal":

                $nodes = $crawler->filter('.product-info-main');
                $nodes->each(function ($item) {
                    $item->text();
                });

            break;

            default:
              echo "invali";
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
}
