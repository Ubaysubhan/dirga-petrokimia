<?php

namespace Database\Seeders;

use App\Core\Domain\Models\Regency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class regencieseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/regencies.json');
        $regencies = json_decode($json, true);
        foreach ($regencies as $regencie) {
            Regency::query()->updateOrCreate([
                'id' => $regencie['id'],
                'province_id' => $regencie['province_id'],
                'name' => $regencie['name']
            ]);
        }
    }
}
