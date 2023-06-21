@extends('admin.layout')
@section('content')
<form action='{{ url('admin') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='username' id="username">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='password' id="password">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wilayah" class="col-sm-2 col-form-label">Wilayah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='wilayah' id="wilayah">
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