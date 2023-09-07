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
Route::get('portofolio', function () {
    return view('komponen.porto');
});
Route::get('/', function () {
    return view('login.index');
});
//PDF ROUTE
Route::get('/generate-pdf',[pdfController::class,'generatePdf']);

//Route::resource('admin',adminController::class);
Route::resource('Users',SuperAdminController::class);
//Routing Search Bar
Route::get('SuperAdmin/search', [SuperAdminController::class, 'search'])->name('superadmin.search');

Route::resource('kota',KotaController::class);
Route::resource('kecamatan',KecamatanController::class);
Route::resource('kelurahan',KelurahanController::class);

//Kota Surabaya Routing
Route::resource('KotaSurabaya',KotaSurabayaController::class);
//Routing PDF
Route::get('KotaSurabaya/pdf/{id}', [KotaSurabayaController::class,'pdf'])->name('kotasurabaya.pdf');
//Routing Search Bar
Route::get('searchSBY', [KotaSurabayaController::class, 'searchSBY'])->name('kotasurabaya.search');

//Kecamatan Surabaya Routing
Route::resource('KecamatanDukuhPakis',KecamatanDukuhPakisController::class);
//Routing PDF
Route::get('KecamatanDukuhPakis/pdf/{id}', [KecamatanDukuhPakisController::class,'pdf'])->name('KecamatanDukuhPakis.pdf');
//Routing Search Bar
Route::get('searchDukuhPakis', [KecamatanDukuhPakisController::class, 'searchDukuhPakis'])->name('KecamatanDukuhPakis.search');

Route::resource('KecamatanGayungan',KecamatanGayunganController::class);
//Routing PDF
Route::get('KecamatanGayungan/pdf/{id}', [KecamatanGayunganController::class,'pdf'])->name('KecamatanGayungan.pdf');
//Routing Search Bar
Route::get('searchGayungan', [KecamatanGayunganController::class, 'searchGayungan'])->name('KecamatanGayungan.search');

Route::resource('KecamatanJambangan',KecamatanJambanganController::class);
//Routing PDF
Route::get('KecamatanJambangan/pdf/{id}', [KecamatanJambanganController::class,'pdf'])->name('KecamatanJambangan.pdf');
//Routing Search Bar
Route::get('searchJambangan', [KecamatanJambanganController::class, 'searchJambangan'])->name('KecamatanJambangan.search');

Route::resource('KecamatanKarangPilang',KecamatanKarangPilangController::class);
//Routing PDF
Route::get('KecamatanKarangPilang/pdf/{id}', [KecamatanKarangPilangController::class,'pdf'])->name('KecamatanKarangPilang.pdf');
//Routing Search Bar
Route::get('searchKarangPilang', [KecamatanKarangPilangController::class, 'searchKarangPilang'])->name('KecamatanKarangPilang.search');

Route::resource('KecamatanSawahan',KecamatanSawahanController::class);
//Routing PDF
Route::get('KecamatanSawahan/pdf/{id}', [KecamatanSawahanController::class,'pdf'])->name('KecamatanSawahan.pdf');
//Routing Search Bar
Route::get('searchSawahan', [KecamatanSawahanController::class, 'searchSawahan'])->name('KecamatanSawahan.search');

Route::resource('KecamatanWiyung',KecamatanWiyungController::class);
//Routing PDF
Route::get('KecamatanWiyung/pdf/{id}', [KecamatanWiyungController::class,'pdf'])->name('KecamatanWiyung.pdf');
//Routing Search Bar
Route::get('searchWiyung', [KecamatanWiyungController::class, 'searchWiyung'])->name('KecamatanWiyung.search');

Route::resource('KecamatanWonocolo',KecamatanWonocoloController::class);
//Routing PDF
Route::get('KecamatanWonocolo/pdf/{id}', [KecamatanWonocoloController::class,'pdf'])->name('KecamatanWonocolo.pdf');
//Routing Search Bar
Route::get('searchWonocolo', [KecamatanWonocoloController::class, 'searchWonocolo'])->name('KecamatanWonocolo.search');

Route::resource('KecamatanWonokromo',KecamatanWonokromoController::class);
//Routing PDF
Route::get('KecamatanWonokromo/pdf/{id}', [KecamatanWonokromoController::class,'pdf'])->name('KecamatanWonokromo.pdf');
//Routing Search Bar
Route::get('searchWonokromo', [KecamatanWonokromoController::class, 'searchWonokromo'])->name('KecamatanWonokromo.search');

Route::resource('KecamatanGubeng',KecamatanGubengController::class);
//Routing PDF
Route::get('KecamatanGubeng/pdf/{id}', [KecamatanGubengController::class,'pdf'])->name('KecamatanGubeng.pdf');
//Routing Search Bar
Route::get('searchGubeng', [KecamatanGubengController::class, 'searchGubeng'])->name('KecamatanGubeng.search');

Route::resource('KecamatanGunungAnyar',KecamatanGunungAnyarController::class);
//Routing PDF
Route::get('KecamatanGunungAnyar/pdf/{id}', [KecamatanGunungAnyarController::class,'pdf'])->name('KecamatanGunungAnyar.pdf');
//Routing Search Bar
Route::get('searchGunungAnyar', [KecamatanGunungAnyarController::class, 'searchGunungAnyar'])->name('KecamatanGunungAnyar.search');

Route::resource('KecamatanMulyorejo',KecamatanMulyorejoController::class);
//Routing PDF
Route::get('KecamatanMulyorejo/pdf/{id}', [KecamatanMulyorejoController::class,'pdf'])->name('KecamatanMulyorejo.pdf');
//Routing Search Bar
Route::get('searchMulyorejo', [KecamatanMulyorejoController::class, 'searchMulyorejo'])->name('KecamatanMulyorejo.search');

Route::resource('KecamatanRungkut',KecamatanRungkutController::class);
//Routing PDF
Route::get('KecamatanRungkut/pdf/{id}', [KecamatanRungkutController::class,'pdf'])->name('KecamatanRungkut.pdf');
//Routing Search Bar
Route::get('searchRungkut', [KecamatanRungkutController::class, 'searchRungkut'])->name('KecamatanRungkut.search');

Route::resource('KecamatanSukolilo',KecamatanSukoliloController::class);
//Routing PDF
Route::get('KecamatanSukolilo/pdf/{id}', [KecamatanSukoliloController::class,'pdf'])->name('KecamatanSukolilo.pdf');
//Routing Search Bar
Route::get('searchSukolilo', [KecamatanSukoliloController::class, 'searchSukolilo'])->name('KecamatanSukolilo.search');

Route::resource('KecamatanTambaksari',KecamatanTambaksariController::class);
//Routing PDF
Route::get('KecamatanTambaksari/pdf/{id}', [KecamatanTambaksariController::class,'pdf'])->name('KecamatanTambaksari.pdf');
//Routing Search Bar
Route::get('searchTambakSari', [KecamatanTambaksariController::class, 'searchTambakSari'])->name('KecamatanTambaksari.search');

Route::resource('KecamatanTengggilisMejoyo',KecamatanTenggilisMejoyoController::class);
//Routing PDF
Route::get('KecamatanTengggilisMejoyo/pdf/{id}', [KecamatanTenggilisMejoyoController::class,'pdf'])->name('KecamatanTenggilisMejoyo.pdf');
//Routing Search Bar
Route::get('searchTenggilisMejoyo', [KecamatanTenggilisMejoyoController::class, 'searchTenggilisMejoyo'])->name('KecamatanTenggilisMejoyo.search');

Route::resource('KecamatanBubutan',KecamatanBubutanController::class);
//Routing PDF
Route::get('KecamatanBubutan/pdf/{id}', [KecamatanBubutanController::class,'pdf'])->name('KecamatanBubutan.pdf');
//Routing Search Bar
Route::get('searchBubutan', [KecamatanBubutanController::class, 'searchBubutan'])->name('KecamatanBubutan.search');

Route::resource('KecamatanGenteng',KecamatanGentengController::class);
//Routing PDF
Route::get('KecamatanGenteng/pdf/{id}', [KecamatanGentengController::class,'pdf'])->name('KecamatanGenteng.pdf');
//Routing Search Bar
Route::get('searchGenteng', [KecamatanGentengController::class, 'searchGenteng'])->name('KecamatanGenteng.search');

Route::resource('KecamatanSimokerto',KecamatanSimokertoController::class);
//Routing PDF
Route::get('KKecamatanSimokerto/pdf/{id}', [KecamatanSimokertoController::class,'pdf'])->name('KecamatanSimokerto.pdf');
//Routing Search Bar
Route::get('searchSimokerto', [KecamatanSimokertoController::class, 'searchSimokerto'])->name('KecamatanSimokerto.search');

Route::resource('KecamatanTegalsari',KecamatanTegalsariController::class);
//Routing PDF
Route::get('KecamatanTegalsari/pdf/{id}', [KecamatanTegalsariController::class,'pdf'])->name('KecamatanTegalsari.pdf');
//Routing Search Bar
Route::get('searchTegalsari', [KecamatanTegalsariController::class, 'searchTegalsari'])->name('KecamatanTegalsari.search');

Route::resource('KecamatanBulak',KecamatanBulakController::class);
//Routing PDF
Route::get('KecamatanBulak/pdf/{id}', [KecamatanBulakController::class,'pdf'])->name('KecamatanBulak.pdf');
//Routing Search Bar
Route::get('searchBulak', [KecamatanBulakController::class, 'searchBulak'])->name('KecamatanBulak.search');

Route::resource('KecamatanKenjeran',KecamatanKenjeranController::class);
//Routing PDF
Route::get('KecamatanKenjeran/pdf/{id}', [KecamatanKenjeranController::class,'pdf'])->name('KecamatanKenjeran.pdf');
//Routing Search Bar
Route::get('searchKenjeran', [KecamatanKenjeranController::class, 'searchKenjeran'])->name('KecamatanKenjeran.search');

Route::resource('KecamatanKrembangan',KecamatanKrembanganController::class);
//Routing PDF
Route::get('KecamatanKrembangan/pdf/{id}', [KecamatanKrembanganController::class,'pdf'])->name('KecamatanKrembangan.pdf');
//Routing Search Bar
Route::get('searchKrembangan', [KecamatanKrembanganController::class, 'searchKrembangan'])->name('KecamatanKrembangan.search');

Route::resource('KecamatanPabeanCantian',KecamatanPabeanCantianController::class);
//Routing PDF
Route::get('KecamatanPabeanCantian/pdf/{id}', [KecamatanPabeanCantianController::class,'pdf'])->name('KecamatanPabeanCantian.pdf');
//Routing Search Bar
Route::get('searchPabeanCantian', [KecamatanPabeanCantianController::class, 'searchPabeanCantian'])->name('KecamatanPabeanCantian.search');

