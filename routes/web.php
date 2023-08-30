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
use App\Http\Controllers\KelurahanAmpelController;
use App\Http\Controllers\KelurahanAsemRowoController;
use App\Http\Controllers\KelurahanBabatanController;
use App\Http\Controllers\KelurahanBabatJerawatController;
use App\Http\Controllers\KelurahanBalasKlumprikController;
use App\Http\Controllers\KelurahanBalongsariController;
use App\Http\Controllers\KelurahanBangkinganController;
use App\Http\Controllers\KelurahanBanjarSugihanController;
use App\Http\Controllers\KelurahanBanyuUripController;
use App\Http\Controllers\KelurahanBaratajayaController;
use App\Http\Controllers\KelurahanBendulMerisiController;
use App\Http\Controllers\KelurahanBenowoController;
use App\Http\Controllers\KelurahanBeringinController;
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
use App\Http\Controllers\KelurahanGentingKalianakController;
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
use App\Http\Controllers\KelurahanJerukController;
use App\Http\Controllers\KelurahanKalijudanController;
use App\Http\Controllers\KelurahanKalirungkutController;
use App\Http\Controllers\KelurahanKalisariController;
use App\Http\Controllers\KelurahanKandanganController;
use App\Http\Controllers\KelurahanKapasanController;
use App\Http\Controllers\KelurahanKapasariController;
use App\Http\Controllers\KelurahanKapasmadyaBaruController;
use App\Http\Controllers\KelurahanKarahController;
use App\Http\Controllers\KelurahanKarangPilangController;
use App\Http\Controllers\KelurahanKarangPohController;
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
use App\Http\Controllers\KelurahanLakarsantriController;
use App\Http\Controllers\KelurahanLidahKulonController;
use App\Http\Controllers\KelurahanLidahWetanController;
use App\Http\Controllers\KelurahanLontarController;
use App\Http\Controllers\KelurahanMadeController;
use App\Http\Controllers\KelurahanManukanKulonController;
use App\Http\Controllers\KelurahanManukanWetanController;
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
use App\Http\Controllers\KelurahanPakalController;
use App\Http\Controllers\KelurahanPakisController;
use App\Http\Controllers\KelurahanPanjangJiwoController;
use App\Http\Controllers\KelurahanPegirianController;
use App\Http\Controllers\KelurahanPenelehController;
use App\Http\Controllers\KelurahanPenjaringanSariController;
use App\Http\Controllers\KelurahanPerakBaratController;
use App\Http\Controllers\KelurahanPerakTimurController;
use App\Http\Controllers\KelurahanPerakUtaraController;
use App\Http\Controllers\KelurahanPetemonController;
use App\Http\Controllers\KelurahanPlosoController;
use App\Http\Controllers\KelurahanPradahKalikendalController;
use App\Http\Controllers\KelurahanPucangSewuController;
use App\Http\Controllers\KelurahanPutatGedeController;
use App\Http\Controllers\KelurahanPutatJayaController;
use App\Http\Controllers\KelurahanRangkahController;
use App\Http\Controllers\KelurahanRomokalisariController;
use App\Http\Controllers\KelurahanRungkutKidulController;
use App\Http\Controllers\KelurahanRungkutMenanggalController;
use App\Http\Controllers\KelurahanRungkutTengahController;
use App\Http\Controllers\KelurahanSambikerepController;
use App\Http\Controllers\KelurahanSawahanController;
use App\Http\Controllers\KelurahanSawunggalingController;
use App\Http\Controllers\KelurahanSememiController;
use App\Http\Controllers\KelurahanSemolowaruController;
use App\Http\Controllers\KelurahanSidodadiController;
use App\Http\Controllers\KelurahanSidosermoController;
use App\Http\Controllers\KelurahanSidotopoController;
use App\Http\Controllers\KelurahanSidotopoWetanController;
use App\Http\Controllers\KelurahanSimokertoController;
use App\Http\Controllers\KelurahanSimolawangController;
use App\Http\Controllers\KelurahanSimomulyoBaruController;
use App\Http\Controllers\KelurahanSimomulyoController;
use App\Http\Controllers\KelurahanSiwalankertoController;
use App\Http\Controllers\KelurahanSonokwijenanController;
use App\Http\Controllers\KelurahanSukoliloBaruController;
use App\Http\Controllers\KelurahanSukomanunggalController;
use App\Http\Controllers\KelurahanSumberRejoController;
use App\Http\Controllers\KelurahanSumurwelutController;
use App\Http\Controllers\KelurahanTambakOsoWilangunController;
use App\Http\Controllers\KelurahanTambakrejoController;
use App\Http\Controllers\KelurahanTambaksariController;
use App\Http\Controllers\KelurahanTambakSariosoController;
use App\Http\Controllers\KelurahanTambakWediController;
use App\Http\Controllers\KelurahanTanahKaliKedindingController;
use App\Http\Controllers\KelurahanTandesController;
use App\Http\Controllers\KelurahanTanjungPerakController;
use App\Http\Controllers\KelurahanTanjungsariController;
use App\Http\Controllers\KelurahanTegalsariController;
use App\Http\Controllers\KelurahanTembokDukuhController;
use App\Http\Controllers\KelurahanTenggilisMejoyoController;
use App\Http\Controllers\KelurahanUjungController;
use App\Http\Controllers\KelurahanWaruGunungController;
use App\Http\Controllers\KelurahanWiyungController;
use App\Http\Controllers\KelurahanWonokromoController;
use App\Http\Controllers\KelurahanWonokusumoController;
use App\Http\Controllers\KelurahanWonorejoRungkutController;
use App\Http\Controllers\KelurahanWonorejoTegalsariController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KotaSurabayaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\SuperAdminController;
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
//PDF ROUTE
Route::get('/generate-pdf',[pdfController::class,'generatePdf']);

