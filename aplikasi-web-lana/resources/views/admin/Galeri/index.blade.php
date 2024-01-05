@extends('layout.mainadmin')
@section('title', 'Dashboard Gallery')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Gallery</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
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

                    <!-- Button untuk membuka modal -->
                    <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal"
                        data-bs-target="#modalTambah">
                        <i class="fa-solid fa-plus" style="color: #ffffff;"></i> Data Gallery Baru
                    </button>

                    <!-- Modal untuk tambah data -->
                    <div class="modal fade modal-dialog-scrollable" id="modalTambah" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <label for="judul_kegiatan" class="form-label">Judul Kegiatan</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="judul_kegiatan"
                                                    name="judul_kegiatan" placeholder="contoh: Bakti Sosial" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <label for="foto" class="form-label">Foto</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="foto" name="foto"
                                                    accept="image/*" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <label for="kategori" class="form-label">Kategori</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <select name="kategori" class="form-control" id="kategori" required>
                                                    <option value="sertifikat">Sertifikat</option>
                                                    <option value="kegiatan">Kegiatan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <label for="summernote" class="form-label">Caption Kegiatan</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea id="summernote" name="caption_kegiatan" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card-body">

                    <!-- Table untuk menampilkan data -->
                    <table id="example2" class="table table-bordered table-hover">
                        <!-- Table header -->
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kegiatan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Caption Kegiatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop untuk menampilkan data -->
                            @foreach ($sertif as $row)
                                <tr>
                                    <td class="text-center" style="width: 50px">{{ $loop->iteration }}</td>
                                    <td>{{ $row->judul_kegiatan }}</td>
                                    <td>{{ $row->kategori }} </td>
                                    <td>{{ $row->caption_kegiatan }} </td>
                                    <td>

                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit-{{ $row->id_sertif }}">
                                            <i class="fas fa-pen-to-square" style="color: #ffffff;"></i></button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapus-{{ $row->id_sertif }}"><i class="fas fa-trash"
                                                style="color: #ffffff;"></i></button>

                                        {{-- button show  --}}
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#show{{ $row->id_sertif }}">
                                            <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                                        </button>

                                    </td>
                                </tr>

                                <!-- Modal untuk edit data -->
                                <div class="modal fade modal-dialog-scrollable" id="edit-{{ $row->id_sertif }}"
                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <!-- Isi modal edit data -->
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('galeri.update', ['id' => $row->id_sertif]) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row mb-3">
                                                        <div class="col-sm-3">
                                                            <label for="judul_kegiatan" class="form-label">Judul
                                                                Kegiatan</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                id="judul_kegiatan" name="judul_kegiatan"
                                                                value="{{ $row->judul_kegiatan }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-3">
                                                            <label for="foto" class="form-label">Foto
                                                                1</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="file" class="form-control" id="foto"
                                                                name="foto" accept="image/*"
                                                                value="{{ $row->foto }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-3">
                                                            <label for="kategori" class="form-label">Kategori</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <select name="kategori" id="kategori" class="form-control"
                                                                required>
                                                                <option value="sertifikat">Sertifikat</option>
                                                                <option value="kegiatan">Kegiatan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12">
                                                            <label for="caption_kegiatan" class="form-label">Caption
                                                                Kegiatan</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <textarea id="summernoteEdit" name="desk_layanan" class="form-control"> {{ $row->desk_layanan }} </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Perbarui</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Modal Hapus --}}
                                <div class="modal fade" id="hapus-{{ $row->id_sertif }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header mx-auto">
                                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                            </div>
                                            <div class="modal-body text-center">
                                                <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                            </div>
                                            <div class="modal-footer mx-auto">
                                                <button type="button" class="btn btn-success"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <form action="{{ route('galeri.destroy', ['id' => $row->id_sertif]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal show -->
                                <div class="modal fade" id="show{{ $row->id_sertif }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="hapusLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-left">
                                                <div class="row">
                                                    <img class="img-thumbnail aspect-ratio-item"
                                                        src="{{ asset('storage/images/' . $row->foto) }}" alt="Gambar 1">
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-sm-12 fw-bold my-1">
                                                        Judul Kegiatan
                                                    </div>
                                                    <div class="col-sm-12 rounded">
                                                        <div class="card rounded p-2">
                                                            {{ $row->judul_kegiatan }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-sm-12 fw-bold my-1">
                                                        Kategori
                                                    </div>
                                                    <div class="col-sm-12 rounded">
                                                        <div class="card rounded p-2">
                                                            {{ $row->kategori }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-sm-12 fw-bold my-1">
                                                        Caption Kegiatan
                                                    </div>
                                                    <div class="col-sm-12 rounded">
                                                        <div class="card rounded p-2">
                                                            <p class=" text-wrap">{!! $row->caption_kegiatan !!}
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
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

@endsection
