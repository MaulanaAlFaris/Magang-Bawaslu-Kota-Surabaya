@extends('content.layouts.layouts')
@section('content-main')
<form action='{{ url('kota/'.$data->username) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('kota') }}" class="btn btn-secondary"> Kembali</a>
            <div class="mb-3 row">
                <label for="tahapan" class="col-sm-2 col-form-label">Tahapan yang diawasi</label>
                <div class="col-sm-10">
                    {{ $data->tahapan }}
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama_pelaksana" class="col-sm-2 col-form-label">Nama Pelaksana</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_pelaksana' id="nama_pelaksana" value="{{ $data ->nama_pelaksana }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ $data->jabatan }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ $data->jabatan }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="bentuk" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ $data->jabatan }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tujuan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ $data->jabatan }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="sasaran" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ $data->jabatan }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="waktu_dan_tempat" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ $data->jabatan }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="uraian" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' id="jabatan" value="{{ $data->jabatan }}">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="uraian" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
@endsection