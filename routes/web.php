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
use App\Http\Controllers\KelurahanAlunAlunContongController;
use App\Http\Controllers\KelurahanBabatanController;
use App\Http\Controllers\KelurahanBalasKlumprikController;
use App\Http\Controllers\KelurahanBanyuUripController;
use App\Http\Controllers\KelurahanBaratajayaController;
use App\Http\Controllers\KelurahanBendulMerisiController;
use App\Http\Controllers\KelurahanBongkaranController;
use App\Http\Controllers\KelurahanBubutanController;
use App\Http\Controllers\KelurahanBulakBantengController;
use App\Http\Controllers\KelurahanBulakController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KelurahanDarmoController;
use App\Http\Controllers\KelurahanDrSoetomoController;
use App\Http\Controllers\KelurahanDukuhKupangController;
use App\Http\Controllers\KelurahanDukuhMenanggalController;
use App\Http\Controllers\KelurahanDukuhPakisController;
use App\Http\Controllers\KelurahanDukuhSetroController;
use App\Http\Controllers\KelurahanDukuhSutorejoController;
use App\Http\Controllers\KelurahanDupakController;
use App\Http\Controllers\KelurahanEmbongKaliasinController;
use App\Http\Controllers\KelurahanGadingController;
use App\Http\Controllers\KelurahanGayunganController;
use App\Http\Controllers\KelurahanGebangPutihController;
use App\Http\Controllers\KelurahanGentengController;
use App\Http\Controllers\KelurahanGubengController;
use App\Http\Controllers\KelurahanGundihController;
use App\Http\Controllers\KelurahanGunungAnyarController;
use App\Http\Controllers\KelurahanGunungAnyarTambakController;
use App\Http\Controllers\KelurahanGunungSariController;
use App\Http\Controllers\KelurahanJagirController;
use App\Http\Controllers\KelurahanJajarTunggalController;
use App\Http\Controllers\KelurahanJambanganController;
use App\Http\Controllers\KelurahanJemurWonosariController;
use App\Http\Controllers\KelurahanJeparaController;
use App\Http\Controllers\KelurahanKalijudanController;
use App\Http\Controllers\KelurahanKalirungkutController;
use App\Http\Controllers\KelurahanKalisariController;
use App\Http\Controllers\KelurahanKapasanController;
use App\Http\Controllers\KelurahanKapasariController;
use App\Http\Controllers\KelurahanKapasmadyaBaruController;
use App\Http\Controllers\KelurahanKarahController;
use App\Http\Controllers\KelurahanKarangPilangController;
use App\Http\Controllers\KelurahanKebonsariController;
use App\Http\Controllers\KelurahanKebraonController;
use App\Http\Controllers\KelurahanKedungBarukController;
use App\Http\Controllers\KelurahanKedungCowekController;
use App\Http\Controllers\KelurahanKedungdoroController;
use App\Http\Controllers\KelurahanKedurusController;
use App\Http\Controllers\KelurahanKejawanPutihTambakController;
use App\Http\Controllers\KelurahanKemayoranController;
use App\Http\Controllers\KelurahanKendangsariController;
use App\Http\Controllers\KelurahanKenjeranController;
use App\Http\Controllers\KelurahanKeputihController;
use App\Http\Controllers\KelurahanKeputranController;
use App\Http\Controllers\KelurahanKertajayaController;
use App\Http\Controllers\KelurahanKetabangController;
use App\Http\Controllers\KelurahanKetintangController;
use App\Http\Controllers\KelurahanKlampisNgasemController;
use App\Http\Controllers\KelurahanKrembanganSelatanController;
use App\Http\Controllers\KelurahanKrembanganUtaraController;
use App\Http\Controllers\KelurahanKupangKrajanController;
use App\Http\Controllers\KelurahanKutisariController;
use App\Http\Controllers\KelurahanManyarSabranganController;
use App\Http\Controllers\KelurahanMargorejoController;
use App\Http\Controllers\KelurahanMedokanAyuController;
use App\Http\Controllers\KelurahanMedokanSemampirController;
use App\Http\Controllers\KelurahanMenanggalController;
use App\Http\Controllers\KelurahanMenurPumpunganController;
use App\Http\Controllers\KelurahanMojoController;
use App\Http\Controllers\KelurahanMorokrembanganController;
use App\Http\Controllers\KelurahanMulyorejoController;
use App\Http\Controllers\KelurahanNgagelController;
use App\Http\Controllers\KelurahanNgagelRejoController;
use App\Http\Controllers\KelurahanNgindenJangkunganController;
use App\Http\Controllers\KelurahanNyamplunganController;
use App\Http\Controllers\KelurahanPacarkelingController;
use App\Http\Controllers\KelurahanPacarkembangController;
use App\Http\Controllers\KelurahanPagesanganController;
use App\Http\Controllers\KelurahanPakisController;
use App\Http\Controllers\KelurahanPanjangJiwoController;
use App\Http\Controllers\KelurahanPenelehController;
use App\Http\Controllers\KelurahanPenjaringanSariController;
use App\Http\Controllers\KelurahanPerakBaratController;
use App\Http\Controllers\KelurahanPerakTimurController;
use App\Http\Controllers\KelurahanPerakUtaraController;
use App\Http\Controllers\KelurahanPlosoController;
use App\Http\Controllers\KelurahanPradahKalikendalController;
use App\Http\Controllers\KelurahanPucangSewuController;
use App\Http\Controllers\KelurahanPutatJayaController;
use App\Http\Controllers\KelurahanRangkahController;
use App\Http\Controllers\KelurahanRungkutKidulController;
use App\Http\Controllers\KelurahanRungkutMenanggalController;
use App\Http\Controllers\KelurahanRungkutTengahController;
use App\Http\Controllers\KelurahanSawahanController;
use App\Http\Controllers\KelurahanSawunggalingController;
use App\Http\Controllers\KelurahanSemolowaruController;
use App\Http\Controllers\KelurahanSidodadiController;
use App\Http\Controllers\KelurahanSidosermoController;
use App\Http\Controllers\KelurahanSidotopoWetanController;
use App\Http\Controllers\KelurahanSimolawangController;
use App\Http\Controllers\KelurahanSiwalankertoController;
use App\Http\Controllers\KelurahanSukoliloBaruController;
use App\Http\Controllers\KelurahanTambakrejoController;
use App\Http\Controllers\KelurahanTambaksariController;
use App\Http\Controllers\KelurahanTambakWediController;
use App\Http\Controllers\KelurahanTanahKaliKedindingController;
use App\Http\Controllers\KelurahanTanjungPerakController;
use App\Http\Controllers\KelurahanTegalsariController;
use App\Http\Controllers\KelurahanTembokDukuhController;
use App\Http\Controllers\KelurahanTenggilisMejoyoController;
use App\Http\Controllers\KelurahanWaruGunungController;
use App\Http\Controllers\KelurahanWiyungController;
use App\Http\Controllers\KelurahanWonokromoController;
use App\Http\Controllers\KelurahanWonorejoRungkutController;
use App\Http\Controllers\KelurahanWonorejoTegalsariController;
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

