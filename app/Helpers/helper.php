<?php

use App\Models\Option;
use App\Models\Product;

if (!function_exists('viewTrash')) {
    function viewTrash()
    {
        $trashProd = Product::where('status', '0')->orderBy('updated_at', 'desc')->take('3')->get();
        return $trashProd;
    }
}

if (!function_exists('viewOption')) {
    function viewOption()
    {
        $options = Option::first();
        return $options;
    }
}
