<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Website;
use Goutte;
use Session;

class Common extends Model
{
    use HasFactory;
    protected $table='commons'; 

    protected $fillable = ['product_url', 'websites_id', 'products_id', 'users_id'];




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


    public static function fetch_data($url, $site){

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

            case 'Smart Doko':

                Session::forget('data');
                $final = $crawler->filter('.dprice')->each(function($node) {
                    
                    $prices = explode('N', $node->text());
                    session::push('data', $prices['1']);
                    session::push('data', $prices['2']); 
                      
                });
                return Session::get('data');

            break;

            case 'Thulo':
                Session::forget('data');
                self::crawling('.prices-container .ty-price', $crawler);
                self::crawling('.prices-container .ty-strike', $crawler);
                self::crawling('.prices-container .ty-save-price', $crawler);
                return Session::get('data');
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
    
     

    public function toArray(){
        $array=Parent::toArray();
        $website=Website::findorfail($this->websites_id);
        $array['website_name']=$website->name;
        $record=(array) self::fetch_data($this->product_url, $website->name);
        $array['logo_url']=$website->logo_url;
        $array['fetched_data']=$record;
        return $array;
    }



}
