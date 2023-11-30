@extends('layoutadmin.galeri.main')
@section('content')
<section class="position-relative">
    <img src="/asset/img/bcgaleri.png" alt="nn" class="img-fluid w-100" style="margin-top: -2px">
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white" >
        <h2><b style="font-family: cursive;">Gallery/Home</b></h2>
        {{-- <p>Isi teks Anda di sini. Anda dapat menambahkan paragraf atau elemen HTML lainnya.</p> --}}
    </div>
</section>

<div class="maingaleri">
    <div class="card mb-3 shadow-sm p-3 mb-5 bg-body-tertiary" style="max-width: 1000px; float:left; border-radius: 15px;">
        <div class="row g-0">
            <div class="col-md-4" >
                <img src="/asset/img/iklan1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                    </p>
                    <a href="#" class="btn btn-primary" style="float: right; margin-bottom:20px;">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 shadow-sm p-3 mb-5 bg-body-tertiary " style="max-width: 1000px; float:right; margin-top:20px; border-radius: 15px;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body" style="text-align: right; " >
                    <h5 class="card-title" >Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                    </p>
                    <a href="{{ url('/galeri/sertif') }}" class="btn btn-primary" style="float:left;">Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/asset/img/iklan2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
        </div>
    </div>

    <div class="card mb-3 shadow-sm p-3 mb-5 bg-body-tertiary " style="max-width: 1000px; float:left; margin-top:20px; border-radius: 15px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/asset/img/iklan3.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                    <p>
                        <a href="{{ url('/galeri/kegiatan') }}" class="btn btn-primary" style="float: right; margin-bottom:20px;">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
