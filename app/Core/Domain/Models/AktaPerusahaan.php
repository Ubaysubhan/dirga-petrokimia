<?php

namespace App\Core\Domain\Models;


use App\Core\Domain\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktaPerusahaan extends Model
{
    use HasFactory;

    protected $table='akta';
    protected $fillable = [
        'nomor_akta',
        'tanggal_akta',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
