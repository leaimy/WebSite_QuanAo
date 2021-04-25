<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
}