//Routingn Login Kecamatan 8 Untuk Kelurahan ini
Route::resource('KelurahanDarmo',KelurahanDarmoController::class);
Route::resource('KelurahanJagir',KelurahanJagirController::class);
Route::resource('KelurahanNgagel',KelurahanNgagelController::class);
Route::resource('KelurahanNgagelRejo',KelurahanNgagelRejoController::class);
Route::resource('KelurahanSawunggaling',KelurahanSawunggalingController::class);
Route::resource('KelurahanWonokromo',KelurahanWonokromoController::class);

//Routingn Login Kecamatan 9 Untuk Kelurahan ini
Route::resource('KelurahanAirlangga',KelurahanAirlanggaController::class);
Route::resource('KelurahanBaratajaya',KelurahanBaratajayaController::class);
Route::resource('KelurahanGubeng',KelurahanGubengController::class);
Route::resource('KelurahanKertajaya',KelurahanKertajayaController::class);
Route::resource('KelurahanKertajaya',KelurahanMojoController::class);
Route::resource('KelurahanPucangSewu',KelurahanPucangSewuController::class);

//Routingn Login Kecamatan 10 Untuk Kelurahan ini
Route::resource('KelurahanGunungAnyar',KelurahanGunungAnyarController::class);
Route::resource('KelurahanGunungAnyarTambak',KelurahanGunungAnyarTambakController::class);
Route::resource('KelurahanRungkutMenanggal',KelurahanRungkutMenanggalController::class);
Route::resource('KelurahanRungkutTengah',KelurahanRungkutTengahController::class);

