@extends('content.layouts.layouts')

@section('content-side')
<ul class="listing-kec-kel">
    <li><div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Kecamatan
        </a>
      
        <ul class="dropdown-menu" id="sortable-list">
          <li><a class="dropdown-item" href="{{url('KecamatanTegalsari') }}">Kecamatan Tegalsari</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanSimokerto') }}">Kecamatan Simokerto</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanGenteng') }}">Kecamatan Genteng</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanBubutan') }}">Kecamatan Bubutan</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanDukuhPakis') }}">Kecamatan Dukuh Pakis</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanGunungAnyar') }}">Kecamatan Gunung Anyar</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanSukolilo') }}">Kecamatan Sukolilo</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanTambaksari') }}">Kecamatan Tambaksari</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanMulyorejo') }}">Kecamatan Mulyorejo</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanRungkut') }}">Kecamatan Rungkut</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanTenggilisMejoyo') }}">Kecamatan Tenggilis Mejoyo</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanBenowo') }}">Kecamatan Benowo</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanPakal') }}">Kecamatan Pakal</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanAsemRowo') }}">Kecamatan Asemrowo</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanSukomanunggal') }}">Kecamatan Sukomanunggal</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanTandes') }}">Kecamatan Tandes</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanSambikerep') }}">Kecamatan Sambikerep</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanLakarsantri') }}">Kecamatan Lakarsantri</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanBulak') }}">Kecamatan Bulak</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanKenjeran') }}">Kecamatan Kenjeran</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanSemampir') }}">Kecamatan Semampir</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanPabeanCantian') }}">Kecamatan Pabean Cantian</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanKrembangan') }}">Kecamatan Krembangan</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanWonokromo') }}">Kecamatan Wonokromo</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanWonocolo') }}">Kecamatan Wonocolo</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanWiyung') }}">Kecamatan Wiyung</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanKarangPilang') }}">Kecamatan Karang Pilang</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanJambangan') }}">Kecamatan Jambangan</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanGayungan') }}">Kecamatan Gayungan</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanDukuhPakis') }}">Kecamatan Dukuh Pakis</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanSawahan') }}">Kecamatan Sawahan</a></li>
          <li><a class="dropdown-item" href="{{url('KecamatanGubeng') }}">Kecamatan Gubeng</a></li>
        </ul>
      </div>
    </li>
    <li>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kelurahan
            </a>
          
            <ul class="dropdown-menu" id="sortkl">
              <li><a class="dropdown-item" href="{{url('KelurahanDukuhKupang') }}">Kelurahan Dukuh Kupang</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanDukuhPakis') }}">Kelurahan Dukuh Pakis</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGunungSari') }}">Kelurahan Gunung Sari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPradahKalikendal') }}">Kelurahan Pradah Kalikendal</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanDukuhMenanggal') }}">Kelurahan Dukuh Menanggal</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGayungan') }}">Kelurahan Gayungan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKetintang') }}">Kelurahan Ketintang</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanMenanggal') }}">Kelurahan Menanggal</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanJambangan') }}">Kelurahan Jambangan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKarah') }}">Kelurahan Karah</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKebonsari') }}">Kelurahan Kebonsari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPagesangan') }}">Kelurahan Pagesangan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKarangPilang') }}">Kelurahan Karang Pilang</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKebraon') }}">Kelurahan Kebraon</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKedurus') }}">Kelurahan Kedurus</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanWaruGunung') }}">Kelurahan Waru Gunung</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBanyuUrip') }}">Kelurahan Banyu Urip</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKupangKrajan') }}">Kelurahan Kupang Prajan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPakis') }}">Kelurahan Pakis</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPetemon') }}">Kelurahan Petemon</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPutatJaya') }}">Kelurahan Putat Jaya</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSawahan') }}">Kelurahan Sawahan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBabatan') }}">Kelurahan Babatan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBalasKlumprik') }}">Kelurahan Balas Krumpik</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanJajarTunggal') }}">Kelurahan Jajar Tunggal</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanWiyung') }}">Kelurahan Wiyung</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBendulMerisi') }}">Kelurahan Bendul Merisi</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanJemurWonosari') }}">Kelurahan Jemur Wonosari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanMargorejo') }}">Kelurahan Margorejo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSidosermo') }}">Kelurahan Sidosermo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSiwalankerto') }}">Kelurahan Siwalankerto</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanDarmo') }}">Kelurahan Darmo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanJagir') }}">Kelurahan Jagir</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanNgagel') }}">Kelurahan Ngagel</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanNgagelRejo') }}">Kelurahan Ngagel Rejo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSawunggaling') }}">Kelurahan Sawunggaling</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanWonokromo') }}">Kelurahan Wonokromo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanAirlangga') }}">Kelurahan Airlangga</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBaratajaya') }}">Kelurahan Baratajaya</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGubeng') }}">Kelurahan Gubeng</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKertajaya') }}">Kelurahan Kertajaya</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanMojo') }}">Kelurahan Mojo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPucangSewu') }}">Kelurahan Pucang Sewu</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGunungAnyar') }}">Kelurahan Gunung Anyar</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGunungAnyarTambak') }}">Kelurahan Gunung Anyar Tambak</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanRungkutMenanggal') }}">Kelurahan Rungkut Menanggal</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanRungkutTengah') }}">Kelurahan Rungkut Tengah</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanDukuhSutorejo') }}">Kelurahan Dukuh Suterejo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKalijudan') }}">Kelurahan Kalijudan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKalisari') }}">Kelurahan Kalisari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKejawanPutihTambak') }}">Kelurahan Kejawan Putih Tambak</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanManyarSabrangan') }}">Kelurahan Manyar Sabrangan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanMulyorejo') }}">Kelurahan Mulyorejo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKalirungkut') }}">Kelurahan Kalirungkut</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKedungBaruk') }}">Kelurahan Kedung Baruk</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanMedokanAyu') }}">Kelurahan Medokan Ayu</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPenjaringanSari') }}">Kelurahan Penjaringansari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanRungkutKidul') }}">Kelurahan Rungkut Kidul</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanWonorejoRungkut') }}">Kelurahan Wonorejo Rungkut</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGebangPutih') }}">Kelurahan Gebang Putih</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKeputih') }}">Kelurahan Keputih</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKlampisNgasem') }}">Kelurahan Klampis Ngasem</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanMedokanSemampir') }}">Kelurahan Medokan Semampir</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanMenurPumpungan') }}">Kelurahan Menur Pumpungan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanNgindenJangkungan') }}">Kelurahan Nginden Jangkungan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSemolowaru') }}">Kelurahan Semolowaru</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanDukuhSetro') }}">Kelurahan Dukuh Setro</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGading') }}">Kelurahan Gading</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKapasmadyaBaru') }}">Kelurahan Kapasmadya Baru</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPacarkeling') }}">Kelurahan Pacarkeling</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPacarkembang') }}">Kelurahan Pacarkembang</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPloso') }}">Kelurahan Ploso</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanRangkah') }}">Kelurahan Rangkah</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTambaksari') }}">Kelurahan Tambaksari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKendangsari') }}">Kelurahan Kendangsari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKutisari') }}">Kelurahan Kutisari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPanjangJiwo') }}">Kelurahan Panjang Jiwo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTenggilisMejoyo') }}">Kelurahan Tenggilis Mejoyo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanAlunAlunContong') }}">Kelurahan Alun-Alun Contong</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBubutan') }}">Kelurahan Bubutan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGundih') }}">Kelurahan Gundih</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanJepara') }}">Kelurahan Jepara</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTembokDukuh') }}">Kelurahan Tembok Dukuh</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanEmbongKaliasin') }}">Kelurahan Embong Kaliasin</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGenteng') }}">Kelurahan Genteng</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKapasari') }}">Kelurahan Kapasari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKetabang') }}">Kelurahan Ketabang</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPeneleh') }}">Kelurahan Peneleh</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKapasan') }}">Kelurahan Kapasan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSidodadi') }}">Kelurahan Sidodadi</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSimokerto') }}">Kelurahan Simokerto</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSimolawang') }}">Kelurahan Simolawang</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTambakrejo') }}">Kelurahan Tambakrejo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanDrSoetomo') }}">Kelurahan Dr.Soetomo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKedungdoro') }}">Kelurahan Kedungdoro</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKeputran') }}">Kelurahan Keputran</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTegalsari') }}">Kelurahan Tegalsari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanWonorejoTegalsari') }}">Kelurahan Wonorejo Tegalsari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBulak') }}">Kelurahan Bulak</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKedungCowek') }}">Kelurahan Kedung Cowek</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKenjeran') }}">Kelurahan Kenjeran</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSukoliloBaru') }}">Kelurahan Sukolilo Baru</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBulakBanteng') }}">Kelurahan Bulak Banteng</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSidotopoWetan') }}">Kelurahan Sidotopo Wetan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTambakWedi') }}">Kelurahan Tambak Wedi</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTanahKaliKedinding') }}">Kelurahan Tanah Kali Kedinding</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanDupak') }}">Kelurahan Dupak</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKemayoran') }}">Kelurahan Kemayoran</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKrembanganSelatan') }}">Kelurahan Krembangan Selatan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanMorokrembangan') }}">Kelurahan Monokrembangan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPerakBarat') }}">Kelurahan Perak Barat</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBongkaran') }}">Kelurahan Bongkaran</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKrembanganUtara') }}">Kelurahan Krembangan Utara</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanNyamplungan') }}">Kelurahan Nyamplungan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPerakTimur') }}">Kelurahan Perak Timur</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPerakUtara') }}">Kelurahan Perak Utara</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTanjungPerak') }}">Kelurahan Tanjung Perak</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanAmpel') }}">Kelurahan Ampel</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPegirian') }}">Kelurahan Pegirian</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSidotopo') }}">Kelurahan Sidotopo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanUjung') }}">Kelurahan Ujung</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanWonokusumo') }}">Kelurahan Wonokusumo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanAsemRowo') }}">Kelurahan Asem Rowo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanGentingKalianak') }}">Kelurahan Genting Kalianak</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTambakSarioso') }}">Kelurahan Tambak Sarioso</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKandangan') }}">Kelurahan Kandangan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanRomokalisari') }}">Kelurahan Romokalisari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSememi') }}">Kelurahan Sememi</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTambakOsoWilangun') }}">Kelurahan Tambak Oso Wilangun</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBangkingan') }}">Kelurahan Bangkingan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanJeruk') }}">Kelurahan Jeruk</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanLakarsantri') }}">Kelurahan Lakarsantri</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanLidahKulon') }}">Kelurahan Lidah Kulon</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanLidahWetan') }}">Kelurahan Lidah Wetan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSumurwelut') }}">Kelurahan Sumur Welut</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBabatJerawat') }}">Kelurahan Babak Jerawat</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBenowo') }}">Kelurahan Benowo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPakal') }}">Kelurahan Pakal</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSumberRejo') }}">Kelurahan Sumber Rejo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBeringin') }}">Kelurahan Beringin</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanLontar') }}">Kelurahan Lontar</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanMade') }}">Kelurahan Made</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSambikerep') }}">Kelurahan Sambikerep</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanPutatGede') }}">Kelurahan Putat Gede</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSimomulyo') }}">Kelurahan Simomulyo</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSimomulyoBaru') }}">Kelurahan Simomulyo Baru</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSonokwijenan') }}">Kelurahan Sonokwijenan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanSukomanunggal') }}">Kelurahan Sukomanunggal</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTanjungsari') }}">Kelurahan Tanjungsari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBalongsari') }}">Kelurahan Balongsari</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanBanjarSugihan') }}">Kelurahan Banjar Sugihan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanKarangPoh') }}">Kelurahan Karang Poh</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanManukanKulon') }}">Kelurahan Manukan Kulon</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanManukanWetan') }}">Kelurahan Manukan</a></li>
              <li><a class="dropdown-item" href="{{url('KelurahanTandes') }}">Kelurahan Tandes</a></li>
            </ul>
          </div>
    </li>
