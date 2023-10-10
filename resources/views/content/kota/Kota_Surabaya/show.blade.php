<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/pdf.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <title>PDF</title>
    </head>
    <title>PDF</title>
    <style>
        *{
            margin: 0;
            padding: 10px;
            font-family: "Times New Roman";
            text-align: justify;
        }
        .header{
            justify-content: center;
            width: 100%;
        }
        .title-h1{
            padding : 0px;
            font-size: 14px;
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
            width: 29%;
            padding: initial;
        }
        .kata-tanda {
            float: right;
            width: 1%;
            text-align: center;
            padding: initial;
        }
        .kata-kalimat {
            float: right;
            width: 70%;
            padding: initial;
        }

            </style>
</head>
<body>
    <div class="header">
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

                <div class="buttonPDF">
                    <a href="{{ route('kotasurabaya.pdf', ['id' => $data->tahapan]) }}" class="btn btn-success btn-sm">Download PDF</a>
                </div>
            </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>