<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BiodataPerusahaan extends Model
{
    use HasFactory;

    protected $table='biodata';
    protected $fillable = [
        'daftar',
        'Badan_Usaha',
        'Nama_Distributor',
        'Provinsi',
        'Pupuk_diambil',
        'Nama_pimpinan',
        'Jabatan',
        'alamat',
        'Nomor_telepon',
        'Email_perusahaan',
        'pic_perusahaan',
        'nomor_pic'
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function setCategoryAttribute($value)
    {
        $this->attributes['pupuk'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['pupuk'] = json_decode($value);
    }
}
