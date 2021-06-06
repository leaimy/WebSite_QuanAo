<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class ClientLoginController extends DefaultLoginController
{
    protected $redirectTo = '/';

    public function showLoginForm()
    {
        $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
        $websiteconfig = \App\Website::all();

        return view('Frontend.Home.signin',[
            'websiteconfig' => $websiteconfig,
            'parent_categories' => $parent_categories,
        ]);
    }

    public function username()
    {
        return 'username';
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }
}
