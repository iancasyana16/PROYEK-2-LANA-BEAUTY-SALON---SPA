<nav class="container-fluid navbar navbar-expand-lg navbar-dark bg-transparent m-0">
    {{-- @foreach ($collection as $item) --}}
    <div class="container">
        <a class="d-flex fs-5" href="/"><img src="{{ asset('asset/img/logo lana.png') }}" alt="" height="75"
                width="120"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- @endforeach --}}

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
                        <a class="nav-link active" href="/gallery">Gallery</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link active" href="{{ route('loginPost') }}">Logout</a>
                    </li> --}}
                </ul>
            </div>
        </div>

    {{-- @if (session('user'))

        <form class="d-flex gap-1 fs-5">
            class="d-flex gap-1 fs-5" (class milik atas alias form)
            <a href="{{ route('settinguser.edit', ['id' => session('user')->id]) }}" class="d-flex align-items-center">
                <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Haiii"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
                </button>
            </a>
        </form>
    @endif --}}
    @auth
    <form class="d-flex gap-1 fs-5">
        <a href="{{ route('user.home')}}" class="d-flex align-items-center">
            <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Haiii"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
            </button>
        </a>
    </form>
    @endauth
    {{-- @auth
    <form class="d-flex gap-1 fs-5">
        <a href="{{ route('settinguser.edit', ['id' => auth()->user()->id]) }}" class="d-flex align-items-center">
            <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Haiii"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
            </button>
        </a>
    </form>
    @endauth --}}

    </div>
</nav>
