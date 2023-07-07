<?php

namespace App\Models;

use App\Models\Tukang;
use App\Models\FormTukang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;

    protected $fillabel = [
        'id',
        'jenis',
        'harga'
    ];

    public function tukang()
    {
        return $this->hasMany(Tukang::class, 'id');
    }

    public function formtukang()
    {
        return $this->hasMany(FormTukang::class);
    }
}
