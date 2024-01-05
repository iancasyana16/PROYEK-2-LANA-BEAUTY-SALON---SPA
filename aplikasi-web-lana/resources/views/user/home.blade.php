@extends('layout.mainuser')
@section('content')
    <div class="content-wrapper p-5">
        <div class="row mb-3">
            <div class="card" id="profil">
                <div class="card-header">
                    <h3 class="h3">My Account</h3>
                </div>
                <div class="card-body bg-light d-flex">
                    <div class="img">
                        <img src="" alt="foto profil">
                    </div>
                    <div class="dataprofil ml-5">
                        <div class="row mb-2">
                            Casyana
                        </div>
                        <div class="row mb-2">
                            iancasyana@gmail.com
                        </div>
                        <div class="row mb-2">
                            Blok. Sukajadi Patrol Indramayu
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="card" id="profil">
                <div class="card-header">
                    <h3 class="h3">History</h3>
                </div>
                <div class="card-body bg-light">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID Pesanan</th>
                                <th>Nama Customer</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2203037</td>
                                <td>Casyana</td>
                                <td>20-20-2020</td>
                                <td>pendnng</td>
                                <td>
                                    <button class="btn btn-danger">Batalkan</button>
                                    <button class="btn btn-info text-white">Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