//Route::resource('admin',adminController::class);
Route::resource('Users',SuperAdminController::class);
//Routing Search Bar
Route::get('SuperAdmin/search', [SuperAdminController::class, 'search'])->name('search');

Route::resource('kota',KotaController::class);
Route::resource('kecamatan',KecamatanController::class);
Route::resource('kelurahan',KelurahanController::class);

//Kota Surabaya Routing
Route::resource('KotaSurabaya',KotaSurabayaController::class);
//Routing PDF
Route::get('KotaSurabaya/pdf/{id}', [KotaSurabayaController::class,'pdf'])->name('kotasurabaya.pdf');
//Routing Search Bar
Route::get('search', [KotaSurabayaController::class, 'search'])->name('kotasurabaya.search');

//Kecamatan Surabaya Routing
Route::resource('KecamatanDukuhPakis',KecamatanDukuhPakisController::class);
//Routing PDF
Route::get('KecamatanDukuhPakis/pdf/{id}', [KecamatanDukuhPakisController::class,'pdf'])->name('KecamatanDukuhPakis.pdf');
//Routing Search Bar
Route::get('search', [KecamatanDukuhPakisController::class, 'search'])->name('kecamatandukuhpakis.search');

Route::resource('KecamatanGayungan',KecamatanGayunganController::class);
//Routing PDF
Route::get('KecamatanGayungan/pdf/{id}', [KecamatanGayunganController::class,'pdf'])->name('KecamatanGayungan.pdf');
//Routing Search Bar
Route::get('search', [KecamatanGayunganController::class, 'search'])->name('kecamatangayungan.search');

Route::resource('KecamatanJambangan',KecamatanJambanganController::class);
//Routing PDF
Route::get('KecamatanJambangan/pdf/{id}', [KecamatanJambanganController::class,'pdf'])->name('KecamatanJambangan.pdf');
//Routing Search Bar
Route::get('search', [KecamatanJambanganController::class, 'search'])->name('kecamatanjambangan.search');

