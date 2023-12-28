<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <title>@yield('title')</title>
</head>
<body class="font-sfpro bg-white">
    {{-- @include('item.navbar') --}}
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow h-full p-4">
            <div class="w-full sm:w-3/5 mx-auto">
                @yield('content')
            </div>
        </div>
        {{-- @include('item.footer') --}}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>
