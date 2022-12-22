<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratIzinUsaha extends Model
{
    use HasFactory;

    protected $table='surat_izin_usaha';
    protected $fillable = [
        'nomor_tdp',
        'masa_berlaku_tdp',
        'nomor_siup',
        'masa_berlaku_siup',
        'nomor_situ',
        'masa_berlaku_situ',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
