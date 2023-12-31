@extends('layout.mainmaster')
@section('content')

    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide my-2" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg> --}}
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <!-- Contoh menggunakan foreignObject untuk menyematkan elemen HTML -->
                        <foreignObject width="100%" height="100%">
                            <img xmlns="http://www.w3.org/1999/xhtml" src="{{ asset('asset/img/iklan4.jpg') }}"
                                alt="Deskripsi gambar" width="100%" height="100%" />
                        </foreignObject>
                    </svg>


                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Lana Beauty Salon & Spa</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni esse, aperiam minus
                                natus non
                                provident.</p>
                            <p><a class="btn btn-lg btn-primary" href="/booking">Booking Sekarang</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <!-- Contoh menggunakan foreignObject untuk menyematkan elemen HTML -->
                        <foreignObject width="100%" height="100%">
                            <img xmlns="http://www.w3.org/1999/xhtml" src="{{ asset('asset/img/iklan1.jpg') }}"
                                alt="Deskripsi gambar" width="100%" height="100%" />
                        </foreignObject>
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Lana Beauty Salon & Spa</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni esse, aperiam minus
                                natus non
                                provident.</p>
                            <p><a class="btn btn-lg btn-primary" href="/galeri">LIhat Gallery</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <!-- Contoh menggunakan foreignObject untuk menyematkan elemen HTML -->
                        <foreignObject width="100%" height="100%">
                            <img xmlns="http://www.w3.org/1999/xhtml" src="{{ asset('asset/img/iklan3.jpg') }}"
                                alt="Deskripsi gambar" width="100%" height="100%" />
                        </foreignObject>
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Lana Beauty Salon & Spa</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni esse, aperiam minus
                                natus non
                                provident.</p>
                            <p><a class="btn btn-lg btn-primary" href="/layanan">Cek Services</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        @foreach ($salon as $item)
            <div class="container-fluid">
                <hr class="featurette-divider">
                <div class="row featurette mb-5 bg-secondary p-4">
                    <div class="col-md-7 order-md-2 text-white">
                        <h2 class="featurette-heading mb-5">About Us</h2>
                        <p class="lead">{{ $item->visi_salon }}</p>
                        <p class="lead">{{ $item->misi_salon }}</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" src="{{ asset('asset/img/foto about2.png') }}"
                            alt="Placeholder: 500x500">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
