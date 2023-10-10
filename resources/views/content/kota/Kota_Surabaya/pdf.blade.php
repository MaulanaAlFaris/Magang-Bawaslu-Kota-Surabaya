<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDF</title>
    <style>
        *{
            margin: 0;
            padding: 10px;
            font-family: "Times New Roman";
            text-align: justify;
        }
        .title{
            justify-content: center;
            width: 100%;
        }
        .title-h1{
            padding:0px;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
        }
        .title-h2{
            padding : 0px;
            font-size: 14px;
            text-align: center;
        }
        .content-main-pdf-bg{
            overflow: hidden;
        }
        .bab{
            font-size: 15px;
        }
        .p{
            font: 12px;
            text-align: left;            
        }

        .uraian-content{
            white-space: pre-line;
            word-wrap: break-word;
            overflow: hidden;
            text-align: justify;
        }

        .kata-label {
            float: left;
            width: 33%;
            padding: initial;
        }
        .kata-tanda {
            float: right;
            width: 2%;
            text-align: center;
            padding: initial;
        }
        .kata-kalimat {
            float: right;
            width: 65%;
            padding: initial;
        }

            </style>
</head>
<body>
    <div class="heeader">
            <h1 class="title-h1">FORMULIR MODEL A</h1>
            <h1 class="title-h1">LAPORAN HASIL PENGAWASAN PEMILU</h1>
            <h1 class="title-h2">{{ $data->penomoran_judul }}</h1>
    </div>

    <div class="main-content-bg">
        <div class="content-main-pdf-bg">
            <div class="kertasA4">

                <ol type="I">
                    <li>Data Pengawasan Pemilihan:</li>
                    <p style="clear: both;">
                        <span class="kata-label">Tahapan yang diawasi</span>
                        <span class="kata-kalimat">{{ $data->tahapan }}</span>
                        <span class="kata-tanda">:</span>
                    </p>
                    <p style="clear: both;">
                        <span class="kata-label">Nama Pelaksana Tugas Pengawasan</span>
                        <span class="kata-kalimat">{{ $data->nama_pelaksana }}</span>
                        <span class="kata-tanda">:</span>
                    </p>
                    <p style="clear: both;">
                        <span class="kata-label">Jabatan</span>
                        <span class="kata-kalimat">{{ $data->jabatan }}</span>
                        <span class="kata-tanda">:</span>
                    </p>
                    <p style="clear: both;">
                        <span class="kata-label">Nomor Surat Perintah Tugas</span>
                        <span class="kata-kalimat">{{ $data->nomor }}</span>
                        <span class="kata-tanda">:</span>
                    </p>
                    <p style="clear: both;">
                        <span class="kata-label">Alamat</span>
                        <span class="kata-kalimat">{{ $data->alamat }}</span>
                        <span class="kata-tanda">:</span>
                    </p>
                    <br />
                    <li>Kegiatan Pengawasan:</li>
                    <ol type="a">
                        <li>
                            <span class="kata-label">Bentuk</span>
                            <span class="kata-kalimat">{{ $data->bentuk }}</span>
                            <span class="kata-tanda">:</span>
                        </li>
                        <li>
                            <span class="kata-label">Tujuan</span>
                            <span class="kata-kalimat">{{ $data->tujuan }}</span>
                            <span class="kata-tanda">:</span>
                        </li>
                        <li>
                            <span class="kata-label">Sasaran</span>
                            <span class="kata-kalimat">{{ $data->sasaran }}</span>
                            <span class="kata-tanda">:</span>
                        </li>
                        <li>
                            <span class="kata-label">Waktu dan Tempat</span>
                            <span class="kata-kalimat">{{ $data->waktu_dan_tempat }}</span>
                            <span class="kata-tanda">:</span>
                        </li>
                    </ol>
                    <li>Uraian Singkat Hasil Pengawasan</li>
                    <p class="p uraian-content"> {{ $data->uraian }}</p>
                    <li>Informasi Dugaan Pelanggaran</li>
                    <ol>
                        <li>Peristiwa</li>
                        <ol type="a">
                            <li>
                                <span class="kata-label">Peristiwa</span>
                                <span class="kata-kalimat">{{ $data->peristiwa }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <li>
                                <span class="kata-label">Tempat Kejadian</span>
                                <span class="kata-kalimat">{{ $data->tempat_kejadian_peristiwa }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <li>
                                <span class="kata-label">Waktu Kejadian</span>
                                <span class="kata-kalimat">{{ $data->waktu_kejadian_peristiwa }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <li>
                                <span class="kata-label">Pelaku</span>
                                <span class="kata-kalimat">{{ $data->pelaku_peristiwa }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <li>
                                <span class="kata-label">Alamat</span>
                                <span class="kata-kalimat">{{ $data->alamat_pelaku }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                        </ol>
                        <li>Saksi-saksi</li>
                        <ol type="a">
                            <li>
                                <span class="kata-label">Nama</span>
                                <span class="kata-kalimat">{{ $data->nama_saksi_1 }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <p style="clear: both;">
                                <span class="kata-label">Alamat</span>
                                <span class="kata-kalimat">{{ $data->alamat_saksi_1 }}</span>
                                <span class="kata-tanda">:</span>
                            </p>
                            <li>
                                <span class="kata-label">Nama</span>
                                <span class="kata-kalimat">{{ $data->nama_saksi_2 }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <p style="clear: both;">
                                <span class="kata-label">Alamat</span>
                                <span class="kata-kalimat">{{ $data->alamat_saksi_2 }}</span>
                                <span class="kata-tanda">:</span>
                            </p>
                        </ol>
                        <li>Alat Bukti</li>
                        <ol type="a">
                            <li>{{ $data->alat_bukti_1}}</li>
                            <li>{{ $data->alat_bukti_2}}</li>
                            <li>{{ $data->alat_bukti_3}}</li>
                        </ol>
                        <li>Barang Bukti</li>
                        <ol type="a">
                            <li>{{ $data->barang_bukti_1}}</li>
                            <li>{{ $data->barang_bukti_2}}</li>
                            <li>{{ $data->barang_bukti_3}}</li>
                        </ol>
                        <li>Uraian Singkat Dugaan Pelanggaran</li>
                        <p class="p">{{ $data->uraian_singkat_dugaan }}</p>
                        <li>Fakta dan Keterangan</li>
                        <p class="p">{{ $data->fakta }}</p>
                        <li>Analisa</li>
                        <p class="p">{{ $data->analisa }}</p>
                    </ol>
                    <li>Informasi Potensi Sengketa</li>
                    <ol>
                        <li>Peristiwa</li>
                        <ol type="a">
                            <li>
                                <span class="kata-label">Peserta Pemilu</span>
                                <span class="kata-kalimat">{{ $data->peserta_pemilu_sengketa }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <li>
                                <span class="kata-label">Tempat Kejadian</span>
                                <span class="kata-kalimat">{{ $data->tempat_sengketa }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <li>
                                <span class="kata-label">Waktu Kejadian</span>
                                <span class="kata-kalimat">{{ $data->waktu_sengketa }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                        </ol>
                        <li>Objek Sengketa</li>
                        <ol type="a">
                            <li>
                                <span class="kata-label">Bentuk objek sengketa</span>
                                <span class="kata-kalimat">{{ $data->bentuk_objek }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <li>
                                <span class="kata-label">Identitas objek sengketa</span>
                                <span class="kata-kalimat">{{ $data->identias_objek }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <li>
                                <span class="kata-label">Hari/Tanggal dikeluarkan   </span>
                                <span class="kata-kalimat">{{ $data->hari_objek }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                            <li>
                                <span class="kata-label">Kerugian langsung</span>
                                <span class="kata-kalimat">{{ $data->kerugian_objek }}</span>
                                <span class="kata-tanda">:</span>
                            </li>
                        </ol>
                        <li>Uraian Singkat Potensi Sengketa :</li>
                        <p class="p uraian-content">{{ $data->uraian_objek }}</p>   
                    </ol>
                </ol>

                <p>
                    <p class="p" style="text-align: right">Surabaya, {{ $data->tanggal }}</p>
                    <div class="kotak" style="height:90px"></div>
                    <p class="p" style="text-align: right">{{ $data->nama_pelaksana }}</p>
                </p>

                <!-- <ul>
                    <li>
                        <h1 class="bab">I. Data Pengawasan Pemilihan:</h1>
                        <p style="clear: both;">
                            <span class="kata-label">Tahapan yang diawasi</span>
                            <span class="kata-tanda">:</span>
                            <span class="kata-kalimat">{{ $data->tahapan }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">Nama Pelaksana Tugas Pengawasan</span>
                            <span class="kata-tanda">:</span>
                            <span class="kata-kalimat">{{ $data->nama_pelaksana }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">Jabatan</span>
                            <span class="kata-tanda">:</span>
                            <span class="kata-kalimat">{{ $data->jabatan }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">Nomor Surat Perintah Tugas</span>
                            <span class="kata-tanda">:</span>
                            <span class="kata-kalimat">{{ $data->nomor }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">Alamat</span>
                            <span class="kata-tanda">:</span>
                            <span class="kata-kalimat">{{ $data->alamat }}</span>
                        </p>
                    </li>
    
                    <li>
                        <h1 class="bab">II. Kegiatan Pengawasan:</h1>
                        <p style="clear: both;">
                            <span class="kata-label">a. Bentuk</span>
                            <span class="kata-tanda">:</span>
                            <span class="kata-kalimat">{{ $data->bentuk }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">b. Tujuan</span>
                            <span class="kata-tanda">:</span>
                            <span class="kata-kalimat">{{ $data->tujuan }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">c. Sasaran</span>
                            <span class="kata-tanda">:</span>
                            <span class="kata-kalimat">{{ $data->sasaran }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">d. Waktu dan Tempat</span>
                            <span class="kata-tanda">:</span>
                            <span class="kata-kalimat">{{ $data->waktu_dan_tempat }}</span>
                        </p>
                    </li>
    
                    <li>
                        <h1 class="bab">III. Uraian Singkat Hasil Pengawasan</h1>
                        <p class="p uraian-content"> {{ $data->uraian }}</p>
                    </li>
    
                    <li>
                        <h1 class="bab">IV. Informasi Dugaan Pelanggaran</h1>
                        <p class="p">1. Peristiwa</p>
                        <p style="clear: both;">
                            <span class="kata-label">a. Peristiwa</span>
                            <span>:</span>
                            <span>{{ $data->peristiwa }}</span>    
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">b. Tempat Kejadian</span>
                            <span>:</span>
                            <span>{{ $data->tempat_kejadian_peristiwa }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">c. Waktu Kejadian</span>
                            <span>:</span>
                            <span>{{ $data->waktu_kejadian_peristiwa }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">d. Pelaku</span>
                            <span>:</span>
                            <span>{{ $data->pelaku_peristiwa }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">e. Alamat</span>
                            <span>:</span>
                            <span>{{ $data->alamat_pelaku }}</span>
                        </p>
                        &nbsp;
                        <p class="p">2. Saksi-saksi</p>
                        <p style="clear: both;">
                            <span class="kata-label">a. Nama</span>
                            <span>:</span>
                            <span>{{ $data->nama_saksi_1 }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">Alamat</span>
                            <span>:</span>
                            <span>{{ $data->alamat_saksi_1 }}</span></p>
                        <p style="clear: both;">
                            <span class="kata-label">b. Nama</span>
                            <span>:</span>
                            <span>{{ $data->nama_saksi_2 }}</span>
                        </p>
                        <p style="clear: both;">
                            <span class="kata-label">Alamat</span>
                            <span>:</span>
                            <span>{{ $data->alamat_saksi_2 }}</span>
                        </p>
                        &nbsp;
                        <p class="p">3. Alat Bukti</p>
                        <p class="p">a. : {{ $data->alat_bukti_1}}</p>
                        <p class="p">b. : {{ $data->alat_bukti_2}}</p>
                        <p class="p">c. : {{ $data->alat_bukti_3 }}</p>
                        &nbsp;
                        <p class="p">4. Barang Bukti</p>
                        <p class="p">a. : {{ $data->barang_bukti_1}}</p>
                        <p class="p">b. : {{ $data->barang_bukti_2 }}</p>
                        <p class="p">c. : {{ $data->barang_bukti_3 }}</p>
                        &nbsp;
                        <p class="p uraian-content jarak"><span>5. Uraian Singkat Dugaan Pelanggaran</span>:</p>
                        <p class="p">{{ $data->uraian_singkat_dugaan }}</p>
                        &nbsp;
                        <p class="p uraian-content jarak"><span>6. Fakta dan Keterangan</span>:</p>
                        <p class="p">{{ $data->fakta }}</p>
                        &nbsp;
                        <p class="p uraian-content jarak"><span>7. Analisa</span>: </p>
                        <p class="p">{{ $data->analisa }}</p>
                    </li>
    
                    <li>
                        <h1 class="bab">V. Informasi Potensi Sengketa</h1>
                        <p class="p">1.Peristiwa</p>
                        <p class="p jarak"><span>a. Peserta Pemilu</span>: {{ $data->peserta_pemilu_sengketa }}</p>
                        <p class="p jarak"><span>b. Tempat Kejadian</span>: {{ $data->tempat_sengketa }}</p>
                        <p class=" jarak"><span>c. Waktu Kejadian</span>: {{ $data->waktu_sengketa }}</p>
                        &nbsp;
                        <p class="p">2. Objek Sengketa</p>
                        <p class="p jarak"><span>a. Bentuk objek sengketa</span>: {{ $data->bentuk_objek }}</p>
                        <p class="p jarak"><span>b. Identitas objek sengketa</span>: {{ $data->identias_objek }}</p>
                        <p class="p jarak"><span>c. Hari/Tanggal dikeluarkan</span>: {{ $data->hari_objek}}</p>
                        <p class="p jarak"><span>d. Kerugian langsung</span>: {{ $data->kerugian_objek }}</p>
                        &nbsp;
                        <p class="p">3. Uraian Singkat Potensi Sengketa :</p>
                        <p class="p uraian-content">{{ $data->uraian_objek }}</p>
                    </li>

                    <li>
                        <p class="p" style="text-align: right">Surabaya, {{ $data->tanggal }}</p>
                        <div class="kotak" style="height:90px"></div>
                        <p class="p" style="text-align: right">{{ $data->nama_pelaksana }}</p>
                    </li>

                </ul> -->
            </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>