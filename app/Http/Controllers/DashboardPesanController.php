<?php

namespace App\Http\Controllers;

use App\Models\FormTukang;
use App\Models\Order;
use App\Models\Pesan;
use App\Models\Subscribe;

use Illuminate\Http\Request;


class DashboardPesanController extends Controller
{
    public function pesan()
    {
        return view('admin.pesan', [
            "title" => "Data Pesan",
            "pesan" => Pesan::all()
        ]);
    
    }

    public function index()
    {
        return view('admin.subscribe', [
            "title" => "Data Susbcribe",
            "subs" => subscribe::all()
        ]);
    
    }

    public function invoice()
    {
        $idUser = auth()->user()->id;
        $post = Order::where('user_id', $idUser)->latest()->first();

        return view('admin.invoice', [
            "title" => "Detail Invoice",
            "data" => $post,
        ]);
    
    }

    public function allinvoice()
    {

        $idUser = auth()->user()->id;
        $post = Order::where('user_id', $idUser)->get();

        return view('admin.allinvoice', [
            "title" => "Data Invoice",
            "data" => $post
        ]);
    
    }

    public function dataorder()
    {

        $idUser = auth()->user()->id;
        $nama = auth()->user()->username;
        $post = Order::where('namatukang', $nama)->get();
        $user = Order::where('user_id', $idUser)->get();

        // dd($post);

        return view('admin.dataorder', [
            "title" => "Data Order",
            "data" => $post,
            "user" => $user,
            "semua" => Order::all()
        ]);
    
    }
    
}
