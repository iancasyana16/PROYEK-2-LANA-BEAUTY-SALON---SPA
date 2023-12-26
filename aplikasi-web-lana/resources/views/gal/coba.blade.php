@extends('layout.mainmaster')
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
      <title>Galeri Bootstrap 5</title>
      <style>
        /* Tambahkan gaya tambahan jika diperlukan */
        .headline {
          border-bottom: 2px solid #333;
          padding-bottom: 10px;
          margin-bottom: 20px;
        }
        .gambar-kotak {
            width: 230px;
            height: 230px;
          border: 1px solid #ccc;
          padding: 10px;
          /* margin-bottom: 20px; */
          /* height: 100px; Ubah tinggi sesuai kebutuhan Anda */
          /* width: 200px; /*Set lebar 100% untuk memastikan persegi panjang */
          overflow: hidden; /* Menghilangkan konten yang melebihi batas kotak */
          position: relative; /*Memastikan posisi relatif untuk menempatkan teks*/
          cursor: pointer; /*Menetapkan kursor sebagai pointer untuk menunjukkan interaktif*/
          /* display: grid; */
          align-content: center
          /* float: left;  */
        }

        .gambar-kotak img {
          width: 100%; /* Untuk memastikan gambar mengisi kotak */
          height: auto; /* Untuk menjaga aspek rasio gambar */
        }

        .teks-atas {
        height: 75px;
        position: absolute;
        inset: 0;  /* Ini menggantikan top: 0; left: 0; right: 0; */
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        padding: 10px;
        text-align: center;
        display: none;
        }
        .teks-bawah {
        height: 75px;
        position: absolute;
        inset: auto 0 0 0;
          background-color: rgba(0, 0, 0, 0.5);
          color: #fff;
          padding: 10px;
          text-align: center;
          display: none;
        }
        .modal-body:hover .teks-atas,
        .modal-body:hover .teks-bawah {
          display: block;
        }
        .modal-dialog {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
        }

        .modal-content {
          /* width: 600px; */
          /* height: 400px; */
          height: 80%;
          /* overflow: hidden; */
        }
        .modal-body {
          padding: 2rem;
          overflow-y: auto;
          display: flex;
          justify-content: center;
            align-items: center;
        }
        .modal-body img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain; /* Atau gunakan 'cover' jika ingin gambar mengisi seluruh area dengan mempertahankan aspek rasio */
        }

      </style>
    </head>
    <body>

    <div class="container ">
        <div class="row">
          <div class="col-md-12">
            <div class="headline my-2">
              <h2>Sertifikat</h2>
            </div>
          </div>
        </div>
        <div class="d-flex p-2 flex-wrap">
            @foreach ($sertif as $index => $item)
            @if ($item->kategori == 'sertifikat')
                <div class="flex w-25 h-25 p-3 col-md-4 justify-content-center">
                        <div class="gambar-kotak" style="" data-bs-toggle="modal" data-bs-target="#modalSertifikat{{$index}}">
                            <img class="img-fluid" src="{{ asset('storage/images/' . $item->foto)}}" alt="Sertifikat 1">
                            <div class="teks-atas">Teks Atas</div>
                            <div class="teks-bawah">Teks Bawah</div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modalSertifikat{{$index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img  class="img-fluid" src="{{ asset('storage/images/' . $item->foto)}}" alt="Sertifikat 1" >
                                    <div class="teks-atas d-flex justify-content-between">
                                        <p class="my-auto"> Isi Judul</p>
                                        <div class="d-flex gap-5 my-auto" >
                                            <p>more info</p>
                                            <button type="button" class="btn-close justify-content-end" aria-label="Close" data-bs-dismiss="modal"></button>
                                        </div>

                                    </div>
                                    <div class="teks-bawah">Teks Bawah</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
              <div class="headline my-2">
                <h2>Kegiatan</h2>
              </div>
            </div>
          </div>
          <div class="d-flex p-2 flex-wrap">
              @foreach ($sertif as $index => $item1)
              @if ($item1->kategori == 'kegiatan')
              <div class="flex w-25 h-25 p-3 col-md-4 justify-content-center">
                          <div class="gambar-kotak" style="" data-bs-toggle="modal" data-bs-target="#modalKegiatan{{$index}}">
                              <img class="img-fluid" src="{{ asset('storage/images/' . $item1->foto)}}" alt="Sertifikat 1">
                              <div class="teks-atas">Teks Atas</div>
                              <div class="teks-bawah">Teks Bawah</div>
                          </div>
                        </div>

                      <!-- Modal -->
                      <div class="modal fade" id="modalKegiatan{{$index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                          <div class="modal-body">
                              <img  class="img-fluid" src="{{ asset('storage/images/' . $item1->foto)}}" alt="Sertifikat 1" >
                              <div class="teks-atas d-flex justify-content-between">
                                  <p class="my-auto"> Isi Judul</p>
                                  <div class="d-flex gap-5 my-auto" >
                                      <p>more info</p>
                                      <button type="button" class="btn-close justify-content-end" aria-label="Close" data-bs-dismiss="modal"></button>
                                  </div>

                              </div>
                              <div class="teks-bawah">Teks Bawah</div>
                          </div>
                          </div>
                      </div>
                      </div>
                        @endif
                        @endforeach
          </div>

    </div>


    <script>
        // Tambahkan skrip ini untuk menangani penutupan modal
        $(document).ready(function(){
            $('.modal').on('hidden.bs.modal', function () {
                // Membersihkan modal setelah ditutup
                $(this).find('form')[0].reset();
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        </body>
    </html>

@endsection
