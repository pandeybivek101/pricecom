<?php
function perform_delete($id, $table){
    $objects=$table::findorfail($id);
    $objects->delete();
    return redirect()->back();
}