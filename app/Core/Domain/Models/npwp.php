<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class npwp extends Model
{
    use HasFactory;

    protected $table='npwp';
    protected $fillable = [
        'nomor_npwp',
        'tanggal_npwp',
        'nomor_sppkp',
        'tanggal_sppkp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
