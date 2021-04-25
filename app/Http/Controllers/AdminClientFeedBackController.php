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
        $imagePath = $this->SaveFile($image, 'clientfeedback_', 'client-feedbacks');

        ClientFeedBack::create([
            'author_info' => $request['author_info'],
            'content' => $request['content'],
            'status' => $request['status'],
            'image_name' => $imageName,
            'image_path' => $imagePath
        ]);

        return redirect()->route('AdminClientFeedback.index');
    }

    public function edit(ClientFeedBack $clientFeedBack)
    {
        return view('Backend.ClientFeedback.edit', [
            'feedback' => $clientFeedBack
        ]);
    }

    public function update(Request $request, ClientFeedBack $clientFeedBack)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = $this->SaveFile($image, 'clientfeedback_', 'client-feedbacks');

            $clientFeedBack->update([
                'author_info' => $request['author_info'],
                'content' => $request['content'],
                'status' => $request['status'],
                'image_name' => $imageName,
                'image_path' => $imagePath
            ]);
        }
        else {
            $clientFeedBack->update([
                'author_info' => $request['author_info'],
                'content' => $request['content'],
                'status' => $request['status'],
            ]);
        }

        return redirect()->route('AdminClientFeedback.index');
    }

    public function delete(ClientFeedBack $clientFeedBack)
    {
        $clientFeedBack->delete();

        return redirect()->route('AdminClientFeedback.index');
    }

    public function SaveFile($file, $prefix, $folder)
    {
        $filename = $file->getClientOriginalName();
        $filepath = $prefix . Str::random(11) . time() . '.' . $file->extension();

        $file->move(public_path($folder), $filepath);

        return $folder . '/' . $filepath;
    }
}
