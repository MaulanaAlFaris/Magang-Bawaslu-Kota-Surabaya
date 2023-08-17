<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\formBawasluController;
use App\Http\Controllers\formController;
use App\Http\Controllers\KecamatanAsemRowoController;
use App\Http\Controllers\KecamatanBenowoController;
use App\Http\Controllers\KecamatanBubutanController;
use App\Http\Controllers\KecamatanBulakController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KecamatanDukuhPakisController;
use App\Http\Controllers\KecamatanGayunganController;
use App\Http\Controllers\KecamatanGentengController;
use App\Http\Controllers\KecamatanGubengController;
use App\Http\Controllers\KecamatanGunungAnyarController;
use App\Http\Controllers\KecamatanJambanganController;
use App\Http\Controllers\KecamatanKarangPilangController;
use App\Http\Controllers\KecamatanKenjeranController;
use App\Http\Controllers\KecamatanKrembanganController;
use App\Http\Controllers\KecamatanLakarsantriController;
use App\Http\Controllers\KecamatanMulyorejoController;
use App\Http\Controllers\KecamatanPabeanCantianController;
use App\Http\Controllers\KecamatanPakalController;
use App\Http\Controllers\KecamatanRungkutController;
use App\Http\Controllers\KecamatanSambikerepController;
use App\Http\Controllers\KecamatanSawahanController;
use App\Http\Controllers\KecamatanSemampirController;
use App\Http\Controllers\KecamatanSimokertoController;
use App\Http\Controllers\KecamatanSukoliloController;
use App\Http\Controllers\KecamatanSukomanunggalController;
use App\Http\Controllers\KecamatanTambaksariController;
use App\Http\Controllers\KecamatanTandesController;
use App\Http\Controllers\KecamatanTegalsariController;
use App\Http\Controllers\KecamatanTenggilisMejoyoController;
use App\Http\Controllers\KecamatanWiyungController;
use App\Http\Controllers\KecamatanWonocoloController;
use App\Http\Controllers\KecamatanWonokromoController;
use App\Http\Controllers\KelurahanAirlanggaController;
use App\Http\Controllers\KelurahanBabatanController;
use App\Http\Controllers\KelurahanBalasKlumprikController;
use App\Http\Controllers\KelurahanBanyuUripController;
use App\Http\Controllers\KelurahanBaratajayaController;
use App\Http\Controllers\KelurahanBendulMerisiController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KelurahanDarmoController;
use App\Http\Controllers\KelurahanDukuhKupangController;
use App\Http\Controllers\KelurahanDukuhMenanggalController;
use App\Http\Controllers\KelurahanDukuhPakisController;
use App\Http\Controllers\KelurahanGayunganController;
use App\Http\Controllers\KelurahanGubengController;
use App\Http\Controllers\KelurahanGunungSariController;
use App\Http\Controllers\KelurahanJagirController;
use App\Http\Controllers\KelurahanJajarTunggalController;
use App\Http\Controllers\KelurahanJambanganController;
use App\Http\Controllers\KelurahanJemurWonosariController;
use App\Http\Controllers\KelurahanKarahController;
use App\Http\Controllers\KelurahanKarangPilangController;
use App\Http\Controllers\KelurahanKebonsariController;
use App\Http\Controllers\KelurahanKebraonController;
use App\Http\Controllers\KelurahanKedurusController;
use App\Http\Controllers\KelurahanKertajayaController;
use App\Http\Controllers\KelurahanKetintangController;
use App\Http\Controllers\KelurahanKupangKrajanController;
use App\Http\Controllers\KelurahanMargorejoController;
use App\Http\Controllers\KelurahanMenanggalController;
use App\Http\Controllers\KelurahanMojoController;
use App\Http\Controllers\KelurahanNgagelController;
use App\Http\Controllers\KelurahanNgagelRejoController;
use App\Http\Controllers\KelurahanPagesanganController;
use App\Http\Controllers\KelurahanPakisController;
use App\Http\Controllers\KelurahanPradahKalikendalController;
use App\Http\Controllers\KelurahanPucangSewuController;
use App\Http\Controllers\KelurahanPutatJayaController;
use App\Http\Controllers\KelurahanSawahanController;
use App\Http\Controllers\KelurahanSawunggalingController;
use App\Http\Controllers\KelurahanSidosermoController;
use App\Http\Controllers\KelurahanSiwalankertoController;
use App\Http\Controllers\KelurahanWaruGunungController;
use App\Http\Controllers\KelurahanWiyungController;
use App\Http\Controllers\KelurahanWonokromoController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KotaSurabayaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/a', function () {
//     return view('admin.tes');
// });
Route::get('/tes', function () {
    return view('content.layouts.layouts');
});
Route::get('/', function () {
    return view('content.dashboard');
});
Route::resource('admin',adminController::class);
Route::resource('kota',KotaController::class);
Route::resource('kecamatan',KecamatanController::class);
Route::resource('kelurahan',KelurahanController::class);

