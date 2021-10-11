<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewProductController extends Controller
{
    public function ViewProduct()
    {
        return view('ecom.view-product');
    }

    public function quickview($id = null)
    {
        $AllProd = Product::where('id', $id)->first();
        return view('ecom.product-quick-view', compact('AllProd'));
    }
}
