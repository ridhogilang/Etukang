<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use App\Models\FormTukang;
use Illuminate\Http\Request;

class DashboardTukangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.datatukang', [
            "title" => "Data Tukang",
            "tukang" => Tukang::all()
        ]);
      
    }

    public function daftar()
    {
        return view('admin.pendaftarantukang', [
            "title" => "Data Pendafataran Tukang",
            "tukang" => FormTukang::all()
        ]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
