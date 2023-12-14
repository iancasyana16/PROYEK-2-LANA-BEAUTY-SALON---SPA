<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profil</title>

    <link rel="stylesheet" href="{{asset('asset/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap-icons/bootstrap-icons.min.css')}}">
    @yield('stylesheet')
    <style>
        body {
            margin: 0;
            padding: 0;
            background: rgb(254, 173, 137);
            background: linear-gradient(160deg, rgba(254, 173, 137, 1) 0%, rgba(185, 160, 170, 1) 31%, rgba(151, 153, 186, 1) 46%, rgba(158, 154, 183, 1) 57%, rgba(254, 173, 137, 1) 76%, rgba(0, 212, 255, 1) 100%);
        }
    </style>
</head>
<body>
    <div class="layoutsidebar flex min-h-screen">
        <nav class="w-72 h-full flex-shrink-0 text-slate-500 border border-white relative">
            @include('layout.sidebaruser')
        </nav>
        <main class="p-12 w-full border border-white flex justify-center items-center">
            @yield('content')
        </main>
    </div>
    <footer>
    </footer>
</body>
</html>
