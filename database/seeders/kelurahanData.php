<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kelurahan;

class kelurahanData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelurahan = [
            [
                'nama'=>'Kelurahan Bulak',
                'id_kecamatan'=>2
            ],
            [
                'nama'=>'Kelurahan Kedung Cowek',
                'id_kecamatan'=>2
            ],
            [
                'nama'=>'Kelurahan Kenjeran',
                'id_kecamatan'=>2
            ],
            [
                'nama'=>'Kelurahan Sukolilo Baru',
                'id_kecamatan'=>2
            ],
            [
                'nama'=>'Kelurahan Tanah Kali Kedinding',
                'id_kecamatan'=>3
            ],
            [
                'nama'=>'Kelurahan Sidotopo Wetan',
                'id_kecamatan'=>3
            ],
            [
                'nama'=>'Kelurahan Kelurahan Bulak Banteng',
                'id_kecamatan'=>3
            ],
            [
                'nama'=>'Kelurahan Tambak Wedi',
                'id_kecamatan'=>3
            ],
        ];
        foreach ($kelurahan as $key => $value) {
            kelurahan::create($value);
        }
    }
}