Route::resource('KecamatanKarangPilang',KecamatanKarangPilangController::class);
//Routing PDF
Route::get('KecamatanKarangPilang/pdf/{id}', [KecamatanKarangPilangController::class,'pdf'])->name('KecamatanKarangPilang.pdf');
//Routing Search Bar
Route::get('search', [KecamatanKarangPilangController::class, 'search'])->name('kecamatankarangpilang.search');

Route::resource('KecamatanSawahan',KecamatanSawahanController::class);
//Routing PDF
Route::get('KecamatanSawahan/pdf/{id}', [KecamatanSawahanController::class,'pdf'])->name('KecamatanSawahan.pdf');
//Routing Search Bar
Route::get('search', [KecamatanSawahanController::class, 'search'])->name('kecamatansawahan.search');

Route::resource('KecamatanWiyung',KecamatanWiyungController::class);
//Routing PDF
Route::get('KecamatanWiyung/pdf/{id}', [KecamatanWiyungController::class,'pdf'])->name('KecamatanWiyung.pdf');
//Routing Search Bar
Route::get('search', [KecamatanWiyungController::class, 'search'])->name('kecamatanwiyung.search');

Route::resource('KecamatanWonocolo',KecamatanWonocoloController::class);
//Routing PDF
Route::get('KecamatanWonocolo/pdf/{id}', [KecamatanWonocoloController::class,'pdf'])->name('KecamatanWonocolo.pdf');
//Routing Search Bar
Route::get('search', [KecamatanWonocoloController::class, 'search'])->name('kecamatanwonocolo.search');

Route::resource('KecamatanWonokromo',KecamatanWonokromoController::class);
//Routing PDF
Route::get('KecamatanWonokromo/pdf/{id}', [KecamatanWonokromoController::class,'pdf'])->name('KecamatanWonokromo.pdf');
//Routing Search Bar
Route::get('search', [KecamatanWonokromoController::class, 'search'])->name('kecamatanwonokromo.search');

Route::resource('KecamatanGubeng',KecamatanGubengController::class);
//Routing PDF
Route::get('KecamatanGubeng/pdf/{id}', [KecamatanGubengController::class,'pdf'])->name('KecamatanGubeng.pdf');
//Routing Search Bar
Route::get('search', [KecamatanGubengController::class, 'search'])->name('kecamatangubeng.search');

Route::resource('KecamatanGunungAnyar',KecamatanGunungAnyarController::class);
//Routing PDF
Route::get('KecamatanGayungan/pdf/{id}', [KecamatanGunungAnyarController::class,'pdf'])->name('KecamatanGunungAnyar.pdf');
//Routing Search Bar
Route::get('search', [KecamatanGunungAnyarController::class, 'search'])->name('kecamatangununganyar.search');

Route::resource('KecamatanMulyorejo',KecamatanMulyorejoController::class);
//Routing PDF
Route::get('KecamatanMulyorejo/pdf/{id}', [KecamatanMulyorejoController::class,'pdf'])->name('KecamatanMulyorejo.pdf');
//Routing Search Bar
Route::get('search', [KecamatanMulyorejoController::class, 'search'])->name('kecamatanmulyorejo.search');

Route::resource('KecamatanRungkut',KecamatanRungkutController::class);
//Routing PDF
Route::get('KecamatanRungkut/pdf/{id}', [KecamatanRungkutController::class,'pdf'])->name('KecamatanRungkut.pdf');
//Routing Search Bar
Route::get('search', [KecamatanRungkutController::class, 'search'])->name('kecamatanrungkut.search');

Route::resource('KecamatanSukolilo',KecamatanSukoliloController::class);
//Routing PDF
Route::get('KecamatanSukolilo/pdf/{id}', [KecamatanSukoliloController::class,'pdf'])->name('KecamatanSukolilo.pdf');
//Routing Search Bar
Route::get('search', [KecamatanSukoliloController::class, 'search'])->name('kecamatansukolilo.search');

Route::resource('KecamatanTambaksari',KecamatanTambaksariController::class);
//Routing PDF
Route::get('KecamatanTambaksari/pdf/{id}', [KecamatanTambaksariController::class,'pdf'])->name('KecamatanTambaksari.pdf');
//Routing Search Bar
Route::get('search', [KecamatanTambaksariController::class, 'search'])->name('kecamatantambaksari.search');