//Kota Surabaya Routing
Route::resource('KotaSurabaya',KotaSurabayaController::class);

//Kecamatan Surabaya Routing
Route::resource('KecamatanDukuhPakis',KecamatanDukuhPakisController::class);
Route::resource('KecamatanGayungan',KecamatanGayunganController::class);
Route::resource('KecamatanJambangan',KecamatanJambanganController::class);
Route::resource('KecamatanKarangPilang',KecamatanKarangPilangController::class);
Route::resource('KecamatanSawahan',KecamatanSawahanController::class);
Route::resource('KecamatanWiyung',KecamatanWiyungController::class);
Route::resource('KecamatanWonocolo',KecamatanWonocoloController::class);
Route::resource('KecamatanWonokromo',KecamatanWonokromoController::class);
Route::resource('KecamatanGubeng',KecamatanGubengController::class);
Route::resource('KecamatanGunungAnyar',KecamatanGunungAnyarController::class);
Route::resource('KecamatanMulyorejo',KecamatanMulyorejoController::class);
Route::resource('KecamatanRungkut',KecamatanRungkutController::class);
Route::resource('KecamatanSukolilo',KecamatanSukoliloController::class);
Route::resource('KecamatanTambaksari',KecamatanTambaksariController::class);
Route::resource('KecamatanTengggilisMejoyo',KecamatanTenggilisMejoyoController::class);
Route::resource('KecamatanBubutan',KecamatanBubutanController::class);
Route::resource('KecamatanGenteng',KecamatanGentengController::class);
Route::resource('KecamatanSimokerto',KecamatanSimokertoController::class);
Route::resource('KecamatanTegalsari',KecamatanTegalsariController::class);
Route::resource('KecamatanBulak',KecamatanBulakController::class);
Route::resource('KecamatanKenjeran',KecamatanKenjeranController::class);
Route::resource('KecamatanKrembangan',KecamatanKrembanganController::class);
Route::resource('KecamatanPabeanCantian',KecamatanPabeanCantianController::class);
Route::resource('KecamatanSemampir',KecamatanSemampirController::class);
Route::resource('KecamatanAsemRowo',KecamatanAsemRowoController::class);
Route::resource('KecamatanBenowo',KecamatanBenowoController::class);
Route::resource('KecamatanLakarsantri',KecamatanLakarsantriController::class);
Route::resource('KecamatanPakal',KecamatanPakalController::class);
Route::resource('KecamatanSambikerep',KecamatanSambikerepController::class);
Route::resource('KecamatanSukomanunggal',KecamatanSukomanunggalController::class);
Route::resource('KecamatanTandes',KecamatanTandesController::class);

//Kelurahan Surabaya Routing
//Routingn Login Kecamatan 1 Dukuh Pakis Untuk Kelurahan ini
Route::resource('KelurahanDukuhKupang',KelurahanDukuhKupangController::class);
Route::resource('KelurahanDukuhPakis',KelurahanDukuhPakisController::class);
Route::resource('KelurahanGunungSari',KelurahanGunungSariController::class);
Route::resource('KelurahanPradahKalikendal',KelurahanPradahKalikendalController::class);

