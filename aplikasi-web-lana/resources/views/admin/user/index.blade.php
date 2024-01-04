@extends('layout.penjual')
{{-- @extends('layout.mainadmin') --}}
{{-- @section('content') --}}
{{-- @section('title', $title) --}}

@section('content')

@extends('layout.mainadmin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Layanan</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary fw-bold float-start" data-bs-toggle="modal"
                                data-bs-target="#tambah">
                                <i class="fa-solid fa-plus" style="color: #ffffff; p-2"></i> Data Layanan Baru
                            </button>
                            <!-- Modal tambah data -->
                            <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Layanan Baru</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('layanan/store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mb-3">
                                                    <label for="nama_layanan" class="col-sm-3 col-form-label">Nama
                                                        Layanan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="nama_layanan"
                                                            name="nama_layanan" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="foto_layanan" class="col-sm-3 col-form-label">Foto
                                                        Layanan</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" id="foto_layanan"
                                                            name="foto_layanan" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="harga_layanan" class="col-sm-3 col-form-label">Harga
                                                        Layanan</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="harga_layanan"
                                                            name="harga_layanan" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="summernote" class="col-sm-12 col-form-label">Deskripsi
                                                        Layanan</label>
                                                    <div class="col-sm-12">
                                                        <textarea id="summernote" name="desk_layanan" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>email</th>
                                        <th>telepon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $index => $row)
                                        <tr>
                                            <td class="text-center" style="width: 20px;">
                                                {{ $index += 1 }}
                                            </td>
                                            <td class="" style="width: 250px;">
                                                {{ $row->nama }}
                                            </td>
                                            <td style="width: 100px;">
                                                <span class="">{{ $row->email }}
                                                </span>
                                            </td>
                                            <td style="width: 100px;" class="">
                                                {{$row->telepon}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    {{-- <script>
        $(document).ready(function() {
    // Inisialisasi Summernote untuk setiap elemen textarea dengan ID unik
    @foreach ($layanan as $row)
        $('#summernoteEdit').summernote({
            // konfigurasi Summernote jika diperlukan
        });
    @endforeach
});

    </script> --}}
@endsection



@endsection
