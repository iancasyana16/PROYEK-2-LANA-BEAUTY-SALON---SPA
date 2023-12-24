<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/asset/css/regis.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="bungkus row justify-content-center mt-8">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-center">
                    <img src="/asset/img/logo lana.png" alt="..." style="width: 150px;">
                    <h6 class="card-title">REGISTER</h6>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form id="registrationForm" action="{{ route('registerindex') }}" method="POST">
                        @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Nomor Telepon</label>
                        <input type="number" name="telepon" class="form-control" id="telepon" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="mb-2">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" id="registerButton">REGISTER</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector("#registrationForm").addEventListener("submit", async function(event) {
            event.preventDefault();

            // Fetch API untuk mengirimkan data formulir
            const formData = new FormData(this);
            const response = await fetch("{{ route('registerindex') }}", {
                method: "POST",
                body: formData,
            });

            // Periksa apakah registrasi berhasil
            if (response.ok) {
                // Arahkan ke halaman login
                window.location.href = "{{ route('loginindex') }}";
            } else {
                // Tangani kegagalan registrasi (tampilkan pesan kesalahan, dll.)
                // Untuk sementara, Anda bisa mencatat kesalahan ke konsol
                console.error("Registrasi gagal:", response.statusText);
            }
        });
    </script>

</body>

</html>
