<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|regex:/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/',
            'password_confirmation' => 'required',
            'terms' => 'accepted'
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "terms" => $request->terms
        ]);

        return redirect('/admin');
    }

    public function sendMail()
    {
        if (Auth::user()->email_verified_at != null) {
            return redirect()->back();
        } else {
            $otp = ($this->setOtp());
            $user = User::find(Auth::user()->id);
            Mail::to($user->email)->send(new VerifyEmail($user, $otp));
            return redirect('/admin/enterotp');
        }
    }

    public function setOtp()
    {
        $otp = time();
        $otp = substr($otp, strlen($otp) - 6, strlen($otp) - 1);
        if (Otp::where('otp', $otp)->first()) {
            $this->setOtp();
        } else {
            Otp::updateOrCreate([
                'email' => Auth::user()->email
            ], [
                "email" => Auth::user()->email,
                "otp" => $otp,
            ]);
            return $otp;
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->email_verified_at == null) {
                return redirect('admin/verifyemail');
            } else {
                return redirect('admin/dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }

    public function checkOtp(Request $request)
    {
        $user = Otp::where('otp', $request->otp)->first();
        if ($user) {
            if ($user->email == Auth::user()->email && $request->otp == $user->otp) {
                $usr = User::find(Auth::user()->id);
                $usr->email_verified_at = Carbon::now();
                $usr->update();
                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid OTP! Please enter valid OTP');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid OTP! Please enter valid OTP');
        }
    }
}