Route::resource('KecamatanSemampir',KecamatanSemampirController::class);
//Routing PDF
Route::get('KecamatanSemampir/pdf/{id}', [KecamatanSemampirController::class,'pdf'])->name('KecamatanSemampir.pdf');
//Routing Search Bar
Route::get('searchSemampir', [KecamatanSemampirController::class, 'searchSemampir'])->name('KecamatanSemampir.search');

Route::resource('KecamatanAsemRowo',KecamatanAsemRowoController::class);
//Routing PDF
Route::get('KecamatanAsemRowo/pdf/{id}', [KecamatanAsemRowoController::class,'pdf'])->name('KecamatanAsemRowo.pdf');
//Routing Search Bar
Route::get('searchAsemRowo', [KecamatanAsemRowoController::class, 'searchAsemRowo'])->name('KecamatanAsemRowo.search');

Route::resource('KecamatanBenowo',KecamatanBenowoController::class);
//Routing PDF
Route::get('KecamatanBenowo/pdf/{id}', [KecamatanBenowoController::class,'pdf'])->name('KecamatanBenowo.pdf');
//Routing Search Bar
Route::get('searchBenowo', [KecamatanBenowoController::class, 'searchBenowo'])->name('KecamatanBenowo.search');

Route::resource('KecamatanLakarsantri',KecamatanLakarsantriController::class);
//Routing PDF
Route::get('KecamatanLakarsantri/pdf/{id}', [KecamatanLakarsantriController::class,'pdf'])->name('KecamatanLakarsantri.pdf');
//Routing Search Bar
Route::get('searchLakarsantri', [KecamatanLakarsantriController::class, 'searchLakarsantri'])->name('KecamatanLakarsantri.search');

Route::resource('KecamatanPakal',KecamatanPakalController::class);
//Routing PDF
Route::get('KecamatanPakal/pdf/{id}', [KecamatanPakalController::class,'pdf'])->name('KecamatanPakal.pdf');
//Routing Search Bar
Route::get('searchPakal', [KecamatanPakalController::class, 'searchPakal'])->name('KecamatanPakal.search');

Route::resource('KecamatanSambikerep',KecamatanSambikerepController::class);
//Routing PDF
Route::get('KecamatanSambikerep/pdf/{id}', [KecamatanSambikerepController::class,'pdf'])->name('KecamatanSambikerep.pdf');
//Routing Search Bar
Route::get('searchSambikerep', [KecamatanSambikerepController::class, 'searchSambikerep'])->name('KecamatanSambikerep.search');

Route::resource('KecamatanSukomanunggal',KecamatanSukomanunggalController::class);
//Routing PDF
Route::get('KecamatanSukomanunggal/pdf/{id}', [KecamatanSukomanunggalController::class,'pdf'])->name('KecamatanSukomanunggal.pdf');
//Routing Search Bar
Route::get('searchSukomanunggal', [KecamatanSukomanunggalController::class, 'searchSukomanunggal'])->name('KecamatanSukomanunggal.search');

Route::resource('KecamatanTandes',KecamatanTandesController::class);
//Routing PDF
Route::get('KecamatanTandes/pdf/{id}', [KecamatanTandesController::class,'pdf'])->name('KecamatanTandes.pdf');
//Routing Search Bar
Route::get('searchTandes', [KecamatanTandesController::class, 'searchTandes'])->name('KecamatanTandes.search');


//Kelurahan Surabaya Routing
//Routingn Login Kecamatan 1 Dukuh Pakis Untuk Kelurahan ini
Route::resource('KelurahanDukuhKupang',KelurahanDukuhKupangController::class);
//Routing PDF
Route::get('KelurahanDukuhKupang/pdf/{id}', [KelurahanDukuhKupangController::class,'pdf'])->name('KelurahanDukuhKupang.pdf');
//Routing Search Bar
Route::get('searchKelDukuhKupang', [KelurahanDukuhKupangController::class, 'searchKelDukuhKupang'])->name('KelurahanDukuhKupang.search');

Route::resource('KelurahanDukuhPakis',KelurahanDukuhPakisController::class);
//Routing PDF
Route::get('KelurahanDukuhPakis/pdf/{id}', [KelurahanDukuhPakisController::class,'pdf'])->name('KelurahanDukuhPakis.pdf');
//Routing Search Bar
Route::get('searchKelDukuhPakis', [KelurahanDukuhPakisController::class, 'searchKelDukuhPakis'])->name('KelurahanDukuhPakis.search');

Route::resource('KelurahanGunungSari',KelurahanGunungSariController::class);
//Routing PDF
Route::get('KelurahanGunungSari/pdf/{id}', [KelurahanGunungSariController::class,'pdf'])->name('KelurahanGunungSari.pdf');
//Routing Search Bar
Route::get('searchKelGunungSari', [KelurahanGunungSariController::class, 'searchKelGunungSari'])->name('KelurahanGunungSari.search');

Route::resource('KelurahanPradahKalikendal',KelurahanPradahKalikendalController::class);
//Routing PDF
Route::get('KelurahanPradahKalikendal/pdf/{id}', [KelurahanPradahKalikendalController::class,'pdf'])->name('KelurahanPradahKalikendal.pdf');
//Routing Search Bar
Route::get('searchKelPradahKaliKendal', [KelurahanPradahKalikendalController::class, 'searchKelPradahKaliKendal'])->name('KelurahanPradahKalikendal.search');


//Routingn Login Kecamatan 2 Gayungan Untuk Kelurahan ini
Route::resource('KelurahanDukuhMenanggal',KelurahanDukuhMenanggalController::class);
//Routing PDF
Route::get('KelurahanDukuhMenanggal/pdf/{id}', [KelurahanDukuhMenanggalController::class,'pdf'])->name('KelurahanDukuhMenanggal.pdf');
//Routing Search Bar
Route::get('searchKelDukuhMenanggal', [KelurahanDukuhMenanggalController::class, 'searchKelDukuhMenanggal'])->name('KelurahanDukuhMenanggal.search');

Route::resource('KelurahanGayungan',KelurahanGayunganController::class);
//Routing PDF
Route::get('KelurahanGayungan/pdf/{id}', [KelurahanGayunganController::class,'pdf'])->name('KelurahanGayungan.pdf');
//Routing Search Bar
Route::get('searchKelGayungan', [KelurahanGayunganController::class, 'searchKelGayungan'])->name('KelurahanGayungan.search');

Route::resource('KelurahanKetintang',KelurahanKetintangController::class);
//Routing PDF
Route::get('KelurahanKetintang/pdf/{id}', [KelurahanKetintangController::class,'pdf'])->name('KelurahanKetintang.pdf');
//Routing Search Bar
Route::get('searchKelKetintang', [KelurahanKetintangController::class, 'searchKelKetintang'])->name('KelurahanKetintang.search');

Route::resource('KelurahanMenanggal',KelurahanMenanggalController::class);
//Routing PDF
Route::get('KelurahanMenanggal/pdf/{id}', [KelurahanMenanggalController::class,'pdf'])->name('KelurahanMenanggal.pdf');
//Routing Search Bar
Route::get('searchKelMenanggal', [KelurahanMenanggalController::class, 'searchKelMenanggal'])->name('KelurahanMenanggal.search');

//Routingn Login Kecamatan 3 Untuk Kelurahan ini
Route::resource('KelurahanJambangan',KelurahanJambanganController::class);
//Routing PDF
Route::get('KelurahanJambangan/pdf/{id}', [KelurahanJambanganController::class,'pdf'])->name('KelurahanJambangan.pdf');
//Routing Search Bar
Route::get('searchKelJambangan', [KelurahanJambanganController::class, 'searchKelJambangan'])->name('KelurahanJambangan.search');

Route::resource('KelurahanKarah',KelurahanKarahController::class);
//Routing PDF
Route::get('KelurahanKarah/pdf/{id}', [KelurahanKarahController::class,'pdf'])->name('KelurahanKarah.pdf');
//Routing Search Bar
Route::get('searchKelKarah', [KelurahanKarahController::class, 'searchKalKarah'])->name('KelurahanKarah.search');

Route::resource('KelurahanKebonsari',KelurahanKebonsariController::class);
//Routing PDF
Route::get('KelurahanKebonsari/pdf/{id}', [KelurahanKebonsariController::class,'pdf'])->name('KelurahanKebonsari.pdf');
//Routing Search Bar
Route::get('searchKelKebonsari', [KelurahanKebonsariController::class, 'searchKelKebonsari'])->name('KelurahanKebonsari.search');

Route::resource('KelurahanPagesangan',KelurahanPagesanganController::class);
//Routing PDF
Route::get('KelurahanPagesangan/pdf/{id}', [KelurahanPagesanganController::class,'pdf'])->name('KelurahanPagesangan.pdf');
//Routing Search Bar
Route::get('searchKelPagesangan', [KelurahanPagesanganController::class, 'searchKelPagesangan'])->name('KelurahanPagesangan.search');

//Routingn Login Kecamatan 4 Untuk Kelurahan ini
Route::resource('KelurahanKarangPilang',KelurahanKarangPilangController::class);
//Routing PDF
Route::get('KelurahanKarangPilang/pdf/{id}', [KelurahanKarangPilangController::class,'pdf'])->name('KelurahanKarangPilang.pdf');
//Routing Search Bar
Route::get('searchKelKarangPilang', [KelurahanKarangPilangController::class, 'searchKelKarangPilang'])->name('KelurahanKarangPilang.search');

Route::resource('KelurahanKebraon',KelurahanKebraonController::class);
//Routing PDF
Route::get('KelurahanKebraon/pdf/{id}', [KelurahanKebraonController::class,'pdf'])->name('KelurahanKebraon.pdf');
//Routing Search Bar
Route::get('searchKelKebraon', [KelurahanKebraonController::class, 'searchKelKebraon'])->name('KelurahanKebraon.search');

Route::resource('KelurahanKedurus',KelurahanKedurusController::class);
//Routing PDF
Route::get('KelurahanKedurus/pdf/{id}', [KelurahanKedurusController::class,'pdf'])->name('KelurahanKedurus.pdf');
//Routing Search Bar
Route::get('searchKelKedurus', [KelurahanKedurusController::class, 'searchKelKedurus'])->name('KelurahanKedurus.search');

Route::resource('KelurahanWaruGunung',KelurahanWaruGunung::class);
//Routing PDF
Route::get('KelurahanWaruGunung/pdf/{id}', [KelurahanWaruGunungController::class,'pdf'])->name('KelurahanWaruGunung.pdf');
//Routing Search Bar
Route::get('searchKelWaruGunung', [KelurahanWaruGunungController::class, 'searchKelWaruGunung'])->name('KelurahanWaruGunung.search');

