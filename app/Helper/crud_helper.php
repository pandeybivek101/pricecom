
<?php

//use Cloudinary;

function perform_delete($id, $table){
    $objects=$table::findorfail($id);
    $objects->delete();
    
}

function generateCode(){
    $code = '';
    for($i = 0; $i < 10; $i++) { 
        $code .= mt_rand(0, 9); 
    }
    return $code;
}



function image_store($image){
        $extension=$image->getClientOriginalExtension();
        $filename=generateCode().'.'.$extension;
        //$image->move('uploads/products/', $filename);
        //Cloudinary::upload($filename);
        //print_r($filename);exit;
        //cloudinary()->upload($filename);
        return $filename;
}


function check($data){
    return $data;
}


function get_cloudinary_image_link($img){
    return 'https://res.cloudinary.com/http-smartpricecom-herokuapp-com/image/upload/'.$img ;

}

function get_image($array){
    $arr = explode(',',trim($array));
    $data = preg_replace('/[^A-Za-z0-9.\-]/', '', $arr[0]);
    return get_cloudinary_image_link($data);

}
