<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function renderLoginForm()
    {
        if (auth()->viaRemember()) {
            return redirect('/admin');
        }

        if (auth()->check()) {
            return redirect('/admin');
        }

        return view('Backend.Auth.login');
    }

    public function logUserIn(Request $request)
    {
        $credentials = [
            'username' => $request['username'],
            'password' => $request['password']
        ];

        $rememberMe = $request->has('remember');

        if (auth()->attempt($credentials, $rememberMe)) {
            return redirect('/admin');
        }

        return redirect()->route('auth.login.index');
    }

    public function logUserOut(Request $request)
    {
        \Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login.index');
    }
}
