<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('Backend.User.index', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        return view('Backend.User.show', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('Backend.User.create');
    }

    public function store(Request $request)
    {
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar_path = $this->SaveFile($avatar, 'avatar_', 'avatars');

        $username = $request->get('username');
        $password = $request->get('password');
        $email = $request->get('email');
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');

        User::create([
            'username' => $username,
            'password' => \Hash::make($password),
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'avatar_name' => $avatar_name,
            'avatar_path' => $avatar_path
        ]);

        return redirect()->route('AdminUser.index');
    }

    public function edit(User $user)
    {
        return view('Backend.User.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {

    }

    public function delete(User $user)
    {

    }

    public function SaveFile($file, $prefix, $folder)
    {
        $filename = $file->getClientOriginalName();
        $filepath = $prefix . Str::random(11) . time() . '.' . $file->extension();

        $file->move(public_path($folder), $filepath);

        return $folder . '/' . $filepath;
    }
}
