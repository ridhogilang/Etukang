<?php

namespace App\Models;

use App\Models\User;
use App\Models\Layanan;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormTukang extends Model
{
    use HasFactory;

    protected $fillable = [
        'tukang_id',
        'nama',
        'kecamatan_id',
        'alamat',
        'jenislayanan_id',
        'nomor',
        'sertifikat',
        'deskripsi',
    ];

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
