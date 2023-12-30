@extends('layout.mainlayanan')
@section('content')
    <div class="album py-2">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($layanan as $row)
                    {{-- layanan card --}}
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/images/' . $row->foto_layanan) }}" alt="Foto Layanan"
                                class="card-img-top img-thumbnail" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text fw-bold">{{ $row->nama_layanan }}</p>
                                <p class="card-text fw-bold">Rp. {{ $row->harga_layanan }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    {{-- button show  --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#show{{ $row->id }}">
                                        <i class="fa-solid fa-magnifying-glass p-1" style="color: #ffffff;"></i>Detail
                                    </button>
                                    <!-- Modal show -->
                                    <div class="modal fade" id="show{{ $row->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="hapusLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body text-left">
                                                    <div class="row">
                                                        <img class="img-thumbnail img-fluid text-center"
                                                            src="{{ asset('storage/images/' . $row->foto_layanan) }}"
                                                            alt="Foto Layanan">
                                                    </div>
                                                    <div class="row my-2">
                                                        <div class="col-sm-12 fw-bold my-1">
                                                            Nama Layanan
                                                        </div>
                                                        <div class="col-sm-12 rounded">
                                                            <div class="card rounded p-2">
                                                                {{ $row->nama_layanan }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-2">
                                                        <div class="col-sm-12 fw-bold my-1">
                                                            Harga Layanan
                                                        </div>
                                                        <div class="col-sm-12 rounded">
                                                            <div class="card rounded p-2">
                                                                {{ $row->harga_layanan }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-2">
                                                        <div class="col-sm-12 fw-bold my-1">
                                                            Deskripsi Layanan
                                                        </div>
                                                        <div class="col-sm-12 rounded">
                                                            <div class="card rounded p-2">
                                                                <p class=" text-wrap">{!! $row->desk_layanan !!}
                                                                </p>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- tutup layanan card --}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
