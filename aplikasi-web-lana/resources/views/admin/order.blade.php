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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Customer</th>
                            <th>Nomor Telepon</th>
                            <th>Hari/Tanggal</th>
                            <th>Waktu</th>
                            <th>Orders</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Casyana</td>
                            <td>083101497425</td>
                            <td>16-09-03</td>
                            <td>09.00 WIB</td>
                            <td>Tatoo Lengan</td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash mx-1"></i> Reject</a>
                                <a href="" class="btn btn-success"><i class="fas fa-check mx-1"></i>Aprove</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Casyana</td>
                            <td>083101497425</td>
                            <td>16-09-03</td>
                            <td>09.00 WIB</td>
                            <td>Tatoo Lengan</td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash mx-1"></i> Reject</a>
                                <a href="" class="btn btn-success"><i class="fas fa-check mx-1"></i>Aprove</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Casyana</td>
                            <td>083101497425</td>
                            <td>16-09-03</td>
                            <td>09.00 WIB</td>
                            <td>Tatoo Lengan</td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash mx-1"></i> Reject</a>
                                <a href="" class="btn btn-success"><i class="fas fa-check mx-1"></i>Aprove</a>
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
