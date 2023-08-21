<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SuperAdmin_Form;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if($user = Auth::user()){
                if($user->level == '1'){
                    return redirect()->intended('SuperAdmin');
                }elseif($user->level =='999'){
                    return redirect()->intended('kota');
                }elseif($user->level == '998'){
                    return redirect()->intended('kecamatan');
                }elseif($user->level == '997'){
                    return redirect()->intended('kelurahan');
                }elseif($user->level== '2'){
                    return redirect()->intended('KotaSurabaya');
                }elseif($user->level == '3'){
                    return redirect()->intended('KecamatanDukuhPakis');
                }elseif($user->level == '4'){
                    return redirect()->intended('KecamatanGayungan');
                }elseif($user->level == '5'){
                    return redirect()->intended('KecamatanJambangan');
                }elseif($user->level == '6'){
                    return redirect()->intended('KecamatanKarangPilang');
                }elseif($user->level == '7'){
                    return redirect()->intended('KecamatanSawahan');
                }elseif($user->level == '8'){
                    return redirect()->intended('KecamatanWiyung');
                }elseif($user->level == '9'){
                    return redirect()->intended('KecamatanWonocolo');
                }elseif($user->level == '10'){
                    return redirect()->intended('KecamatanWonokromo');
                }elseif($user->level == '11'){
                    return redirect()->intended('KecamatanGubeng');
                }elseif($user->level == '12'){
                    return redirect()->intended('KecamatanGunungAnyar');
                }elseif($user->level == '13'){
                    return redirect()->intended('KecamatanMulyorejo');
                }elseif($user->level == '14'){
                    return redirect()->intended('KecamatanRungkut');
                }elseif($user->level == '15'){
                    return redirect()->intended('KecamatanSukolilo');
                }elseif($user->level == '16'){
                    return redirect()->intended('KecamatanTambaksari');
                }elseif($user->level == '17'){
                    return redirect()->intended('KecamatanTenggilisMejoyo');
                }elseif($user->level == '18'){
                    return redirect()->intended('KecamatanBubutan');
                }elseif($user->level == '19'){
                    return redirect()->intended('KecamatanGenteng');
                }elseif($user->level == '20'){
                    return redirect()->intended('KecamatanSimokerto');
                }elseif($user->level == '21'){
                    return redirect()->intended('KecamatanTegalsari');
                }elseif($user->level == '22'){
                    return redirect()->intended('KecamatanBulak');
                }elseif($user->level == '23'){
                    return redirect()->intended('KecamatanKenjeran');
                }elseif($user->level == '24'){
                    return redirect()->intended('KecamatanKrembangan');
                }elseif($user->level == '25'){
                    return redirect()->intended('KecamatanPabeanCantian');
                }elseif($user->level == '26'){
                    return redirect()->intended('KecamatanSemampir');
                }elseif($user->level == '27'){
                    return redirect()->intended('KecamatanAsemRowo');
                }elseif($user->level == '28'){
                    return redirect()->intended('KecamatanBenowo');
                }elseif($user->level == '29'){
                    return redirect()->intended('KecamatanLakarsantri');
                }elseif($user->level == '30'){
                    return redirect()->intended('KecamatanPakal');
                }elseif($user->level == '31'){
                    return redirect()->intended('KecamatanSambikerep');
                }elseif($user->level == '32'){
                    return redirect()->intended('KecamatanSukomanunggal');
                }elseif($user->level == '33'){
                    return redirect()->intended('KecamatanTandes');
                }elseif($user->level == '34'){
                    return redirect()->intended('KelurahanDukuhKupang');
                }elseif($user->level == '35'){
                    return redirect()->intended('KelurahanDukuhPakis');
                }elseif($user->level == '36'){
                    return redirect()->intended('KelurahanGunungSari');
                }elseif($user->level == '37'){
                    return redirect()->intended('KelurahanPradahKaliKendal');
                }elseif($user->level == '38'){
                    return redirect()->intended('KelurahanDukuhMenanggal');
                }elseif($user->level == '39'){
                    return redirect()->intended('KelurahanGayungan');
                }elseif($user->level == '40'){
                    return redirect()->intended('KelurahanKetintang');
                }elseif($user->level == '41'){
                    return redirect()->intended('KelurahanMenanggal');
                }elseif($user->level == '42'){
                    return redirect()->intended('KelurahanJambangan');
                }elseif($user->level == '43'){
                    return redirect()->intended('KelurahanKarah');
                }elseif($user->level == '44'){
                    return redirect()->intended('KelurahanKebonsari');
                }elseif($user->level == '45'){
                    return redirect()->intended('KelurahanPagesangan');
                }elseif($user->level == '46'){
                    return redirect()->intended('KelurahanKarangPilang');
                }elseif($user->level == '47'){
                    return redirect()->intended('KelurahanKebraon');
                }elseif($user->level == '48'){
                    return redirect()->intended('KelurahanKedurus');
                }elseif($user->level == '49'){
                    return redirect()->intended('KelurahanWaruGunung');
                }elseif($user->level == '50'){
                    return redirect()->intended('KelurahanBanyuUrip');
                }elseif($user->level == '51'){
                    return redirect()->intended('KelurahanKupangKrajan');
                }elseif($user->level == '52'){
                    return redirect()->intended('KelurahanPakis');
                }elseif($user->level == '53'){
                    return redirect()->intended('KelurahanPutatJaya');
                }elseif($user->level == '54'){
                    return redirect()->intended('KelurahanSawahan');
                }elseif($user->level == '55'){
                    return redirect()->intended('KelurahanBabatan');
                }elseif($user->level == '56'){
                    return redirect()->intended('KelurahanBalasKlumprik');
                }elseif($user->level == '57'){
                    return redirect()->intended('KelurahanJajarTunggal');
                }elseif($user->level == '58'){
                    return redirect()->intended('KelurahanWiyung');
                }elseif($user->level == '59'){
                    return redirect()->intended('KelurahanBendulMerisi');
                }elseif($user->level == '60'){
                    return redirect()->intended('KelurahanWonosari');
                }elseif($user->level == '61'){
                    return redirect()->intended('KelurahanMargorejo');
                }elseif($user->level == '62'){
                    return redirect()->intended('KelurahanSidosermo');
                }elseif($user->level == '63'){
                    return redirect()->intended('KelurahanSiwalankerto');
                }elseif($user->level == '64'){
                    return redirect()->intended('KelurahanDarmo');
                }elseif($user->level == '65'){
                    return redirect()->intended('KelurahanJagir');
                }elseif($user->level == '66'){
                    return redirect()->intended('KelurahanNgagel');
                }elseif($user->level == '67'){
                    return redirect()->intended('KelurahanNgagelRejo');
                }elseif($user->level == '68'){
                    return redirect()->intended('KelurahanSawunggaling');
                }elseif($user->level == '69'){
                    return redirect()->intended('KelurahanWonokromo');
                }elseif($user->level == '70'){
                    return redirect()->intended('KelurahanAirlangga');
                }elseif($user->level == '71'){
                    return redirect()->intended('KelurahanBaratajaya');
                }elseif($user->level == '72'){
                    return redirect()->intended('KelurahanGubeng');
                }elseif($user->level == '73'){
                    return redirect()->intended('KelurahanKertajaya');
                }elseif($user->level == '74'){
                    return redirect()->intended('KelurahanMojo');
                }elseif($user->level == '75'){
                    return redirect()->intended('KelurahanPucangSewu');
                }elseif($user->level == '76'){
                    return redirect()->intended('KelurahanGunungAnyar');
                }elseif($user->level == '77'){
                    return redirect()->intended('KelurahanGunungAnyarTambak');
                }elseif($user->level == '78'){
                    return redirect()->intended('KelurahanRungkutMenanggal');
                }elseif($user->level == '79'){
                    return redirect()->intended('KelurahanRungkutTengah');
                }elseif($user->level == '80'){
                    return redirect()->intended('KelurahanDukuhSutorejo');
                }elseif($user->level == '81'){
                    return redirect()->intended('KelurahanKaliudan');
                }elseif($user->level == '82'){
                    return redirect()->intended('KelurahanKalisari');
                }elseif($user->level == '83'){
                    return redirect()->intended('KelurahanKejawanPutihTambak');
                }elseif($user->level == '84'){
                    return redirect()->intended('KelurahanManyarSabrangan');
                }elseif($user->level == '85'){
                    return redirect()->intended('KelurahanMulyorejo');
                }elseif($user->level == '86'){
                    return redirect()->intended('KelurahanKalirungkut');
                }elseif($user->level == '87'){
                    return redirect()->intended('KelurahanKedungBaruk');
                }elseif($user->level == '88'){
                    return redirect()->intended('KelurahanMedokanAyu');
                }elseif($user->level == '89'){
                    return redirect()->intended('KelurahanPenjaringansari');
                }elseif($user->level == '90'){
                    return redirect()->intended('KelurahanRungkutKidul');
                }elseif($user->level == '91'){
                    return redirect()->intended('KelurahanWonorejoRungkut');
                }elseif($user->level == '92'){
                    return redirect()->intended('KelurahanGebangPutih');
                }elseif($user->level == '93'){
                    return redirect()->intended('KelurahanKeputih');
                }elseif($user->level == '94'){
                    return redirect()->intended('KelurahanKlampisNgasem');
                }elseif($user->level == '95'){
                    return redirect()->intended('KelurahanMedokanSemampir');
                }elseif($user->level == '96'){
                    return redirect()->intended('KelurahanMenurPumpungan');
                }elseif($user->level == '97'){
                    return redirect()->intended('KelurahanNgindenJangkungan');
                }elseif($user->level == '98'){
                    return redirect()->intended('KelurahanSemolowaru');
                }elseif($user->level == '99'){
                    return redirect()->intended('KelurahanDukuhSetro');
                }elseif($user->level == '100'){
                    return redirect()->intended('KelurahanGading');
                }elseif($user->level == '101'){
                    return redirect()->intended('KelurahanKapasmadyaBaru');
                }elseif($user->level == '102'){
                    return redirect()->intended('KelurahanPacarkeling');
                }elseif($user->level == '103'){
                    return redirect()->intended('KelurahanPacarkembang');
                }elseif($user->level == '104'){
                    return redirect()->intended('KelurahanPloso');
                }elseif($user->level == '105'){
                    return redirect()->intended('KelurahanRangkah');
                }elseif($user->level == '106'){
                    return redirect()->intended('KelurahanTambaksari');
                }elseif($user->level == '107'){
                    return redirect()->intended('KelurahanKendangsari');
                }elseif($user->level == '108'){
                    return redirect()->intended('KelurahanKutisari');
                }elseif($user->level == '109'){
                    return redirect()->intended('KelurahanPanjangJiwo');
                }elseif($user->level == '110'){
                    return redirect()->intended('KelurahanTenggilisMejoyo');
                }elseif($user->level == '111'){
                    return redirect()->intended('KelurahanAlunAlunContong');
                }elseif($user->level == '112'){
                    return redirect()->intended('KelurahanBubutan');
                }elseif($user->level == '113'){
                    return redirect()->intended('KelurahanGundih');
                }elseif($user->level == '114'){
                    return redirect()->intended('KelurahanJepara');
                }elseif($user->level == '115'){
                    return redirect()->intended('KelurahanTembokDukuh');
                }elseif($user->level == '116'){
                    return redirect()->intended('KelurahanEmbongKaliasin');
                }elseif($user->level == '117'){
                    return redirect()->intended('KelurahanGenteng');
                }elseif($user->level == '118'){
                    return redirect()->intended('KelurahanKapasari');
                }elseif($user->level == '119'){
                    return redirect()->intended('KelurahanKetabang');
                }elseif($user->level == '120'){
                    return redirect()->intended('KelurahanPeneleh');
                }elseif($user->level == '121'){
                    return redirect()->intended('KelurahanKapasan');
                }elseif($user->level == '122'){
                    return redirect()->intended('KelurahanSidodadi');
                }elseif($user->level == '123'){
                    return redirect()->intended('KelurahanSimolawang');
                }elseif($user->level == '124'){
                    return redirect()->intended('KelurahanTambakrejo');
                }elseif($user->level == '125'){
                    return redirect()->intended('KelurahanDrSoetomo');
                }elseif($user->level == '126'){
                    return redirect()->intended('KelurahanKedungdoro');
                }elseif($user->level == '127'){
                    return redirect()->intended('KelurahanKeputran');
                }elseif($user->level == '128'){
                    return redirect()->intended('KelurahanTegalsari');
                }elseif($user->level == '129'){
                    return redirect()->intended('KelurahanWonorejoTegalsari');
                }elseif($user->level == '130'){
                    return redirect()->intended('KelurahanBulak');
                }elseif($user->level == '131'){
                    return redirect()->intended('KelurahanKedungCowek');
                }elseif($user->level == '132'){
                    return redirect()->intended('KelurahanKenjeran');
                }elseif($user->level == '133'){
                    return redirect()->intended('KelurahanSukoliloBaru');
                }elseif($user->level == '134'){
                    return redirect()->intended('KelurahanBulakBanteng');
                }elseif($user->level == '135'){
                    return redirect()->intended('KelurahanSidotopoWetan');
                }elseif($user->level == '136'){
                    return redirect()->intended('KelurahanTambakWedi');
                }elseif($user->level == '137'){
                    return redirect()->intended('KelurahanTanahKaliKedinding');
                }elseif($user->level == '138'){
                    return redirect()->intended('KelurahanDupak');
                }elseif($user->level == '139'){
                    return redirect()->intended('KelurahanKemayoran');
                }elseif($user->level == '140'){
                    return redirect()->intended('KelurahanKrembanganSelatan');
                }elseif($user->level == '141'){
                    return redirect()->intended('KelurahanMorokrembangan');
                }elseif($user->level == '142'){
                    return redirect()->intended('KelurahanPerakBarat');
                }elseif($user->level == '143'){
                    return redirect()->intended('KelurahanBongkaran');
                }elseif($user->level == '144'){
                    return redirect()->intended('KelurahanKrembanganUtara');
                }elseif($user->level == '145'){
                    return redirect()->intended('KelurahanNyamplungan');
                }elseif($user->level == '146'){
                    return redirect()->intended('KelurahanPerakTimur');
                }elseif($user->level == '147'){
                    return redirect()->intended('KelurahanPerakUtara');
                }elseif($user->level == '148'){
                    return redirect()->intended('KelurahanTanjungPerak');
                }elseif($user->level == '149'){
                    return redirect()->intended('KelurahanAmpel');
                }elseif($user->level == '150'){
                    return redirect()->intended('KelurahanPegirian');
                }elseif($user->level == '151'){
                    return redirect()->intended('KelurahanSidotopo');
                }elseif($user->level == '152'){
                    return redirect()->intended('KelurahanUjung');
                }elseif($user->level == '153'){
                    return redirect()->intended('KelurahanWonokusumo');
                }elseif($user->level == '154'){
                    return redirect()->intended('KelurahanAsemRowo');
                }elseif($user->level == '155'){
                    return redirect()->intended('KelurahanGentingKalianak');
                }elseif($user->level == '156'){
                    return redirect()->intended('KelurahanTambakSarioso');
                }elseif($user->level == '157'){
                    return redirect()->intended('KelurahanKandangan');
                }elseif($user->level == '158'){
                    return redirect()->intended('KelurahanRomokalisari');
                }elseif($user->level == '159'){
                    return redirect()->intended('KelurahanSememi');
                }elseif($user->level == '160'){
                    return redirect()->intended('KelurahanTambakOsoWilangun');
                }elseif($user->level == '161'){
                    return redirect()->intended('KelurahanBangkingan');
                }elseif($user->level == '162'){
                    return redirect()->intended('KelurahanJeruk');
                }elseif($user->level == '163'){
                    return redirect()->intended('KelurahanLakarsantri');
                }elseif($user->level == '164'){
                    return redirect()->intended('KelurahanLidahKulon');
                }elseif($user->level == '165'){
                    return redirect()->intended('KelurahanLidahWetan');
                }elseif($user->level == '166'){
                    return redirect()->intended('KelurahanSumurwelut');
                }elseif($user->level == '167'){
                    return redirect()->intended('KelurahanBabatJerawat');
                }elseif($user->level == '168'){
                    return redirect()->intended('KelurahanBenowo');
                }elseif($user->level == '169'){
                    return redirect()->intended('KelurahanPakal');
                }elseif($user->level == '170'){
                    return redirect()->intended('KelurahanSumberRejo');
                }elseif($user->level == '171'){
                    return redirect()->intended('KelurahanBeringin');
                }elseif($user->level == '172'){
                    return redirect()->intended('KelurahanLontar');
                }elseif($user->level == '173'){
                    return redirect()->intended('KelurahanMade');
                }elseif($user->level == '174'){
                    return redirect()->intended('KelurahanSambikerep');
                }elseif($user->level == '175'){
                    return redirect()->intended('KelurahanPutatGede');
                }elseif($user->level == '176'){
                    return redirect()->intended('KelurahanSimomulyo');
                }elseif($user->level == '177'){
                    return redirect()->intended('KelurahanSimomulyoBaru');
                }elseif($user->level == '178'){
                    return redirect()->intended('KelurahanSonokwijenan');
                }elseif($user->level == '179'){
                    return redirect()->intended('KelurahanSukomanunggal');
                }elseif($user->level == '180'){
                    return redirect()->intended('KelurahanTanjungsari');
                }elseif($user->level == '181'){
                    return redirect()->intended('KelurahanBalongsari');
                }elseif($user->level == '182'){
                    return redirect()->intended('KelurahanBanjarSugihan');
                }elseif($user->level == '183'){
                    return redirect()->intended('KelurahanKarangPoh');
                }elseif($user->level == '184'){
                    return redirect()->intended('KelurahanManukanKulon');
                }elseif($user->level == '185'){
                    return redirect()->intended('KelurahanManukanWetan');
                }elseif($user->level == '186'){
                    return redirect()->intended('KelurahanTandes');
                }elseif($user->level == '187'){
                    return redirect()->intended('KelurahanSimokerto');
                }elseif($user->level == '188'){
                    return redirect()->intended('KelurahanPetemon');
                }
            }

            return view('login.index');
        }

        public function process(Request $request){
            $request->validate([
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'username tidak boleh kososng'
            ]
        );

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)){
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level == '1'){
                    return redirect()->intended('SuperAdmin');
                }elseif($user->level =='999'){
                    return redirect()->intended('kota');
                }elseif($user->level == '998'){
                    return redirect()->intended('kecamatan');
                }elseif($user->level == '997'){
                    return redirect()->intended('kelurahan');
                }elseif($user->level== '2'){
                    return redirect()->intended('KotaSurabaya');
                }elseif($user->level == '3'){
                    return redirect()->intended('KecamatanDukuhPakis');
                }elseif($user->level == '4'){
                    return redirect()->intended('KecamatanGayungan');
                }elseif($user->level == '5'){
                    return redirect()->intended('KecamatanJambangan');
                }elseif($user->level == '6'){
                    return redirect()->intended('KecamatanKarangPilang');
                }elseif($user->level == '7'){
                    return redirect()->intended('KecamatanSawahan');
                }elseif($user->level == '8'){
                    return redirect()->intended('KecamatanWiyung');
                }elseif($user->level == '9'){
                    return redirect()->intended('KecamatanWonocolo');
                }elseif($user->level == '10'){
                    return redirect()->intended('KecamatanWonokromo');
                }elseif($user->level == '11'){
                    return redirect()->intended('KecamatanGubeng');
                }elseif($user->level == '12'){
                    return redirect()->intended('KecamatanGunungAnyar');
                }elseif($user->level == '13'){
                    return redirect()->intended('KecamatanMulyorejo');
                }elseif($user->level == '14'){
                    return redirect()->intended('KecamatanRungkut');
                }elseif($user->level == '15'){
                    return redirect()->intended('KecamatanSukolilo');
                }elseif($user->level == '16'){
                    return redirect()->intended('KecamatanTambaksari');
                }elseif($user->level == '17'){
                    return redirect()->intended('KecamatanTenggilisMejoyo');
                }elseif($user->level == '18'){
                    return redirect()->intended('KecamatanBubutan');
                }elseif($user->level == '19'){
                    return redirect()->intended('KecamatanGenteng');
                }elseif($user->level == '20'){
                    return redirect()->intended('KecamatanSimokerto');
                }elseif($user->level == '21'){
                    return redirect()->intended('KecamatanTegalsari');
                }elseif($user->level == '22'){
                    return redirect()->intended('KecamatanBulak');
                }elseif($user->level == '23'){
                    return redirect()->intended('KecamatanKenjeran');
                }elseif($user->level == '24'){
                    return redirect()->intended('KecamatanKrembangan');
                }elseif($user->level == '25'){
                    return redirect()->intended('KecamatanPabeanCantian');
                }elseif($user->level == '26'){
                    return redirect()->intended('KecamatanSemampir');
                }elseif($user->level == '27'){
                    return redirect()->intended('KecamatanAsemRowo');
                }elseif($user->level == '28'){
                    return redirect()->intended('KecamatanBenowo');
                }elseif($user->level == '29'){
                    return redirect()->intended('KecamatanLakarsantri');
                }elseif($user->level == '30'){
                    return redirect()->intended('KecamatanPakal');
                }elseif($user->level == '31'){
                    return redirect()->intended('KecamatanSambikerep');
                }elseif($user->level == '32'){
                    return redirect()->intended('KecamatanSukomanunggal');
                }elseif($user->level == '33'){
                    return redirect()->intended('KecamatanTandes');
                }elseif($user->level == '34'){
                    return redirect()->intended('KelurahanDukuhKupang');
                }elseif($user->level == '35'){
                    return redirect()->intended('KelurahanDukuhPakis');
                }elseif($user->level == '36'){
                    return redirect()->intended('KelurahanGunungSari');
                }elseif($user->level == '37'){
                    return redirect()->intended('KelurahanPradahKaliKendal');
                }elseif($user->level == '38'){
                    return redirect()->intended('KelurahanDukuhMenanggal');
                }elseif($user->level == '39'){
                    return redirect()->intended('KelurahanGayungan');
                }elseif($user->level == '40'){
                    return redirect()->intended('KelurahanKetintang');
                }elseif($user->level == '41'){
                    return redirect()->intended('KelurahanMenanggal');
                }elseif($user->level == '42'){
                    return redirect()->intended('KelurahanJambangan');
                }elseif($user->level == '43'){
                    return redirect()->intended('KelurahanKarah');
                }elseif($user->level == '44'){
                    return redirect()->intended('KelurahanKebonsari');
                }elseif($user->level == '45'){
                    return redirect()->intended('KelurahanPagesangan');
                }elseif($user->level == '46'){
                    return redirect()->intended('KelurahanKarangPilang');
                }elseif($user->level == '47'){
                    return redirect()->intended('KelurahanKebraon');
                }elseif($user->level == '48'){
                    return redirect()->intended('KelurahanKedurus');
                }elseif($user->level == '49'){
                    return redirect()->intended('KelurahanWaruGunung');
                }elseif($user->level == '50'){
                    return redirect()->intended('KelurahanBanyuUrip');
                }elseif($user->level == '51'){
                    return redirect()->intended('KelurahanKupangKrajan');
                }elseif($user->level == '52'){
                    return redirect()->intended('KelurahanPakis');
                }elseif($user->level == '53'){
                    return redirect()->intended('KelurahanPutatJaya');
                }elseif($user->level == '54'){
                    return redirect()->intended('KelurahanSawahan');
                }elseif($user->level == '55'){
                    return redirect()->intended('KelurahanBabatan');
                }elseif($user->level == '56'){
                    return redirect()->intended('KelurahanBalasKlumprik');
                }elseif($user->level == '57'){
                    return redirect()->intended('KelurahanJajarTunggal');
                }elseif($user->level == '58'){
                    return redirect()->intended('KelurahanWiyung');
                }elseif($user->level == '59'){
                    return redirect()->intended('KelurahanBendulMerisi');
                }elseif($user->level == '60'){
                    return redirect()->intended('KelurahanWonosari');
                }elseif($user->level == '61'){
                    return redirect()->intended('KelurahanMargorejo');
                }elseif($user->level == '62'){
                    return redirect()->intended('KelurahanSidosermo');
                }elseif($user->level == '63'){
                    return redirect()->intended('KelurahanSiwalankerto');
                }elseif($user->level == '64'){
                    return redirect()->intended('KelurahanDarmo');
                }elseif($user->level == '65'){
                    return redirect()->intended('KelurahanJagir');
                }elseif($user->level == '66'){
                    return redirect()->intended('KelurahanNgagel');
                }elseif($user->level == '67'){
                    return redirect()->intended('KelurahanNgagelRejo');
                }elseif($user->level == '68'){
                    return redirect()->intended('KelurahanSawunggaling');
                }elseif($user->level == '69'){
                    return redirect()->intended('KelurahanWonokromo');
                }elseif($user->level == '70'){
                    return redirect()->intended('KelurahanAirlangga');
                }elseif($user->level == '71'){
                    return redirect()->intended('KelurahanBaratajaya');
                }elseif($user->level == '72'){
                    return redirect()->intended('KelurahanGubeng');
                }elseif($user->level == '73'){
                    return redirect()->intended('KelurahanKertajaya');
                }elseif($user->level == '74'){
                    return redirect()->intended('KelurahanMojo');
                }elseif($user->level == '75'){
                    return redirect()->intended('KelurahanPucangSewu');
                }elseif($user->level == '76'){
                    return redirect()->intended('KelurahanGunungAnyar');
                }elseif($user->level == '77'){
                    return redirect()->intended('KelurahanGunungAnyarTambak');
                }elseif($user->level == '78'){
                    return redirect()->intended('KelurahanRungkutMenanggal');
                }elseif($user->level == '79'){
                    return redirect()->intended('KelurahanRungkutTengah');
                }elseif($user->level == '80'){
                    return redirect()->intended('KelurahanDukuhSutorejo');
                }elseif($user->level == '81'){
                    return redirect()->intended('KelurahanKaliudan');
                }elseif($user->level == '82'){
                    return redirect()->intended('KelurahanKalisari');
                }elseif($user->level == '83'){
                    return redirect()->intended('KelurahanKejawanPutihTambak');
                }elseif($user->level == '84'){
                    return redirect()->intended('KelurahanManyarSabrangan');
                }elseif($user->level == '85'){
                    return redirect()->intended('KelurahanMulyorejo');
                }elseif($user->level == '86'){
                    return redirect()->intended('KelurahanKalirungkut');
                }elseif($user->level == '87'){
                    return redirect()->intended('KelurahanKedungBaruk');
                }elseif($user->level == '88'){
                    return redirect()->intended('KelurahanMedokanAyu');
                }elseif($user->level == '89'){
                    return redirect()->intended('KelurahanPenjaringansari');
                }elseif($user->level == '90'){
                    return redirect()->intended('KelurahanRungkutKidul');
                }elseif($user->level == '91'){
                    return redirect()->intended('KelurahanWonorejoRungkut');
                }elseif($user->level == '92'){
                    return redirect()->intended('KelurahanGebangPutih');
                }elseif($user->level == '93'){
                    return redirect()->intended('KelurahanKeputih');
                }elseif($user->level == '94'){
                    return redirect()->intended('KelurahanKlampisNgasem');
                }elseif($user->level == '95'){
                    return redirect()->intended('KelurahanMedokanSemampir');
                }elseif($user->level == '96'){
                    return redirect()->intended('KelurahanMenurPumpungan');
                }elseif($user->level == '97'){
                    return redirect()->intended('KelurahanNgindenJangkungan');
                }elseif($user->level == '98'){
                    return redirect()->intended('KelurahanSemolowaru');
                }elseif($user->level == '99'){
                    return redirect()->intended('KelurahanDukuhSetro');
                }elseif($user->level == '100'){
                    return redirect()->intended('KelurahanGading');
                }elseif($user->level == '101'){
                    return redirect()->intended('KelurahanKapasmadyaBaru');
                }elseif($user->level == '102'){
                    return redirect()->intended('KelurahanPacarkeling');
                }elseif($user->level == '103'){
                    return redirect()->intended('KelurahanPacarkembang');
                }elseif($user->level == '104'){
                    return redirect()->intended('KelurahanPloso');
                }elseif($user->level == '105'){
                    return redirect()->intended('KelurahanRangkah');
                }elseif($user->level == '106'){
                    return redirect()->intended('KelurahanTambaksari');
                }elseif($user->level == '107'){
                    return redirect()->intended('KelurahanKendangsari');
                }elseif($user->level == '108'){
                    return redirect()->intended('KelurahanKutisari');
                }elseif($user->level == '109'){
                    return redirect()->intended('KelurahanPanjangJiwo');
                }elseif($user->level == '110'){
                    return redirect()->intended('KelurahanTenggilisMejoyo');
                }elseif($user->level == '111'){
                    return redirect()->intended('KelurahanAlunAlunContong');
                }elseif($user->level == '112'){
                    return redirect()->intended('KelurahanBubutan');
                }elseif($user->level == '113'){
                    return redirect()->intended('KelurahanGundih');
                }elseif($user->level == '114'){
                    return redirect()->intended('KelurahanJepara');
                }elseif($user->level == '115'){
                    return redirect()->intended('KelurahanTembokDukuh');
                }elseif($user->level == '116'){
                    return redirect()->intended('KelurahanEmbongKaliasin');
                }elseif($user->level == '117'){
                    return redirect()->intended('KelurahanGenteng');
                }elseif($user->level == '118'){
                    return redirect()->intended('KelurahanKapasari');
                }elseif($user->level == '119'){
                    return redirect()->intended('KelurahanKetabang');
                }elseif($user->level == '120'){
                    return redirect()->intended('KelurahanPeneleh');
                }elseif($user->level == '121'){
                    return redirect()->intended('KelurahanKapasan');
                }elseif($user->level == '122'){
                    return redirect()->intended('KelurahanSidodadi');
                }elseif($user->level == '123'){
                    return redirect()->intended('KelurahanSimolawang');
                }elseif($user->level == '124'){
                    return redirect()->intended('KelurahanTambakrejo');
                }elseif($user->level == '125'){
                    return redirect()->intended('KelurahanDrSoetomo');
                }elseif($user->level == '126'){
                    return redirect()->intended('KelurahanKedungdoro');
                }elseif($user->level == '127'){
                    return redirect()->intended('KelurahanKeputran');
                }elseif($user->level == '128'){
                    return redirect()->intended('KelurahanTegalsari');
                }elseif($user->level == '129'){
                    return redirect()->intended('KelurahanWonorejoTegalsari');
                }elseif($user->level == '130'){
                    return redirect()->intended('KelurahanBulak');
                }elseif($user->level == '131'){
                    return redirect()->intended('KelurahanKedungCowek');
                }elseif($user->level == '132'){
                    return redirect()->intended('KelurahanKenjeran');
                }elseif($user->level == '133'){
                    return redirect()->intended('KelurahanSukoliloBaru');
                }elseif($user->level == '134'){
                    return redirect()->intended('KelurahanBulakBanteng');
                }elseif($user->level == '135'){
                    return redirect()->intended('KelurahanSidotopoWetan');
                }elseif($user->level == '136'){
                    return redirect()->intended('KelurahanTambakWedi');
                }elseif($user->level == '137'){
                    return redirect()->intended('KelurahanTanahKaliKedinding');
                }elseif($user->level == '138'){
                    return redirect()->intended('KelurahanDupak');
                }elseif($user->level == '139'){
                    return redirect()->intended('KelurahanKemayoran');
                }elseif($user->level == '140'){
                    return redirect()->intended('KelurahanKrembanganSelatan');
                }elseif($user->level == '141'){
                    return redirect()->intended('KelurahanMorokrembangan');
                }elseif($user->level == '142'){
                    return redirect()->intended('KelurahanPerakBarat');
                }elseif($user->level == '143'){
                    return redirect()->intended('KelurahanBongkaran');
                }elseif($user->level == '144'){
                    return redirect()->intended('KelurahanKrembanganUtara');
                }elseif($user->level == '145'){
                    return redirect()->intended('KelurahanNyamplungan');
                }elseif($user->level == '146'){
                    return redirect()->intended('KelurahanPerakTimur');
                }elseif($user->level == '147'){
                    return redirect()->intended('KelurahanPerakUtara');
                }elseif($user->level == '148'){
                    return redirect()->intended('KelurahanTanjungPerak');
                }elseif($user->level == '149'){
                    return redirect()->intended('KelurahanAmpel');
                }elseif($user->level == '150'){
                    return redirect()->intended('KelurahanPegirian');
                }elseif($user->level == '151'){
                    return redirect()->intended('KelurahanSidotopo');
                }elseif($user->level == '152'){
                    return redirect()->intended('KelurahanUjung');
                }elseif($user->level == '153'){
                    return redirect()->intended('KelurahanWonokusumo');
                }elseif($user->level == '154'){
                    return redirect()->intended('KelurahanAsemRowo');
                }elseif($user->level == '155'){
                    return redirect()->intended('KelurahanGentingKalianak');
                }elseif($user->level == '156'){
                    return redirect()->intended('KelurahanTambakSarioso');
                }elseif($user->level == '157'){
                    return redirect()->intended('KelurahanKandangan');
                }elseif($user->level == '158'){
                    return redirect()->intended('KelurahanRomokalisari');
                }elseif($user->level == '159'){
                    return redirect()->intended('KelurahanSememi');
                }elseif($user->level == '160'){
                    return redirect()->intended('KelurahanTambakOsoWilangun');
                }elseif($user->level == '161'){
                    return redirect()->intended('KelurahanBangkingan');
                }elseif($user->level == '162'){
                    return redirect()->intended('KelurahanJeruk');
                }elseif($user->level == '163'){
                    return redirect()->intended('KelurahanLakarsantri');
                }elseif($user->level == '164'){
                    return redirect()->intended('KelurahanLidahKulon');
                }elseif($user->level == '165'){
                    return redirect()->intended('KelurahanLidahWetan');
                }elseif($user->level == '166'){
                    return redirect()->intended('KelurahanSumurwelut');
                }elseif($user->level == '167'){
                    return redirect()->intended('KelurahanBabatJerawat');
                }elseif($user->level == '168'){
                    return redirect()->intended('KelurahanBenowo');
                }elseif($user->level == '169'){
                    return redirect()->intended('KelurahanPakal');
                }elseif($user->level == '170'){
                    return redirect()->intended('KelurahanSumberRejo');
                }elseif($user->level == '171'){
                    return redirect()->intended('KelurahanBeringin');
                }elseif($user->level == '172'){
                    return redirect()->intended('KelurahanLontar');
                }elseif($user->level == '173'){
                    return redirect()->intended('KelurahanMade');
                }elseif($user->level == '174'){
                    return redirect()->intended('KelurahanSambikerep');
                }elseif($user->level == '175'){
                    return redirect()->intended('KelurahanPutatGede');
                }elseif($user->level == '176'){
                    return redirect()->intended('KelurahanSimomulyo');
                }elseif($user->level == '177'){
                    return redirect()->intended('KelurahanSimomulyoBaru');
                }elseif($user->level == '178'){
                    return redirect()->intended('KelurahanSonokwijenan');
                }elseif($user->level == '179'){
                    return redirect()->intended('KelurahanSukomanunggal');
                }elseif($user->level == '180'){
                    return redirect()->intended('KelurahanTanjungsari');
                }elseif($user->level == '181'){
                    return redirect()->intended('KelurahanBalongsari');
                }elseif($user->level == '182'){
                    return redirect()->intended('KelurahanBanjarSugihan');
                }elseif($user->level == '183'){
                    return redirect()->intended('KelurahanKarangPoh');
                }elseif($user->level == '184'){
                    return redirect()->intended('KelurahanManukanKulon');
                }elseif($user->level == '185'){
                    return redirect()->intended('KelurahanManukanWetan');
                }elseif($user->level == '186'){
                    return redirect()->intended('KelurahanTandes');
                }elseif($user->level == '187'){
                    return redirect()->intended('KelurahanSimokerto');
                }elseif($user->level == '188'){
                    return redirect()->intended('KelurahanPetemon');
                }

            return redirect()->intended('/');
        }
    
            return back()-> withErrors([
                'username' => 'Maaf username atau password anda salah'
            ])->onlyInput('username');
        }

        public function logout(Request $request){
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }

    }