//Routingn Login Kecamatan 5 Untuk Kelurahan ini
Route::resource('KelurahanBanyuUrip',KelurahanBanyuUripController::class);
//Routing PDF
Route::get('KelurahanBanyuUrip/pdf/{id}', [KelurahanBanyuUripController::class,'pdf'])->name('KelurahanBanyuUrip.pdf');
//Routing Search Bar
Route::get('searchKelBanyuUrip', [KelurahanBanyuUripController::class, 'searchKelBanyuUrip'])->name('KelurahanBanyuUrip.search');

Route::resource('KelurahanPakis',KelurahanPakisControllerr::class);
//Routing PDF
Route::get('KelurahanPakis/pdf/{id}', [KelurahanPakisController::class,'pdf'])->name('KelurahanPakis.pdf');
//Routing Search Bar
Route::get('searchKelPakis', [KelurahanPakisController::class, 'searchKelPakis'])->name('KelurahanPakis.search');

Route::resource('KelurahanKupangKrajan',KelurahanKupangKrajanController::class);
//Routing PDF
Route::get('KelurahanKupangKrajan/pdf/{id}', [KelurahanKupangKrajanController::class,'pdf'])->name('KelurahanKupangKrajan.pdf');
//Routing Search Bar
Route::get('searchKelKupangKrajan', [KelurahanKupangKrajanController::class, 'searchKelKupangKrajan'])->name('KelurahanKupangKrajan.search');

Route::resource('KelurahanPutatJaya',KelurahanPutatJayaController::class);
//Routing PDF
Route::get('KelurahanPutatJaya/pdf/{id}', [KelurahanPutatJayaController::class,'pdf'])->name('KelurahanPutatJaya.pdf');
//Routing Search Bar
Route::get('searchKelPutatJaya', [KelurahanPutatJayaController::class, 'searchKelPutatJaya'])->name('KelurahanPutatJaya.search');

Route::resource('KelurahanKupangSawahan',KelurahanSawahanController::class);
//Routing PDF
Route::get('KelurahanSawahan/pdf/{id}', [KelurahanSawahanController::class,'pdf'])->name('KelurahanSawahan.pdf');
//Routing Search Bar
Route::get('searchKelSawahan', [KelurahanSawahanController::class, 'searchKelSawahan'])->name('KelurahanSawahan.search');

Route::resource('KelurahanPetemon',KelurahanPetemonController::class);
//Routing PDF
Route::get('KelurahanPetemon/pdf/{id}', [KelurahanPetemonController::class,'pdf'])->name('KelurahanPetemon.pdf');
//Routing Search Bar
Route::get('searchKelPetemon', [KelurahanPetemonController::class, 'searchKelPetemon'])->name('KelurahanPetemon.search');

//Routingn Login Kecamatan 6 Untuk Kelurahan ini
Route::resource('KelurahanBabatan',KelurahanBabatanController::class);
//Routing PDF
Route::get('KelurahanBabatan/pdf/{id}', [KelurahanBabatanController::class,'pdf'])->name('KelurahanBabatan.pdf');
//Routing Search Bar
Route::get('searchKelBabatan', [KelurahanBabatanController::class, 'searchKelBabatan'])->name('KelurahanBabatan.search');

Route::resource('KelurahanBalasKlumprik',KelurahanBalasKlumprikController::class);
//Routing PDF
Route::get('KelurahanBalasKlumprik/pdf/{id}', [KelurahanBalasKlumprikController::class,'pdf'])->name('KelurahanBalasKlumprik.pdf');
//Routing Search Bar
Route::get('searchKelBalasKlumprik', [KelurahanBalasKlumprikController::class, 'searchKelBalasKlumprik '])->name('KelurahanBalasKlumprik.search');

Route::resource('KelurahanJajarTunggal',KelurahanJajarTunggalController::class);
//Routing PDF
Route::get('KelurahanJajarTunggal/pdf/{id}', [KelurahanJajarTunggalController::class,'pdf'])->name('KelurahanJajarTunggal.pdf');
//Routing Search Bar
Route::get('searchKelJajarTunggal', [KelurahanJajarTunggalController::class, 'searchKelJajarTunggal'])->name('KelurahanJajarTunggal.search');

Route::resource('KelurahanWiyung',KelurahanWiyungController::class);
//Routing PDF
Route::get('KelurahanWiyung/pdf/{id}', [KelurahanWiyungController::class,'pdf'])->name('KelurahanWiyung.pdf');
//Routing Search Bar
Route::get('searchKelWiyung', [KelurahanWiyungController::class, 'searchKelWiyung'])->name('KelurahanWiyung.search');

//Routingn Login Kecamatan 7 Untuk Kelurahan ini
Route::resource('KelurahanBendulMerisi',KelurahanBendulMerisiController::class);
//Routing PDF
Route::get('KelurahanBendulMerisi/pdf/{id}', [KelurahanBendulMerisiController::class,'pdf'])->name('KelurahanBendulMerisi.pdf');
//Routing Search Bar
Route::get('searchKelBendulMerisi', [KelurahanBendulMerisiController::class, 'searchKelBendulMerisi'])->name('KelurahanBendulMerisi.search');

Route::resource('KelurahanJemurWonosari',KelurahanJemurWonosariController::class);
//Routing PDF
Route::get('KelurahanJemurWonosari/pdf/{id}', [KelurahanJemurWonosariController::class,'pdf'])->name('KelurahanJemurWonosari.pdf');
//Routing Search Bar
Route::get('searchKelJemurWonosari', [KelurahanJemurWonosariController::class, 'searchKelJemurWonosari'])->name('KelurahanJemurWonosari.search');

Route::resource('KelurahanMargorejo',KelurahanMargorejoController::class);
//Routing PDF
Route::get('KelurahanMargorejo/pdf/{id}', [KelurahanMargorejoController::class,'pdf'])->name('KelurahanMargorejo.pdf');
//Routing Search Bar
Route::get('searchKelMargorejo', [KelurahanMargorejoController::class, 'searchKelMargorejo'])->name('KelurahanMargorejo.search');

Route::resource('KelurahanSidosermo',KelurahanSidosermoController::class);
//Routing PDF
Route::get('KelurahanSidosermo/pdf/{id}', [KelurahanSidosermoController::class,'pdf'])->name('KelurahanSidosermo.pdf');
//Routing Search Bar
Route::get('searchKelSidosermo', [KelurahanSidosermoController::class, 'searchKelSidosermo'])->name('KelurahanSidosermo.search');

Route::resource('KelurahanSiwalankerto',KelurahanSiwalankertoController::class);
//Routing PDF
Route::get('KelurahanSiwalankerto/pdf/{id}', [KelurahanSiwalankertoController::class,'pdf'])->name('KelurahanSiwalankerto.pdf');
//Routing Search Bar
Route::get('searchKelSiwalankerto', [KelurahanSiwalankertoController::class, 'searchKelSiwalankerto'])->name('KelurahanSiwalankerto.search');

//Routingn Login Kecamatan 8 Untuk Kelurahan ini
Route::resource('KelurahanDarmo',KelurahanDarmoController::class);
//Routing PDF
Route::get('KelurahanDarmo/pdf/{id}', [KelurahanDarmoController::class,'pdf'])->name('KelurahanDarmo.pdf');
//Routing Search Bar
Route::get('searchKelDarmo', [KKelurahanDarmoController::class, 'searchKelDarmo'])->name('KelurahanDarmo.search');

Route::resource('KelurahanJagir',KelurahanJagirController::class);
//Routing PDF
Route::get('KelurahanJagir/pdf/{id}', [KelurahanJagirController::class,'pdf'])->name('KelurahanJagir.pdf');
//Routing Search Bar
Route::get('searchKelJagir', [KelurahanJagirController::class, 'searchKelJagir'])->name('KelurahanJagir.search');

Route::resource('KelurahanNgagel',KelurahanNgagelController::class);
//Routing PDF
Route::get('KelurahanNgagel/pdf/{id}', [KelurahanNgagelController::class,'pdf'])->name('KelurahanNgagel.pdf');
//Routing Search Bar
Route::get('searchKelNgagel', [KelurahanNgagelController::class, 'searchKelNgagel'])->name('KelurahanNgagel.search');

Route::resource('KelurahanNgagelRejo',KelurahanNgagelRejoController::class);
//Routing PDF
Route::get('KelurahanNgagelRejo/pdf/{id}', [KelurahanNgagelRejoController::class,'pdf'])->name('KelurahanNgagelRejo.pdf');
//Routing Search Bar
Route::get('searchKelNgagelRejo', [KelurahanNgagelRejoController::class, 'searchKelNgagelRejo'])->name('KelurahanNgagelRejo.search');

Route::resource('KelurahanSawunggaling',KelurahanSawunggalingController::class);
//Routing PDF
Route::get('KelurahanSawunggaling/pdf/{id}', [KelurahanSawunggalingController::class,'pdf'])->name('KelurahanSawunggaling.pdf');
//Routing Search Bar
Route::get('searchKelSawunggaling', [KelurahanSawunggalingController::class, 'searchKelSawunggaling'])->name('KelurahanSawunggaling.search');

Route::resource('KelurahanWonokromo',KelurahanWonokromoController::class);
//Routing PDF
Route::get('KelurahanWonokromo/pdf/{id}', [KelurahanWonokromoController::class,'pdf'])->name('KelurahanWonokromo.pdf');
//Routing Search Bar
Route::get('searchKelWonokromo', [KelurahanWonokromoController::class, 'searchKelWonokromo'])->name('KelurahanWonokromo.search');

//Routingn Login Kecamatan 9 Untuk Kelurahan ini
Route::resource('KelurahanAirlangga',KelurahanAirlanggaController::class);
//Routing PDF
Route::get('KelurahanAirlangga/pdf/{id}', [KelurahanAirlanggaController::class,'pdf'])->name('KelurahanAirlangga.pdf');
//Routing Search Bar
Route::get('searchKelAirlangga', [KelurahanAirlanggaController::class, 'searchKelAirlangga'])->name('KelurahanAirlangga.search');

Route::resource('KelurahanBaratajaya',KelurahanBaratajayaController::class);
//Routing PDF
Route::get('KelurahanBaratajaya/pdf/{id}', [KelurahanBaratajayaController::class,'pdf'])->name('KelurahanBaratajaya.pdf');
//Routing Search Bar
Route::get('searchKelBaratajaya', [KelurahanBaratajayaController::class, 'searchKelBaratajaya'])->name('KelurahanBaratajaya.search');

Route::resource('KelurahanGubeng',KelurahanGubengController::class);
//Routing PDF
Route::get('KelurahanGubeng/pdf/{id}', [KelurahanGubengController::class,'pdf'])->name('KelurahanGubeng.pdf');
//Routing Search Bar
Route::get('searchKelGubeng', [KelurahanGubengController::class, 'searchKelGubeng'])->name('KelurahanGubeng.search');

