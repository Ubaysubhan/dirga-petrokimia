<?php

namespace App\Core\Domain\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table= 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
      

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];

    public function akta()
    {
        return $this->hasOne(AktaPerusahaan::class, 'id_user', 'id');
    }

    public function biodata()
    {
        return $this->hasOne(BiodataPerusahaan::class, 'id_user', 'id');
    }

    public function npwp()
    {
        return $this->hasOne(Npwp::class, 'id_user', 'id');
    }

    public function gudang()
    {
        return $this->hasOne(Gudang::class, 'id_user', 'id');
    }
    public function armada()
    {
        return $this->hasMany(DaftarArmada::class, 'id_user', 'id');
    }
    public function suratizinusaha()
    {
        return $this->hasOne(SuratIzinUsaha::class, 'id_user', 'id');
    }
}