@extends('content.layouts.layouts')

@section('content-side')
    <div class="sidebar-list">NAV BAR</div>
@endsection

@section('content-main')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
            <a href='{{ url('kecamatan/create') }}' class="btn btn-primary">+ Tambah Data</a>
            </div>
    
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-3">Tahapan yang Diawasi</th>
                        <th class="col-md-2">Jabatan</th>
                        <th class="col-md-2">Nomor Surat Perintah Tugas</th>
                        <th class="col-md-2">Alamat</th>
                        <th class="col-md-2">Bentuk</th>
                        <th class="col-md-2">Tujuan</th>
                        <th class="col-md-2">Sasaran</th>
                        <th class="col-md-2">Waktu dan Tempat</th>
                        <th class="col-md-2">Uraian</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem() ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->tahapan }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->nomor }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->bentuk }}</td>
                        <td>{{ $item->tujuan }}</td>
                        <td>{{ $item->sasaran }}</td>
                        <td>{{ $item->waktu_dan_tempat }}</td>
                        <td>{{ $item->uraian }}</td>
                        <td>
                            <a href='{{ url('kecamatan/'.$item->tahapan.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('kecamatan/'.$item->tahapan) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach 
                </tbody>
            </table>
            {{ $data->links() }}
    </div>
@endsection