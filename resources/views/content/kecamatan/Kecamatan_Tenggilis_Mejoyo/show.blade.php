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
                    <p class="p">a. Peristiwa : {{ $data->peristiwa }}</p>
                    <p class="p">b. Tempat Kejadian : {{ $data->tempat_kejadian_peristiwa }}</p>
                    <p class="p">c. Waktu Kejadian : {{ $data->waktu_kejadian_peristiwa }}</p>
                    <p class="p">d. Pelaku : {{ $data->pelaku_peristiwa }}</p>
                    <p class="p">e. Alamat : {{ $data->alamat_peristiwa }}</p>
                    &nbsp;
                    <p class="p">2. Saksi-saksi</p>
                    <p class="p">a. Nama : {{ $data->nama_saksi_1 }}</p>
                    <p class="p">Alamat : {{ $data->alamat_saksi_1 }}</p>
                    <p class="p">b. Nama : {{ $data->nama_saksi_2 }}</p>
                    <p class="p">Alamat : {{ $data->alamat_saksi_2 }}</p>
                    &nbsp;
                    <p class="p">3. Alat Bukti</p>
                    <p class="p">a. : {{ $data->alat_bukti_1 }}</p>
                    <p class="p">b. : {{ $data->alat_bukti_2 }}</p>
                    <p class="p">c. : {{ $data->alat_bukti_3  }}</p>
                    &nbsp;
                    <p class="p">4. Barang Bukti</p>
                    <p class="p">a. : {{ $data->barang_bukti_1 }}</p>
                    <p class="p">b. : {{ $data->barang_bukti_2  }}</p>
                    <p class="p">c. : {{ $data->barang_bukti_3  }}</p>
                    &nbsp;
                    <p class="p">5. Uraian Singkat Dugaan Pelanggaran :</p>
                    <p class="p uraian-content">{{ $data->uraian_singkat_dugaan }}</p>
                    &nbsp;
                    <p class="p">6. Fakta dan Keterangan :</p>
                    <p class="p uraian-content">{{ $data->fakta }}</p>
                    &nbsp;
                    <p class="p">7. Analisa : </p>
                    <p class="p uraian-content">{{ $data->analisa }}</p>
                </li>

                <li>
                    <h1 class="bab">V. Informasi Potensi Sengketa</h1>
                    <p class="p">1.Peristiwa</p>
                    <p class="p">a. Peserta Pemilu : {{ $data->peserta_pemilu_sengketa }}</p>
                    <p class="p">b. Tempat Kejadian : {{ $data->tempat_sengketa }}</p>
                    <p class="p">c. Waktu Kejadian : {{ $data->waktu_sengketa}}</p>
                    &nbsp;
                    <p class="p">2. Objek Sengketa</p>
                    <p class="p">a. Bentuk objek sengketa : {{ $data->bentuk_objek }}</p>
                    <p class="p">b. Identitas objek sengketa : {{ $data->identias_objek }}</p>
                    <p class="p">c. Hari/Tanggal dikeluarkan : {{ $data->hari_objek}}</p>
                    <p class="p">d. Kerugian langsung : {{ $data->kerugian_objek}}</p>
                    &nbsp;
                    <p class="p">3. Uraian Singkat Potensi Sengketa :</p>
                    <p class="p uraian-content">{{ $data->uraian_objek }}</p>
                </li>

                <div class="buttonPDF">
                    <a href="{{ route('KecamatanTenggilisMejoyo.pdf', ['id' => $data->tahapan]) }}" class="btn btn-success btn-sm">Download PDF</a>
                </div>
            </ul>
        </div>
</div>
    
@endsection