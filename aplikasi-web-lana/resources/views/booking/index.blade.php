@extends('layout.mainbooking')
@section('content')

    <body class="bg-light">
        <div class="container p-3 my-3 text-white">
            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Formulir Booking</h4>
                    <form action="{{ route('booking.store')}}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap"
                                    value="" required>
                                <div class="invalid-feedback">
                                    Form harus diisi.
                                </div>
                            </div>

                            {{-- <div class="col-sm-12">
                                <label for="nomor" class="form-label">Nomor telepon</label>
                                <input type="number" class="form-control" id="nomor" name="" placeholder="08XXXXXXXXXX"
                                    value="" required>
                                <div class="invalid-feedback">
                                    Form harus diisi.
                                </div>
                            </div> --}}

                            <div class="col-12">
                                <label for="Hari/Tanggal" class="form-label">Hari/Tanggal/Waktu</label>
                                <div class="input-group needs-validation">
                                    <input type="date" name="tanggal_booking" id="" class="form-control">
                                    <div class="invalid-feedback">
                                        Form tidak boleh kosong
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <select class="form-select" name="waktu_booking" aria-label="Default select example">
                                    <option selected>Pilih Waktu</option>
                                    <option value="1">09.00 WIB</option>
                                    <option value="2">24.00 WIB</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Pilih layanan
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header text-dark">
                                            </div>
                                            <div class="modal-body text-dark" id="example2">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Foto Layanan</th>
                                                            <th>Nama Layanan</th>
                                                            <th>Harga Layanan</th>
                                                            <th>Pilih</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($layanan as $item)
                                                            <tr>
                                                                <td>
                                                                    <img src="{{ asset('storage/images/' . $item->foto_layanan) }}" width="25%" alt="Foto Layanan">
                                                                </td>
                                                                <td>{{ $item->nama_layanan }}</td>
                                                                <td>{{ $item->harga_layanan }}</td>
                                                                <td><input type="radio" name="jenis_layanan" id="" value="{{ $item->id }}">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Lanjutkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Ajukan Booking</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
@endsection
