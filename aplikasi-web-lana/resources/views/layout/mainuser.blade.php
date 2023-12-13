<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-icons/bootstrap-icons.min.css')}}">
    @yield('stylesheet')
</head>
<body>
    <div class="layDashboard flex min-h-screen">
        <nav class="w-72 h-full flex-shrink-0 border border-black relative">
            @include('layoutDashboard.sidebar')
        </nav>
        <main class="p-12 w-full border border-black flex justify-center items-center">
            @yield('content')
        </main>
    </div>
    <footer>
    </footer>
</body>
</html>
