<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'addproducts';
    protected $primarykey = 'id';


    // public function getPriceAttribute($value = "USD")
    // {
    //     $currency = Currency::where('code', request()->currency)->first();
    //     $price = $value * $currency->exchange_rate;
    //     return $price;
    // }
}
