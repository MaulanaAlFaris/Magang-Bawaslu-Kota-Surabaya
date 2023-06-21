@extends('admin.layout')
@section('content')
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
        <a href='{{ url('admin/create') }}' class="btn btn-primary">+ Tambah Data</a>
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
                <?php $i = $data->firstItem() ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->password }}</td>
                    <td>{{ $item->wilayah }}</td>
                    <td>
                        <a href='{{ url('admin/'.$item->username.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('admin/'.$item->username) }}" method="post">
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