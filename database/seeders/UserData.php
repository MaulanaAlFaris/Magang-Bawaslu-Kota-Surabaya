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
                'level'=>999,
                'email'=>'gubernur@gmail.com'
            ],

            [
                'name'=>'Camat',
                'username'=>'camat',
                'password'=>bcrypt('123456'),
                'level'=>998,
                'email'=>'camat@gmail.com'
            ],
            [
                'name'=>'Lurah',
                'username'=>'lurah',
                'password'=>bcrypt('123456'),
                'level'=>996,
                'email'=>'lurah@gmail.com'
            ],
            [
                'name'=>'Admin Kota Surabaya',
                'username'=>'AdminKotaSby1',
                'password'=>bcrypt('123456'),
                'level'=>2,
                'email'=>'AdminKotaSurabaya@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Dukuh Pakis',
                'username'=>'AdminKecDukuhPakis1',
                'password'=>bcrypt('123456'),
                'level'=>3,
                'email'=>'AdminKecamatanDukuhPakis@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Gayungan',
                'username'=>'AdminKecGayungan1',
                'password'=>bcrypt('123456'),
                'level'=>4,
                'email'=>'AdminKecamatanGayungan@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Jambangan',
                'username'=>'AdminKecJambangan1',
                'password'=>bcrypt('123456'),
                'level'=>5,
                'email'=>'AdminKecamatanJambangan@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Karang Pilang',
                'username'=>'AdminKecKarangPilang1',
                'password'=>bcrypt('123456'),
                'level'=>6,
                'email'=>'AdminKecamatanKarangPilang@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Sawahan',
                'username'=>'AdminKecSawahan1',
                'password'=>bcrypt('123456'),
                'level'=>7,
                'email'=>'AdminKecamatanSawahan@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Wiyung',
                'username'=>'AdminKecWiyung1',
                'password'=>bcrypt('123456'),
                'level'=>8,
                'email'=>'AdminKecamatanWiyung@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Wonocolo',
                'username'=>'AdminKecWonocolo1',
                'password'=>bcrypt('123456'),
                'level'=>9,
                'email'=>'AdminKecamatanWonocolo@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Wonokromo',
                'username'=>'AdminKecWonokromo1',
                'password'=>bcrypt('123456'),
                'level'=>10,
                'email'=>'AdminKecamatanWonokromo@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Gubeng',
                'username'=>'AdminKecGubeng1',
                'password'=>bcrypt('123456'),
                'level'=>11,
                'email'=>'AdminKecamatanGubeng@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Gunung Anyar',
                'username'=>'AdminKecGunungAnyar1',
                'password'=>bcrypt('123456'),
                'level'=>12,
                'email'=>'AdminKecamatanGunungAnyar@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Mulyorejo',
                'username'=>'AdminKecMulyorejo1',
                'password'=>bcrypt('123456'),
                'level'=>13,
                'email'=>'AdminKecamatanMulyorejo@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Rungkut',
                'username'=>'AdminKecRungkut1',
                'password'=>bcrypt('123456'),
                'level'=>14,
                'email'=>'AdminKecamatanRungkut@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Sukolilo',
                'username'=>'AdminKecSukolilo1',
                'password'=>bcrypt('123456'),
                'level'=>15,
                'email'=>'AdminKecamatanSukolilo@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Tambaksari',
                'username'=>'AdminKecTambaksari1',
                'password'=>bcrypt('123456'),
                'level'=>16,
                'email'=>'AdminKecamatanTambaksari@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Tenggilis Mejoyo',
                'username'=>'AdminKecTenggilisMejoyo1',
                'password'=>bcrypt('123456'),
                'level'=>17,
                'email'=>'AdminKecamatanTenggilisMejoyo@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Bubutan',
                'username'=>'AdminKecBubutan1',
                'password'=>bcrypt('123456'),
                'level'=>18,
                'email'=>'AdminKecamatanDukuhBubutan@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Genteng',
                'username'=>'AdminKecGenteng1',
                'password'=>bcrypt('123456'),
                'level'=>19,
                'email'=>'AdminKecamatanGenteng@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Simokerto',
                'username'=>'AdminKecSimokerto1',
                'password'=>bcrypt('123456'),
                'level'=>20,
                'email'=>'AdminKecamatanSimokerto@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Tegalsari',
                'username'=>'AdminKecTegalsari1',
                'password'=>bcrypt('123456'),
                'level'=>21,
                'email'=>'AdminKecamatanTegalsari@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Bulak',
                'username'=>'AdminKecBulak1',
                'password'=>bcrypt('123456'),
                'level'=>22,
                'email'=>'AdminKecamatanBulak@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Kenjeran',
                'username'=>'AdminKecKenjeran1',
                'password'=>bcrypt('123456'),
                'level'=>23,
                'email'=>'AdminKecamatanKenjeran@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Krembangan',
                'username'=>'AdminKecKrembangan1',
                'password'=>bcrypt('123456'),
                'level'=>24,
                'email'=>'AdminKecamatanKrembangan@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Pabean Cantian',
                'username'=>'AdminKecPabeanCantian1',
                'password'=>bcrypt('123456'),
                'level'=>25,
                'email'=>'AdminKecamatanPabeanCantian@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Semampir',
                'username'=>'AdminKecSemampir1',
                'password'=>bcrypt('123456'),
                'level'=>26,
                'email'=>'AdminKecamatanSemampir@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Asem Rowo',
                'username'=>'AdminKecAsemRowo1',
                'password'=>bcrypt('123456'),
                'level'=>27,
                'email'=>'AdminKecamatanAsemRowo@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Benowo',
                'username'=>'AdminKecBenowo1',
                'password'=>bcrypt('123456'),
                'level'=>28,
                'email'=>'AdminKecamatanBenowo@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Lakarsantri',
                'username'=>'AdminKecLakarsantri1',
                'password'=>bcrypt('123456'),
                'level'=>29,
                'email'=>'AdminKecamatanLakarsantri@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Pakal',
                'username'=>'AdminKecPakal1',
                'password'=>bcrypt('123456'),
                'level'=>30,
                'email'=>'AdminKecamatanPakal@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Sambikerep',
                'username'=>'AdminKecSambikerep1',
                'password'=>bcrypt('123456'),
                'level'=>31,
                'email'=>'AdminKecamatanSambikerep@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Sukomanunggal',
                'username'=>'AdminKecSukomanunggal1',
                'password'=>bcrypt('123456'),
                'level'=>32,
                'email'=>'AdminKecamatanSukomanunggal@gmail.com'
            ],
            [
                'name'=>'Admin Kecamatan Tandes',
                'username'=>'AdminKecTandes1',
                'password'=>bcrypt('123456'),
                'level'=>33,
                'email'=>'AdminKecamatanTandes@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Dukuh Kupang',
                'username'=>'AdminKelDukuhKupang1',
                'password'=>bcrypt('123456'),
                'level'=>34,
                'email'=>'AdminKelurahanDukuhKupang@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Dukuh Pakis',
                'username'=>'AdminKelDukuhPakis1',
                'password'=>bcrypt('123456'),
                'level'=>35,
                'email'=>'AdminKelurahanDukuhPakis@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Gunung Sari',
                'username'=>'AdminKelGunungSari1',
                'password'=>bcrypt('123456'),
                'level'=>36,
                'email'=>'AdminKelurahanGunungSari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Pradah Kali Kendal',
                'username'=>'AdminKelPradahKalikendal1',
                'password'=>bcrypt('123456'),
                'level'=>37,
                'email'=>'AdminKelurahanPradahKalikendal@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Dukuh Menanggal',
                'username'=>'AdminKelDukuhMenanggal1',
                'password'=>bcrypt('123456'),
                'level'=>38,
                'email'=>'AdminKelurahanDukuhMenanggal@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Gayungan',
                'username'=>'AdminKelGayungan1',
                'password'=>bcrypt('123456'),
                'level'=>39,
                'email'=>'AdminKelurahanGayungan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Ketintang',
                'username'=>'AdminKelKetintang1',
                'password'=>bcrypt('123456'),
                'level'=>40,
                'email'=>'AdminKelurahanKetintang@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Menanggal',
                'username'=>'AdminKelMenangggal1',
                'password'=>bcrypt('123456'),
                'level'=>41,
                'email'=>'AdminKelurahanMenanggal@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Jambangan',
                'username'=>'AdminKelJambangan1',
                'password'=>bcrypt('123456'),
                'level'=>42,
                'email'=>'AdminKelurahanJambangan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Karah',
                'username'=>'AdminKelKarah1',
                'password'=>bcrypt('123456'),
                'level'=>43,
                'email'=>'AdminKelurahanKarah@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kebonsari',
                'username'=>'AdminKelKebonsari1',
                'password'=>bcrypt('123456'),
                'level'=>44,
                'email'=>'AdminKelurahanKebonsari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Pagesangan',
                'username'=>'AdminKelPagesangan1',
                'password'=>bcrypt('123456'),
                'level'=>45,
                'email'=>'AdminKelurahanPagesangan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Karang Pilang',
                'username'=>'AdminKelKarangPilang1',
                'password'=>bcrypt('123456'),
                'level'=>46,
                'email'=>'AdminKelurahanKarangPilang@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kebraon',
                'username'=>'AdminKelKebraon1',
                'password'=>bcrypt('123456'),
                'level'=>47,
                'email'=>'AdminKelurahanKebraon@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kedurus',
                'username'=>'AdminKelKedurus1',
                'password'=>bcrypt('123456'),
                'level'=>48,
                'email'=>'AdminKelurahanKedurus@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Waru Gunung',
                'username'=>'AdminKelWaru Gunung1',
                'password'=>bcrypt('123456'),
                'level'=>49,
                'email'=>'AdminKelurahanWaruGunung@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Banyu Urip',
                'username'=>'AdminKelBanyuUrip1',
                'password'=>bcrypt('123456'),
                'level'=>50,
                'email'=>'AdminKelurahanBanyuUrip@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kupang Krajan',
                'username'=>'AdminKelKupangKrajan1',
                'password'=>bcrypt('123456'),
                'level'=>51,
                'email'=>'AdminKelurahanKupangKrajan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Pakis',
                'username'=>'AdminKelPakis1',
                'password'=>bcrypt('123456'),
                'level'=>52,
                'email'=>'AdminKelurahanPakis@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Putat Jaya',
                'username'=>'AdminKelPutatJaya1',
                'password'=>bcrypt('123456'),
                'level'=>53,
                'email'=>'AdminKelurahanPutatJaya@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sawahan',
                'username'=>'AdminKelSawahan1',
                'password'=>bcrypt('123456'),
                'level'=>54,
                'email'=>'AdminKelurahanSawahan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Petemon',
                'username'=>'AdminKelPetemon1',
                'password'=>bcrypt('123456'),
                'level'=>188,
                'email'=>'AdminKelurahanPetemon@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Babatan',
                'username'=>'AdminKelBabatan1',
                'password'=>bcrypt('123456'),
                'level'=>55,
                'email'=>'AdminKelurahanBabatan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Balas Klumprik',
                'username'=>'AdminKelBalasKlumprik1',
                'password'=>bcrypt('123456'),
                'level'=>56,
                'email'=>'AdminKelurahanBalasKlumprik@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Jajar Tunggal',
                'username'=>'AdminKelJajarTunggal1',
                'password'=>bcrypt('123456'),
                'level'=>57,
                'email'=>'AdminKelurahanJajarTunggal@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Wiyung',
                'username'=>'AdminKelWiyung1',
                'password'=>bcrypt('123456'),
                'level'=>58,
                'email'=>'AdminKelurahanWiyung@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Bendul Merisi',
                'username'=>'AdminKelBendulMerisi1',
                'password'=>bcrypt('123456'),
                'level'=>59,
                'email'=>'AdminKelurahanBendulMerisi@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Jemur Wonosari',
                'username'=>'AdminKelJemurWonosari1',
                'password'=>bcrypt('123456'),
                'level'=>60,
                'email'=>'AdminKelurahanJemurWonosari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Margorejo',
                'username'=>'AdminKelMargorejo1',
                'password'=>bcrypt('123456'),
                'level'=>61,
                'email'=>'AdminKelurahanMargorejo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sidosermo',
                'username'=>'AdminKelSidosermo1',
                'password'=>bcrypt('123456'),
                'level'=>62,
                'email'=>'AdminKelurahanSidosermo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Siwalankerto',
                'username'=>'AdminKelSiwalankerto1',
                'password'=>bcrypt('123456'),
                'level'=>63,
                'email'=>'AdminKelurahanSiwalankerto@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Darmo',
                'username'=>'AdminKelDarmo1',
                'password'=>bcrypt('123456'),
                'level'=>64,
                'email'=>'AdminKelurahanDarmo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Jagir',
                'username'=>'AdminKelJagir1',
                'password'=>bcrypt('123456'),
                'level'=>65,
                'email'=>'AdminKelurahanJagir@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Ngagel',
                'username'=>'AdminKelNgagel1',
                'password'=>bcrypt('123456'),
                'level'=>66,
                'email'=>'AdminKelurahanNgagel@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Ngagel Rejo',
                'username'=>'AdminKelNgagelRejo1',
                'password'=>bcrypt('123456'),
                'level'=>67,
                'email'=>'AdminKelurahanNgagelRejo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sawunggaling',
                'username'=>'AdminKelSawunggaling1',
                'password'=>bcrypt('123456'),
                'level'=>68,
                'email'=>'AdminKelurahanSawunggaling@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Wonokromo',
                'username'=>'AdminKelWonokromo1',
                'password'=>bcrypt('123456'),
                'level'=>69,
                'email'=>'AdminKelurahanWonokromo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Airlangga',
                'username'=>'AdminKelAirlangga1',
                'password'=>bcrypt('123456'),
                'level'=>70,
                'email'=>'AdminKelurahanAirlangga@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Baratajaya',
                'username'=>'AdminKelBaratajaya1',
                'password'=>bcrypt('123456'),
                'level'=>71,
                'email'=>'AdminKelurahanBaratajaya@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Gubeng',
                'username'=>'AdminKelGubeng1',
                'password'=>bcrypt('123456'),
                'level'=>72,
                'email'=>'AdminKelurahanGubeng@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kertajaya',
                'username'=>'AdminKelKertajaya1',
                'password'=>bcrypt('123456'),
                'level'=>73,
                'email'=>'AdminKelurahanKertajaya@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Mojo',
                'username'=>'AdminKelMojo1',
                'password'=>bcrypt('123456'),
                'level'=>74,
                'email'=>'AdminKelurahanMojo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Pucang Sewu',
                'username'=>'AdminKelPucangSewu1',
                'password'=>bcrypt('123456'),
                'level'=>75,
                'email'=>'AdminKelurahanPucangSewu@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Gunung Anyar',
                'username'=>'AdminKelGunungAnyar1',
                'password'=>bcrypt('123456'),
                'level'=>76,
                'email'=>'AdminKelurahanGunungAnyar@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Gunung Anyar Tambak',
                'username'=>'AdminKelGunungAnyarTambak1',
                'password'=>bcrypt('123456'),
                'level'=>77,
                'email'=>'AdminKelurahanGunungAnyarTambak@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Rungkut Menanggal',
                'username'=>'AdminKelRungkutMenanggal1',
                'password'=>bcrypt('123456'),
                'level'=>78,
                'email'=>'AdminKelurahanRungkutMenanggal@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Rungkut Tengah',
                'username'=>'AdminKelRungkutTengah1',
                'password'=>bcrypt('123456'),
                'level'=>79,
                'email'=>'AdminKelurahanRungkutTengah@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Dukuh Sutorejo',
                'username'=>'AdminKelDukuhSutorejo1',
                'password'=>bcrypt('123456'),
                'level'=>80,
                'email'=>'AdminKelurahanDukuhSutorejo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kaliudan',
                'username'=>'AdminKelKaliudan1',
                'password'=>bcrypt('123456'),
                'level'=>81,
                'email'=>'AdminKelurahanKaliudann@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kalisari',
                'username'=>'AdminKeKalisari1',
                'password'=>bcrypt('123456'),
                'level'=>82,
                'email'=>'AdminKelurahanKalisari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kejawan Putih Tambak',
                'username'=>'AdminKelKejawanPutihTambak1',
                'password'=>bcrypt('123456'),
                'level'=>83,
                'email'=>'AdminKelurahanKejawanPutihTambak@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Manyar Sabrangan',
                'username'=>'AdminKelManyarSabrangan1',
                'password'=>bcrypt('123456'),
                'level'=>84,
                'email'=>'AdminKelurahanManyarSabrangan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Mulyorejo',
                'username'=>'AdminKelMulyorejo1',
                'password'=>bcrypt('123456'),
                'level'=>85,
                'email'=>'AdminKelurahanMulyorejo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kalirungkut',
                'username'=>'AdminKelKalirungkut1',
                'password'=>bcrypt('123456'),
                'level'=>86,
                'email'=>'AdminKelurahanKalirungkut@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kedung Baruk',
                'username'=>'AdminKelKedungBaruk1',
                'password'=>bcrypt('123456'),
                'level'=>87,
                'email'=>'AdminKelurahanKedungBaruk@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Medokan Ayu',
                'username'=>'AdminKelMedokanAyu1',
                'password'=>bcrypt('123456'),
                'level'=>88,
                'email'=>'AdminKelurahanMedokanAyu@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Penjaringansari',
                'username'=>'AdminKelPenjaringansari1',
                'password'=>bcrypt('123456'),
                'level'=>89,
                'email'=>'AdminKelurahanPenjaringansarigmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Rungkut Kidul',
                'username'=>'AdminKelRungkutKidul1',
                'password'=>bcrypt('123456'),
                'level'=>90,
                'email'=>'AdminKelurahanRungkurKidul@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Wonorejo Rungkut',
                'username'=>'AdminKelWonorejoRunkut1',
                'password'=>bcrypt('123456'),
                'level'=>91,
                'email'=>'AdminKelurahanWonorejoRungkut@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Gebang Putih',
                'username'=>'AdminKelGebangPutih1',
                'password'=>bcrypt('123456'),
                'level'=>92,
                'email'=>'AdminKelurahanGebangPutih@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Keputih',
                'username'=>'AdminKelKeputih1',
                'password'=>bcrypt('123456'),
                'level'=>93,
                'email'=>'AdminKelurahanKeputih@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Klampis Ngasem',
                'username'=>'AdminKelKlampisNgasem1',
                'password'=>bcrypt('123456'),
                'level'=>94,
                'email'=>'AdminKelurahanKlampisNgasem@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Medokan Semampir',
                'username'=>'AdminKelMedokanSemampir1',
                'password'=>bcrypt('123456'),
                'level'=>95,
                'email'=>'AdminKelurahanMedokanSemampir@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Menur Pumpungan',
                'username'=>'AdminKelMenurPumpungan1',
                'password'=>bcrypt('123456'),
                'level'=>96,
                'email'=>'AdminKelurahanMenurPumpungan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Nginden Jangkungan',
                'username'=>'AdminKelNgindenJangkungan1',
                'password'=>bcrypt('123456'),
                'level'=>97,
                'email'=>'AdminKelurahanNgindenJangkungan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Semolowaru',
                'username'=>'AdminKelSemolowaru1',
                'password'=>bcrypt('123456'),
                'level'=>98,
                'email'=>'AdminKelurahanSemolowaru@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Dukuh Setro',
                'username'=>'AdminKelDukuhSetro1',
                'password'=>bcrypt('123456'),
                'level'=>99,
                'email'=>'AdminKelurahanDukuhSetro@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Gading',
                'username'=>'AdminKelGading1',
                'password'=>bcrypt('123456'),
                'level'=>100,
                'email'=>'AdminKelurahanGading@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kapasmadya Baru',
                'username'=>'AdminKelKapasmadyaBaru1',
                'password'=>bcrypt('123456'),
                'level'=>101,
                'email'=>'AdminKelurahanKapasmadyaBaru@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Pacarkeling',
                'username'=>'AdminKelPacarkeling1',
                'password'=>bcrypt('123456'),
                'level'=>102,
                'email'=>'AdminKelurahanPacarkeling@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Pacarkembang',
                'username'=>'AdminKelPacarkembang1',
                'password'=>bcrypt('123456'),
                'level'=>103,
                'email'=>'AdminKelurahanPacarkembang@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Ploso',
                'username'=>'AdminKelPloso1',
                'password'=>bcrypt('123456'),
                'level'=>104,
                'email'=>'AdminKelurahanPloso@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Rangkah',
                'username'=>'AdminKelMedokanRangkah1',
                'password'=>bcrypt('123456'),
                'level'=>105,
                'email'=>'AdminKelurahanRangkah@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tambaksari',
                'username'=>'AdminKelTambaksari1',
                'password'=>bcrypt('123456'),
                'level'=>106,
                'email'=>'AdminKelurahanTambaksari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kendangsari',
                'username'=>'AdminKelKendangsari1',
                'password'=>bcrypt('123456'),
                'level'=>107,
                'email'=>'AdminKelurahanKendangsari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kutisari',
                'username'=>'AdminKelKutisari1',
                'password'=>bcrypt('123456'),
                'level'=>108,
                'email'=>'AdminKelurahanKutisari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Panjang Jiwo',
                'username'=>'AdminKelPanjangJiwo1',
                'password'=>bcrypt('123456'),
                'level'=>109,
                'email'=>'AdminKelurahanPanjangJiwo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tenggilis Mejoyo',
                'username'=>'AdminKelTenggilisMejoyo1',
                'password'=>bcrypt('123456'),
                'level'=>110,
                'email'=>'AdminKelurahanTenggilisMejoyo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Alun-Alun Contong',
                'username'=>'AdminKelAlunAlunContong1',
                'password'=>bcrypt('123456'),
                'level'=>111,
                'email'=>'AdminKelurahanAlunAlunContong@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Bubutan',
                'username'=>'AdminKelBubutan1',
                'password'=>bcrypt('123456'),
                'level'=>112,
                'email'=>'AdminKelurahanBubutan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Gundih',
                'username'=>'AdminKelGundih1',
                'password'=>bcrypt('123456'),
                'level'=>113,
                'email'=>'AdminKelurahanGundih@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Jepara',
                'username'=>'AdminKelJepara1',
                'password'=>bcrypt('123456'),
                'level'=>114,
                'email'=>'AdminKelurahanJepara@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tembok Dukuh',
                'username'=>'AdminKelTembokDukuh1',
                'password'=>bcrypt('123456'),
                'level'=>115,
                'email'=>'AdminKelurahanTembokDukuh@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Embong Kaliasin',
                'username'=>'AdminKelEmbongKaliasin1',
                'password'=>bcrypt('123456'),
                'level'=>116,
                'email'=>'AdminKelurahanEmbongKaliasin@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Genteng',
                'username'=>'AdminKelGenteng1',
                'password'=>bcrypt('123456'),
                'level'=>118,
                'email'=>'AdminKelurahanGenteng@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Ketabang',
                'username'=>'AdminKelKetabang1',
                'password'=>bcrypt('123456'),
                'level'=>119,
                'email'=>'AdminKelurahanKetabang@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Peneleh',
                'username'=>'AdminKelPeneleh1',
                'password'=>bcrypt('123456'),
                'level'=>120,
                'email'=>'AdminKelurahanPeneleh@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kapasan',
                'username'=>'AdminKelKapasan1',
                'password'=>bcrypt('123456'),
                'level'=>121,
                'email'=>'AdminKelurahanKapasan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sidodadi',
                'username'=>'AdminKelSidodadi1',
                'password'=>bcrypt('123456'),
                'level'=>122,
                'email'=>'AdminKelurahanSidodadi@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Simolawang',
                'username'=>'AdminKelSimolawang1',
                'password'=>bcrypt('123456'),
                'level'=>123,
                'email'=>'AdminKelurahanSimolawang@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tambakrejo',
                'username'=>'AdminKelTambakrejo1',
                'password'=>bcrypt('123456'),
                'level'=>124,
                'email'=>'AdminKelurahanTambakrejo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Simokerto',
                'username'=>'AdminKelSimokerto1',
                'password'=>bcrypt('123456'),
                'level'=>187,
                'email'=>'AdminKelurahanSimokerto@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Dr. Soetomo',
                'username'=>'AdminKelDrSoetomo1',
                'password'=>bcrypt('123456'),
                'level'=>125,
                'email'=>'AdminKelurahanDrSoetomo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kedungdoro',
                'username'=>'AdminKelKedungdoro1',
                'password'=>bcrypt('123456'),
                'level'=>126,
                'email'=>'AdminKelurahanKedungdoro@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Keputran',
                'username'=>'AdminKelKeputran1',
                'password'=>bcrypt('123456'),
                'level'=>127,
                'email'=>'AdminKelurahanKeputran@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tegalsari',
                'username'=>'AdminKelTegalsari1',
                'password'=>bcrypt('123456'),
                'level'=>129,
                'email'=>'AdminKelurahanTegalsari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Bulak',
                'username'=>'AdminKelBulak1',
                'password'=>bcrypt('123456'),
                'level'=>130,
                'email'=>'AdminKelurahanBulak@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kedung Cowek',
                'username'=>'AdminKelKedungCowek1',
                'password'=>bcrypt('123456'),
                'level'=>131,
                'email'=>'AdminKelurahanKedungCowek@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kenjeran',
                'username'=>'AdminKelKenjeran1',
                'password'=>bcrypt('123456'),
                'level'=>132,
                'email'=>'AdminKelurahanKenjeran@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sukolilo Baru',
                'username'=>'AdminKelSukoliloBaru1',
                'password'=>bcrypt('123456'),
                'level'=>133,
                'email'=>'AdminKelurahanSukoliloBaru@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Bulak Banteng',
                'username'=>'AdminKelBulakBanteng1',
                'password'=>bcrypt('123456'),
                'level'=>134,
                'email'=>'AdminKelurahanBulakBanteng@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sidotopo Wetan',
                'username'=>'AdminKelSidotopoWetan1',
                'password'=>bcrypt('123456'),
                'level'=>135,
                'email'=>'AdminKelurahanSidotopoWetan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tambak Wedi',
                'username'=>'AdminKelTambakWedi1',
                'password'=>bcrypt('123456'),
                'level'=>136,
                'email'=>'AdminKelurahanTambakWedi@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tanah Kali Kedinding',
                'username'=>'AdminKelTanahKaliKedinding1',
                'password'=>bcrypt('123456'),
                'level'=>137,
                'email'=>'AdminKelurahanTanahKaliKedinding@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Dupak',
                'username'=>'AdminKelDupak1',
                'password'=>bcrypt('123456'),
                'level'=>138,
                'email'=>'AdminKelurahanDupak@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kemayoran',
                'username'=>'AdminKelKemayoran1',
                'password'=>bcrypt('123456'),
                'level'=>139,
                'email'=>'AdminKelurahanKemayoran@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Krembangan Selatan',
                'username'=>'AdminKelKrembanganSelatan1',
                'password'=>bcrypt('123456'),
                'level'=>140,
                'email'=>'AdminKelurahanKrembanganSelatan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Morokrembangan',
                'username'=>'AdminKelMorokrembangan1',
                'password'=>bcrypt('123456'),
                'level'=>141,
                'email'=>'AdminKelurahanMorokrembangan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Perak Barat',
                'username'=>'AdminKelPerakBarat1',
                'password'=>bcrypt('123456'),
                'level'=>142,
                'email'=>'AdminKelurahanPerakBarat@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Bongkaran',
                'username'=>'AdminKelBongkaran1',
                'password'=>bcrypt('123456'),
                'level'=>143,
                'email'=>'AdminKelurahanBongkaran@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Krembangan Utara',
                'username'=>'AdminKelKrembanganUtara1',
                'password'=>bcrypt('123456'),
                'level'=>144,
                'email'=>'AdminKelurahanKrembanganUtara@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Nyamplungan',
                'username'=>'AdminKelNyamplungan1',
                'password'=>bcrypt('123456'),
                'level'=>145,
                'email'=>'AdminKelurahanNyamplungan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Perak Timur',
                'username'=>'AdminKelPerakTimur1',
                'password'=>bcrypt('123456'),
                'level'=>146,
                'email'=>'AdminKelurahanPerakTimur@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Perak Utara',
                'username'=>'AdminKelPerakUtara1',
                'password'=>bcrypt('123456'),
                'level'=>147,
                'email'=>'AdminKelurahanPerakUtara@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tanjung Perak',
                'username'=>'AdminKelTanjungPerak1',
                'password'=>bcrypt('123456'),
                'level'=>148,
                'email'=>'AdminKelurahanTanjungPerak@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Ampel',
                'username'=>'AdminKelAmpel1',
                'password'=>bcrypt('123456'),
                'level'=>149,
                'email'=>'AdminKelurahanAmpel@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Pegirian',
                'username'=>'AdminKelPegirian1',
                'password'=>bcrypt('123456'),
                'level'=>150,
                'email'=>'AdminKelurahanPegirian@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sidotopo',
                'username'=>'AdminKelSidotopo1',
                'password'=>bcrypt('123456'),
                'level'=>151,
                'email'=>'AdminKelurahanSidotopo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Ujung',
                'username'=>'AdminKelUjung1',
                'password'=>bcrypt('123456'),
                'level'=>152,
                'email'=>'AdminKelurahanUjung@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Wonokusumo',
                'username'=>'AdminKelWonokusumo1',
                'password'=>bcrypt('123456'),
                'level'=>153,
                'email'=>'AdminKelurahanWonokusumo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Asem Rowo',
                'username'=>'AdminKelAsemRowo1',
                'password'=>bcrypt('123456'),
                'level'=>154,
                'email'=>'AdminKelurahanAsemRowo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Genting Kalianak',
                'username'=>'AdminKelGentingKalianak1',
                'password'=>bcrypt('123456'),
                'level'=>155,
                'email'=>'AdminKelurahanGentingKalianak@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tambak Sarioso',
                'username'=>'AdminKelTambakSarioso1',
                'password'=>bcrypt('123456'),
                'level'=>156,
                'email'=>'AdminKelurahanTambakSarioso@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Kandangan',
                'username'=>'AdminKelKandangan1',
                'password'=>bcrypt('123456'),
                'level'=>157,
                'email'=>'AdminKelurahanKandangan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Romokalisari',
                'username'=>'AdminKelRomokalisari1',
                'password'=>bcrypt('123456'),
                'level'=>158,
                'email'=>'AdminKelurahanRomokalisari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sememi',
                'username'=>'AdminKelSememi1',
                'password'=>bcrypt('123456'),
                'level'=>159,
                'email'=>'AdminKelurahanSememi@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tambak Oso Wilangun',
                'username'=>'AdminKelTambakOsoWilangun1',
                'password'=>bcrypt('123456'),
                'level'=>160,
                'email'=>'AdminKelurahanTambakOsoWilangun@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Bangkingan',
                'username'=>'AdminKelBangkingan1',
                'password'=>bcrypt('123456'),
                'level'=>161,
                'email'=>'AdminKelurahanBangkingan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Jeruk',
                'username'=>'AdminKelJeruk1',
                'password'=>bcrypt('123456'),
                'level'=>162,
                'email'=>'AdminKelurahanJeruk@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Lakarsantri',
                'username'=>'AdminKelLakarsantri1',
                'password'=>bcrypt('123456'),
                'level'=>163,
                'email'=>'AdminKelurahanLakarsantri@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Lidah Kulon',
                'username'=>'AdminKelLidahKulon1',
                'password'=>bcrypt('123456'),
                'level'=>164,
                'email'=>'AdminKelurahanLidahKulon@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Lidah Wetan',
                'username'=>'AdminKelLidahWetan1',
                'password'=>bcrypt('123456'),
                'level'=>165,
                'email'=>'AdminKelurahanLidahWetan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sumurwelut',
                'username'=>'AdminKelSumurwelut1',
                'password'=>bcrypt('123456'),
                'level'=>166,
                'email'=>'AdminKelurahanSumurwelut@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Babat Jerawat',
                'username'=>'AdminKelBabatJerawat1',
                'password'=>bcrypt('123456'),
                'level'=>167,
                'email'=>'AdminKelurahanBabatJerawat@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Benowo',
                'username'=>'AdminKelBenowo1',
                'password'=>bcrypt('123456'),
                'level'=>168,
                'email'=>'AdminKelurahanBenowo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Pakal',
                'username'=>'AdminKelPakal1',
                'password'=>bcrypt('123456'),
                'level'=>169,
                'email'=>'AdminKelurahanPakal@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sumber Rejo',
                'username'=>'AdminKelSumberRejo1',
                'password'=>bcrypt('123456'),
                'level'=>170,
                'email'=>'AdminKelurahanSumberRejo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Beringin',
                'username'=>'AdminKelBeringin1',
                'password'=>bcrypt('123456'),
                'level'=>171,
                'email'=>'AdminKelurahanBeringin@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Lontar',
                'username'=>'AdminKelLontar1',
                'password'=>bcrypt('123456'),
                'level'=>172,
                'email'=>'AdminKelurahanLontar@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Made',
                'username'=>'AdminKelMade1',
                'password'=>bcrypt('123456'),
                'level'=>173,
                'email'=>'AdminKelurahanMade@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sambikerep',
                'username'=>'AdminKelSambikerep1',
                'password'=>bcrypt('123456'),
                'level'=>174,
                'email'=>'AdminKelurahanSambikerep@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Putat Gede',
                'username'=>'AdminKelPutatGede1',
                'password'=>bcrypt('123456'),
                'level'=>175,
                'email'=>'AdminKelurahanPutatGede@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Simomulyo',
                'username'=>'AdminKelSimomulyo1',
                'password'=>bcrypt('123456'),
                'level'=>176,
                'email'=>'AdminKelurahanSimomulyo@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Simomulyo Baru',
                'username'=>'AdminKelSimomulyoBaru1',
                'password'=>bcrypt('123456'),
                'level'=>177,
                'email'=>'AdminKelurahanSimomulyoBaru@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sonokwijenan',
                'username'=>'AdminKelSonokwijenan1',
                'password'=>bcrypt('123456'),
                'level'=>178,
                'email'=>'AdminKelurahanSonokwijenan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Sukomanunggal',
                'username'=>'AdminKelSukomanunggal1',
                'password'=>bcrypt('123456'),
                'level'=>179,
                'email'=>'AdminKelSukomanunggal@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tanjungsari',
                'username'=>'AdminKelTanjungsari1',
                'password'=>bcrypt('123456'),
                'level'=>180,
                'email'=>'AdminKelurahanTanjungsari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Balongsari',
                'username'=>'AdminKelBalongsari1',
                'password'=>bcrypt('123456'),
                'level'=>181,
                'email'=>'AdminKelurahanBalongsari@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Banjar Sugihan',
                'username'=>'AdminKelBanjarSugihan1',
                'password'=>bcrypt('123456'),
                'level'=>182,
                'email'=>'AdminKelurahanBanjarSugihan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Karang Poh',
                'username'=>'AdminKelKarangPoh1',
                'password'=>bcrypt('123456'),
                'level'=>183,
                'email'=>'AdminKelurahanKarangPoh@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Manukan Kulon',
                'username'=>'AdminKelManukanKulon1',
                'password'=>bcrypt('123456'),
                'level'=>184,
                'email'=>'AdminKelurahanManukanKulon@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Manukan Wetan',
                'username'=>'AdminKelManukanWetan1',
                'password'=>bcrypt('123456'),
                'level'=>185,
                'email'=>'AdminKelurahanManukanWetan@gmail.com'
            ],
            [
                'name'=>'Admin Kelurahan Tandes',
                'username'=>'AdminKelTandes1',
                'password'=>bcrypt('123456'),
                'level'=>186,
                'email'=>'AdminKelurahanTandes@gmail.com'
            ],
           ];

           foreach ($user as $key => $value) {
            User::create($value);
           }
    }
}
