<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminSliderController extends Controller {

    public function index()
    {
        $sliders = Slider::paginate(10);

        return view('Backend.slider.index', [
            'sliders' => $sliders
        ]);
    }

    public function create()
    {
        return view('Backend.slider.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $imagePath = 'slider_' . Str::random(11) . time() . '.' . $image->extension();

        $image->move(public_path('storage/sliders'), $imagePath);

        $imageFullPath = 'storage/sliders/' . $imagePath;

        Slider::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'status' => $request['status'],
            'image_name' => $imageName,
            'image_path' => $imageFullPath
        ]);

        return redirect()->route('AdminSlider.index');
    }

    public function edit(Slider $slider)
    {
        return view('Backend.Slider.edit', [
            'slider' => $slider
        ]);
    }

    public function update(Request $request, Slider $slider)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = 'slider_' . Str::random(11) . time() . '.' . $image->extension();

            $image->move(public_path('sliders'), $imagePath);

            $imageFullPath = 'sliders/' . $imagePath;

            $slider->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'status' => $request['status'],
                'image_name' => $imageName,
                'image_path' => $imageFullPath
            ]);
        } else
        {
            $slider->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'status' => $request['status'],
            ]);
        }

        return redirect()->route('AdminSlider.index');
    }

    public function delete(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('AdminSlider.index');
    }

    public function setVisible(Slider $slider)
    {
        $slider->setStatusVisible();
        return redirect()->route('AdminSlider.index');
    }

    public function setHidden(Slider $slider)
    {
        $slider->setStatusHidden();
        return redirect()->route('AdminSlider.index');
    }
}

