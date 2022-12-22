<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gudang extends Model
{
    use HasFactory;

    protected $table='gudang';
    protected $fillable = [
        'provinsi',
        'kabupaten',
        'nomortandagudang',
        'namagudang',
        'kapasitas_gudang',
        'luas_gudang',
        'alamat_gudang',
        'kecamatan',
        'kelurahan',
        'kode_pos',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
