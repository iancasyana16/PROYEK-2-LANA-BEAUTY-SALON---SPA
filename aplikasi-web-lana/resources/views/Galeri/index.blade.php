@extends('layout.mainadmin')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <title>Custom</title>
    </head>

    <body>
        <div class="container">
            <!-- Button untuk membuka modal -->
            <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="fa-solid fa-plus" style="color: #ffffff;"></i> Tambah Data
            </button>

            <!-- Table untuk menampilkan data -->
            <table class="table table-striped mt-2">
                <!-- Table header -->
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Gambar 1</th>
                        <th scope="col">Deskripsi Kegiatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop untuk menampilkan data -->
                    @foreach ($sertif as $row)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $row->judul_kegiatan }}</td>
                            <td><img class="img-thumbnail" src="{{ asset('storage/images/' . $row->foto) }}"
                                    alt="Gambar 1"></td>
                            <td>{{ $row->caption_kegiatan }}</td>
                            <td>
                                <a href="#" type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#edit-{{ $row->id_sertif }}">
                                    <i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="#" type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#hapus"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>

                        <!-- Modal untuk edit data -->
                        <div class="modal fade modal-dialog-scrollable" id="edit-{{ $row->id_sertif }}"
                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <!-- Isi modal edit data -->
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal untuk tambah data -->
        <div class="modal fade modal-dialog-scrollable" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul_kegiatan" class="form-label">Judul Kegiatan</label>
                                <input type="text" class="form-control" id="judul_kegiatan" name="judul_kegiatan"
                                    placeholder="contoh: Bakti Sosial" required>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto 1</label>
                                <input type="file" class="form-control" id="foto" name="foto"
                                    accept="image/*" required>
                            </div>
                            <div class="mb-3">
                                <label for="caption_kegiatan" class="form-label">Caption Kegiatan</label>
                                <input type="text" class="form-control" id="caption_kegiatan" name="caption_kegiatan"
                                    placeholder="contoh: isi kegiatan" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select name="kategori" id="kategori" required>
                                    <option value="sertifikat">Sertifikat</option>
                                    <option value="kegiatan">Kegiatan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hapus script Bootstrap yang tidak perlu -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-..."
            crossorigin="anonymous"></script>
    </body>

    </html>
@endsection
