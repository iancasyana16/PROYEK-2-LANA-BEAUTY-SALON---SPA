@extends('layout.mainadmin')
@section('content')
    <div class="content-wrapper p-3">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Layanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('/admin/layanan/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_layanan">Nama Layanan</label>
                                <input type="text" class="form-control" id="nama_layanan"
                                    placeholder="Input Nama Layanan...">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_layanan">Deskripsi Layanan</label>
                                <textarea name="desk_layanan" id="desk_layanan" class="form-control" cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="harga_layanan">Harga Layanan</label>
                                <input type="number" class="form-control" id="harga_layanan">
                            </div>
                            <div class="form-group">
                                <label for="foto_layanan">Foto Layanan</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto_layanan"
                                            name="foto_layanan">
                                        <label class="custom-file-label" for="foto_layanan">Pilih file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
