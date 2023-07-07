<?php

namespace App\Models;

use App\Models\Tukang;
use App\Models\FormTukang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'kecamatan'
    ];

    public function tukang()
    {
        return $this->hasMany(Tukang::class);  
    }

    public function formtukang()
    {
        return $this->hasMany(FormTukang::class);  
    }
}
