<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController as DefaultLoginController;

class ClientLoginController extends DefaultLoginController
{
    protected $redirectTo = 'frontend.index';

    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    public function showLoginForm()
    {
        $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
        $websiteconfig = \App\Website::all();

        return view('Frontend.Home.signin',[
            'websiteconfig' => $websiteconfig,
            'parent_categories' => $parent_categories,
        ]);
    }

    public function logUserIn(Request $request)
    {
        $credentials = [
            'username' => $request['username'],
            'password' => $request['password']
        ];

        $rememberMe = $request->has('remember');

        if (auth()->attempt($credentials, $rememberMe)) {
            return redirect()->route('frontend.index');
        }

        dd(auth()->attempt($credentials, $rememberMe));

        return redirect()->route('khachhangdangnhap');
    }

    public function username()
    {
        return 'username';
    }

    protected  function guard()
    {
        return Auth::guard('customer');
    }
}
