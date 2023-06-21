@extends('admin.layout')
@section('content')
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
        <a href='' class="btn btn-primary">+ Tambah Data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Username</th>
                    <th class="col-md-4">Password</th>
                    <th class="col-md-2">Wilayah</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>babayo</td>
                    <td>brazil</td>
                    <td>Kota</td>
                    <td>
                        <a href='' class="btn btn-warning btn-sm">Edit</a>
                        <a href='' class="btn btn-danger btn-sm">Del</a>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
<!-- AKHIR DATA -->
@endsection