Route::resource('KecamatanTengggilisMejoyo',KecamatanTenggilisMejoyoController::class);
//Routing PDF
Route::get('KecamatanTengggilisMejoyo/pdf/{id}', [KecamatanTengggilisMejoyoController::class,'pdf'])->name('KecamatanTengggilisMejoyo.pdf');
//Routing Search Bar
Route::get('search', [KKecamatanTengggilisMejoyoController::class, 'search'])->name('kecamatantengggilismejoyo.search');

Route::resource('KecamatanBubutan',KecamatanBubutanController::class);
//Routing PDF
Route::get('KecamatanBubutan/pdf/{id}', [KecamatanBubutanController::class,'pdf'])->name('KecamatanBubutan.pdf');
//Routing Search Bar
Route::get('search', [KecamatanBubutanController::class, 'search'])->name('kecamatanbubutan.search');

Route::resource('KecamatanGenteng',KecamatanGentengController::class);
//Routing PDF
Route::get('KecamatanGenteng/pdf/{id}', [KecamatanGentengController::class,'pdf'])->name('KecamatanGenteng.pdf');
//Routing Search Bar
Route::get('search', [KecamatanGentengController::class, 'search'])->name('kecamatangenteng.search');

Route::resource('KecamatanSimokerto',KecamatanSimokertoController::class);
//Routing PDF
Route::get('KKecamatanSimokerto/pdf/{id}', [KecamatanSimokertoController::class,'pdf'])->name('KecamatanSimokerto.pdf');
//Routing Search Bar
Route::get('search', [KecamatanSimokertoController::class, 'search'])->name('kecamatansimokerto.search');

Route::resource('KecamatanTegalsari',KecamatanTegalsariController::class);
//Routing PDF
Route::get('KecamatanTegalsari/pdf/{id}', [KecamatanTegalsariController::class,'pdf'])->name('KecamatanTegalsari.pdf');
//Routing Search Bar
Route::get('search', [KecamatanTegalsariController::class, 'search'])->name('kecamatantegalsari.search');

Route::resource('KecamatanBulak',KecamatanBulakController::class);
//Routing PDF
Route::get('KecamatanBulak/pdf/{id}', [KecamatanBulakController::class,'pdf'])->name('KecamatanBulak.pdf');
//Routing Search Bar
Route::get('search', [KecamatanBulakController::class, 'search'])->name('kecamatanbulak.search');

Route::resource('KecamatanKenjeran',KecamatanKenjeranController::class);
//Routing PDF
Route::get('KecamatanKenjeran/pdf/{id}', [KecamatanKenjeranController::class,'pdf'])->name('KecamatanKenjeran.pdf');
//Routing Search Bar
Route::get('search', [KecamatanKenjeranController::class, 'search'])->name('kecamatankenjeran.search');

Route::resource('KecamatanKrembangan',KecamatanKrembanganController::class);
//Routing PDF
Route::get('KecamatanKrembangan/pdf/{id}', [KecamatanKrembanganController::class,'pdf'])->name('KecamatanKrembangan.pdf');
//Routing Search Bar
Route::get('search', [KecamatanKrembanganController::class, 'search'])->name('kecamatankrembangan.search');

Route::resource('KecamatanPabeanCantian',KecamatanPabeanCantianController::class);
//Routing PDF
Route::get('KecamatanPabeanCantian/pdf/{id}', [KecamatanPabeanCantianController::class,'pdf'])->name('KecamatanPabeanCantian.pdf');
//Routing Search Bar
Route::get('search', [KecamatanPabeanCantianController::class, 'search'])->name('kecamatanpabeancantian.search');

Route::resource('KecamatanSemampir',KecamatanSemampirController::class);
//Routing PDF
Route::get('KecamatanSemampir/pdf/{id}', [KecamatanSemampirController::class,'pdf'])->name('KecamatanSemampir.pdf');
//Routing Search Bar
Route::get('search', [KecamatanSemampirController::class, 'search'])->name('kecamatansemampir.search');

