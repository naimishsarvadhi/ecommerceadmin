<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProd()
    {
        $heading = "Products";
        $AllProd = Product::where('status', '1')->paginate();
        return view('admin.products', compact('AllProd', 'heading'));
    }

    public function viewtrashProd()
    {
        $heading = "Deactive Products";
        $viewtrashProd = Product::where('status', '0')->orderBy('updated_at', 'desc')->get();
        return view('admin.products', compact('viewtrashProd', 'heading'));
    }
}
