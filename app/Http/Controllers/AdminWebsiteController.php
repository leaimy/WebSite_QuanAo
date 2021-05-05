<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminWebsiteController extends Controller
{
    public function index(){
        return view('Backend.Website.index');
    }

    public function update(){

    }
}
