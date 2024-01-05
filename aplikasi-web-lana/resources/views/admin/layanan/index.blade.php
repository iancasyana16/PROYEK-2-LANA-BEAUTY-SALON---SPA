@extends('layout.mainadmin')
@section('title', 'Dashbboard Layanan')
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
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
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
                                        <th>Nama Layanan</th>
                                        <th>Harga</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($layanan as $index => $row)
                                        <tr>
                                            <td class="text-center" style="width: 20px;">
                                                {{ $index += 1 }}
                                            </td>
                                            <td style="width: 250px;">
                                                {{ $row->nama_layanan }}
                                            </td>
                                            <td style="width: 100px;">
                                                <span>
                                                    Rp. {{ $row->harga_layanan }}
                                                </span>
                                            </td>
                                            <td style="width: 80px;">

                                                <!-- Button trigger modal edit -->
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    id="editButton" data-bs-target="#edit{{ $index }}">
                                                    <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                                </button>

                                                <!-- Button trigger modal hapus -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#hapus{{ $row->id }}">
                                                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                                </button>

                                                {{-- button show  --}}
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#show{{ $row->id }}">
                                                    <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                                                </button>

                                                <!-- Modal edit -->
                                                <div class="modal fade" id="edit{{ $index }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                                                                <form
                                                                    action="{{ route('admin.layanan.update', ['id' => $row->id]) }}"
                                                                    method="POST" enctype="multipart/form-data">
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
                                                                            <img class="img-thumbnail img-fluid text-center"
                                                                                src="{{ asset('storage/images/' . $row->foto_layanan) }}"
                                                                                alt="Foto Layanan" style="height: 150">
                                                                            <input type="file" class="form-control"
                                                                                id="foto_layanan" name="foto_layanan"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="harga_layanan"
                                                                            class="col-sm-3 col-form-label">Harga
                                                                            Layanan</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" class="form-control"
                                                                                id="harga_layanan" name="harga_layanan"
                                                                                required
                                                                                value="{{ $row->harga_layanan }}">
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

                                                <!-- Modal hapus -->
                                                <div class="modal fade" id="hapus{{ $row->id }}" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="hapusLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header mx-auto">
                                                                <h5 class="modal-title" id="hapusLabel">Konfirmasi Hapus
                                                                    Data</h5>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                Apakah Anda yakin ingin menghapus Layanan ini?
                                                            </div>
                                                            <div class="modal-footer mx-auto">
                                                                <button type="button" class="btn btn-success"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <a href="{{ url('layanan/delete', ['id' => $row->id]) }}"
                                                                    class="btn btn-danger">Konfirmasi</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal show -->
                                                <div class="modal fade" id="show{{ $row->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="hapusLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-left">
                                                                <div class="row">
                                                                    <img class="img-thumbnail img-fluid text-center"
                                                                        src="{{ asset('storage/images/' . $row->foto_layanan) }}"
                                                                        alt="Foto Layanan">
                                                                </div>
                                                                <div class="row my-2">
                                                                    <div class="col-sm-12 fw-bold my-1">
                                                                        Nama Layanan
                                                                    </div>
                                                                    <div class="col-sm-12 rounded">
                                                                        <div class="card rounded p-2">
                                                                            {{ $row->nama_layanan }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row my-2">
                                                                    <div class="col-sm-12 fw-bold my-1">
                                                                        Harga Layanan
                                                                    </div>
                                                                    <div class="col-sm-12 rounded">
                                                                        <div class="card rounded p-2">
                                                                            {{ $row->harga_layanan }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row my-2">
                                                                    <div class="col-sm-12 fw-bold my-1">
                                                                        Deskripsi Layanan
                                                                    </div>
                                                                    <div class="col-sm-12 rounded">
                                                                        <div class="card rounded p-2">
                                                                            <p class=" text-wrap">{!! $row->desk_layanan !!}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer mx-auto">
                                                                <button type="button" class="btn btn-warning"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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

@endsection
