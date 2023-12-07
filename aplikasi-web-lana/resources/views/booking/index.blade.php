@extends('layoutbooking.main')
@section('content')

    <body class="bg-light">
        <div class="container p-3 my-3 text-white">
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div>

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
                                <label for="Hari/Tanggal" class="form-label">Hari/Tanggal</label>
                                <div class="input-group needs-validation">
                                    <input type="date" name="hari" id="" class="form-control">
                                    <div class="invalid-feedback">
                                        Form tidak boleh kosong
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="layanan" class="form-label">Pilih Layanan</label>
                                <input type="layanan" class="form-control" id="layanan">
                                <div class="invalid-feedback">
                                    Form tidak boleh kosong
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
