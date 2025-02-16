<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PI extends Model
{
    protected $table = 'product_inventory';
    protected $fillable = ['product_name', 'category', 'price'];
}
