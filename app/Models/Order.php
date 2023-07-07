<?php

namespace App\Models;

use App\Models\User;
use App\Models\Tukang;
use App\Models\Layanan;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'tukang_id',
        'namatukang',
        'jenislayanan_id',
        'kecamatan_id',
        'harga',
        'user_id',
        'nama',
        'alamat',
        'tanggal',
        'kerusakan',
        'invoice'
    ];

    public function tukang()
    {
        return $this->belongsTo(Tukang::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenislayanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
