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
                            <li class="breadcrumb-item active">User</li>
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

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Nomor Telepon</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Alamat</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- Loop untuk menampilkan data -->
                            @foreach ($editUser as $row)
                            <tr>
                                <td class="text-center" style="width: 50px">{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_pelanggan }}</td>
                                <td>{{ $row->nomor_telepon }} </td>
                                <td>{{ $row->Email }} </td>
                                <td>{{ $row->password }} </td>
                                <td>{{ $row->alamat }} </td>
                                {{-- <td class="justify-items-center">
                                    <div class="container-center" style="width: 350px; height: auto;">
                                        <div class="aspect-ratio" style="width: 100%;">
                                            <img class="img-thumbnail aspect-ratio-item"
                                                src="{{ asset('storage/images/' . $row->foto) }}" alt="Gambar 1">
                                        </div>
                                    </div>
                                </td> --}}
                                <td>
                                    <a href="#" type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#edit-{{ $row->id_user }}">
                                        <i class="fas fa-pen-to-square" style="color: #ffffff;"></i></a>
                                    <a href="#" type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapus-{{ $row->id_sertif }}"><i class="fas fa-trash"
                                            style="color: #ffffff;"></i></a>
                                    {{-- button show  --}}
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#show{{ $row->id_user }}">
                                        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal untuk edit data -->
                            <div class="modal fade modal-dialog-scrollable" id="edit-{{ $row->id_user }}"
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
                                            <form action="{{ route('galeri.update', ['id' => $row->id_user]) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <label for="nomor_telepon" class="form-label">Nama Pelanggan</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"
                                                            id="nama_pelanggan" name="nama_pelanggan"
                                                            value="{{ $row->nama_pelanggan }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"
                                                            id="nomor-telepon" name="nomor_telepon"
                                                            value="{{ $row->nomor_telepon }}" required>
                                                    </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <label for="email" class="form-label">Email</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"
                                                            id="email" name="email"
                                                            value="{{ $row->email }}" required>
                                                        </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <label for="password" class="form-label">Password</label>
                                                    </div>
                                                <div class="col-sm-9">
                                                        <input type="text" class="form-control"
                                                            id="password" name="password"
                                                            value="{{ $row->password }}" required>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"
                                                            id="alamat" name="alamat"
                                                            value="{{ $row->alamat }}" required>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Hapus --}}
                            <div class="modal fade" id="hapus-{{ $row->id_user }}" tabindex="-1"
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
                                                    Nama Pelanggan
                                                </div>
                                                <div class="col-sm-12 rounded">
                                                    <div class="card rounded p-2">
                                                        {{ $row->nama_pelanggan }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-sm-12 fw-bold my-1">
                                                    Nomor Telepon
                                                </div>
                                                <div class="col-sm-12 rounded">
                                                    <div class="card rounded p-2">
                                                        {{ $row->nomor_telepon }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-sm-12 fw-bold my-1">
                                                    Email
                                                </div>
                                                <div class="col-sm-12 rounded">
                                                    <div class="card rounded p-2">
                                                        {{ $row->email }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-sm-12 fw-bold my-1">
                                                    Password
                                                </div>
                                                <div class="col-sm-12 rounded">
                                                    <div class="card rounded p-2">
                                                        {{ $row->password }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-sm-12 fw-bold my-1">
                                                    Alamat
                                                </div>
                                                <div class="col-sm-12 rounded">
                                                    <div class="card rounded p-2">
                                                        {{ $row->alamat }}
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
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