Route::resource('KelurahanKertajaya',KelurahanKertajayaController::class);
//Routing PDF
Route::get('KelurahanKertajaya/pdf/{id}', [KelurahanKertajayaController::class,'pdf'])->name('KelurahanKertajaya.pdf');
//Routing Search Bar
Route::get('searchKelKertajaya', [KelurahanKertajayaController::class, 'searchKelKertajaya'])->name('KelurahanKertajaya.search');

Route::resource('KelurahanMojo',KelurahanMojoController::class);
//Routing PDF
Route::get('KelurahanMojo/pdf/{id}', [KelurahanMojoController::class,'pdf'])->name('KelurahanMojo.pdf');
//Routing Search Bar
Route::get('searchKelMojo', [KelurahanMojoController::class, 'searchKelMojo'])->name('KelurahanMojo.search');

Route::resource('KelurahanPucangSewu',KelurahanPucangSewuController::class);
//Routing PDF
Route::get('KelurahanPucangSewu/pdf/{id}', [KelurahanPucangSewuController::class,'pdf'])->name('KelurahanPucangSewu.pdf');
//Routing Search Bar
Route::get('searchKelPucangSewu', [KelurahanPucangSewuController::class, 'searchKelPucangSewu'])->name('KelurahanPucangSewu.search');

//Routingn Login Kecamatan 10 Untuk Kelurahan ini
Route::resource('KelurahanGunungAnyar',KelurahanGunungAnyarController::class);
//Routing PDF
Route::get('KelurahanGunungAnyar/pdf/{id}', [KelurahanGunungAnyarController::class,'pdf'])->name('KelurahanGunungAnyar.pdf');
//Routing Search Bar
Route::get('searchKelGunungAnyar', [KelurahanGunungAnyarController::class, 'searchKelGunungAnyar'])->name('KelurahanGunungAnyar.search');

Route::resource('KelurahanGunungAnyarTambak',KelurahanGunungAnyarTambakController::class);
//Routing PDF
Route::get('KelurahanGunungAnyarTambak/pdf/{id}', [KelurahanGunungAnyarTambakController::class,'pdf'])->name('KelurahanGunungAnyarTambak.pdf');
//Routing Search Bar
Route::get('searchKelGunungAnyarTambak', [KelurahanGunungAnyarTambakController::class, 'searchKelGunungAnyarTambak'])->name('KelurahanGunungAnyarTambak.search');

Route::resource('KelurahanRungkutMenanggal',KelurahanRungkutMenanggalController::class);
//Routing PDF
Route::get('KelurahanRungkutMenanggal/pdf/{id}', [KelurahanRungkutMenanggalController::class,'pdf'])->name('KelurahanRungkutMenanggal.pdf');
//Routing Search Bar
Route::get('searchKelRungkutMenanggal', [KelurahanRungkutMenanggalController::class, 'searchKelRungkutMenanggal'])->name('KelurahanRungkutMenanggal.search');

Route::resource('KelurahanRungkutTengah',KelurahanRungkutTengahController::class);
//Routing PDF
Route::get('KelurahanRungkutTengah/pdf/{id}', [KelurahanRungkutTengahController::class,'pdf'])->name('KelurahanRungkutTengah.pdf');
//Routing Search Bar
Route::get('searchKelRungkutTengah', [KelurahanRungkutTengahController::class, 'searchKelRungkutTengah'])->name('KelurahanRungkutTengah.search');


//Routingn Login Kecamatan 11 Untuk Kelurahan ini
Route::resource('KelurahanDukuhSutorejo',KelurahanDukuhSutorejoController::class);
//Routing PDF
Route::get('KelurahanDukuhSutorejo/pdf/{id}', [KelurahanDukuhSutorejoController::class,'pdf'])->name('KelurahanDukuhSutorejo.pdf');
//Routing Search Bar
Route::get('searchKelDukuhSutorejo', [KelurahanDukuhSutorejoController::class, 'searchKelDukuhSutorejo'])->name('KelurahanDukuhSutorejo.search');

Route::resource('KelurahanKalijudan',KelurahanKalijudanController::class);
//Routing PDF
Route::get('KelurahanKalijudan/pdf/{id}', [KelurahanKalijudanController::class,'pdf'])->name('KelurahanKalijudan.pdf');
//Routing Search Bar
Route::get('searchKelKalijudan', [KelurahanKalijudanController::class, 'searchKelKalijudan'])->name('KelurahanKalijudan.search');

Route::resource('KelurahanKalisari',KelurahanKalisariController::class);
//Routing PDF
Route::get('KelurahanKalisari/pdf/{id}', [KelurahanKalisariController::class,'pdf'])->name('KelurahanKalisari.pdf');
//Routing Search Bar
Route::get('searchKelKalisari', [KKelurahanKalisariController::class, 'searchKelKalisari'])->name('KelurahanKalisari.search');

Route::resource('KelurahanKejawanPutihTambak',KelurahanKejawanPutihTambakController::class);
//Routing PDF
Route::get('KelurahanKejawanPutihTambak/pdf/{id}', [KelurahanKejawanPutihTambakController::class,'pdf'])->name('KelurahanKejawanPutihTambak.pdf');
//Routing Search Bar
Route::get('searchKelKejawanPutihTambak', [KelurahanKejawanPutihTambakController::class, 'searchKelKejawanPutihTambak'])->name('KelurahanKejawanPutihTambak.search');

Route::resource('KelurahanManyarSabrangan',KelurahanManyarSabranganController::class);
//Routing PDF
Route::get('KelurahanManyarSabrangan/pdf/{id}', [KelurahanManyarSabranganController::class,'pdf'])->name('KelurahanManyarSabrangan.pdf');
//Routing Search Bar
Route::get('searchKelManyarSabrangan', [KelurahanManyarSabranganController::class, 'searchKelManyarSabrangan'])->name('KelurahanManyarSabrangan.search');

Route::resource('KelurahanMulyorejo',KelurahanMulyorejoController::class);
//Routing PDF
Route::get('KelurahanMulyorejo/pdf/{id}', [KelurahanMulyorejoController::class,'pdf'])->name('KelurahanMulyorejo.pdf');
//Routing Search Bar
Route::get('searchKelMulyorejo', [KelurahanMulyorejoController::class, 'searchKelMulyorejo'])->name('KelurahanMulyorejo.search');

//Routingn Login Kecamatan 12 Untuk Kelurahan ini
Route::resource('KelurahanKalirungkut',KelurahanKalirungkutController::class);
//Routing PDF
Route::get('KelurahanKalirungkut/pdf/{id}', [KelurahanKalirungkutController::class,'pdf'])->name('KelurahanKalirungkut.pdf');
//Routing Search Bar
Route::get('searchKelKalirungkut', [KelurahanKalirungkutController::class, 'searchKelKalirungkut'])->name('KelurahanKalirungkut.search');

Route::resource('KelurahanKedungBaruk',KelurahanKedungBarukController::class);
//Routing PDF
Route::get('KelurahanKedungBaruk/pdf/{id}', [KelurahanKedungBarukController::class,'pdf'])->name('KelurahanKedungBaruk.pdf');
//Routing Search Bar
Route::get('searchKelKedungBaruk', [KelurahanKedungBarukjoController::class, 'searchKelKedungBaruk'])->name('KelurahanKedungBaruk.search');

Route::resource('KelurahanMedokanAyu',KelurahanMedokanAyuController::class);
//Routing PDF
Route::get('KelurahanMedokanAyu/pdf/{id}', [KelurahanMedokanAyuController::class,'pdf'])->name('KelurahanMedokanAyu.pdf');
//Routing Search Bar
Route::get('searchKelMedokanAyu', [KelurahanMedokanAyuController::class, 'searchKelMedokanAyu'])->name('KelurahanMedokanAyu.search');

Route::resource('KelurahanPenjaringanSari',KelurahanPenjaringanSariController::class);
//Routing PDF
Route::get('KelurahanPenjaringanSari/pdf/{id}', [KelurahanPenjaringanSariController::class,'pdf'])->name('KelurahanPenjaringanSari.pdf');
//Routing Search Bar
Route::get('searchKelPenjaringanSari', [KelurahanPenjaringanSariController::class, 'searchKelPenjaringanSari'])->name('KelurahanPenjaringanSari.search');

Route::resource('KelurahanRungkutKidul',KelurahanRungkutKidulController::class);
//Routing PDF
Route::get('KelurahanRungkutKidul/pdf/{id}', [KelurahanRungkutKidulController::class,'pdf'])->name('KelurahanRungkutKidul.pdf');
//Routing Search Bar
Route::get('searchKelRungkutKidul', [KelurahanRungkutKidulController::class, 'searchKelRungkutKidul'])->name('KelurahanRungkutKidul.search');

Route::resource('KelurahanWonorejoRungkut',KelurahanWonorejoRungkutController::class);
//Routing PDF
Route::get('KelurahanWonorejoRungkut/pdf/{id}', [KelurahanWonorejoRungkutController::class,'pdf'])->name('KelurahanWonorejoRungkut.pdf');
//Routing Search Bar
Route::get('searchKelWonorejoRungkut', [KelurahanWonorejoRungkutController::class, 'searchKelWonorejoRungkut'])->name('KelurahanWonorejoRungkut.search');

//Routingn Login Kecamatan 13 Untuk Kelurahan ini
Route::resource('KelurahanGebangPutih',KelurahanGebangPutihController::class);
//Routing PDF
Route::get('KelurahanGebangPutih/pdf/{id}', [KelurahanGebangPutihController::class,'pdf'])->name('KelurahanGebangPutih.pdf');
//Routing Search Bar
Route::get('searchKelGebangPutih', [KelurahanGebangPutihController::class, 'searchKelGebangPutih'])->name('KelurahanGebangPutih.search');

Route::resource('KelurahanKeputih',KelurahanKeputihController::class);
//Routing PDF
Route::get('KelurahanKeputih/pdf/{id}', [KelurahanKeputihController::class,'pdf'])->name('KelurahanKeputih.pdf');
//Routing Search Bar
Route::get('searchKelKeputih', [KelurahanKeputihController::class, 'searchKelKeputih'])->name('KelurahanKeputih.search');

Route::resource('KelurahanKlampisNgasem',KelurahanKlampisNgasemController::class);
//Routing PDF
Route::get('KelurahanKlampisNgasem/pdf/{id}', [KelurahanKlampisNgasemController::class,'pdf'])->name('KelurahanKlampisNgasem.pdf');
//Routing Search Bar
Route::get('searchKelKlampisNgasem', [KelurahanKlampisNgasemController::class, 'searchKelKlampisNgasem'])->name('KelurahanKlampisNgasem.search');

