<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use App\Models\Layanan;
use App\Models\Kecamatan;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Contracts\Support\ValidatedData;

class TukangController extends Controller
{
    public function index(Request $request)
    {
        $layanan = Layanan::all();
        $kecamatan = Kecamatan::all();

        $categoryId = $request->input('category');
        $kecamatanId = $request->input('kecamatan');

        // Query berdasarkan kategori dan kecamatan jika ada
        $query = Tukang::query();

        if ($categoryId) {
            $query->where('jenislayanan_id', $categoryId);
        }

        if ($kecamatanId) {
            $query->where('kecamatan_id', $kecamatanId);
        }

        $result = $query->paginate(5);

        return view('user.find', [
            "title" => "Cari Tukang",
            "semua" => $result,
            "layanan" => $layanan,
            "kecamatan" => $kecamatan,
            "perbaikan" => Tukang::where('jenislayanan_id', '1')->paginate(3),
            "pemasangan" => Tukang::where('jenislayanan_id', '2')->paginate(3),
            "pembersihan" => Tukang::where('jenislayanan_id', '3')->paginate(3),
            "renovasi" => Tukang::where('jenislayanan_id', '4')->paginate(3),
            "kayu" => Tukang::where('jenislayanan_id', '5')->paginate(3),
            "besi" => Tukang::where('jenislayanan_id', '6')->paginate(3),
            "listrik" => Tukang::where('jenislayanan_id', '7')->get(),
            "pipa" => Tukang::where('jenislayanan_id', '8')->get(),
            
        ]);
        
    }

    public function order($slug)
    {
        $kecamatan = Kecamatan::all();
        $faker = Faker::create();
        $randomNumber = mt_rand(1000000000000000, 9999999999999999);


        return view('user.order' , [
            "title" => "Order Tukang",
            "post" => Tukang::find($slug),
            "kecamatan" => $kecamatan,
            "invoice" => $randomNumber
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tukang_id' => ['required'],
            'namatukang' => ['required'],
            'jenislayanan_id' => ['required'],
            'harga' => ['required'],
            'user_id' => ['required'],
            'nama' => ['required', 'min:3', 'max:255'],
            'kecamatan_id' => ['required'],
            'alamat' => ['required'],
            'tanggal' => ['required'],
            'kerusakan' => ['required'],
            'invoice' => ['required']
        ]);

        // dd($validatedData);

        $date = $validatedData['tanggal'];
        $datetime = Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d H:i:s');
        $validatedData['tanggal'] = $datetime;

        Order::create($validatedData);

        return redirect('/invoice')->with('status', 'success');
    }
}
