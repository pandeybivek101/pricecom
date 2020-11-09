<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
    use HasFactory;
    protected $table='commons'; 
    protected $fillable = ['product_url', 'websites_id', 'products_id', 'users_id'];
}
