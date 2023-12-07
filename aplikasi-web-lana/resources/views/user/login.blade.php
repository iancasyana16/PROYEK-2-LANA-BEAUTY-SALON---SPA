<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/asset/css/login.css">
    <style>
        .card {
            border-radius: 10px
        }
    </style>
    <title>@yield('title')</title>
</head>

<body>
    <div class=" bungkus row justify-content-center mt-8">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-center">
                    <img src="/asset/img/logo lana.png" alt="..." style="width: 150px;">
                </div>
                <div class="card-body">
                    {{-- @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf --}}

                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="txt-center nt-3 d-flex justify-content-center">
                        <button class="btn btn-primary mt-3">LOGIN</button>
                    </div>
                    <div class="txt-center nt-3 d-flex justify-content-center">
                        <a href="" class="nav-link text-primary mt-3">Belum Punya Akun?</a>
                    </div>
                    <div class="txt-center nt-3 d-flex justify-content-center">
                        <a href="/register" class="nav-link text-primary">Daftar Disini</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
