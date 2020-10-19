<?php 

//use Goutte;


function scrapvalue($value){
    if(isset($value)){
        return $value;
    }
}

function crawl_helper($crawler_class){
    $crawler = $crawler_class::request('GET', 'https://www.daraz.com.np/products/dell-inspiron-7586-2-in-1-i5-8th-gen-256-ssd-8-gb-ram-360-touch-silver-i103978215-s1024740229.html?spm=a2a0e.searchlist.list.3.2de35d72RUfQDG&search=1');
        
        $nodes = $crawler->filter('[type="application/ld+json"]:contains(lowPrice)');
        $nodes->each(function ($item) {
            $json = json_decode($item->text());
            foreach($json as $js){
                if(isset($js->lowPrice)){
                   $name=scrapvalue($js->lowPrice);
                   print_r($name);
                }
                
                   
            }


        });



        /*$crawler = Goutte::request('GET', 'https://www.sastodeal.com/alpha-home-mixer-grinder-magic-550-watt-3-jar-alpha-mx-072.html');
        
        $nodes = $crawler->filter('.product-info-main');
        $nodes->each(function ($item) {
            $item->text();
          });*/
}