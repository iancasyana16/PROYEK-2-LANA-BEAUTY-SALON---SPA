<nav class="container-fluid navbar navbar-expand-lg navbar-dark bg-transparent m-0">
    <div class="container">
        <a class="navbar-brand d-flex fs-5" href="/"><img src="{{ asset('asset/img/logo nobg.png') }}" alt=""
                height="75" width="120"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-flex fw-bold p-3 mb-2 fs-5">
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/layanan">Service</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/galeri">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>

        <form class="d-flex gap-1 fs-5">
            <a href="{{ route('login') }}" class="btn text-decoration-underline text-white">Login</a>
            <a href="{{ route('register') }}" class="btn btn-light">Sign Up</a>
        </form>
    </div>
</nav>
