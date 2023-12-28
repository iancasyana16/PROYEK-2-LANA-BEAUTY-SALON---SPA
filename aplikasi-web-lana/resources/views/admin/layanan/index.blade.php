@extends('layout.mainadmin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Layanan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Layanan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                                + Data Layanan Baru
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
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
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 420px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto Layanan</th>
                                        <th>Nama Layanan</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($layanan as $index => $row)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> <img src="{{ asset('storage/images' . $row->foto_layanan) }}"
                                                    alt="Foto Layanan">
                                            </td>
                                            <td>{{ $row->nama_layanan }}</td>
                                            <td>{!! $row->desk_layanan !!}</td>
                                            <td>{{ $row->harga_layanan }}</td>
                                            <td>
                                                {{-- <a href="" class="btn btn-primary">edit</a> --}}
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#edit">
                                                    Edit
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="edit" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Edit
                                                                    Layanan</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ url('layanan/update') }}" method="POST"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row mb-3">
                                                                        <label for="nama_layanan"
                                                                            class="col-sm-3 col-form-label">Nama
                                                                            Layanan</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control"
                                                                                id="nama_layanan" name="nama_layanan"
                                                                                required value="{{ $row->nama_layanan }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="foto_layanan"
                                                                            class="col-sm-3 col-form-label">Foto
                                                                            Layanan</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="file" class="form-control"
                                                                                id="foto_layanan" name="foto_layanan"
                                                                                required>
                                                                            <img src="{{ asset('storage/images' . $row->foto_layanan) }}"
                                                                                alt="Foto Layanan"
                                                                                style="max-width: 100%; margin-top: 20px;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="harga_layanan"
                                                                            class="col-sm-3 col-form-label">Harga
                                                                            Layanan</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" class="form-control"
                                                                                id="harga_layanan" name="harga_layanan"
                                                                                required value="{{ $row->harga_layanan }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="summernoteEdit"
                                                                            class="col-sm-12 col-form-label">Deskripsi
                                                                            Layanan</label>
                                                                        <div class="col-sm-12">
                                                                            <textarea id="summernoteEdit" name="desk_layanan" class="form-control"> {{ $row->desk_layanan }} </textarea>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Perbarui</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Button trigger modal hapus -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#hapus">
                                                    Hapus
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="hapus" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="hapusLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="hapusLabel">Konfirmasi Hapus
                                                                    Data</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                Apakah Anda yakin ingin menghapus Layanan ini?
                                                            </div>
                                                            <div class="modal-footer mx-auto">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <a href="{{ url('layanan/delete', ['id' => $row->id]) }}"
                                                                    class="btn btn-danger">Konfirmasi</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
