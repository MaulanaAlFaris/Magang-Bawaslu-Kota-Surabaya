@extends('content.layouts.layouts')

@section('content-main')
<div class="content-main-create-bg">
    <form action='{{ url('KotaSurabaya') }}' method='post'>
        @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <a href="{{ url('KotaSurabaya') }}" class="btn btn-secondary">Kembali</a>
                <div class="mb-3 row">
                    <label for="tahapan" class="col-sm-2 col-form-label">Tahapan  Yang Diawasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tahapan' id="tahapan" value="{{ Session::get('tahapan') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nama_pelaksana" class="col-sm-2 col-form-label">Nama Pelaksana Tugas Pengawasan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama_pelaksana' id="nama_pelaksana" value="{{ Session::get('nama_pelaksana') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ Session::get('jabatan') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nomor" class="col-sm-2 col-form-label">Nomor Surat Perintah Tugas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nomor' id="nomor" value="{{ Session::get('nomor') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='alamat' id="alamat" value="{{ Session::get('alamat') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="bentuk" class="col-sm-2 col-form-label">Bentuk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='bentuk' id="bentuk" value="{{ Session::get('bentuk') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tujuan' id="tujuan" value="{{ Session::get('tujuaan') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="sasaran" class="col-sm-2 col-form-label">Sasaran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='sasaran' id="sasaran" value="{{ Session::get('sasaran') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="waktu_dan_tempat" class="col-sm-2 col-form-label">Waktu dan Tempat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='waktu_dan_tempat' id="waktu_dan_tempat" value="{{ Session::get('waktu_dan_tempat') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="uraian" class="col-sm-2 col-form-label">Uraian Singkat Hasil Pengawasan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='uraian' id="uraian" value="{{ Session::get('uraian') }}">
                    </div>
                </div>

                 <!-- Tombol Yes/No -->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Ingin Menambahkan Informasi Dugaan Pelangaran dan Potensi Sengketa ?
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="d-flex justify-content-end mt-2">
                                <button type="button" class="btn btn-success mr-2" id="yesBtn">Yes</button>
                                <button type="button" class="btn btn-danger" id="noBtn">No</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bagian yang akan ditampilkan setelah memilih "Yes" -->
                <div class="mb-3 row" id="additionalContent" style="display: none;">
                    <!-- Isi dengan konten yang ingin Anda tampilkan -->
                    <div class="mb-3 row">
                        <label for="peristiwa" class="col-sm-2 col-form-label">a. Peristiwa : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='peristiwa' id="peristiwa" value="{{ Session::get('peristiwa') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tempat_kejadian_peristiwa" class="col-sm-2 col-form-label">b. Tempat Kejadian : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='tempat_kejadian_peristiwa' id="tempat_kejadian_peristiwa" value="{{ Session::get('tempat_kejadian_peristiwa') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="waktu_kejadian_peristiwa" class="col-sm-2 col-form-label">c. Waktu Kejadian : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='waktu_kejadian_peristiwa' id="waktu_kejadian_peristiwa" value="{{ Session::get('waktu_kejadian_peristiwa') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pelaku_peristiwa" class="col-sm-2 col-form-label">d. Pelaku : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='pelaku_peristiwa' id="pelaku_peristiwa" value="{{ Session::get('pelaku_peristiwa') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat_peristiwa" class="col-sm-2 col-form-label">e.. Alamat :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='alamat_peristiwa' id="alamat_peristiwa" value="{{ Session::get('alamat_peristiwa') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_saksi_1" class="col-sm-2 col-form-label">a. Nama :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nama_saksi_1' id="nama_saksi_1" value="{{ Session::get('nama_saksi_1') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat_saksi_1" class="col-sm-2 col-form-label">Alamat :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='alamat_saksi_1' id="alamat_saksi_1" value="{{ Session::get('alamat_saksi_1') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_saksi_2" class="col-sm-2 col-form-label">b. Nama :  </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nama_saksi_2' id="nama_saksi_2" value="{{ Session::get('nama_saksi_2') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat_saksi_2" class="col-sm-2 col-form-label">Alamat : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='alamat_saksi_2' id="alamat_saksi_2" value="{{ Session::get('alamat_saksi_2') }}">
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