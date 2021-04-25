<?php

namespace App\Http\Controllers;

use App\ClientFeedBack;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminClientFeedBackController extends Controller
{
    public function index()
    {
        $clientFeebacks = ClientFeedBack::all();

        return view('Backend.ClientFeedback.index', [
            'clientFeedbacks' => $clientFeebacks
        ]);
    }

    public function create()
    {
        return view('Backend.ClientFeedback.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $imagePath = 'clientfeedback_' . Str::random(11) . time() . '.' . $image->extension();

        $image->move(public_path('client-feedbacks'), $imagePath);

        $imageFullPath = 'client-feedbacks/' . $imagePath;

        ClientFeedBack::create([
            'author_info' => $request['author_info'],
            'content' => $request['content'],
            'status' => $request['status'],
            'image_name' => $imageName,
            'image_path' => $imageFullPath
        ]);

        return redirect()->route('AdminClientFeedback.index');
    }

    public function edit(ClientFeedBack $clientFeedBack)
    {

    }

    public function update(Request $request, ClientFeedBack $clientFeedBack)
    {

    }

    public function delete(ClientFeedBack $clientFeedBack)
    {

    }

}
