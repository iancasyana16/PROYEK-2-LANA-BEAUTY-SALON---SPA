@extends('layout.mainadmin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Antrian Customer</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Customer</th>
                            <th>Nomor Telepon</th>
                            <th>Hari/Tanggal</th>
                            <th>Waktu</th>
                            <th>Orders</th>
                            <th class="text-center">Approve</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center">
                                <a href="" class="btn btn-danger"><i class="fas fa-cross mx-1"></i></a>
                                <a href="" class="btn btn-success"><i class="fas fa-check mx-1"></i></a>
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
