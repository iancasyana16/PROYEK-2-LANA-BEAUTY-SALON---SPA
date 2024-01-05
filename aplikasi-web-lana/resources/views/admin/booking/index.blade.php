@extends('layout.mainadmin')
@section('title', 'Dashboard Booking')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Booking Appointment</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Booking</li>
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
                    {{-- kosong bisa untuk fitur lain  --}}
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
                                        <th>Waktu</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($booking as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->user->nama }}</td>
                                            <td>{{ $item->user->telepon }}</td>
                                            <td>{{ $item->tanggal_booking }}</td>
                                            <td>
                                                {{-- Conditionally show the appropriate button based on the current status --}}
                                                @if ($item->status == 'diterima')
                                                    <button class="btn btn-success" disabled>Approved</button>
                                                    {{-- <a class="btn btn-danger" href="{{ route('booking.updateStatus', ['id' => $item->id, 'newStatus' => 'ditolak']) }}">Reject</a> --}}
                                                @elseif ($item->status == 'ditolak')
                                                    {{-- <a class="btn btn-success" href="{{ route('booking.updateStatus', ['id' => $item->id, 'newStatus' => 'diterima']) }}">Approved</a> --}}
                                                    <button class="btn btn-danger" disabled>Reject</button>
                                                @else
                                                    <a class="btn btn-success"
                                                        href="{{ route('booking.updateStatus', ['id' => $item->id, 'newStatus' => 'diterima']) }}">Approved</a>
                                                    <a class="btn btn-danger"
                                                        href="{{ route('booking.updateStatus', ['id' => $item->id, 'newStatus' => 'ditolak']) }}">Reject</a>
                                                @endif
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

@endsection
