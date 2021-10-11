<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function login()
    {
        return view('ecom.login-popup');
    }

    public function signIn(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        if ($customer && $customer->email == $request->email) {
            session()->put('customer', $customer);
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Invalid Username And Password');
        }
    }

    public function logout()
    {
        session()->forget('customer');
        return redirect('/');
    }
}
