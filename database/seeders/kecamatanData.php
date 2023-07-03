<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kecamatan;

class kecamatanData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatan = [
            [
                'nama'=>'Kecamatan Bulak',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Kenjeran',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Krembangan',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Pabean Cantian',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Semampir',
                'id_kota'=>1
            ],
        ];
        foreach ($kecamatan as $key => $value) {
            kecamatan::create($value);
        }
    }
}
