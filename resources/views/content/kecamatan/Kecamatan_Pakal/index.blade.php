@extends('content.layouts.layouts')

@section('content-side')
<ul class="listing-kec-kel">
    <li><div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Kelurahan
        </a>
      
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('KelurahanBabatJerawat') }}">Kelurahan Babak Jerawat</a></li>
            <li><a class="dropdown-item" href="{{url('KelurahanBenowo') }}">Kelurahan Benowo</a></li>
            <li><a class="dropdown-item" href="{{url('KelurahanPakal') }}">Kelurahan Pakal</a></li>
            <li><a class="dropdown-item" href="{{url('KelurahanSumberRejo') }}">Kelurahan Sumber Rejo</a></li>
        </ul>
      </div>
    </li>
</ul>
@endsection

@section('content-main')
<div class="container-name">
    <h1>Selamat Datang Di Kecamatan Pakal</h1>
</div>
<div class="content-main-bg">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
            <a href='{{ url('KecamatanPakal/create') }}' class="btn btn-primary">+ Tambah Data</a>

            <form action="{{ route('kecamatanpakal.search') }}" method="GET" class="form-inline mb-3">
                <div class="input-group input-group-sm">
                  <input type="text" name="keyword" class="form-control" placeholder="Cari...">
                  <div class="input-group-append">
                      <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                  </div>
                </div>
              </form>
            </div>
    
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-3">Tahapan yang Diawasi</th>
                        <th class="col-md-2">Nomor Surat Perintah Tugas</th>
                        <th class="col-md-2">Waktu dan Tempat</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem() ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->tahapan }}</td>
                        <td>{{ $item->nomor }}</td>
                        <td>{{ $item->waktu_dan_tempat }}</td>
                        <td>
                            <a href='{{ url('KecamatanPakal/'.$item->tahapan.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <a href='{{ url('KecamatanPakal/'.$item->tahapan) }}' class="btn btn-success btn-sm">PDF</a>
                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('KecamatanPakal/'.$item->tahapan) }}" method="post">
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
</div>
@endsection