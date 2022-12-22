<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarArmada extends Model
{
    use HasFactory;

    protected $table='daftar_armada';
    protected $fillable = [
        'plat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