</ul>
@endsection

@section('content-main')
<div class="container-name">
  <h1>Selamat Datang Di Kota Surabaya</h1>
</div>
<div class="content-main-bg">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- TOMBOL TAMBAH DATA dan SEARCH BAR-->
            <div class="pb-3">
              <a href='{{ url('KotaSurabaya/create') }}' class="btn btn-primary">+ Tambah Data</a>

              <form action="{{ route('kotasurabaya.search') }}" method="GET" class="form-inline mb-3">
                <div class="input-group input-group-sm">
                  <input type="text" name="keyword" class="form-control" placeholder="Cari...">
                  <div class="input-group-append">
                      <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                  </div>
                </div>
              </form>

            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-3">Tahapan yang Diawasi</th>
                        <th class="col-md-2">Nomor Surat Perintah Tugas</th>
                        <th class="col-md-2">Waktu dan Tempat</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem() ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->tahapan }}</td>
                        <td>{{ $item->nomor }}</td>
                        <td>{{ $item->waktu_dan_tempat }}</td>
                        <td>
                            <a href='{{ url('KotaSurabaya/'.$item->tahapan.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <a href='{{ url("KotaSurabaya/".$item->tahapan) }}' class="btn btn-success btn-sm">PDF</a>
                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('KotaSurabaya/'.$item->tahapan) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach 
                </tbody>
            </table>
            {{ $data->links() }}
    </div>
