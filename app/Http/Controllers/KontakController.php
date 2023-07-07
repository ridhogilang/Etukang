<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('user.contact', [
            "title" => "Kontak"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'email' => ['required', 'email'],
            'subjek' => ['required', 'min:3', 'max:255'],
            'pesan' => ['required']
        ]);

        Pesan::create($validatedData);

        return redirect('/kontak')->with('status', 'success');
    }
}
