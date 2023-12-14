@extends('layout.mainadmin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper p-2" <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="/admin/layanan/create" class="btn btn-primary">Tambah Layanan Baru</a>

                    <div class="card-tools">
                        <div class="input-group input-group-sm mt-1" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Nama Layanan</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanan as $row)
                                <tr>
                                    <td>{{ $row['id'] }}</td>
                                    <td>{{ $row['foto_layanan'] }}</td>
                                    <td>{{ $row['nama_layanan'] }}</td>
                                    <td>{{ $row['desk_layanan'] }}</td>
                                    <td>{{ $row['harga_layanan'] }}</td>
                                    <td>
                                        <a href="/admin/layanan/edit" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('/admin/layanan/delete') }}" class="btn btn-danger"
                                            onclick="return confirm('yakin?')">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    </div>
@endsection
