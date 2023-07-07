<?php

namespace App\Http\Controllers;

use App\Models\FormTukang;
use App\Models\Kecamatan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class DaftarTukangController extends Controller
{
    public function index()
    {
        return view('user.daftar', [
            "title" => "Carrers"
        ]);
    }

    public function karir()
    {
        return view('user.formtukang', [
            "title" => "Carrers",
            "kecamatan" => Kecamatan::all(),
            "layanan" => Layanan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tukang_id' => ['required'],
            'nama' => ['required', 'min:3', 'max:255'],
            'jenislayanan_id' => ['required'],
            'alamat' => ['required'],
            'kecamatan_id' => ['required'],
            'nomor' => ['required'],
            'sertifikat' => ['required'],
            'deskripsi' => ['required']
        ]);

        FormTukang::create($validatedData);

        return redirect('/form')->with('status', 'success');

    }


}
