@extends('layoutadmin.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="" class="btn btn-primary my-2">Tambah Layanan</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nama Layanan</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="asset/img/Gmaps.png" alt=""></td>
                            <td>Hair Styling</td>
                            <td class="w-25">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae esse
                                blanditiis, ab
                                praesentium nobis neque vitae fugiat. Dolore enim porro alias! Mollitia voluptatum cumque
                                eaque.</td>
                            <td class="text-center">
                                <a href="" class="btn btn-danger"><i class="fas fa-trash mx-1"></i> Hapus</a>
                                <a href="" class="btn btn-success"><i class="fas fa-check mx-1"></i> Edit</a>
                            </td>
                        </tr>
                        </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.content -->

    </div>
@endsection
