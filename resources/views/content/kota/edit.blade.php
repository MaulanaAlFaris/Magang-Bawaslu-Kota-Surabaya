@extends('content.layouts.layouts')
@@section('content-main')
<form action='{{ url('form/'.$data->username) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('form') }}" class="btn btn-secondary"> Kembali</a>
            <div class="mb-3 row">
                <label for="tahapan yang diawasi" class="col-sm-2 col-form-label">Tahapan yang diawasi</label>
                <div class="col-sm-10">
                    {{ $data->tahapan }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='password' id="password" value="{{ $data->password }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="wilayah" class="col-sm-2 col-form-label">Wilayah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='wilayah' id="wilayah" value="{{ $data->wilayah }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="wilayah" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
@endsection