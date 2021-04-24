<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSliderController extends Controller
{
    public function create()
    {
        return view('Backend.slider.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $imagePath = 'sliders/' . \Hash::make(time()) .'.'. $image->extension();

        $image->move(public_path('sliders'), $imagePath);
    }


}
