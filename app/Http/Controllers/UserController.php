<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'riot' => 'required',
            'platform' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        User::create($validatedData);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
}