//Routingn Login Kecamatan 2 Gayungan Untuk Kelurahan ini
Route::resource('KelurahanDukuhMenanggal',KelurahanDukuhMenanggalController::class);
Route::resource('KelurahanGayungan',KelurahanGayunganController::class);
Route::resource('KelurahanKetintang',KelurahanKetintangController::class);
Route::resource('KelurahanMenanggal',KelurahanMenanggalController::class);

//Routingn Login Kecamatan 3 Untuk Kelurahan ini
Route::resource('KelurahanJambangan',KelurahanJambanganController::class);
Route::resource('KelurahanKarah',KelurahanKarahController::class);
Route::resource('KelurahanKebonsari',KelurahanKebonsariController::class);
Route::resource('KelurahanPagesangan',KelurahanPagesanganController::class);

//Routingn Login Kecamatan 4 Untuk Kelurahan ini
Route::resource('KelurahanKarangPilang',KelurahanKarangPilangController::class);
Route::resource('KelurahanKebraon',KelurahanKebraonController::class);
Route::resource('KelurahanKedurus',KelurahanKedurusController::class);
Route::resource('KelurahanWaruGunung',KelurahanWaruGunung::class);

//Routingn Login Kecamatan 5 Untuk Kelurahan ini
Route::resource('KelurahanBanyuUrip',KelurahanBanyuUripController::class);
Route::resource('KelurahanKupangKrajan',KelurahanKupangKrajanController::class);
Route::resource('KelurahanKupangPakis',KelurahanKupangPakis::class);
Route::resource('KelurahanKupangPutatJaya',KelurahanPutatJayaController::class);
Route::resource('KelurahanKupangSawahan',KelurahanSawahanController::class);

//Routingn Login Kecamatan 6 Untuk Kelurahan ini
Route::resource('KelurahanBabatan',KelurahanBabatanController::class);
Route::resource('KelurahanBalasKlumprik',KelurahanBalasKlumprikController::class);
Route::resource('KelurahanJajarTunggal',KelurahanJajarTunggalController::class);
Route::resource('KelurahanWiyung',KelurahanWiyungController::class);

//Routingn Login Kecamatan 7 Untuk Kelurahan ini
Route::resource('KelurahanBendulMerisi',KelurahanBendulMerisiController::class);
Route::resource('KelurahanJemurWonosari',KelurahanJemurWonosariController::class);
Route::resource('KelurahanMargorejo',KelurahanMargorejoController::class);
Route::resource('KelurahanSidosermo',KelurahanSidosermoController::class);
Route::resource('KelurahanSiwalankerto',KelurahanSiwalankertoController::class);

//Routingn Login Kecamatan 7 Untuk Kelurahan ini
Route::resource('KelurahanDarmo',KelurahanDarmoController::class);
Route::resource('KelurahanJagir',KelurahanJagirController::class);
Route::resource('KelurahanNgagel',KelurahanNgagelController::class);
Route::resource('KelurahanNgagelRejo',KelurahanNgagelRejoController::class);
Route::resource('KelurahanSawunggaling',KelurahanSawunggalingController::class);
Route::resource('KelurahanWonokromo',KelurahanWonokromoController::class);

//Routingn Login Kecamatan 8 Untuk Kelurahan ini
Route::resource('KelurahanAirlangga',KelurahanAirlanggaController::class);
Route::resource('KelurahanBaratajaya',KelurahanBaratajayaController::class);
Route::resource('KelurahanGubeng',KelurahanGubengController::class);
Route::resource('KelurahanKertajaya',KelurahanKertajayaController::class);
Route::resource('KelurahanKertajaya',KelurahanMojoController::class);
Route::resource('KelurahanPucangSewu',KelurahanPucangSewuController::class);


//Route::resource('login', loginController::class);
Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/process','process');
    Route::get('logout','logout');
});

