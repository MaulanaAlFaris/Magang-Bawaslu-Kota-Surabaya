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
                'nama'=>'Kecamatan Dukuh Pakis',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Gayungan',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Jambangan',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Karang Pilang',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Sawahan',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Wiyung',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Wonocolo',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Wonokromo',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Gubeng',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Gunung Anyar',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Mulyorejo',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Rungkut',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Sukolilo',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Tambaksari',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Tenggilis Mejoyo',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Bubutan',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Genteng',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Simokerto',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Tegalsari',
                'id_kota'=>1
            ],
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
            [
                'nama'=>'Kecamatan Asem Rowo',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Benowo',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Lakarsantri',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Pakal',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Sambikerep',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Sukomanunggal',
                'id_kota'=>1
            ],
            [
                'nama'=>'Kecamatan Tandes',
                'id_kota'=>1
            ],
            
        ];
        foreach ($kecamatan as $key => $value) {
            kecamatan::create($value);
        }
    }
}
