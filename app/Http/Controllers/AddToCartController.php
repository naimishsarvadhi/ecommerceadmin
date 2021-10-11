<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function addTocart(Request $request)
    {
        if (session()->has('customer')) {
            $prod_id = $request->prod_id;
            $cust_id = session()->get('customer')->id;
            
        } else {
            if ($request->prod_id) {

                $prod_id = $request->prod_id;

                if (session()->has('cart_item')) {
                    $cart_items = json_decode(session()->get('cart_item'));
                } else {
                    $cart_items = [];
                }

                if (!in_array($prod_id, $cart_items)) {
                    array_push($cart_items, $prod_id);
                }

                $cart_count = count($cart_items);
                $cart_item = json_encode($cart_items);
                //return 'ok';
                if ($cart_item) {
                    //return 'ok1';
                    session()->put('cart_item', $cart_item);
                    session()->put('cart_count', $cart_count);
                    //return 'ok2';
                    return true;
                } else {
                    return false;
                }
            } else {
                return 'no.conroller';
            }
        }
    }
}
