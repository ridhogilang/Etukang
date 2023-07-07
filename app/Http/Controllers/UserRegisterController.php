<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('user.register', [
            "title" => "Register"
        ]);
    }

    public function dashboard()
    {
        return view('admin.datauser', [
            "title" => "Data User",
            "user" => User::where('role_id', '2')->get(),
            "admin" => User::where('role_id', '1')->get(),
            "tukang" => User::where('role_id', '3')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'role_id' => ['required'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData); 

        if ($validatedData['role_id'] === '1') {
            return redirect('/daftaradmin')->with('status', 'success');
        }
    
        return redirect('/login')->with('status', 'success');
    }
}
