<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use Illuminate\Http\Request;

class ViewCartController extends Controller
{
    public function viewCart()
    {
        if (session()->has('cart_item')) {
            $cart_item = json_decode(session()->get('cart_item'), true);
        } else {
            $cart_item = [null];
        }
        $cartitem = Addproduct::whereIn('id', $cart_item)->get();
        return view('ecom.view-cart', compact('cartitem'));
    }

    public function clearCart()
    {
        session()->forget('cart_item');
        session()->forget('cart_count');
        return redirect()->back();
    }

    public function removeCart(Request $request)
    {
        if (session()->has('cart_item')) {
            $prod_id = $request->prod_id;
            $cart_item = json_decode(session()->get('cart_item'), true);
            //return $prod_id;
            if (($key = array_search($prod_id, $cart_item)) !== false) {
                unset($cart_item[$key]);
                //return json_encode($cart_item);
                $cart_count = count($cart_item);
                session()->forget('cart_item');
                session()->forget('cart_count');
                session()->put('cart_item', json_encode($cart_item));
                session()->put('cart_count', $cart_count);
                return true;
            }
        }
    }
}
