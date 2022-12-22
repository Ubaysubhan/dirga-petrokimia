<?php

namespace Database\Seeders;

use App\Core\Domain\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/provinces.json');
        $provinces = json_decode($json, true);
        foreach ($provinces as $province) {
            Province::query()->updateOrCreate([
                'id' => $province['id'],
                'name' => $province['name']
            ]);
        }
    }
}
