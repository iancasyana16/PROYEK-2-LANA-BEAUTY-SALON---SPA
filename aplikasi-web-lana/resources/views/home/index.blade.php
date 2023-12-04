@extends('layoutmaster.main')
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
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Lana Beauty Salon & Spa</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni esse, aperiam minus
                                natus non
                                provident.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Booking Sekarang</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Lana Beauty Salon & Spa</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni esse, aperiam minus
                                natus non
                                provident.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">LIhat Gallery</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Lana Beauty Salon & Spa</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni esse, aperiam minus
                                natus non
                                provident.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Cek Services</a></p>
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
        <div class="container-fluid">
            <hr class="featurette-divider">
            <div class="row featurette mb-5 bg-secondary p-4">
                <div class="col-md-7 order-md-2 text-white">
                    <h2 class="featurette-heading mb-5">About Us</h2>
                    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia voluptatum tenetur
                        itaque fugit
                        modi ut optio amet eius impedit repellat sit reiciendis eaque quaerat illo, dolores labore id
                        quos molestias
                        nam qui. Animi esse nobis facilis veritatis, ullam quae, consectetur debitis dicta, earum modi
                        itaque? Id
                        accusamus pariatur rerum nostrum.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>
        </div>
    @endsection
