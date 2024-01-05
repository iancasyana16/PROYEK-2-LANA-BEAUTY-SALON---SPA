@extends('layout.mainuser')
@section('content')
    @auth
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
                                {{ auth()->user()->nama }}
                            </div>
                            <div class="row mb-2">
                                {{ auth()->user()->email }}
                            </div>
                            <div class="row mb-2">
                                {{ auth()->user()->alamat }}
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
                                    <th>Info Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- {{ $bookings }} --}}
                                @foreach ($bookings as $book)
                                    <tr>
                                        <td>{{$book->id}}</td>
                                        <td>{{$book->user->nama}}</td>
                                        <td>{{ $book->tanggal_booking }}</td>
                                        <td>{{ $book->status }}</td>
                                        <td>
                                            <button class="btn btn-danger">Batalkan</button>
                                            <button class="btn btn-info text-white">Detail</button>
                                        </td>
                                        <td>
                                            <a class="btn btn-info text-white" href="{{ route('invoice.show' , ['id' => $book->id])}}">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