//Routingn Login Kecamatan 11 Untuk Kelurahan ini
Route::resource('KelurahanDukuhSutorejo',KelurahanDukuhSutorejoController::class);
Route::resource('KelurahanKalijudan',KelurahanKalijudanController::class);
Route::resource('KelurahanKalisari',KelurahanKalisariController::class);
Route::resource('KelurahanKejawanPutihTambak',KelurahanKejawanPutihTambakController::class);
Route::resource('KelurahanManyarSabrangan',KelurahanManyarSabranganController::class);
Route::resource('KelurahanMulyorejo',KelurahanMulyorejoController::class);

//Routingn Login Kecamatan 12 Untuk Kelurahan ini
Route::resource('KelurahanKalirungkut',KelurahanKalirungkutController::class);
Route::resource('KelurahanKedungBaruk',KelurahanKedungBarukController::class);
Route::resource('KelurahanMedokanAyu',KelurahanMedokanAyuController::class);
Route::resource('KelurahanPenjaringanSari',KelurahanPenjaringanSariController::class);
Route::resource('KelurahanRungkutKidul',KelurahanRungkutKidulController::class);
Route::resource('KelurahanWonorejoRungkut',KelurahanWonorejoRungkutController::class);

//Routingn Login Kecamatan 13 Untuk Kelurahan ini
Route::resource('KelurahanGebangPutih',KelurahanGebangPutihController::class);
Route::resource('KelurahanKeputih',KelurahanKeputihController::class);
Route::resource('KelurahanKlampisNgasem',KelurahanKlampisNgasemController::class);
Route::resource('KelurahanMedokanSemampir',KelurahanMedokanSemampirController::class);
Route::resource('KelurahanMenurPumpungan',KelurahanMenurPumpunganController::class);
Route::resource('KelurahanNgindenJangkungan',KelurahanNgindenJangkunganController::class);
Route::resource('KelurahanSemolowaru',KelurahanSemolowaruController::class);

//Routingn Login Kecamatan 14 Untuk Kelurahan ini
Route::resource('KelurahanDukuhSetro',KelurahanDukuhSetroController::class);
Route::resource('KelurahanGading',KelurahanGadingController::class);
Route::resource('KelurahanKapasmadyaBaru',KelurahanKapasmadyaBaruController::class);
Route::resource('KelurahanPacarkeling',KelurahanPacarkelingController::class);
Route::resource('KelurahanPacarkembang',KelurahanPacarkembangController::class);
Route::resource('KelurahanPloso',KelurahanPlosoController::class);
Route::resource('KelurahanRangkah',KelurahanRangkahController::class);
Route::resource('KelurahanTambaksari',KelurahanTambaksariController::class);

//Routingn Login Kecamatan 15 Untuk Kelurahan ini
Route::resource('KelurahanKendangsari',KelurahanKendangsariController::class);
Route::resource('KelurahanKutisari',KelurahanKutisariController::class);
Route::resource('KelurahanPanjangJiwo',KelurahanPanjangJiwoController::class);
Route::resource('KelurahanTenggilisMejoyo',KelurahanTenggilisMejoyoController::class);

