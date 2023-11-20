@extends('layoutadmin.galeri.main')
@section('content')
    <section class="position-relative">
        <img src="/asset/img/bcgaleri.png" alt="" class="img-fluid w-100" style="margin-top: -2px">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h2><b style="font-family: cursive;">Sertifikat</b></h2>
        </div>
    </section>

    <div class="container-fluid rounded-bottom" style="background-color: #DEE2FF; display: inline-block; padding:10px; text-align: center;">
        <div class="judul" style="margin-top: 20px;"><b style="font-size: xx-large; font-family: math;">JUDUL SERTIFIKAT</b></div>
        <div class="d-flex align-items-center" style="margin-top: 30px">
            <div class="flex-shrink-0 ">
                <img src="/asset/img/iklan1.jpg" alt="..." style="max-width: 400px; border-radius: 15px; margin-left:50px;">
            </div>
            <div class="flex-grow-1 ms-3">
                This is some content from a media component. You can replace this with any content and adjust it as needed.
            </div>
        </div>
        <div class="d-flex align-items-center" style="margin-top: 30px">
            <div class="flex-grow-1 ms-3">
                This is some content from a media component. You can replace this with any content and adjust it as needed.
            </div>
            <div class="flex-shrink-0">
                <img src="/asset/img/iklan1.jpg" alt="..." style="max-width: 500px; border-radius: 15px; margin-right: 50px; margin-bottom: 20px;">
            </div>
        </div>
    </div>

    <div class="container-fluid rounded-3" style="background-color: #DEE2FF; display: inline-block; padding:10px; text-align: center; margin-top: 30px;">
        <div class="row">
            <div class="col-md-6 offset-md-3 rounded-3" style="background-color: #EFD3D7; font-weight: bold; height: 35px; margin-top:20px;">Sertifikat Lainnya</div>
        </div>
        <div class="foto" style="padding: 20px;">
            <img src="..." class="img-thumbnail" alt="..." style="min-width: 200px; min-height: 175px; margin-right: 10px; background-color: #ccc;">
            <img src="..." class="img-thumbnail" alt="..." style="min-width: 200px; min-height: 175px; margin: 0 10px; background-color: #ccc;">
            <img src="..." class="img-thumbnail" alt="..." style="min-width: 200px; min-height: 175px; margin-left: 10px; background-color: #ccc;">
        </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                </ul>
            </nav>
    </div>


@endsection
