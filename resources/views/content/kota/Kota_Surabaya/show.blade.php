@extends('content.pdf.pdf')

@section('content')
<div class="content-main-pdf-bg">
        <div class="kertasA4">
            <ul>
                <li>
                    <h1 class="bab">I. Data Pengawasan Pemilihan:</h1>
                    <p class="p">Tahapan yang diawasi : {{ $data->tahapan }}</p>
                    <p class="p">Nama Pelaksana Tugas Pengawasan : {{ $data->nama_pelaksana }}</p>
                    <p class="p">Jabatan : {{ $data->jabatan }}</p>
                    <p class="p">Nomor Surat Perintah Tugas : {{ $data->nomor }}</p>
                    <p class="p">Alamat : {{ $data->alamat }}</p>
                </li>

                <li>
                    <h1 class="bab">II. Kegiatan Pengawasan:</h1>
                    <p class="p">a. Bentuk : {{ $data->bentuk }}</p>
                    <p class="p">b. Tujuan : {{ $data->tujuan }}</p>
                    <p class="p">c. Sasaran : {{ $data->sasaran }}</p>
                    <p class="p">d. Waktu dan Tempat : {{ $data->waktu_dan_tempat }}</p>
                </li>

                <li>
                    <h1 class="bab">III. Uraian Singkat Hasil Pengawasan</h1>
                    <p class="p uraian-content"> {{ $data->uraian }}</p>
                </li>

                <li>
                    <h1 class="bab">IV. Informasi Dugaan Pelanggaran</h1>
                    <p class="p">1. Peristiwa</p>
                    <p class="p">a. Peristiwa :</p>
                    <p class="p">b. Tempat Kejadian :</p>
                    <p class="p">c. Waktu Kejadian :</p>
                    <p class="p">d. Pelaku :</p>
                    <p class="p">e. Alamat :</p>
                    &nbsp;
                    <p class="p">2. Saksi-saksi</p>
                    <p class="p">a. Nama :</p>
                    <p class="p">Alamat :</p>
                    <p class="p">b. Nama :</p>
                    <p class="p">Alamat :</p>
                    &nbsp;
                    <p class="p">3. Alat Bukti</p>
                    <p class="p">a. :</p>
                    <p class="p">b. :</p>
                    <p class="p">c. :</p>
                    &nbsp;
                    <p class="p">4. Barang Bukti</p>
                    <p class="p">a. : </p>
                    <p class="p">b. : </p>
                    <p class="p">c. : </p>
                    &nbsp;
                    <p class="p">5. Uraian Singkat Dugaan Pelanggaran :</p>
                    &nbsp;
                    <p class="p">6. Fakta dan Keterangan :</p>
                    &nbsp;
                    <p class="p">7. Analisa : </p>
                </li>

                <li>
                    <h1 class="bab">V. Informasi Potensi Sengketa</h1>
                    <p class="p">1.Peristiwa</p>
                    <p class="p">a. Peserta Pemilu :</p>
                    <p class="p">b. Tempat Kejadian :</p>
                    <p class="p">c. Waktu Kejadian :</p>
                    &nbsp;
                    <p class="p">2. Objek Sengketa</p>
                    <p class="p">a. Bentuk objek sengketa :</p>
                    <p class="p">b. Identitas objek sengketa :</p>
                    <p class="p">c. Hari/Tanggal dikeluarkan :</p>
                    <p class="p">d. Kerugian langsung :</p>
                    &nbsp;
                    <p class="p">3. Uraian Singkat Potensi Sengketa :</p>
                    <p class="p uraian-content">-</p>
                </li>

                <div class="buttonPDF">
                    <a href="{{ route('kotasurabaya.pdf', ['id' => $data->tahapan]) }}" class="btn btn-success btn-sm">Download PDF</a>
                </div>
            </ul>
        </div>
</div>
    
@endsection