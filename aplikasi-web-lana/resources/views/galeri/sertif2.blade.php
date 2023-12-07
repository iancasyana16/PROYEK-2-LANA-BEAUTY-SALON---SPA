@extends('layoutmaster.main')
@section('content')
    <section class="position-relative">
        <img src="/asset/img/bcgaleri.png" alt="" class="img-fluid w-100" style="margin-top: -2px">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h2><b style="font-family: cursive;">Sertifikat</b></h2>
        </div>
    </section>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
      <title>Galeri</title>
      <link rel="stylesheet" href="/asset/css/galeri.css">
    </head>
    <body>

        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="headline">
                  <h2>Sertifikat</h2>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="gambar-kotak" data-bs-toggle="modal" data-bs-target="#modalSertifikat">
                  <!-- Tempat untuk gambar sertifikat 1 -->
                  <img class="img-fluid " src="/asset/img/bg.jpg" alt="Sertifikat 1">
                  <div class="teks-atas">Teks Atas</div>
                  <div class="teks-bawah">Teks Bawah</div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="gambar-kotak" data-bs-toggle="modal" data-bs-target="#modalSertifikat">
                  <!-- Tempat untuk gambar sertifikat 2 -->
                  <img src="/asset/img/bcnavbar.png" alt="Sertifikat 2">
                  <div class="teks-atas">Teks Atas</div>
                  <div class="teks-bawah">Teks Bawah</div>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalSertifikat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-body">
                    <img  class="img-fluid" src="/asset/img/bg.jpg" alt="Sertifikat 1" class="w-100">
                    <div class="teks-atas">
                        <button type="button" class="btn-close text-end" aria-label="Close"></button>
                    </div>
                    <div class="teks-bawah">Teks Bawah</div>
                  </div>
                </div>
              </div>
            </div>



            <div class="row">
            <div class="col-md-12">
                <div class="headline">
                <h2>Kegiatan</h2>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-3">
                <div class="gambar-kotak">
                <!-- Tempat untuk gambar kegiatan 1 -->
                <img src="kegiatan1.jpg" alt="Kegiatan 1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="gambar-kotak">
                <!-- Tempat untuk gambar kegiatan 2 -->
                <img src="kegiatan2.jpg" alt="Kegiatan 2">
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-12">
                <div class="headline">
                <h2>Sosial Media</h2>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-3">
                <div class="gambar-kotak">
                <!-- Tempat untuk gambar sosial media 1 -->
                <img src="sosial-media1.jpg" alt="Sosial Media 1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="gambar-kotak">
                <!-- Tempat untuk gambar sosial media 2 -->
                <img src="sosial-media2.jpg" alt="Sosial Media 2">
                </div>
            </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
    </html>






@endsection
