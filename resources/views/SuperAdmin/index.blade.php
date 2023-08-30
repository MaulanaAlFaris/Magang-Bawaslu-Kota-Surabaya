@extends('SuperAdmin.layout')
@section('content')
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- TOMBOL TAMBAH DATA dan SEARCH BAR-->
        <div class="pb-3">
        <a href='{{ url('SuperAdmin/create') }}' class="btn btn-primary">+ Tambah Data</a>

        <form action="{{ route('search') }}" method="GET" class="form-inline mb-3">
            <div class="input-group input-group-sm">
              <input type="text" name="keyword" class="form-control" placeholder="Cari...">
              <div class="input-group-append">
                  <button type="submit" class="btn btn-primary">Cari</button>
              </div>
            </div>
          </form>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-2">Username</th>
                    <th class="col-md-2">Password</th>
                    <th class="col-md-2">Nama</th>
                    <th class="col-md-1">Level</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem() ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->username }}</td>
                    <td style="font-size: 12px">{{ $item->password }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->level }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href='{{ url('SuperAdmin/'.$item->username.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('SuperAdmin/'.$item->username) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
</div>
<!-- AKHIR DATA -->
@endsection