</div>

<script>
  // Get the list items and convert them to an array
  const list1 = Array.from(document.querySelectorAll('#sortable-list li'));

  // Sort the list alphabetically based on the text content of the anchor tags
  list1.sort((a, b) => {
      const textA = a.textContent.trim().toUpperCase();
      const textB = b.textContent.trim().toUpperCase();
      return textA.localeCompare(textB);
  });

  // Clear the existing list items
  const parent1 = document.querySelector('#sortable-list');
  parent1.innerHTML = '';

  // Append the sorted list items back to the parent element
  list1.forEach(item => {
      parent1.appendChild(item);
  });
</script>

<script>
  // Get the list items and convert them to an array
  const list2 = Array.from(document.querySelectorAll('#sortkl li'));

  // Sort the list alphabetically based on the text content of the anchor tags
  list2.sort((a, b) => {
      const textA = a.querySelector('a').textContent.trim().toUpperCase();
      const textB = b.querySelector('a').textContent.trim().toUpperCase();
      return textA.localeCompare(textB);
  });

  // Clear the existing list items
  const parent2 = document.querySelector('#sortkl');
  parent2.innerHTML = '';

  // Append the sorted list items back to the parent element
  list2.forEach(item => {
      parent2.appendChild(item);
  });
</script>

@endsection