@extends('content.layouts.layouts')
@section('content-main')
<div class="content-main-edit-bg">
    <form action='{{ url('KotaSurabaya/'.$data->tahapan) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('KotaSurabaya') }}" class="btn btn-secondary"> Kembali</a>
            <div class="mb-3 row">
                <label for="tahapan" class="col-sm-2 col-form-label">Tahapan yang diawasi</label>
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
                <label for="nomor" class="col-sm-2 col-form-label">Nomor Surat Perintah Tugas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nomor' id="nomor" value="{{ $data->nomor }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ $data->jabatan }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' id="alamat" value="{{ $data->alamat }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="bentuk" class="col-sm-2 col-form-label">Bentuk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bentuk' id="bentuk" value="{{ $data->bentuk }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='tujuan' id="tujuan" value="{{ $data->tujuan }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="sasaran" class="col-sm-2 col-form-label">Sasaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='sasaran' id="sasaran" value="{{ $data->sasaran }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="waktu_dan_tempat" class="col-sm-2 col-form-label">Waktu dan Tempat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='waktu_dan_tempat' id="waktu_dan_tempat" value="{{ $data->waktu_dan_tempat }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="uraian" class="col-sm-2 col-form-label">Uraian Singkat Hasil Pengawasan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='uraian' id="uraian" value="{{ $data->uraian }}">
                </div>
            </div>

            <!-- Bagian yang akan ditampilkan setelah memilih "Yes" -->
            <div class="mb-3 row" id="additionalContent" style="display: none;">
                <!-- Isi dengan konten yang ingin Anda tampilkan -->
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

                <div class="mb-3 row">
                    <label for="nama_saksi_1" class="col-sm-2 col-form-label">a. Nama :  </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama_saksi_1' id="nama_saksi_1" value="{{ $data->nama_saksi_1 }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat_saksi_1" class="col-sm-2 col-form-label">Alamat :  </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='alamat_saksi_1' id="alamat_saksi_1" value="{{ $data->alamat_saksi_1}}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nama_saksi_2" class="col-sm-2 col-form-label">b. Nama :  </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama_saksi_2' id="nama_saksi_2" value="{{ $data->nama_saksi_2}}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat_saksi_2" class="col-sm-2 col-form-label">Alamat : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='alamat_saksi_2' id="alamat_saksi_2" value="{{ $data->alamat_saksi_2}}">
                    </div>
                </div>

            </div>

            
            
            <div class="mb-3 row">
                <label for="uraian" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
            </form>
        </div>
</div>
        <!-- AKHIR FORM -->
@endsection