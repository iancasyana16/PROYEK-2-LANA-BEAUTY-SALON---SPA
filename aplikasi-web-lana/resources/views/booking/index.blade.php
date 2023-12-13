@extends('layout.mainbooking')
@section('content')

    <body class="bg-light">
        <div class="container p-3 my-3 text-white">
            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Formulir Booking</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"
                                    value="" required>
                                <div class="invalid-feedback">
                                    Form harus diisi.
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label for="nomor" class="form-label">Nomor telepon</label>
                                <input type="number" class="form-control" id="nomor" placeholder="08XXXXXXXXXX"
                                    value="" required>
                                <div class="invalid-feedback">
                                    Form harus diisi.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="Hari/Tanggal" class="form-label">Hari/Tanggal/Waktu</label>
                                <div class="input-group needs-validation">
                                    <input type="date" name="hari" id="" class="form-control">
                                    <div class="invalid-feedback">
                                        Form tidak boleh kosong
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <select class="form-select" aria-label="Default select example">
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
                                                <form class="d-flex" role="search">
                                                    <input class="form-control me-2 rounded" type="search"
                                                        placeholder="Search" aria-label="Search">
                                                    <button class="btn btn-primary" type="submit">Search</button>
                                                </form>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-dark">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
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
