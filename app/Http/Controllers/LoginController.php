<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function authenticate(Request $request) {
        $credential = $request->validate([
             'email' => 'required | email:dns',
             'password' => 'required'
         ]);

        //dd('berhasil login');
        if(Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

         return back()->with('loginError', 'Login Failed');
    }

    public function Logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('/login');
    }
}
