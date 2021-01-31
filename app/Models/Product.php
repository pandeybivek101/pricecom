<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    //protected $appends = array('add');

    public function getImageAttribute($value){
        return get_image($value);
            
    }


    


    
}