//Middlewawre Setting Cek Login Sistem
Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware'=>['cekUserLogin:1']],function(){
        Route::resource('admin',adminController::class);
    });

    Route::group(['middleware'=>['cekUserLogin:999']],function(){
        Route::resource('kota',KotaController::class);
    });

    //Routing Cek Login Kota Surabaya
    Route::group(['middleware'=>['cekUserLogin:2']],function(){
        Route::resource('KotaSurabaya',KotaSurabayaController::class);
    });

    //Routing Cek Login Kecamatan Surabaya
    Route::group(['middleware'=>['cekUserLogin:998']],function(){
        Route::resource('kecamatan',KecamatanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:3']],function(){
        Route::resource('KecamatanDukuhPakis',KecamatanDukuhPakisController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:4']],function(){
        Route::resource('KecamatanGayungan',KecamatanGayunganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:5']],function(){
        Route::resource('KecamatanJambangan',KecamatanJambanganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:6']],function(){
        Route::resource('KecamatanKarangPilang',KecamatanKarangPilangController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:7']],function(){
        Route::resource('KecamatanSawahan',KecamatanSawahanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:8']],function(){
        Route::resource('KecamatanWiyung',KecamatanWiyungController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:9']],function(){
        Route::resource('KecamatanWonocolo',KecamatanWonocoloController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:10']],function(){
        Route::resource('KecamatanWonocolo',KecamatanWonokromoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:11']],function(){
        Route::resource('KecamatanGubeng',KecamatanGubengController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:12']],function(){
        Route::resource('KecamatanGunungAnyar',KecamatanGunungAnyarController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:13']],function(){
        Route::resource('KecamatanMulyorejo',KecamatanMulyorejoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:14']],function(){
        Route::resource('KecamatanRungkut',KecamatanRungkutController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:15']],function(){
        Route::resource('KecamatanSukolilo',KecamatanSukoliloController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:16']],function(){
        Route::resource('KecamatanTambaksari',KecamatanTambaksariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:17']],function(){
        Route::resource('KecamatanTenggilisMejoyo',KecamatanTenggilisMejoyoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:18']],function(){
        Route::resource('KecamatanBubutan',KecamatanBubutanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:19']],function(){
        Route::resource('KecamatanGenteng',KecamatanGentengController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:20']],function(){
        Route::resource('KecamatanSimokerto',KecamatanSimokertoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:21']],function(){
        Route::resource('KecamatanTegalsari',KecamatanTegalsariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:22']],function(){
        Route::resource('KecamatanBulak',KecamatanBulakController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:23']],function(){
        Route::resource('KecamatanKenjeran',KecamatanKenjeranController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:24']],function(){
        Route::resource('KecamatanKrembangan',KecamatanKrembanganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:25']],function(){
        Route::resource('KecamatanPabeanCantian',KecamatanPabeanCantianController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:26']],function(){
        Route::resource('KecamatanSemampir',KecamatanSemampirController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:27']],function(){
        Route::resource('KecamatanAsemRowo',KecamatanAsemRowoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:28']],function(){
        Route::resource('KecamatanBenowo',KecamatanBenowoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:29']],function(){
        Route::resource('KecamatanLakarsantri',KecamatanLakarsantriController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:30']],function(){
        Route::resource('KecamatanPakal',KecamatanPakalController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:31']],function(){
        Route::resource('KecamatanSambikerep',KecamatanSambikerepController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:32']],function(){
        Route::resource('KecamatanSukomanunggal',KecamatanSukomanunggalController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:33']],function(){
        Route::resource('KecamatanTandes',KecamatanTandesController::class);
    });

    //Routing Cek Login Kelurahan
    Route::group(['middleware'=>['cekUserLogin:997']],function(){
        Route::resource('kelurahan',KelurahanController::class);
    });

    //Routing Cek Login Kecamatan Dukuh Pakis Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:34']],function(){
        Route::resource('KelurahanDukuhKupang',KelurahanDukuhKupangController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:35']],function(){
        Route::resource('KelurahanDukuhPakis',KelurahanDukuhPakisController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:36']],function(){
        Route::resource('KelurahanGunungSari',KelurahanGunungSariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:37']],function(){
        Route::resource('KelurahanPradahKalikendal',KelurahanPradahKalikendalController::class);
    });

    //Routing Cek Login Kecamatan Gayungan Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:38']],function(){
        Route::resource('KelurahanDukuhMenanggal',KelurahanDukuhMenanggalController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:39']],function(){
        Route::resource('KelurahanGayungan',KelurahanGayunganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:40']],function(){
        Route::resource('KelurahanKetintang',KelurahanKetintangController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:41']],function(){
        Route::resource('KelurahanMenanggal',KelurahanMenanggalController::class);
    });

    //Routing Cek Login Kecamatan Jambangan Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:42']],function(){
        Route::resource('KelurahanJambangan',KelurahanJambanganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:43']],function(){
        Route::resource('KelurahanKarah',KelurahanKarahController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:44']],function(){
        Route::resource('KelurahanKebonsari',KelurahanKebonsariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:45']],function(){
        Route::resource('KelurahanPagesangan',KelurahanPagesanganController::class);
    });

    //Routing Cek Login Kecamatan Karang Pilang Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:46']],function(){
        Route::resource('KelurahanKarangPilang',KelurahanKarangPilangController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:47']],function(){
        Route::resource('KelurahanKebraon',KelurahanKebraonController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:48']],function(){
        Route::resource('KelurahanKedurus',KelurahanKedurusController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:49']],function(){
        Route::resource('KelurahanWaruGunung',KelurahanWaruGunungController::class);
    });

    //Routing Cek Login Kecamatan Sawahan Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:50']],function(){
        Route::resource('KelurahanBanyuUrip',KelurahanBanyuUripController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:51']],function(){
        Route::resource('KelurahanKupangKrajan',KelurahanKupangKrajanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:52']],function(){
        Route::resource('KelurahanPakis',KelurahanPakisController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:53']],function(){
        Route::resource('KelurahanPutatJaya',KelurahanPutatJayaController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:54']],function(){
        Route::resource('KelurahanSawahan',KelurahanSawahanController::class);
    });

    //Routing Cek Login Kecamatan Wiyung Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:55']],function(){
        Route::resource('KelurahanBabatan',KelurahanBabatanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:56']],function(){
        Route::resource('KelurahanBalasKlumprik',KelurahanBalasKlumprikController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:57']],function(){
        Route::resource('KelurahanJajarTunggal',KelurahanJajarTunggalController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:58']],function(){
        Route::resource('KelurahanWiyung',KelurahanWiyungController::class);
    });

    //Routing Cek Login Kecamatan Wonocolo Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:59']],function(){
        Route::resource('KelurahanBendulMerisi',KelurahanBendulMerisiController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:60']],function(){
        Route::resource('KelurahanJemurWonosari',KelurahanJemurWonosariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:61']],function(){
        Route::resource('KelurahanMargorejo',KelurahanMargorejoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:62']],function(){
        Route::resource('KelurahanSidosermo',KelurahanSidosermoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:63']],function(){
        Route::resource('KelurahanSiwalankerto',KelurahanSiwalankertoController::class);
    });

    //Routing Cek Login Kecamatan Wonokromo Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:64']],function(){
        Route::resource('KelurahanDarmo',KelurahanDarmoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:65']],function(){
        Route::resource('KelurahanJagir',KelurahanJagirController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:66']],function(){
        Route::resource('KelurahanNgagel',KelurahanNgagelController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:67']],function(){
        Route::resource('KelurahanNgagelRejo',KelurahanNgagelRejoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:68']],function(){
        Route::resource('KelurahanSawunggaling',KelurahanSawunggalingController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:69']],function(){
        Route::resource('KelurahanWonokromo',KelurahanWonokromoController::class);
    });

    //Routing Cek Login Kecamatan Gubeng Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:70']],function(){
        Route::resource('KelurahanAirlangga',KelurahanAirlanggaController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:71']],function(){
        Route::resource('KelurahanBaratajaya',KelurahanBaratajayaController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:72']],function(){
        Route::resource('KelurahanGubeng',KelurahanGubengController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:73']],function(){
        Route::resource('KelurahanKertajaya',KelurahanKertajayaController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:74']],function(){
        Route::resource('KelurahanMojo',KelurahanMojoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:75']],function(){
        Route::resource('KelurahanPucangSewu',KelurahanPucangSewuController::class);
    });

    //Routing Cek Login Kecamatan Gubeng Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:76']],function(){
        Route::resource('Kelurahan',Kelurahan::class);
    });

});
Route::resource('form',formController::class);
Route::resource('formBawaslu',formBawasluController::class);
