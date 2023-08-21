@extends('content.layouts.layouts')

@section('content-main')
<div class="content-main-create-bg">
    <form action='{{ url('KelurahanPetemon') }}' method='post'>
        @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <a href="{{ url('KelurahanPetemon') }}" class="btn btn-secondary">Kembali</a>
                <div class="mb-3 row">
                    <label for="tahapan" class="col-sm-2 col-form-label">Tahapan yang diawasi</label>
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