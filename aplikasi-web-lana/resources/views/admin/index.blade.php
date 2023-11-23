@extends('layout.main')
@section('content')
    <div class="container-fluid">

        <main>

            <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">ADMIN DASHBOARD</a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="#">Logout</a>
                    </div>
                </div>
            </header>

            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                        <div class="position-sticky pt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <span data-feather="home"></span>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="file"></span>
                                        Orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="shopping-cart"></span>
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="users"></span>
                                        Customers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="bar-chart-2"></span>
                                        Reports
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="layers"></span>
                                        Setting
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Dashboard</h1>
                        </div>
                        <div class="alert alert-info" role="alert">
                            Selamat datang Admin !
                        </div>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="200px">Nama Layanan</th>
                                    <th width="400px">Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Smoothing</td>
                                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum voluptas
                                        consequatur dolorum autem nisi. Enim ea pariatur ipsa est nobis!</td>
                                    <td>Rp. 50.000,00</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Smoothing</td>
                                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum voluptas
                                        consequatur dolorum autem nisi. Enim ea pariatur ipsa est nobis!</td>
                                    <td>Rp. 50.000,00</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Smoothing</td>
                                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum voluptas
                                        consequatur dolorum autem nisi. Enim ea pariatur ipsa est nobis!</td>
                                    <td>Rp. 50.000,00</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

        </main>

    </div>
@endsection
