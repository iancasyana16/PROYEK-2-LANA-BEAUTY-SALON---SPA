@extends('layout.mainadmin')
@section('title', 'Dashboard User')
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
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            {{-- card  --}}
            <div class="card">
                <div class="card-header">
                    {{-- kosong opsi tambahan untuk fitur --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>email</th>
                                        <th>telepon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $index => $row)
                                        <tr>
                                            <td style="width: 20px;">
                                                {{ $index += 1 }}
                                            </td>
                                            <td style="width: 250px;">
                                                {{ $row->nama }}
                                            </td>
                                            <td style="width: 100px;">
                                                <span class="">{{ $row->email }}
                                                </span>
                                            </td>
                                            <td style="width: 100px;" class="">
                                                {{ $row->telepon }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
            {{-- card  --}}

        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

@endsection
