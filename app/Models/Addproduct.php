<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addproduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sub_heading',
        'category_id',
        'subCategory_id',
        'brand_id',
        'mrp',
        'price',
        'discount',
        'descript',
        'status',
        'image',
        'color',
        'storage',
        'ram',
        'connectivity',
        'condition',
        'quantity',
        'type',
        'simstyle',
        'model',
        'warranty',
        'new_arrival'
    ];
}