//Routingn Login Kecamatan 16 Untuk Kelurahan ini
Route::resource('KelurahanAlunAlunContong',KelurahanAlunAlunContongController::class);
Route::resource('KelurahanBubutan',KelurahanBubutanController::class);
Route::resource('KelurahanGundih',KelurahanBubutanController::class);
Route::resource('KelurahanJepara',KelurahanJeparaController::class);
Route::resource('KelurahanTembokDukuh',KelurahanTembokDukuhController::class);

//Routingn Login Kecamatan 17 Untuk Kelurahan ini
Route::resource('KelurahanEmbongKaliasin',KelurahanEmbongKaliasinController::class);
Route::resource('KelurahanGenteng',KelurahanGentengController::class);
Route::resource('KelurahanKapasari',KelurahanKapasariController::class);
Route::resource('KelurahanKetabang',KelurahanKetabangController::class);
Route::resource('KelurahanPeneleh',KelurahanPenelehController::class);

//Routingn Login Kecamatan 18 Untuk Kelurahan ini
Route::resource('KelurahanKapasan',KelurahanKapasanController::class);
Route::resource('KelurahanSidodadi',KelurahanSidodadiController::class);
Route::resource('KelurahanSimolawang',KelurahanSimolawangController::class);
Route::resource('KelurahanTambakrejo',KelurahanTambakrejoController::class);

//Routingn Login Kecamatan 19 Untuk Kelurahan ini
Route::resource('KelurahanDrSoetomo',KelurahanDrSoetomoController::class);
Route::resource('KelurahanKedungdoro',KelurahanKedungdoroController::class);
Route::resource('KelurahanKeputran',KelurahanKeputranController::class);
Route::resource('KelurahanTegalsari',KelurahanTegalsariController::class);
Route::resource('KelurahanWonorejoTegalsari',KelurahanWonorejoTegalsariController::class);

//Routingn Login Kecamatan 20 Untuk Kelurahan ini
Route::resource('KelurahanBulak',KelurahanBulakController::class);
Route::resource('KelurahanKedungCowek',KelurahanKedungCowekController::class);
Route::resource('KelurahanKenjeran',KelurahanKenjeranController::class);
Route::resource('KelurahanSukoliloBaru',KelurahanSukoliloBaruController::class);

//Routingn Login Kecamatan 21 Untuk Kelurahan ini
Route::resource('KelurahanBulakBanteng',KelurahanBulakBantengController::class);
Route::resource('KelurahanSidotopoWetan',KelurahanSidotopoWetanController::class);
Route::resource('KelurahanTambakWedi',KelurahanTambakWediController::class);
Route::resource('KelurahanTanahKaliKedinding',KelurahanTanahKaliKedindingController::class);

//Routingn Login Kecamatan 22 Untuk Kelurahan ini
Route::resource('KelurahanDupak',KelurahanDupakController::class);
Route::resource('KelurahanKemayoran',KelurahanKemayoranController::class);
Route::resource('KelurahanKrembanganSelatan',KelurahanKrembanganSelatanController::class);
Route::resource('KelurahanMorokrembangan',KelurahanMorokrembanganController::class);
Route::resource('KelurahanPerakBarat',KelurahanPerakBaratController::class);

