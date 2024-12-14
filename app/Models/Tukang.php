<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Layanan;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Tukang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'role_id',
        'nama',
        'jenislayanan_id',
        'alamat',
        'kecamatan_id',
        'deskripsi',
        'lokasi',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
    
    public function jenislayanan()
    {
        return $this->belongsTo(Layanan::class, 'jenislayanan_id');
    }    

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }


}