Route::resource('KelurahanMedokanSemampir',KelurahanMedokanSemampirController::class);
//Routing PDF
Route::get('KelurahanMedokanSemampir/pdf/{id}', [KelurahanMedokanSemampirController::class,'pdf'])->name('KelurahanMedokanSemampir.pdf');
//Routing Search Bar
Route::get('searchKelMedokanSemampir', [KelurahanMedokanSemampirController::class, 'searchKelMedokanSemampir'])->name('KelurahanMedokanSemampir.search');

Route::resource('KelurahanMenurPumpungan',KelurahanMenurPumpunganController::class);
//Routing PDF
Route::get('KelurahanMenurPumpungan/pdf/{id}', [KelurahanMenurPumpunganController::class,'pdf'])->name('KelurahanMenurPumpungan.pdf');
//Routing Search Bar
Route::get('searchKelMenurPumpungan', [KelurahanMenurPumpunganController::class, 'sesearchKelMenurPumpunganarch'])->name('KelurahanMenurPumpungan.search');

Route::resource('KelurahanNgindenJangkungan',KelurahanNgindenJangkunganController::class);
//Routing PDF
Route::get('KelurahanNgindenJangkungan/pdf/{id}', [KelurahanNgindenJangkunganController::class,'pdf'])->name('KelurahanNgindenJangkungan.pdf');
//Routing Search Bar
Route::get('searchKelNgindenJangkungan', [KelurahanNgindenJangkunganController::class, 'searchKelNgindenJangkungan'])->name('KelurahanNgindenJangkungan.search');

Route::resource('KelurahanSemolowaru',KelurahanSemolowaruController::class);
//Routing PDF
Route::get('KelurahanSemolowaru/pdf/{id}', [KelurahanSemolowaruController::class,'pdf'])->name('KelurahanSemolowaru.pdf');
//Routing Search Bar
Route::get('searchKelSemolowaru', [KelurahanSemolowaruController::class, 'searchKelSemolowaru'])->name('KelurahanSemolowaru.search');

//Routingn Login Kecamatan 14 Untuk Kelurahan ini
Route::resource('KelurahanDukuhSetro',KelurahanDukuhSetroController::class);
//Routing PDF
Route::get('KelurahanDukuhSetro/pdf/{id}', [KelurahanDukuhSetroController::class,'pdf'])->name('KelurahanDukuhSetro.pdf');
//Routing Search Bar
Route::get('searchKelDukuhSetro', [KelurahanDukuhSetroController::class, 'searchKelDukuhSetro'])->name('KelurahanDukuhSetro.search');

Route::resource('KelurahanGading',KelurahanGadingController::class);
//Routing PDF
Route::get('KelurahanGading/pdf/{id}', [KelurahanGadingController::class,'pdf'])->name('KelurahanGading.pdf');
//Routing Search Bar
Route::get('searchKelGading', [KelurahanGadingController::class, 'searchKelGading'])->name('KelurahanGading.search');

Route::resource('KelurahanKapasmadyaBaru',KelurahanKapasmadyaBaruController::class);
//Routing PDF
Route::get('KelurahanKapasmadyaBaru/pdf/{id}', [KelurahanKapasmadyaBaruController::class,'pdf'])->name('KelurahanKapasmadyaBaru.pdf');
//Routing Search Bar
Route::get('searchKelKapasMadyaBaru', [KelurahanKapasmadyaBaruController::class, 'searchKelKapasMadyaBaru'])->name('KelurahanKapasmadyaBaru.search');

Route::resource('KelurahanPacarkeling',KelurahanPacarkelingController::class);
//Routing PDF
Route::get('KelurahanPacarkeling/pdf/{id}', [KelurahanPacarkelingController::class,'pdf'])->name('KelurahanPacarkeling.pdf');
//Routing Search Bar
Route::get('searchKelPacarKeling', [KelurahanPacarkelingController::class, 'searchKelPacarKeling'])->name('KelurahanPacarkeling.search');

Route::resource('KelurahanPacarkembang',KelurahanPacarkembangController::class);
//Routing PDF
Route::get('KelurahanPacarkembang/pdf/{id}', [KelurahanPacarkembangController::class,'pdf'])->name('KelurahanPacarkembang.pdf');
//Routing Search Bar
Route::get('searchKelPacarkembang', [KelurahanPacarkembangController::class, 'searchKelPacarkembang'])->name('KelurahanPacarkembang.search');

Route::resource('KelurahanPloso',KelurahanPlosoController::class);
//Routing PDF
Route::get('KelurahanPloso/pdf/{id}', [KelurahanPlosoController::class,'pdf'])->name('KelurahanPloso.pdf');
//Routing Search Bar
Route::get('searchKelPloso', [KelurahanPlosoController::class, 'searchKelPloso'])->name('KelurahanPloso.search');

Route::resource('KelurahanRangkah',KelurahanRangkahController::class);
//Routing PDF
Route::get('KelurahanRangkah/pdf/{id}', [KelurahanRangkahController::class,'pdf'])->name('KelurahanRangkah.pdf');
//Routing Search Bar
Route::get('searchKelRangkah', [KelurahanRangkahController::class, 'searchKelRangkah'])->name('KelurahanRangkah.search');

Route::resource('KelurahanTambaksari',KelurahanTambaksariController::class);
//Routing PDF
Route::get('KelurahanTambaksari/pdf/{id}', [KelurahanTambaksariController::class,'pdf'])->name('KelurahanTambaksari.pdf');
//Routing Search Bar
Route::get('searchKelTambaksari', [KelurahanTambaksariController::class, 'searchKelTambaksari'])->name('KelurahanTambaksari.search');

//Routingn Login Kecamatan 15 Untuk Kelurahan ini
Route::resource('KelurahanKendangsari',KelurahanKendangsariController::class);
//Routing PDF
Route::get('KelurahanKendangsari/pdf/{id}', [KelurahanKendangsariController::class,'pdf'])->name('KelurahanKendangsari.pdf');
//Routing Search Bar
Route::get('searchKelKendangsari', [KelurahanKendangsariController::class, 'searchKelKendangsari'])->name('KelurahanKendangsari.search');

Route::resource('KelurahanKutisari',KelurahanKutisariController::class);
//Routing PDF
Route::get('KelurahanKutisari/pdf/{id}', [KelurahanKutisariController::class,'pdf'])->name('KelurahanKutisari.pdf');
//Routing Search Bar
Route::get('searchKelKutisari', [KelurahanKutisariController::class, 'searchKelKutisari'])->name('KelurahanKutisari.search');

Route::resource('KelurahanPanjangJiwo',KelurahanPanjangJiwoController::class);
//Routing PDF
Route::get('KelurahanPanjangJiwo/pdf/{id}', [KelurahanPanjangJiwoController::class,'pdf'])->name('KelurahanPanjangJiwo.pdf');
//Routing Search Bar
Route::get('searchKelPanjangJiwo', [KelurahanPanjangJiwoController::class, 'searchKelPanjangJiwo'])->name('KelurahanPanjangJiwo.search');

Route::resource('KelurahanTenggilisMejoyo',KelurahanTenggilisMejoyoController::class);
//Routing PDF
Route::get('KelurahanTenggilisMejoyo/pdf/{id}', [KelurahanTenggilisMejoyoController::class,'pdf'])->name('KelurahanTenggilisMejoyo.pdf');
//Routing Search Bar
Route::get('searchKelTenggilisMejoyo', [KelurahanTenggilisMejoyoController::class, 'searchKelTenggilisMejoyo'])->name('KelurahanTenggilisMejoyo.search');

//Routingn Login Kecamatan 16 Untuk Kelurahan ini
Route::resource('KelurahanAlunAlunContong',KelurahanAlunAlunContongController::class);
//Routing PDF
Route::get('KelurahanAlunAlunContong/pdf/{id}', [KelurahanAlunAlunContongController::class,'pdf'])->name('KelurahanAlunAlunContong.pdf');
//Routing Search Bar
Route::get('searchKelAlunAlunContong', [KelurahanAlunAlunContongController::class, 'searchKelAlunAlunContong'])->name('KelurahanAlunAlunContong.search');

Route::resource('KelurahanBubutan',KelurahanBubutanController::class);
//Routing PDF
Route::get('KelurahanBubutan/pdf/{id}', [KelurahanBubutanController::class,'pdf'])->name('KelurahanBubutan.pdf');
//Routing Search Bar
Route::get('searchKelBubutan', [KelurahanBubutanController::class, 'searchKelBubutan'])->name('KelurahanBubutan.search');

Route::resource('KelurahanGundih',KelurahanBubutanController::class);
//Routing PDF
Route::get('KelurahanGundih/pdf/{id}', [KelurahanGundihController::class,'pdf'])->name('KelurahanGundih.pdf');
//Routing Search Bar
Route::get('searchKelGundih', [KelurahanGundihController::class, 'searchKelGundih'])->name('KelurahanGundih.search');

Route::resource('KelurahanJepara',KelurahanJeparaController::class);
//Routing PDF
Route::get('KelurahanJepara/pdf/{id}', [KelurahanJeparaController::class,'pdf'])->name('KelurahanJepara.pdf');
//Routing Search Bar
Route::get('searchKelJepara', [KelurahanJeparaController::class, 'searchKelJepara'])->name('KelurahanJepara.search');

Route::resource('KelurahanTembokDukuh',KelurahanTembokDukuhController::class);
//Routing PDF
Route::get('KelurahanTembokDukuh/pdf/{id}', [KelurahanTembokDukuhController::class,'pdf'])->name('KelurahanTembokDukuh.pdf');
//Routing Search Bar
Route::get('searchKelTembokDukuh', [KelurahanTembokDukuhController::class, 'searchKelTembokDukuh'])->name('KelurahanTembokDukuh.search');

//Routingn Login Kecamatan 17 Untuk Kelurahan ini
Route::resource('KelurahanEmbongKaliasin',KelurahanEmbongKaliasinController::class);
//Routing PDF
Route::get('KelurahanEmbongKaliasin/pdf/{id}', [KelurahanEmbongKaliasinController::class,'pdf'])->name('KelurahanEmbongKaliasin.pdf');
//Routing Search Bar
Route::get('searchKelEmbongKaliasin', [KelurahanEmbongKaliasinController::class, 'searchKelEmbongKaliasin'])->name('KelurahanEmbongKaliasin.search');

Route::resource('KelurahanGenteng',KelurahanGentengController::class);
//Routing PDF
Route::get('KelurahanGenteng/pdf/{id}', [KelurahanGentengController::class,'pdf'])->name('KelurahanGenteng.pdf');
//Routing Search Bar
Route::get('searchKelGanteng', [KelurahanGentengController::class, 'searchKelGanteng'])->name('KelurahanGenteng.search');

