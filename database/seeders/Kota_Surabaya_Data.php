<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KotaSurabaya;

class Kota_Surabaya_Data extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kota = [
            [
                'nama'=>'Surabaya'
            ],
        ];
        foreach ($kota as $key => $value) {
            KotaSurabaya::create($value);
        }
    }
}