Route::resource('KecamatanAsemRowo',KecamatanAsemRowoController::class);
//Routing PDF
Route::get('KecamatanAsemRowo/pdf/{id}', [KecamatanAsemRowoController::class,'pdf'])->name('KecamatanAsemRowo.pdf');
//Routing Search Bar
Route::get('search', [KecamatanAsemRowoController::class, 'search'])->name('kecamatanasemRowo.search');

Route::resource('KecamatanBenowo',KecamatanBenowoController::class);
//Routing PDF
Route::get('KecamatanBenowo/pdf/{id}', [KecamatanBenowoController::class,'pdf'])->name('KecamatanBenowo.pdf');
//Routing Search Bar
Route::get('search', [KecamatanBenowoController::class, 'search'])->name('kecamatanbenowo.search');

Route::resource('KecamatanLakarsantri',KecamatanLakarsantriController::class);
//Routing PDF
Route::get('KecamatanLakarsantri/pdf/{id}', [KecamatanLakarsantriController::class,'pdf'])->name('KecamatanLakarsantri.pdf');
//Routing Search Bar
Route::get('search', [KecamatanLakarsantriController::class, 'search'])->name('kecamatanlakarsantri.search');

Route::resource('KecamatanPakal',KecamatanPakalController::class);
//Routing PDF
Route::get('KecamatanPakal/pdf/{id}', [KecamatanPakalController::class,'pdf'])->name('KecamatanPakal.pdf');
//Routing Search Bar
Route::get('search', [KecamatanPakalController::class, 'search'])->name('KecamatanPakal.search');

Route::resource('KecamatanSambikerep',KecamatanSambikerepController::class);
//Routing PDF
Route::get('KecamatanSambikerep/pdf/{id}', [KecamatanSambikerepController::class,'pdf'])->name('KecamatanSambikerep.pdf');
//Routing Search Bar
Route::get('search', [KecamatanSambikerepController::class, 'search'])->name('kecamatansambikerep.search');

Route::resource('KecamatanSukomanunggal',KecamatanSukomanunggalController::class);
//Routing PDF
Route::get('KecamatanSukomanunggal/pdf/{id}', [KecamatanSukomanunggalController::class,'pdf'])->name('KecamatanSukomanunggal.pdf');
//Routing Search Bar
Route::get('search', [KecamatanSukomanunggalController::class, 'search'])->name('kecamatansukomanunggal.search');

Route::resource('KecamatanTandes',KecamatanTandesController::class);
//Routing PDF
Route::get('KecamatanTandes/pdf/{id}', [KecamatanTandesController::class,'pdf'])->name('KecamatanTandes.pdf');
//Routing Search Bar
Route::get('search', [KecamatanTandesController::class, 'search'])->name('kecamatantandes.search');


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
Route::resource('KelurahanKupangPutatJaya',KelurahanPutatJayaController::class);
Route::resource('KelurahanKupangSawahan',KelurahanSawahanController::class);
Route::resource('KelurahanKupangPetemon',KelurahanPetemonController::class);

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
Route::resource('KelurahanSimokerto',KelurahanSimokertoController::class);

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

//Routingn Login Kecamatan 24 Untuk Kelurahan ini
Route::resource('KelurahanAmpel',KelurahanAmpelController::class);
Route::resource('KelurahanPegirian',KelurahanPegirianController::class);
Route::resource('KelurahanSidotopo',KelurahanSidotopoController::class);
Route::resource('KelurahanUjung',KelurahanUjungController::class);
Route::resource('KelurahanWonokusumo',KelurahanWonokusumoController::class);

//Routingn Login Kecamatan 25 Untuk Kelurahan ini
Route::resource('KelurahanAsemRowo',KelurahanAsemRowoController::class);
Route::resource('KelurahanGentingKalianak',KelurahanGentingKalianakController::class);
Route::resource('KelurahanTambakSarioso',KelurahanTambakSariosoController::class);