Route::resource('KelurahanKapasari',KelurahanKapasariController::class);
//Routing PDF
Route::get('KelurahanKapasari/pdf/{id}', [KelurahanKapasariController::class,'pdf'])->name('KelurahanKapasari.pdf');
//Routing Search Bar
Route::get('searchKelKapasari', [KelurahanKapasariController::class, 'searchKelKapasari'])->name('KelurahanKapasari.search');

Route::resource('KelurahanKetabang',KelurahanKetabangController::class);
//Routing PDF
Route::get('KelurahanKetabang/pdf/{id}', [KelurahanKetabangController::class,'pdf'])->name('KelurahanKetabang.pdf');
//Routing Search Bar
Route::get('searchKelKetabang', [KelurahanKetabangController::class, 'searchKelKetabang'])->name('KelurahanKetabang.search');

Route::resource('KelurahanPeneleh',KelurahanPenelehController::class);
//Routing PDF
Route::get('KelurahanPeneleh/pdf/{id}', [KelurahanPenelehController::class,'pdf'])->name('KelurahanPeneleh.pdf');
//Routing Search Bar
Route::get('searchKelPeneleh', [KelurahanPenelehController::class, 'searchKelPeneleh'])->name('KelurahanPeneleh.search');

//Routingn Login Kecamatan 18 Untuk Kelurahan ini
Route::resource('KelurahanKapasan',KelurahanKapasanController::class);
//Routing PDF
Route::get('KelurahanKapasan/pdf/{id}', [KelurahanKapasanController::class,'pdf'])->name('KelurahanKapasan.pdf');
//Routing Search Bar
Route::get('searchKelKapasan', [KelurahanKapasanController::class, 'searchKelKapasan'])->name('KelurahanKapasan.search');

Route::resource('KelurahanSidodadi',KelurahanSidodadiController::class);
//Routing PDF
Route::get('KelurahanSidodadi/pdf/{id}', [KelurahanSidodadiController::class,'pdf'])->name('KelurahanSidodadi.pdf');
//Routing Search Bar
Route::get('searchKelSidodadi', [KelurahanSidodadiController::class, 'searchKelSidodadi'])->name('KelurahanSidodadi.search');

Route::resource('KelurahanSimolawang',KelurahanSimolawangController::class);
//Routing PDF
Route::get('KelurahanSimolawang/pdf/{id}', [KelurahanSimolawangController::class,'pdf'])->name('KelurahanSimolawang.pdf');
//Routing Search Bar
Route::get('searchKelSimolawang', [KelurahanSimolawangController::class, 'searchKelSimolawang'])->name('KelurahanSimolawang.search');

Route::resource('KelurahanTambakrejo',KelurahanTambakrejoController::class);
//Routing PDF
Route::get('KelurahanTambakrejo/pdf/{id}', [KelurahanTambakrejoController::class,'pdf'])->name('KelurahanTambakrejo.pdf');
//Routing Search Bar
Route::get('searchKelTambakrejo', [KelurahanTambakrejoController::class, 'searchKelTambakrejo'])->name('KelurahanTambakrejo.search');

Route::resource('KelurahanSimokerto',KelurahanSimokertoController::class);
//Routing PDF
Route::get('KelurahanSimokerto/pdf/{id}', [KelurahanSimokertoController::class,'pdf'])->name('KelurahanSimokerto.pdf');
//Routing Search Bar
Route::get('searchKelSimokerto', [KelurahanSimokertoController::class, 'searchKelSimokerto'])->name('KelurahanSimokerto.search');

//Routingn Login Kecamatan 19 Untuk Kelurahan ini
Route::resource('KelurahanDrSoetomo',KelurahanDrSoetomoController::class);
//Routing PDF
Route::get('KelurahanDrSoetomo/pdf/{id}', [KelurahanDrSoetomoController::class,'pdf'])->name('KelurahanDrSoetomo.pdf');
//Routing Search Bar
Route::get('searchKelDrSoetomo', [KelurahanDrSoetomoController::class, 'searchKelDrSoetomo'])->name('KelurahanDrSoetomo.search');

Route::resource('KelurahanKedungdoro',KelurahanKedungdoroController::class);
//Routing PDF
Route::get('KelurahanKedungdoro/pdf/{id}', [KelurahanKedungdoroController::class,'pdf'])->name('KelurahanKedungdoro.pdf');
//Routing Search Bar
Route::get('searchKelKedungdoro', [KelurahanKedungdoroController::class, 'searchKelKedungdoro'])->name('KelurahanKedungdoro.search');

Route::resource('KelurahanKeputran',KelurahanKeputranController::class);
//Routing PDF
Route::get('KelurahanKeputran/pdf/{id}', [KelurahanKeputranController::class,'pdf'])->name('KelurahanKeputran.pdf');
//Routing Search Bar
Route::get('searchKelKeputran', [KelurahanKeputranController::class, 'searchKelKeputran'])->name('KelurahanKeputran.search');

Route::resource('KelurahanTegalsari',KelurahanTegalsariController::class);
//Routing PDF
Route::get('KelurahanTegalsari/pdf/{id}', [KelurahanTegalsariController::class,'pdf'])->name('KelurahanTegalsari.pdf');
//Routing Search Bar
Route::get('searchKelTegalsari', [KelurahanTegalsariController::class, 'searchKelTegalsari'])->name('KelurahanTegalsari.search');

Route::resource('KelurahanWonorejoTegalsari',KelurahanWonorejoTegalsariController::class);
//Routing PDF
Route::get('kelurahanwonorejotegalsari/pdf/{id}', [KelurahanWonorejoTegalsariController::class,'pdf'])->name('KelurahanWonorejoTegalsari.pdf');
//Routing Search Bar
Route::get('searchKelWonorejoTegalsari', [KelurahanWonorejoTegalsariController::class, 'searchKelWonorejoTegalsari'])->name('KelurahanWonorejoTegalsari.search');

//Routingn Login Kecamatan 20 Untuk Kelurahan ini
Route::resource('KelurahanBulak',KelurahanBulakController::class);
//Routing PDF
Route::get('KelurahanBulak/pdf/{id}', [KelurahanBulakController::class,'pdf'])->name('KelurahanBulak.pdf');
//Routing Search Bar
Route::get('searchKelBulak', [KelurahanBulakController::class, 'searchKelBulak'])->name('KelurahanBulak.search');

Route::resource('KelurahanKedungCowek',KelurahanKedungCowekController::class);
//Routing PDF
Route::get('KelurahanKedungCowek/pdf/{id}', [KelurahanKedungCowekController::class,'pdf'])->name('KelurahanKedungCowek.pdf');
//Routing Search Bar
Route::get('searchKelKedungCowek', [KelurahanKedungCowekController::class, 'searchKelKedungCowek'])->name('KelurahanKedungCowek.search');

Route::resource('KelurahanKenjeran',KelurahanKenjeranController::class);
//Routing PDF
Route::get('KelurahanKenjeran/pdf/{id}', [KelurahanKenjeranController::class,'pdf'])->name('KelurahanKenjeran.pdf');
//Routing Search Bar
Route::get('searchKelKenjeran', [KelurahanKenjeranController::class, 'searchKelKenjeran'])->name('KelurahanKenjeran.search');

Route::resource('KelurahanSukoliloBaru',KelurahanSukoliloBaruController::class);
//Routing PDF
Route::get('KelurahanSukoliloBaru/pdf/{id}', [KelurahanSukoliloBaruController::class,'pdf'])->name('KelurahanSukoliloBaru.pdf');
//Routing Search Bar
Route::get('searchKelSukoliloBaru', [KelurahanSukoliloBaruController::class, 'searchKelSukoliloBaru'])->name('KelurahanSukoliloBaru.search');

//Routingn Login Kecamatan 21 Untuk Kelurahan ini
Route::resource('KelurahanBulakBanteng',KelurahanBulakBantengController::class);
//Routing PDF
Route::get('KelurahanBulakBanteng/pdf/{id}', [KelurahanBulakBantengController::class,'pdf'])->name('KelurahanBulakBanteng.pdf');
//Routing Search Bar
Route::get('searchKelBulakBanteng', [KelurahanBulakBantengController::class, 'searchKelBulakBanteng'])->name('KelurahanBulakBanteng.search');

Route::resource('KelurahanSidotopoWetan',KelurahanSidotopoWetanController::class);
//Routing PDF
Route::get('KelurahanSidotopoWetan/pdf/{id}', [KelurahanSidotopoWetanController::class,'pdf'])->name('KelurahanSidotopoWetan.pdf');
//Routing Search Bar
Route::get('searchKelSidotopoWetan', [KelurahanSidotopoWetanController::class, 'searchKelSidotopoWetan'])->name('KelurahanSidotopoWetan.search');

Route::resource('KelurahanTambakWedi',KelurahanTambakWediController::class);
//Routing PDF
Route::get('KelurahanTambakWedi/pdf/{id}', [KelurahanTambakWediController::class,'pdf'])->name('KelurahanTambakWedi.pdf');
//Routing Search Bar
Route::get('searchKelTambakWedi', [KelurahanTambakWediController::class, 'searchKelTambakWedi'])->name('KelurahanTambakWedi.search');

Route::resource('KelurahanTanahKaliKedinding',KelurahanTanahKaliKedindingController::class);
//Routing PDF
Route::get('KelurahanTanahKaliKedinding/pdf/{id}', [KelurahanTanahKaliKedindingController::class,'pdf'])->name('KelurahanTanahKaliKedinding.pdf');
//Routing Search Bar
Route::get('searchKelTanahKaliKedinding', [KelurahanTanahKaliKedindingController::class, 'searchKelTanahKaliKedinding'])->name('KelurahanTanahKaliKedinding.search');

//Routingn Login Kecamatan 22 Untuk Kelurahan ini
Route::resource('KelurahanDupak',KelurahanDupakController::class);
//Routing PDF
Route::get('KelurahanDupak/pdf/{id}', [KelurahanDupakController::class,'pdf'])->name('KelurahanDupak.pdf');
//Routing Search Bar
Route::get('searchKelDupak', [KelurahanDupakController::class, 'searchKelDupak'])->name('KelurahanDupak.search');

Route::resource('KelurahanKemayoran',KelurahanKemayoranController::class);
//Routing PDF
Route::get('KelurahanKemayoran/pdf/{id}', [KelurahanKemayoranController::class,'pdf'])->name('KelurahanKemayoran.pdf');
//Routing Search Bar
Route::get('searchKelKemayoran', [KelurahanKemayoranController::class, 'searchKelKemayoran'])->name('KelurahanKemayoran.search');

