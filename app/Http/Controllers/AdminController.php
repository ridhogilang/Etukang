<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dash', [
            "title" => "Dashboard"
        ]);
    }

    public function pendtukang()
    {
        return view('admin.pendaftarantukang', [
            "title" => "Pendaftaran Tukang"
        ]);
    }

    public function penduser()
    {
        return view('admin.pendaftaranuser', [
            "title" => "Pendaftaran User"
        ]);
    }

    public function tukang()
    {
        return view('admin.datatukang', [
            "title" => "Data Tukang"
        ]);
    }

    public function user()
    {
        return view('admin.datauser', [
            "title" => "Data User"
        ]);
    }

    public function register()
    {
        return view('admin.register', [
            "title" => "Daftar"
        ]);
    }
}