//Routingn Login Kecamatan 26 Untuk Kelurahan ini
Route::resource('KelurahanKandangan',KelurahanKandanganController::class);
Route::resource('KelurahanRomokalisari',KelurahanRomokalisariController::class);
Route::resource('KelurahanSememi',KelurahanSememiController::class);
Route::resource('KelurahanTambakOsoWilangun',KelurahanTambakOsoWilangunController::class);

//Routingn Login Kecamatan 27 Untuk Kelurahan ini
Route::resource('KelurahanBangkingan',KelurahanBangkinganController::class);
Route::resource('KelurahanJeruk',KelurahanJerukController::class);
Route::resource('KelurahanLakarsantri',KelurahanLakarsantriController::class);
Route::resource('KelurahanLidahKulon',KelurahanLidahKulonController::class);
Route::resource('KelurahanLidahWetan',KelurahanLidahWetanController::class);
Route::resource('KelurahanSumurwelut',KelurahanSumurwelutController::class);

//Routingn Login Kecamatan 28 Untuk Kelurahan ini
Route::resource('KelurahanBabatJerawat',KelurahanBabatJerawatController::class);
Route::resource('KelurahanBenowo',KelurahanBenowoController::class);
Route::resource('KelurahanPakal',KelurahanPakalController::class);
Route::resource('KelurahanSumberRejo',KelurahanSumberRejoController::class);

//Routingn Login Kecamatan 29 Untuk Kelurahan ini
Route::resource('KelurahanBeringin',KelurahanBeringinController::class);
Route::resource('KelurahanLontar',KelurahanLontarController::class);
Route::resource('KelurahanMade',KelurahanMadeController::class);
Route::resource('KelurahanSambikerep',KelurahanSambikerepController::class);

//Routingn Login Kecamatan 30 Untuk Kelurahan ini
Route::resource('KelurahanPutatGede',KelurahanPutatGedeController::class);
Route::resource('KelurahanSimomulyo',KelurahanSimomulyoController::class);
Route::resource('KelurahanSimomulyoBaru',KelurahanSimomulyoBaruController::class);
Route::resource('KelurahanSonokwijenan',KelurahanSonokwijenanController::class);
Route::resource('KelurahanSukomanunggal',KelurahanSukomanunggalController::class);
Route::resource('KelurahanTanjungsari',KelurahanTanjungsariController::class);

//Routingn Login Kecamatan 31 Untuk Kelurahan ini
Route::resource('KelurahanBalongsari',KelurahanBalongsariController::class);
Route::resource('KelurahanBanjarSugihan',KelurahanBanjarSugihanController::class);
Route::resource('KelurahanKarangPoh',KelurahanKarangPohController::class);
Route::resource('KelurahanManukanKulon',KelurahanManukanKulonController::class);
Route::resource('KelurahanManukanWetan',KelurahanManukanWetanController::class);
Route::resource('KelurahanTandes',KelurahanTandesController::class);

//Route::resource('login', loginController::class);
Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/process','process');
    Route::get('logout','logout');
});

