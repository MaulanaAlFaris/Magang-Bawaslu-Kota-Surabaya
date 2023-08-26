@extends('SuperAdmin.layout')
@section('content')

<form action='{{ url('SuperAdmin/'.$data->username) }}' method='post'>
@csrf
@method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('SuperAdmin') }}" class="btn btn-secondary"><< Kembali</a>

        <div class="mb-3 row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                {{ $data->username }}
            </div>
        </div>

        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='password' id="password" value="{{ bcrypt($data->password) }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' id="name" value="{{ $data->name }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="level" class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='level' id="level" value="{{ $data->level }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='email' id="email" value="{{ $data->email }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>

      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection