<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(10);

        return view('Backend.Role.index', [
            'roles' => $roles
        ]);
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit(Role $role)
    {

    }

    public function update(Request $request, Role $role)
    {

    }

    public function delete(Role $role)
    {

    }
}
