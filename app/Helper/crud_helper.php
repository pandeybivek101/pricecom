<?php
function perform_delete($id, $table){
    $objects=$table::findorfail($id);
    $objects->delete();
    return redirect()->back();
}


function image_store($image){
        $extension=$image->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $image->move('uploads/products/', $filename);
        return $filename;
}