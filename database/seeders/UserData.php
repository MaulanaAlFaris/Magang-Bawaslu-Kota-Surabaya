<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name'=>'Admin',
                'username'=>'admin',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'email'=>'admin@gmail.com'
            ],

            [
                'name'=>'Walikota',
                'username'=>'walikota',
                'password'=>bcrypt('123456'),
                'level'=>2,
                'email'=>'gubernur@gmail.com'
            ],

            [
                'name'=>'AdminKota',
                'username'=>'AdminKota',
                'password'=>bcrypt('123456'),
                'level'=>5,
                'email'=>'AdminKota@gmail.com'
            ],

            [
                'name'=>'Camat',
                'username'=>'camat',
                'password'=>bcrypt('123456'),
                'level'=>3,
                'email'=>'camat@gmail.com'
            ],

            [
                'name'=>'AdminCamatDukuhPakis',
                'username'=>'AdminCamatDukuhPakis',
                'password'=>bcrypt('123456'),
                'level'=>6,
                'email'=>'AdminCamatDukuhPakis@gmail.com'
            ],
            [
                'name'=>'AdminCamatGayungan',
                'username'=>'AdminCamatGayungan',
                'password'=>bcrypt('123456'),
                'level'=>7,
                'email'=>'AdminCamatGayungan@gmail.com'
            ],

            [
                'name'=>'Lurah',
                'username'=>'lurah',
                'password'=>bcrypt('123456'),
                'level'=>4,
                'email'=>'lurah@gmail.com'
            ],

            [
                'name'=>'AdminLurahDukuhKupang',
                'username'=>'AdminLurahDukuhKupang',
                'password'=>bcrypt('123456'),
                'level'=>8,
                'email'=>'AdminLurahDukuhKupang@gmail.com'
            ],
           ];

           foreach ($user as $key => $value) {
            User::create($value);
           }
    }
}
