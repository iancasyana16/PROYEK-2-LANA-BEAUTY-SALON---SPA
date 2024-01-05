<div class="container-fluid bg-dark text-white p-5">
    @foreach ($salon as $item)
        <div class="row">
            <div class="col-md-3">
                <div class="row text-start my-2">
                    <h3 class="mb-2">Contact Us</h3>
                    <p>
                        {{ $item->alamat_salon }}
                    </p>
                    <p>
                        <a href="https://wa.me/c/6287778019888" class="text-white text-decoration-none" target="blank"><img
                                src="{{ asset('asset/img/logo telepon.png') }}" alt=""
                                style="width:30px; height:30px;">087778019888</a>
                    </p>
                </div>
                <div class="row text-start">
                    <h3 class="mb-2">Opening Hours</h3>
                    <p>Weekday : {{ $item->weekday_buka }} - {{ $item->weekday_tutup }}</p>
                    <p>Weekend : {{ $item->weekend_buka }} - {{ $item->weekend_tutup }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row text-start my-2">
                    <h3 class="mb-2">Asisten Customer</h3>
                    <p><a href="{{ url('/booking') }}" class="text-white text-decoration-none">Booking Sekarang</a></p>
                    <p><a href="{{ url('/userprofil') }}" class="text-white text-decoration-none">My Account</a></p>
                </div>
                <div class="row text-start my-2">
                    <h3 class="mb-2">Sosial Media</h3>
                    <p class=""><a href="{{ $item->instagram }}" class="text-white text-decoration-none"
                            target="blank"><img src="{{ asset('asset/img/logo instagram hitam.png') }}" alt=""
                                style="width:30px; height:30px;">Instagram</p></a>
                    <p><a href="{{ $item->facebook }}" class="text-white text-decoration-none" target="blank"><img
                                src="{{ asset('asset/img/logo facebook.png') }}" alt=""
                                style="width:30px; height:30px;">Facebook</p></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row text-start my-2">
                    <h3 class="mb-2">Member</h3>
                    <p>{{ $item->deskripsi }}</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4853875881968!2d108.32681387355596!3d-6.331101361944735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb9cfbbd844a7%3A0x1dbbcff4d4fc0d5a!2sLana%20beauty%20salon%20and%20spa!5e0!3m2!1sid!2sid!4v1703935800914!5m2!1sid!2sid"
                                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" width="300" height="300"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