Route::resource('KelurahanKrembanganSelatan',KelurahanKrembanganSelatanController::class);
//Routing PDF
Route::get('KelurahanKrembanganSelatan/pdf/{id}', [KelurahanKrembanganSelatanController::class,'pdf'])->name('KelurahanKrembanganSelatan.pdf');
//Routing Search Bar
Route::get('searchKelKrembangSelatan', [KelurahanKrembanganSelatanController::class, 'searchKelKrembangSelatan'])->name('KelurahanKrembanganSelatan.search');

Route::resource('KelurahanMorokrembangan',KelurahanMorokrembanganController::class);
//Routing PDF
Route::get('KelurahanMorokrembangan/pdf/{id}', [KelurahanMorokrembanganController::class,'pdf'])->name('KelurahanMorokrembangan.pdf');
//Routing Search Bar
Route::get('searchKelMorokrembangan', [KelurahanMorokrembanganController::class, 'searchKelMorokrembangan'])->name('KelurahanMorokrembangan.search');

Route::resource('KelurahanPerakBarat',KelurahanPerakBaratController::class);
//Routing PDF
Route::get('KelurahanPerakBarat/pdf/{id}', [KelurahanPerakBaratController::class,'pdf'])->name('KelurahanPerakBarat.pdf');
//Routing Search Bar
Route::get('searchKelPerakBarat', [KelurahanPerakBaratController::class, 'searchKelPerakBarat'])->name('KelurahanPerakBarat.search');


//Routingn Login Kecamatan 23 Untuk Kelurahan ini
Route::resource('KelurahanBongkaran',KelurahanBongkaranController::class);
//Routing PDF
Route::get('KelurahanBongkaran/pdf/{id}', [KelurahanBongkaranController::class,'pdf'])->name('KelurahanBongkaran.pdf');
//Routing Search Bar
Route::get('searchKelBongkaran', [KelurahanBongkaranController::class, 'searchKelBongkaran'])->name('KelurahanBongkaran.search');

Route::resource('KelurahanKrembanganUtara',KelurahanKrembanganUtaraController::class);
//Routing PDF
Route::get('KelurahanKrembanganUtara/pdf/{id}', [KelurahanKrembanganUtaraController::class,'pdf'])->name('KelurahanKrembanganUtara.pdf');
//Routing Search Bar
Route::get('searchKelKrembanganUtara', [KelurahanKrembanganUtaraController::class, 'searchKelKrembanganUtara'])->name('KelurahanKrembanganUtara.search');

Route::resource('KelurahanNyamplungan',KelurahanNyamplunganController::class);
//Routing PDF
Route::get('KelurahanNyamplungan/pdf/{id}', [KelurahanNyamplunganController::class,'pdf'])->name('KelurahanNyamplungan.pdf');
//Routing Search Bar
Route::get('searchKelNyamplungan', [KelurahanNyamplunganController::class, 'searchKelNyamplungan'])->name('KelurahanNyamplungan.search');

Route::resource('KelurahanPerakTimur',KelurahanPerakTimurController::class);
//Routing PDF
Route::get('KelurahanPerakTimur/pdf/{id}', [KelurahanPerakTimurController::class,'pdf'])->name('KelurahanPerakTimur.pdf');
//Routing Search Bar
Route::get('searchKelPerakTimur', [KelurahanPerakTimurController::class, 'searchKelPerakTimur'])->name('KelurahanPerakTimur.search');

Route::resource('KelurahanPerakUtara',KelurahanPerakUtaraController::class);
//Routing PDF
Route::get('KelurahanPerakUtara/pdf/{id}', [KelurahanPerakUtaraController::class,'pdf'])->name('KelurahanPerakUtara.pdf');
//Routing Search Bar
Route::get('searchKelPerakUtara', [KelurahanPerakUtaraController::class, 'searchKelPerakUtara'])->name('KelurahanPerakUtara.search');

Route::resource('KelurahanTanjungPerak',KelurahanTanjungPerakController::class);
//Routing PDF
Route::get('KelurahanTanjungPerak/pdf/{id}', [KelurahanTanjungPerakController::class,'pdf'])->name('KelurahanTanjungPerak.pdf');
//Routing Search Bar
Route::get('searchKelTanjungPerak', [KelurahanTanjungPerakController::class, 'searchKelTanjungPerak'])->name('KelurahanTanjungPerak.search');

//Routingn Login Kecamatan 24 Untuk Kelurahan ini
Route::resource('KelurahanAmpel',KelurahanAmpelController::class);
//Routing PDF
Route::get('KelurahanAmpel/pdf/{id}', [KelurahanAmpelController::class,'pdf'])->name('KelurahanAmpel.pdf');
//Routing Search Bar
Route::get('searchKelAmpel', [KelurahanAmpelController::class, 'searchKelAmpel'])->name('KelurahanAmpel.search');

Route::resource('KelurahanPegirian',KelurahanPegirianController::class);
//Routing PDF
Route::get('KelurahanPegirian/pdf/{id}', [KelurahanPegirianController::class,'pdf'])->name('KelurahanPegirian.pdf');
//Routing Search Bar
Route::get('searchKelPegirian', [KelurahanPegirianController::class, 'searchKelPegirian'])->name('KelurahanPegirian.search');

Route::resource('KelurahanSidotopo',KelurahanSidotopoController::class);
//Routing PDF
Route::get('KelurahanSidotopo/pdf/{id}', [KelurahanSidotopoController::class,'pdf'])->name('KelurahanSidotopo.pdf');
//Routing Search Bar
Route::get('searchKelSidotopo', [KelurahanSidotopoController::class, 'searchKelSidotopo'])->name('KelurahanSidotopo.search');

Route::resource('KelurahanUjung',KelurahanUjungController::class);
//Routing PDF
Route::get('KelurahanUjung/pdf/{id}', [KelurahanUjungController::class,'pdf'])->name('KelurahanUjung.pdf');
//Routing Search Bar
Route::get('searchKelUjung', [KelurahanUjungController::class, 'searchKelUjung'])->name('KelurahanUjung.search');

Route::resource('KelurahanWonokusumo',KelurahanWonokusumoController::class);
//Routing PDF
Route::get('KelurahanWonokusumo/pdf/{id}', [KelurahanWonokusumoController::class,'pdf'])->name('KelurahanWonokusumo.pdf');
//Routing Search Bar
Route::get('searchKelWonokusumo', [KelurahanWonokusumoController::class, 'searchKelWonokusumo'])->name('KelurahanWonokusumo.search');

//Routingn Login Kecamatan 25 Untuk Kelurahan ini
Route::resource('KelurahanAsemRowo',KelurahanAsemRowoController::class);
//Routing PDF
Route::get('KelurahanAsemRowo/pdf/{id}', [KelurahanAsemRowoController::class,'pdf'])->name('KelurahanAsemRowo.pdf');
//Routing Search Bar
Route::get('searchKelAsemRowo', [KelurahanAsemRowoController::class, 'searchKelAsemRowo'])->name('KelurahanAsemRowo.search');

Route::resource('KelurahanGentingKalianak',KelurahanGentingKalianakController::class);
//Routing PDF
Route::get('KelurahanGentingKalianak/pdf/{id}', [KelurahanGentingKalianakController::class,'pdf'])->name('KelurahanGentingKalianak.pdf');
//Routing Search Bar
Route::get('searchKelGentingKalianak', [KelurahanGentingKalianakController::class, 'searchKelGentingKalianak'])->name('KelurahanGentingKalianak.search');

Route::resource('KelurahanTambakSarioso',KelurahanTambakSariosoController::class);
//Routing PDF
Route::get('KelurahanTambakSarioso/pdf/{id}', [KelurahanTambakSariosoController::class,'pdf'])->name('KelurahanTambakSarioso.pdf');
//Routing Search Bar
Route::get('searchKelTambakSarioso', [KelurahanTambakSariosoController::class, 'searchKelTambakSarioso'])->name('KelurahanTambakSarioso.search');


//Routingn Login Kecamatan 26 Untuk Kelurahan ini
Route::resource('KelurahanKandangan',KelurahanKandanganController::class);
//Routing PDF
Route::get('KelurahanKandangan/pdf/{id}', [KelurahanKandanganController::class,'pdf'])->name('KelurahanKandangan.pdf');
//Routing Search Bar
Route::get('searchKelKandangan', [KelurahanKandanganController::class, 'searchKelKandangan'])->name('KelurahanKandangan.search');

Route::resource('KelurahanRomokalisari',KelurahanRomokalisariController::class);
//Routing PDF
Route::get('KelurahanRomokalisari/pdf/{id}', [KelurahanRomokalisariController::class,'pdf'])->name('KelurahanRomokalisari.pdf');
//Routing Search Bar
Route::get('searchKelRomokalisari', [KelurahanRomokalisariController::class, 'searchKelRomokalisari'])->name('KelurahanRomokalisari.search');

Route::resource('KelurahanSememi',KelurahanSememiController::class);
//Routing PDF
Route::get('KelurahanSememi/pdf/{id}', [KelurahanSememiController::class,'pdf'])->name('KelurahanSememi.pdf');
//Routing Search Bar
Route::get('searchKelSememi', [KelurahanSememiController::class, 'searchKelSememi'])->name('KelurahanSememi.search');

Route::resource('KelurahanTambakOsoWilangun',KelurahanTambakOsoWilangunController::class);
//Routing PDF
Route::get('KelurahanTambakOsoWilangun/pdf/{id}', [KelurahanTambakOsoWilangunController::class,'pdf'])->name('KelurahanTambakOsoWilangun.pdf');
//Routing Search Bar
Route::get('searchKelTambakOsoWilangun', [KelurahanTambakOsoWilangunController::class, 'searchKelTambakOsoWilangun'])->name('KelurahanTambakOsoWilangun.search');

//Routingn Login Kecamatan 27 Untuk Kelurahan ini
Route::resource('KelurahanBangkingan',KelurahanBangkinganController::class);
//Routing PDF
Route::get('KelurahanBangkingan/pdf/{id}', [KelurahanBangkinganController::class,'pdf'])->name('KelurahanBangkingan.pdf');
//Routing Search Bar
Route::get('searchKelBangkingan', [KelurahanBangkinganController::class, 'searchKelBangkingan'])->name('KelurahanBangkingan.search');

Route::resource('KelurahanJeruk',KelurahanJerukController::class);
//Routing PDF
Route::get('KelurahanJeruk/pdf/{id}', [KelurahanJerukController::class,'pdf'])->name('KelurahanJeruk.pdf');
//Routing Search Bar
Route::get('searchKelJeruk', [KelurahanJerukController::class, 'searchKelJeruk'])->name('KelurahanJeruk.search');

