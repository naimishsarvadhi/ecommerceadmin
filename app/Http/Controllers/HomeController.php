<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use App\Models\Currency;
use App\Models\Option;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function optionRec(Request $request)
    {
        $currncy = Currency::all();
        $products = Product::orderBy('id', 'desc')->get();
        $new_arrv = $products->filter(function ($product) {
            return Carbon::now() < $product->new_arrival;
        });
        if (session()->has('cart_item')) {
            $cart_item = json_decode(session()->get('cart_item'), true);
        } else {
            $cart_item = [null];
        }
        //dd($cart_item);
        $cartitem = Addproduct::whereIn('id', $cart_item)->get();
        return view('ecom.home', compact('products', 'new_arrv', 'currncy', 'cartitem'));
    }

    public function getSingleProd(Request $request)
    {
        $singleProduct = Product::where('id', $request->prod_id)->first();
        return $singleProduct;
    }

    // public function getcurrency(Request $request)
    // {
    //     $get = Currency::where('code', $request->cur_id)->first();
    //     return $get;
    // }
}
