<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'subCategory_id', 'status'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id'); // here is retrive data from database using forign key
    }

    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class, 'subCategory_id', 'id'); // here is retrive data from database using forign key
    }
}
