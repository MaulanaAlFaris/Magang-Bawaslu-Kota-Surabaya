@extends('content.layouts.layouts')

@section('content-main')
<div class="content-main-create-bg">
    <form action='{{ url('KecamatanMulyorejo') }}' method='post'>
        @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <a href="{{ url('KecamatanMulyorejo') }}" class="btn btn-secondary">Kembali</a>
                &nbsp;

                <div class="mb-3row" style="font-weight: bold">I. Data Pengawas Pemilihan</div>
                    &nbsp;

                <div class="mb-3 row">
                    <label for="tahapan" class="col-sm-2 col-form-label">Tahapan  Yang Diawasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tahapan' id="tahapan" value="{{ $data->tahapan }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nama_pelaksana" class="col-sm-2 col-form-label">Nama Pelaksana Tugas Pengawasan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama_pelaksana' id="nama_pelaksana" value="{{ $data->nama_pelaksana }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ $data->jabatan }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nomor" class="col-sm-2 col-form-label">Nomor Surat Perintah Tugas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nomor' id="nomor" value="{{ $data->nomor }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='alamat' id="alamat" value="{{ $data->alamat }}">
                    </div>
                </div>

                <div class="mb-3row" style="font-weight: bold">II. Kegiatan Pengawasan</div>
                &nbsp;
                
                <div class="mb-3row">Kegiatan</div>

                <div class="mb-3 row">
                    <label for="bentuk" class="col-sm-2 col-form-label">a. Bentuk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='bentuk' id="bentuk" value="{{ $data->bentuk }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tujuan" class="col-sm-2 col-form-label">b. Tujuan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tujuan' id="tujuan" value="{{ $data->tujuan }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="sasaran" class="col-sm-2 col-form-label">c. Sasaran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='sasaran' id="sasaran" value="{{ $data->sasaran }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="waktu_dan_tempat" class="col-sm-2 col-form-label">d. Waktu dan Tempat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='waktu_dan_tempat' id="waktu_dan_tempat" value="{{ $data->waktu_dan_tempat }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="uraian" class="col-sm-2 col-form-label" style="font-weight: bold">III. Uraian Singkat Hasil Pengawasan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='uraian' id="uraian" value="{{ $data->uraian }}">
                    </div>
                </div>

                 <!-- Tombol Yes/No -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Ingin Menambahkan Informasi Dugaan Pelangaran dan Potensi Sengketa ?
                            <div class="d-flex justify-content-end mt-2">
                                <button type="button" class="btn btn-success mr-2" id="yesBtn">Yes</button>
                                &nbsp;
                                <button type="button" class="btn btn-danger" id="noBtn">No</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bagian yang akan ditampilkan setelah memilih "Yes" -->
                <div class="mb-3 row" id="additionalContent" style="display: none;">
                    <!-- Isi dengan konten yang ingin Anda tampilkan -->
                    <div class="mb-3row" style="font-weight: bold">IV. Informasi Dugaan Pelanggaran</div>
                    &nbsp;

                    <div class="mb-3row">1. Peristiwa</div>
                    &nbsp;

                    <div class="mb-3 row">
                        <label for="peristiwa" class="col-sm-2 col-form-label">a. Peristiwa : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='peristiwa' id="peristiwa" value="{{ $data->peristiwa }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tempat_kejadian_peristiwa" class="col-sm-2 col-form-label">b. Tempat Kejadian : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='tempat_kejadian_peristiwa' id="tempat_kejadian_peristiwa" value="{{ $data->tempat_kejadian_peristiwa }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="waktu_kejadian_peristiwa" class="col-sm-2 col-form-label">c. Waktu Kejadian : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='waktu_kejadian_peristiwa' id="waktu_kejadian_peristiwa" value="{{ $data->waktu_kejadian_peristiwa }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pelaku_peristiwa" class="col-sm-2 col-form-label">d. Pelaku : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='pelaku_peristiwa' id="pelaku_peristiwa" value="{{ $data->pelaku_peristiwa }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat_peristiwa" class="col-sm-2 col-form-label">e.. Alamat :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='alamat_peristiwa' id="alamat_peristiwa" value="{{ $data->alamat_peristiwa }}">
                        </div>
                    </div>

                    &nbsp;
                    <div class="mb-3row">2. Saksi - Saksi</div>
                    &nbsp;

                    <div class="mb-3 row">
                        <label for="nama_saksi_1" class="col-sm-2 col-form-label">Nama Saksi 1:  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nama_saksi_1' id="nama_saksi_1" value="{{ $data->nama_saksi_1 }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat_saksi_1" class="col-sm-2 col-form-label">Alamat Saksi 1 :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='alamat_saksi_1' id="alamat_saksi_1" value="{{ $data->alamat_saksi_1 }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_saksi_2" class="col-sm-2 col-form-label">Nama Saksi 2 :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nama_saksi_2' id="nama_saksi_2" value="{{ $data->nama_saksi_2 }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat_saksi_2" class="col-sm-2 col-form-label">Alamat Saksi 2 : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='alamat_saksi_2' id="alamat_saksi_2" value="{{ $data->alamat_saksi_2 }}">
                        </div>
                    </div>

                    &nbsp;
                    <div class="mb-3row">3. Alat Bukti</div>
                    &nbsp;

                    <div class="mb-3 row">
                        <label for="alat_bukti_1" class="col-sm-2 col-form-label">a : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='alat_bukti_1' id="alat_bukti_1" value="{{ $data->alat_bukti_1 }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alat_bukti_2" class="col-sm-2 col-form-label">b : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='alat_bukti_2' id="alat_bukti_2" value="{{ $data->alat_bukti_2 }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alat_bukti_3" class="col-sm-2 col-form-label">c : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='alat_bukti_3' id="alat_bukti_3" value="{{ $data->alat_bukti_3 }}">
                        </div>
                    </div>

                    &nbsp;
                    <div class="mb-3row">4. Barang Bukti</div>
                    &nbsp;

                    <div class="mb-3 row">
                        <label for="barang_bukti_1" class="col-sm-2 col-form-label">a : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='barang_bukti_1' id="barang_bukti_1" value="{{ $data->barang_bukti_1 }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="barang_bukti_2" class="col-sm-2 col-form-label">b : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='barang_bukti_2' id="barang_bukti_2" value="{{ $data->barang_bukti_2 }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="barang_bukti_3" class="col-sm-2 col-form-label">c : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='barang_bukti_3' id="barang_bukti_3" value="{{ $data->barang_bukti_3 }}">
                        </div>
                    </div>

                    &nbsp;
                    <div class="mb-3 row">
                        <label for="uraian_singkat_dugaan" class="col-sm-2 col-form-label">5. Uraian Singkat Dugaan Pelanggaran : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='uraian_singkat_dugaan' id="uraian_singkat_dugaan" value="{{ $data->uraian_singkat_dugaan }}">
                        </div>
                    </div>

                    &nbsp;
                    <div class="mb-3 row">
                        <label for="fakta" class="col-sm-2 col-form-label">6. Fakta dan Keterangan : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='fakta' id="fakta" value="{{ $data->fakta }}">
                        </div>
                    </div>

                    &nbsp;

                    <div class="mb-3 row">
                        <label for="analisa" class="col-sm-2 col-form-label">7. Analisa : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='analisa' id="analisa" value="{{ $data->analisa }}">
                        </div>
                    </div>

                    &nbsp;
                    <div class="mb-3row" style="font-weight: bold">V. Informasi Potensi Sengketa</div>

                    &nbsp;
                    <div class="mb-3row">1. Peristiwa</div>

                    &nbsp;

                    <div class="mb-3 row">
                        <label for="peserta_pemilu_sengketa" class="col-sm-2 col-form-label">a. Peserta Pemilu : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='peserta_pemilu_sengketa' id="peserta_pemilu_sengketa" value="{{ $data->peserta_pemilu_sengketa }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tempat_sengketa" class="col-sm-2 col-form-label">b. Tempat Kejadian : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='tempat_sengketa' id="tempat_sengketa" value="{{ $data->tempat_sengketa }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="waktu_sengketa" class="col-sm-2 col-form-label">c. Waktu Kejadian : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='waktu_sengketa' id="waktu_sengketa" value="{{ $data->waktu_sengketa }}">
                        </div>
                    </div>

                    &nbsp;
                    <div class="mb-3row">2. Objek Sengketa</div>

                    &nbsp;


                    <div class="mb-3 row">
                        <label for="bentuk_objek" class="col-sm-2 col-form-label">a. Bentuk Objek Sengketa : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='bentuk_objek' id="bentuk_objek" value="{{ $data->bentuk_objek }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="identitas_objek" class="col-sm-2 col-form-label">b. Identitas Objek Sengketa : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='identitas_objek' id="identitas_objek" value="{{ $data->identitas_objek }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="hari_objek" class="col-sm-2 col-form-label">c. Hari/Tanggal dikeluarkan : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='hari_objek' id="hari_objek" value="{{ $data->hari_objek }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kerugian_objek" class="col-sm-2 col-form-label">d. Kerugian Langsung : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='kerugian_objek' id="kerugian_objek" value="{{ $data->kerugian_objek }}">
                        </div>
                    </div>

                    &nbsp;

                    <div class="mb-3 row">
                        <label for="uraian_objek" class="col-sm-2 col-form-label">3. Uraian Singkat Potensi Sengketa : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='uraian_objek' id="uraian_objek" value="{{ $data->uraian_objek }}">
                        </div>
                    </div>

                    

                </div>

                <div class="mb-3 row">
                    <label for="submit" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    </div>
                </div>
            </form>
            </div>
</div>
            <!-- AKHIR FORM -->
@endsection