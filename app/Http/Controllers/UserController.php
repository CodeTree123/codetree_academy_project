<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect()->back()->with('success', 'User created successfully');
    }

    public function edit()
    {
        return view('edit');
    }
}
