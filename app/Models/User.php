<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Tukang;
use App\Models\FormTukang;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'role_id',
        'password',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function tukang()
    {
        return $this->hasOne(Tukang::class);
    }

    public function formtukang()
    {
        return $this->hasOne(FormTukang::class);
    }

}