Route::resource('KelurahanLakarsantri',KelurahanLakarsantriController::class);
//Routing PDF
Route::get('KelurahanLakarsantri/pdf/{id}', [KelurahanLakarsantriController::class,'pdf'])->name('KelurahanLakarsantri.pdf');
//Routing Search Bar
Route::get('searchKelLakarsantri', [KelurahanLakarsantriController::class, 'searchKelLakarsantri'])->name('KelurahanLakarsantri.search');

Route::resource('KelurahanLidahKulon',KelurahanLidahKulonController::class);
//Routing PDF
Route::get('KelurahanLidahKulon/pdf/{id}', [KelurahanLidahKulonController::class,'pdf'])->name('KelurahanLidahKulon.pdf');
//Routing Search Bar
Route::get('searchKelLidahKulon', [KelurahanLidahKulonController::class, 'searchKelLidahKulon'])->name('KelurahanLidahKulon.search');

Route::resource('KelurahanLidahWetan',KelurahanLidahWetanController::class);
//Routing PDF
Route::get('KelurahanLidahWetan/pdf/{id}', [KelurahanLidahWetanController::class,'pdf'])->name('KelurahanLidahWetan.pdf');
//Routing Search Bar
Route::get('searchKelLidahWetan', [KelurahanLidahWetanController::class, 'searchKelLidahWetan'])->name('KelurahanLidahWetan.search');

Route::resource('KelurahanSumurwelut',KelurahanSumurwelutController::class);
//Routing PDF
Route::get('KelurahanSumurwelut/pdf/{id}', [KelurahanSumurwelutController::class,'pdf'])->name('KelurahanSumurwelut.pdf');
//Routing Search Bar
Route::get('searchKelSumurwelut', [KelurahanSumurwelutController::class, 'searchKelSumurwelut'])->name('KelurahanSumurwelut.search');

//Routingn Login Kecamatan 28 Untuk Kelurahan ini
Route::resource('KelurahanBabatJerawat',KelurahanBabatJerawatController::class);
//Routing PDF
Route::get('KelurahanBabatJerawat/pdf/{id}', [KelurahanBabatJerawatController::class,'pdf'])->name('KelurahanBabatJerawat.pdf');
//Routing Search Bar
Route::get('searchKelBabatJerawat', [KelurahanBabatJerawatController::class, 'searchKelBabatJerawat'])->name('KelurahanBabatJerawat.search');

Route::resource('KelurahanBenowo',KelurahanBenowoController::class);
//Routing PDF
Route::get('KelurahanBenowo/pdf/{id}', [KelurahanBenowoController::class,'pdf'])->name('KelurahanBenowo.pdf');
//Routing Search Bar
Route::get('searchKelBenowo', [KelurahanBenowoController::class, 'searchKelBenowo'])->name('KelurahanBenowo.search');

Route::resource('KelurahanPakal',KelurahanPakalController::class);
//Routing PDF
Route::get('KelurahanPakal/pdf/{id}', [KelurahanPakalController::class,'pdf'])->name('KelurahanPakal.pdf');
//Routing Search Bar
Route::get('searchKelPakal', [KelurahanPakalController::class, 'searchKelPakal'])->name('KelurahanPakal.search');

Route::resource('KelurahanSumberRejo',KelurahanSumberRejoController::class);
//Routing PDF
Route::get('KelurahanSumberRejo/pdf/{id}', [KelurahanSumberRejoController::class,'pdf'])->name('KelurahanSumberRejo.pdf');
//Routing Search Bar
Route::get('searchKelSumberRejo', [KelurahanSumberRejoController::class, 'searchKelSumberRejo'])->name('KelurahanSumberRejo.search');

//Routingn Login Kecamatan 29 Untuk Kelurahan ini
Route::resource('KelurahanBeringin',KelurahanBeringinController::class);
//Routing PDF
Route::get('KelurahanBeringin/pdf/{id}', [KelurahanBeringinController::class,'pdf'])->name('KelurahanBeringin.pdf');
//Routing Search Bar
Route::get('searchKelBeringin', [KelurahanBeringinController::class, 'searchKelBeringin'])->name('KelurahanBeringin.search');

Route::resource('KelurahanLontar',KelurahanLontarController::class);
//Routing PDF
Route::get('KelurahanLontar/pdf/{id}', [KelurahanLontarController::class,'pdf'])->name('KelurahanLontar.pdf');
//Routing Search Bar
Route::get('searchKelLontar', [KelurahanLontarController::class, 'searchKelLontar'])->name('KelurahanLontar.search');

Route::resource('KelurahanMade',KelurahanMadeController::class);
//Routing PDF
Route::get('KelurahanMade/pdf/{id}', [KelurahanMadeController::class,'pdf'])->name('KelurahanMade.pdf');
//Routing Search Bar
Route::get('searchKelMade', [KelurahanMadeController::class, 'searchKelMade'])->name('KelurahanMade.search');

Route::resource('KelurahanSambikerep',KelurahanSambikerepController::class);
//Routing PDF
Route::get('KelurahanSambikerep/pdf/{id}', [KelurahanSambikerepController::class,'pdf'])->name('KelurahanSambikerep.pdf');
//Routing Search Bar
Route::get('searchKelSambikerep', [KelurahanSambikerepController::class, 'searchKelSambikerep'])->name('KelurahanSambikerep.search');

//Routingn Login Kecamatan 30 Untuk Kelurahan ini
Route::resource('KelurahanPutatGede',KelurahanPutatGedeController::class);
//Routing PDF
Route::get('KelurahanPutatGede/pdf/{id}', [KelurahanPutatGedeController::class,'pdf'])->name('KelurahanPutatGede.pdf');
//Routing Search Bar
Route::get('searchKelPutatGede', [KelurahanPutatGedeController::class, 'searchKelPutatGede'])->name('KelurahanPutatGede.search');

Route::resource('KelurahanSimomulyo',KelurahanSimomulyoController::class);
//Routing PDF
Route::get('KelurahanSimomulyo/pdf/{id}', [KelurahanSimomulyoController::class,'pdf'])->name('KelurahanSimomulyo.pdf');
//Routing Search Bar
Route::get('searchKelSimomulyo', [KelurahanSimomulyoController::class, 'searchKelSimomulyo'])->name('KelurahanSimomulyo.search');

Route::resource('KelurahanSimomulyoBaru',KelurahanSimomulyoBaruController::class);
//Routing PDF
Route::get('KelurahanSimomulyoBaru/pdf/{id}', [KelurahanSimomulyoBaruController::class,'pdf'])->name('KelurahanSimomulyoBaru.pdf');
//Routing Search Bar
Route::get('searchKelSimomulyoBaru', [KelurahanSimomulyoBaruController::class, 'searchKelSimomulyoBaru'])->name('KelurahanSimomulyoBaru.search');

Route::resource('KelurahanSonokwijenan',KelurahanSonokwijenanController::class);
//Routing PDF
Route::get('KelurahanSonokwijenan/pdf/{id}', [KelurahanSonokwijenanController::class,'pdf'])->name('KelurahanSonokwijenan.pdf');
//Routing Search Bar
Route::get('searchKelSonokwijenan', [KelurahanSonokwijenanController::class, 'searchKelSonokwijenan'])->name('KelurahanSonokwijenan.search');

Route::resource('KelurahanSukomanunggal',KelurahanSukomanunggalController::class);
//Routing PDF
Route::get('KelurahanSukomanunggal/pdf/{id}', [KelurahanSukomanunggalController::class,'pdf'])->name('KelurahanSukomanunggal.pdf');
//Routing Search Bar
Route::get('searchKelSukomanunggal', [KelurahanSukomanunggalController::class, 'searchKelSukomanunggal'])->name('KelurahanSukomanunggal.search');

Route::resource('KelurahanTanjungsari',KelurahanTanjungsariController::class);
//Routing PDF
Route::get('KelurahanTanjungsari/pdf/{id}', [KelurahanTanjungsariController::class,'pdf'])->name('KelurahanTanjungsari.pdf');
//Routing Search Bar
Route::get('searchKelTanjungsari', [KelurahanTanjungsariController::class, 'searchKelTanjungsari'])->name('KelurahanTanjungsari.search');

//Routingn Login Kecamatan 31 Untuk Kelurahan ini
Route::resource('KelurahanBalongsari',KelurahanBalongsariController::class);
//Routing PDF
Route::get('KelurahanBalongsari/pdf/{id}', [KelurahanBalongsariController::class,'pdf'])->name('KelurahanBalongsari.pdf');
//Routing Search Bar
Route::get('searchKelBalongsari', [KelurahanBalongsariController::class, 'searchKelBalongsari'])->name('KelurahanBalongsari.search');

Route::resource('KelurahanBanjarSugihan',KelurahanBanjarSugihanController::class);
//Routing PDF
Route::get('KelurahanBanjarSugihan/pdf/{id}', [KelurahanBanjarSugihanController::class,'pdf'])->name('KelurahanBanjarSugihan.pdf');
//Routing Search Bar
Route::get('searchKelBanjarSugihan', [KelurahanBanjarSugihanController::class, 'searchKelBanjarSugihan'])->name('KelurahanBanjarSugihan.search');

Route::resource('KelurahanKarangPoh',KelurahanKarangPohController::class);
//Routing PDF
Route::get('KelurahanKarangPoh/pdf/{id}', [KelurahanKarangPohController::class,'pdf'])->name('KelurahanKarangPoh.pdf');
//Routing Search Bar
Route::get('searchKelKarangPoh', [KelurahanKarangPohController::class, 'searchKelKarangPoh'])->name('KelurahanKarangPoh.search');

Route::resource('KelurahanManukanKulon',KelurahanManukanKulonController::class);
//Routing PDF
Route::get('KelurahanManukanKulon/pdf/{id}', [KelurahanManukanKulonController::class,'pdf'])->name('KelurahanManukanKulon.pdf');
//Routing Search Bar
Route::get('searchKelManukanKulon', [KelurahanManukanKulonController::class, 'searchKelManukanKulon'])->name('KelurahanManukanKulon.search');

Route::resource('KelurahanManukanWetan',KelurahanManukanWetanController::class);
//Routing PDF
Route::get('KelurahanManukanWetan/pdf/{id}', [KelurahanManukanWetanController::class,'pdf'])->name('KelurahanManukanWetan.pdf');
//Routing Search Bar
Route::get('searchKelManukanWetan', [KelurahanManukanWetanController::class, 'searchKelManukanWetan'])->name('KelurahanManukanWetan.search');

Route::resource('KelurahanTandes',KelurahanTandesController::class);
//Routing PDF
Route::get('KelurahanTandes/pdf/{id}', [KelurahanTandesController::class,'pdf'])->name('KelurahanTandes.pdf');
//Routing Search Bar
Route::get('searchKelTandes', [KelurahanTandesController::class, 'searchKelTandes'])->name('KelurahanTandes.search');

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
        Route::resource('KecamatanWonokromo',KecamatanWonokromoController::class);
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
