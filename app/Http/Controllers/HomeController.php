<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;

class HomeController extends Controller
{
    public function home()
    {
        return view('user.home', [
            "title" => "Home"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'email']
        ]);

        Subscribe::create($validatedData);

        return redirect('/')->with('status', 'success');
    }

    public function form()
    {
        return view('user.form', [
            "title" => "Formulir"
        ]);
    }

    public function register()
    {
        return view('user.register', [
            "title" => "Register"
        ]);
    }
}
