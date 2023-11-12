@extends('layout.main')
{{-- @section('titile' $title); --}}
@section('content')
    <div class="container">

        {{-- booking --}}
        <div class="card mb-5">
            <div class="card-body d-flex justify-content-end bg-transparent p-0" style="max-height: 500px">
                <img src="/asset/iklan1.jpg" alt="ppp" srcset="" class="img-fluid">
            </div>
        </div>

        {{-- about us --}}
        <div class="card mt-5">
            <div class="card-body d-flex justify-content-end p-1" style="max-height: 500px">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body d-flex justify-content-end p-1" style="max-height: 300px">
                            <img src="/asset/iklan3.jpg" alt="ppp" srcset="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <h2 class="h2 fw-bold text-center mt-3">About Us</h2>
                                <p class="p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore autem saepe necessitatibus mollitia similique beatae at repudiandae, rerum quaerat ipsam, accusamus sunt rem? Eaque consequatur expedita temporibus ducimus! Dolorum incidunt corporis modi? Natus, aspernatur? Iure maxime quaerat excepturi tempore nesciunt porro aspernatur esse, vitae fuga. Quia fugiat explicabo eligendi et.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection