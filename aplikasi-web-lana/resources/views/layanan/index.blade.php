@extends('layout.mainlayanan')
@section('content')
    <div class="album py-2">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($layanan as $row)
                    {{-- layanan card --}}
                    <div class="col">
                        <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Foto Layanan</text>
                            </svg> --}}
                            <img src="{{ asset('storage/images/' . ($row->foto_layanan)) }}" alt="Foto Layanan"
                                class="card-img-top" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">{{ $row->nama_layanan }}</p>
                                <p class="card-text">Rp. {{ $row->harga_layanan }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Detail</button>
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
