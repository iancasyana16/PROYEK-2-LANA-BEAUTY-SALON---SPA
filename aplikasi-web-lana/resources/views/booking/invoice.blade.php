@extends('layout.pembeli')

@section('content')

{{-- @if(session('booking')) --}}
<div class="p-7 rounded rounded-xl shadow">
    {{-- <input type="hidden" name="id" value="{{ $data_booking->id }}"> --}}

    <div class="mb-5">
        <p class="text-2xl font-semibold">Invoice</p>
    </div>
    <div class="">
        <div class="bg-gray-100 border border-gray-200 rounded rounded-xl p-5">
            <div class="flex justify-between">
                <div>
                    <p class="text-md">No. Pesanan</p>
                </div>
                <div>
                    <p class="text-xl font-bold">{{ $booking->id}}</p>
                </div>
            </div>
            <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="flex justify-between">
                <div>
                    <p class="text-md"></p>
                </div>
                <div>
                    <p class="text-md font-bold">{{ $booking->tanggal_booking }}</p>
                </div>
            </div>
        </div>
        <div class="pl-6 bg-gray-100 border border-gray-200 rounded rounded-xl p-5 my-4">
            <p class="text-sm mb-5">Produk atau Jasa yang dipesan</p>
            {{-- @foreach ($booking->id as $item)
                <div class="flex items-center justify-between mb-3">
                    <img class="w-20 rounded-lg bg-gray-300" src="{{ asset('storage/images/' . $item->layanan->foto_layanan) }}" alt="product image" />
                    <div class="px-4 mr-auto">
                        <p class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white">{{ $item->layanan->nama_layanan }}</p>
                        <p class="text-sm tracking-tight text-gray-900 dark:text-white">{{ $item->jumlah }}x Rp{{ $item->layanan->harga_layanan }}</p>
                    </div>
                </div>
            @endforeach --}}
            @if ($booking)
                <div class="flex items-center justify-between mb-3">
                    <img class="w-20 rounded-lg bg-gray-300" src="{{ asset('storage/images/' . $booking->layanan->foto_layanan) }}" alt="product image" />
                    <p class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white">{{ $booking->layanan->nama_layanan }}</p>
                    <p class="text-sm tracking-tight text-gray-900 dark:text-white">{{ $booking->jumlah }}x Rp{{ $booking->layanan->harga_layanan }}</p>
                </div>
                @php
                    $total = $booking->jumlah * $booking->layanan->harga_layanan;
                @endphp
            @endif

            {{-- <div class="flex items-center justify-between mb-3">
                <img class="w-20 rounded-lg bg-gray-300" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="product image" />
                <div class="px-4 mr-auto">
                    <p class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white">Pulpen Koleksi Elegan Seri Sentuhan Emas</p>
                    <p class="text-sm tracking-tight text-gray-900 dark:text-white">1x Rp5.000</p>
                </div>
            </div>
            <div class="flex items-center justify-between mb-3">
                <img class="w-20 rounded-lg bg-gray-300" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="product image" />
                <div class="px-4 mr-auto">
                    <p class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white">Buku Sketch Artistik Dengan Kertas Kualitas Tinggi</p>
                    <p class="text-sm tracking-tight text-gray-900 dark:text-white">1x Rp20.000</p>
                </div>
            </div> --}}
        </div>

        <div class="bg-gray-100 border border-gray-200 rounded rounded-xl p-5 my-4">
            {{-- <div class="flex justify-between">
                <div>
                    <p class="text-md">Metode Pembayaran</p>
                </div>
                <div>
                    <p class="text-md font-bold">Dana</p>
                </div>
            </div>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700"> --}}
            <div class="flex justify-between">
                <div>
                    <p class="text-md">Total Belanja</p>
                </div>
                <div>
                    <p class="text-md font-bold">Rp{{ $total }}</p>
                </div>
            </div>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="flex justify-between">
                <div>
                    <p class="text-md">No. Pembayaran</p>
                </div>
                <div>
                    <p class="text-xl font-bold">23423480222JHFHW8844</p>
                </div>
            </div>
        </div>
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-64 h-1 my-4 bg-gray-200 border-0 rounded dark:bg-gray-700">
            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                <p>{{ $booking->status }}</p>
            </div>
        </div>
        <div class="bg-gray-100 border border-gray-200 rounded rounded-xl p-5 my-3">
            <div class="flex text-center justify-center">
                <p class="text-md">Pembayaran dilakukan di Kasir </p>
            </div>
            {{-- <img src="{{ asset('/img/qr.png') }}" alt="" class="mx-auto my-3 rounded rounded-xl"> --}}
            <div>
                <p class="text-sm italic text-gray-600">*Kirim dengan nominal yang sesuai dengan Total Belanja</p>
                <p class="text-sm italic text-gray-600">*jika dilihat pembayaran tidak sesuai dengan Total Belanja maka otomatis akan kami tolak</p>
                <p class="text-sm italic text-gray-600">*info lebih lanjut bisa hubungi kami di halaman tentang kami</p>
            </div>
        </div>
        <div class="flex">
            <a href="/ulasan" class="font-medium ml-auto">
                <button type="button" class="text-gray-900 bg-gray-100 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-2 focus:ring-gray-200 font-medium rounded-lg text-sm px-7 py-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Beri Ulasan</button>
            </a>
        </div>
    </div>
</div>
{{-- @endif --}}

@endsection