//Middlewawre Setting Cek Login Sistem
Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware'=>['cekUserLogin:1']],function(){
        Route::resource('SuperAdmin',SuperAdminController::class);
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
    Route::group(['middleware'=>['cekUserLogin:188']],function(){
        Route::resource('KelurahanPetemon',KelurahanPetemonController::class);
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
    Route::group(['middleware'=>['cekUserLogin:187']],function(){
        Route::resource('KelurahanSimokerto',KelurahanSimokertoController::class);
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

    //Routing Cek Login Kecamatan Semampir Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:149']],function(){
        Route::resource('KelurahanAmpel',KelurahanAmpelController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:150']],function(){
        Route::resource('KelurahanPegirian',KelurahanPegirianController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:151']],function(){
        Route::resource('KelurahanSidotopo',KelurahanSidotopoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:152']],function(){
        Route::resource('KelurahanUjung',KelurahanUjungController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:153']],function(){
        Route::resource('KelurahanWonokusumo',KelurahanWonokusumoController::class);
    });

    //Routing Cek Login Kecamatan Asem Rowo Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:154']],function(){
        Route::resource('KelurahanAsemRowo',KelurahanAsemRowoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:155']],function(){
        Route::resource('KelurahanGentingKalianak',KelurahanGentingKalianakController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:156']],function(){
        Route::resource('KelurahanTambakSarioso',KelurahanTambakSariosoController::class);
    });

    //Routing Cek Login Kecamatan Benowo Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:157']],function(){
        Route::resource('KelurahanKandangan',KelurahanKandanganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:158']],function(){
        Route::resource('KelurahanRomokalisari',KelurahanRomokalisariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:159']],function(){
        Route::resource('KelurahanSememi',KelurahanSememiController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:160']],function(){
        Route::resource('KelurahanTambakOsoWilangun',KelurahanTambakOsoWilangunController::class);
    });

    //Routing Cek Login Kecamatan Benowo Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:161']],function(){
        Route::resource('KelurahanBangkingan',KelurahanBangkinganController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:162']],function(){
        Route::resource('KelurahanJeruk',KelurahanJerukController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:163']],function(){
        Route::resource('KelurahanLakarsantri',KelurahanLakarsantriController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:164']],function(){
        Route::resource('KelurahanLidahKulon',KelurahanLidahKulonController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:165']],function(){
        Route::resource('KelurahanLidahWetan',KelurahanLidahWetanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:166']],function(){
        Route::resource('KelurahanSumurwelut',KelurahanSumurwelutController::class);
    });

    //Routing Cek Login Kecamatan Benowo Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:167']],function(){
        Route::resource('KelurahanBabatJerawat',KelurahanBabatJerawatController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:168']],function(){
        Route::resource('KelurahanBenowo',KelurahanBenowoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:169']],function(){
        Route::resource('KelurahanPakal',KelurahanPakalController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:170']],function(){
        Route::resource('KelurahanSumberRejo',KelurahanSumberRejoController::class);
    });

    //Routing Cek Login Kecamatan Benowo Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:171']],function(){
        Route::resource('KelurahanBeringin',KelurahanBeringinController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:172']],function(){
        Route::resource('KelurahanLontar',KelurahanLontarController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:173']],function(){
        Route::resource('KelurahanMade',KelurahanMadeController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:174']],function(){
        Route::resource('KelurahanSambikerep',KelurahanSambikerepController::class);
    });

    //Routing Cek Login Kecamatan Sukomanunggal Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:175']],function(){
        Route::resource('KelurahanPutatGede',KelurahanPutatGedeController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:176']],function(){
        Route::resource('KelurahanSimomulyo',KelurahanSimomulyoController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:177']],function(){
        Route::resource('KelurahanSimomulyoBaru',KelurahanSimomulyoBaruController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:178']],function(){
        Route::resource('KelurahanSonokwijenan',KelurahanSonokwijenanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:179']],function(){
        Route::resource('KelurahanSukomanunggal',KelurahanSukomanunggalController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:180']],function(){
        Route::resource('KelurahanTanjungsari',KelurahanTanjungsariController::class);
    });

    //Routing Cek Login Kecamatan Sukomanunggal Untuk Kelurahan ini
    Route::group(['middleware'=>['cekUserLogin:181']],function(){
        Route::resource('KelurahanBalongsari',KelurahanBalongsariController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:182']],function(){
        Route::resource('KelurahanBanjarSugihan',KelurahanBanjarSugihanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:183']],function(){
        Route::resource('KelurahanKarangPoh',KelurahanKarangPohController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:184']],function(){
        Route::resource('KelurahanManukanKulon',KelurahanManukanKulonController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:185']],function(){
        Route::resource('KelurahanManukanWetan',KelurahanManukanWetanController::class);
    });
    Route::group(['middleware'=>['cekUserLogin:186']],function(){
        Route::resource('KelurahanTandes',KelurahanTandesController::class);
    });

});
Route::resource('form',formController::class);
Route::resource('formBawaslu',formBawasluController::class);
