<?php
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
        $image->move('uploads/products/', $filename);
        return $filename;
}