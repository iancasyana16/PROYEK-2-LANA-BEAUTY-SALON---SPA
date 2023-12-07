<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="stylesheet" href="/asset/css/carousel.css">
    <link rel="stylesheet" href="/asset/css/dashboard.css">
    <link rel="stylesheet" href="/asset/css/footer.css">
    <link rel="stylesheet" href="/asset/css/form-validation.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: rgb(254, 173, 137);
            background: linear-gradient(160deg, rgba(254, 173, 137, 1) 0%, rgba(185, 160, 170, 1) 31%, rgba(151, 153, 186, 1) 46%, rgba(158, 154, 183, 1) 57%, rgba(254, 173, 137, 1) 76%, rgba(0, 212, 255, 1) 100%);
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .navbar {
            background: url('{{ asset('asset/img/bcnavbar.png') }}') center/cover no-repeat;
            height: 90px;
        }
    </style>
    <title>@yield('title')</title>

</head>

<body>
    <nav>
        @include('layoutbooking.navbar')
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layoutbooking.footer')
    </footer>

</body>

</html>
