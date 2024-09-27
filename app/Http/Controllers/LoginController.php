<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Login successful, redirect to sosmed
            return redirect()->intended(route('sosmed'));
        } else {
            // Login failed, redirect back to login page with error message
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['error' => 'Invalid email or password']);
        }
    }
}