//Routingn Login Kecamatan 23 Untuk Kelurahan ini
Route::resource('KelurahanBongkaran',KelurahanBongkaranController::class);
Route::resource('KelurahanKrembanganUtara',KelurahanKrembanganUtaraController::class);
Route::resource('KelurahanNyamplungan',KelurahanNyamplunganController::class);
Route::resource('KelurahanPerakTimur',KelurahanPerakTimurController::class);
Route::resource('KelurahanPerakUtara',KelurahanPerakUtaraController::class);
Route::resource('KelurahanTanjungPerak',KelurahanTanjungPerakController::class);

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
        Route::resource('KelurahanGunungAnyar',KelurahanGunungAnyarController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:77']],function(){
        Route::resource('KelurahanGunungAnyarTambak',KelurahanGunungAnyarTambakController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:78']],function(){
        Route::resource('KelurahanRungkutMenanggal',KelurahanRungkutMenanggalController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:79']],function(){
        Route::resource('KelurahanRungkutTengah',KelurahanRungkutTengahController::class);
    });

    //Routing Cek Login Kecamatan Mulyorejo Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:80']],function(){
        Route::resource('KelurahanDukuhSutorejo',KelurahanDukuhSutorejoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:81']],function(){
        Route::resource('KelurahanKalijudan',KelurahanKalijudanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:82']],function(){
        Route::resource('KelurahanKalisari',KelurahanKalisariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:83']],function(){
        Route::resource('KelurahanKejawanPutihTambak',KelurahanKejawanPutihTambakController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:84']],function(){
        Route::resource('KelurahanManyarSabrangan',KelurahanManyarSabranganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:85']],function(){
        Route::resource('KelurahanMulyorejo',KelurahanMulyorejoController::class);
    });

    //Routing Cek Login Kecamatan Rungkut Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:86']],function(){
        Route::resource('KelurahanKalirungkut',KelurahanKalirungkutController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:87']],function(){
        Route::resource('KelurahanKedungBaruk',KelurahanKedungBarukController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:88']],function(){
        Route::resource('KelurahanMedokanAyu',KelurahanMedokanAyuController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:89']],function(){
        Route::resource('KelurahanPenjaringanSari',KelurahanPenjaringanSariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:90']],function(){
        Route::resource('KelurahanRungkutKidul',KelurahanRungkutKidulController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:91']],function(){
        Route::resource('KelurahanWonorejoRungkut',KelurahanWonorejoRungkutController::class);
    });

    //Routing Cek Login Kecamatan Rungkut Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:92']],function(){
        Route::resource('KelurahanGebangPutih',KelurahanGebangPutihController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:93']],function(){
        Route::resource('KelurahanKeputih',KelurahanKeputihController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:94']],function(){
        Route::resource('KelurahanKlampisNgasem',KelurahanKlampisNgasemController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:95']],function(){
        Route::resource('KelurahanMedokanSemampir',KelurahanMedokanSemampirController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:96']],function(){
        Route::resource('KelurahanMenurPumpungan',KelurahanMenurPumpunganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:97']],function(){
        Route::resource('KelurahanNgindenJangkungan',KelurahanNgindenJangkunganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:98']],function(){
        Route::resource('KelurahanSemolowaru',KelurahanSemolowaruController::class);
    });
    

    //Routing Cek Login Kecamatan Rungkut Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:99']],function(){
        Route::resource('KelurahanDukuhSetro',KelurahanDukuhSetroController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:100']],function(){
        Route::resource('KelurahanGading',KelurahanGadingController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:101']],function(){
        Route::resource('KelurahanKapasmadyaBaru',KelurahanKapasmadyaBaruController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:102']],function(){
        Route::resource('KelurahanPacarkeling',KelurahanPacarkelingController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:103']],function(){
        Route::resource('KelurahanPacarkembang',KelurahanPacarkembangController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:104']],function(){
        Route::resource('KelurahanPloso',KelurahanPlosoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:105']],function(){
        Route::resource('KelurahanRangkah',KelurahanRangkahController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:106']],function(){
        Route::resource('KelurahanTambaksari',KelurahanTambaksariController::class);
    });

    //Routing Cek Login Kecamatan Tenggilis Mejoyo Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:107']],function(){
        Route::resource('KelurahanKendangsari',KelurahanKendangsariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:108']],function(){
        Route::resource('KelurahanKutisari',KelurahanKutisariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:109']],function(){
        Route::resource('KelurahanPanjangJiwo',KelurahanPanjangJiwoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:110']],function(){
        Route::resource('KelurahanTenggilisMejoyo',KelurahanTenggilisMejoyoController::class);
    });

    //Routing Cek Login Kecamatan Bubutan Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:111']],function(){
        Route::resource('KelurahanAlunAlunContong',KelurahanAlunAlunContongController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:112']],function(){
        Route::resource('KelurahanBubutan',KelurahanBubutanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:113']],function(){
        Route::resource('KelurahanGundih',KelurahanGundihController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:114']],function(){
        Route::resource('KelurahanJepara',KelurahanJeparaController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:115']],function(){
        Route::resource('KelurahanTembokDukuh',KelurahanTembokDukuhController::class);
    });

    //Routing Cek Login Kecamatan Genteng Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:116']],function(){
        Route::resource('KelurahanEmbongKaliasi',KelurahanEmbongKaliasinController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:117']],function(){
        Route::resource('KelurahanGenteng',KelurahanGentengController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:118']],function(){
        Route::resource('KelurahanKapasari',KelurahanKapasariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:119']],function(){
        Route::resource('KelurahanKetabang',KelurahanKetabangController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:120']],function(){
        Route::resource('KelurahanPeneleh',KelurahanPenelehController::class);
    });

    //Routing Cek Login Kecamatan Simokerto Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:121']],function(){
        Route::resource('KelurahanKapasan',KelurahanKapasanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:122']],function(){
        Route::resource('KelurahanSidodadi',KelurahanSidodadiController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:123']],function(){
        Route::resource('KelurahanSimolawang',KelurahanSimolawangController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:124']],function(){
        Route::resource('KelurahanTambakrejo',KelurahanTambakrejoController::class);
    });

    //Routing Cek Login Kecamatan Simokerto Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:125']],function(){
        Route::resource('KelurahanDrSoetomo',KelurahanDrSoetomoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:126']],function(){
        Route::resource('KelurahanKedungdoro',KelurahanKedungdoroController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:127']],function(){
        Route::resource('KelurahanKeputran',KelurahanKeputranController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:128']],function(){
        Route::resource('KelurahanTegalsari',KelurahanTegalsariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:129']],function(){
        Route::resource('KelurahanWonorejoTegalsari',KelurahanWonorejoTegalsariController::class);
    });

    //Routing Cek Login Kecamatan Simokerto Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:130']],function(){
        Route::resource('KelurahanBulak',KelurahanBulakController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:131']],function(){
        Route::resource('KelurahanKedungCowek',KelurahanKedungCowekController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:132']],function(){
        Route::resource('KelurahanKenjeran',KelurahanKenjeranController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:133']],function(){
        Route::resource('KelurahanSukoliloBaru',KelurahanSukoliloBaruController::class);
    });

    //Routing Cek Login Kecamatan Kenjeran Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:134']],function(){
        Route::resource('KelurahanBulakBanteng',KelurahanBulakBantengController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:135']],function(){
        Route::resource('KelurahanSidotopoWetan',KelurahanSidotopoWetanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:136']],function(){
        Route::resource('KelurahanTambakWedi',KelurahanTambakWediController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:137']],function(){
        Route::resource('KelurahanTanahKaliKedinding',KelurahanTanahKaliKedindingController::class);
    });

    //Routing Cek Login Kecamatan Krembangan Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:138']],function(){
        Route::resource('KelurahanDupak',KelurahanDupakController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:139']],function(){
        Route::resource('KelurahanKemayoran',KelurahanKemayoranController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:140']],function(){
        Route::resource('KelurahanKrembanganSelatan',KelurahanKrembanganSelatanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:141']],function(){
        Route::resource('KelurahanMorokrembangan',KelurahanMorokrembanganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:142']],function(){
        Route::resource('KelurahanPerakBarat',KelurahanPerakBaratController::class);
    });

    //Routing Cek Login Kecamatan Pabean Cantian Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:143']],function(){
        Route::resource('KelurahanBongkaran',KelurahanBongkaranController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:144']],function(){
        Route::resource('KelurahanKrembanganUtara',KelurahanKrembanganUtaraController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:145']],function(){
        Route::resource('KelurahanNyamplungan',KelurahanNyamplunganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:146']],function(){
        Route::resource('KelurahanPerakTimur',KelurahanPerakTimurController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:147']],function(){
        Route::resource('KelurahanPerakUtara',KelurahanPerakUtaraController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:148']],function(){
        Route::resource('KelurahanTanjungPerak',KelurahanTanjungPerakController::class);
    });

});
Route::resource('form',formController::class);
Route::resource('formBawaslu',formBawasluController::class);
