<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyEmailController extends Controller
{
    public function verifyemail()
    {
        if (Auth::user()->email_verified_at == null) {
            return view('admin.verifyemail');
        } else {
            return redirect()->back();
        }
    }

    public function enterotp()
    {
        if (!Auth::user()->email_verified_at) {
            return view('admin.enter-otp');
        } else {
            return redirect()->back();
        }
    }
}
