@extends('layout.penjual')
{{-- @extends('layout.mainadmin') --}}
{{-- @section('content') --}}
{{-- @section('title', $title) --}}

@section('content')

<nav class="flex justify-between" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25"/>
            </svg>
            Setting
            </a>
        </li>
    </ol>
</nav>

<div class="my-3 pl-1 font-bold">Setting</div>

<div class="mb-3 rounded-xl border border-gray-300 dark:border-gray-700 bg-white overflow-x-auto overflow-y-hidden">
    <ul class="flex -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="" role="presentation">
            <button class="py-4 px-8 h-full inline-block border-b-4 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="" role="presentation">
            <button class="py-4 px-8 h-full inline-block border-b-4 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="toko-tab" data-tabs-target="#toko" type="button" role="tab" aria-controls="toko" aria-selected="false">Toko</button>
        </li>
    </ul>
</div>

<div id="default-tab-content">
    <div class="hidden" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    {{-- <div class="hidden p-2 rounded-lg bg-white dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab"> --}}

        <form>
            <div class="p-5 bg-white drop-shadow-lg rounded-xl">
                <h4 class="font-semibold">Detail Profile</h4>
                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="mb-6">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Freya" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="freya@gmail.com" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Password" required>
                </div>
                <div class="mb-6">
                    <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>
                    <input type="text" id="nohp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="088754337686" required>
                </div>

                <div class="flex flex-row-reverse gap-2">
                    <button type="button" data-modal-target="popup-modal-tambah-profile" data-modal-toggle="popup-modal-tambah-profile"  class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Simpan</button>
                    <button type="button" class="text-black bg-white border-2 hover:bg-gray-500 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-300 dark:hover:bg-gray-400 dark:focus:ring-gray-800">Batal</button>
                </div>
            </div>

            <div id="popup-modal-tambah-profile" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal-tambah-profile">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h4 class="mb-2 text-lg font-bold text-gray-500 dark:text-gray-400">Simpan Perubahan Profile</h4>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Pastikan data profile yang dimasukan sudah sesuai..</h3>
                            <button data-modal-hide="popup-modal-tambah-profile" type="submit" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                Simpan
                            </button>
                            <button data-modal-hide="popup-modal-tambah-profile" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

    <div class="hidden" id="toko" role="tabpanel" aria-labelledby="toko-tab">

        <form action="{{ route('admin.setting.update' , ['id => $salon->id_salon'])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="p-5 bg-white drop-shadow-lg rounded-xl">
                <h4 class="font-semibold">Informasi Toko</h4>
                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="mb-6">
                    <label for="nama_salon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Toko</label>
                    <input type="text" name="nama_salon" value="{{ $salon->nama_salon}}" id="nama_salon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Lana Beauty Salon & Spa" required>
                </div>

                <div class="grid mb-3 md:grid-cols-1">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto_salon">Foto Toko</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="foto_salon" type="file" name="foto_salon" value="{{ $salon->foto_salon}}">
                    </div>
                </div>
                <div class="grid mb-3 md:grid-cols-1">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="logo_salon" name="logo_salon">Logo Toko</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="logo_salon" name="logo_salon" value="{{ $salon->logo_salon}}" type="file">
                    </div>
                </div>

                {{-- <div class="grid gap-6 mb-3 md:grid-cols-3">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="fotogaleri1">Foto galeri 1</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="fotogaleri1" type="file">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="fotogaleri2">Foto galeri 2</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="fotogaleri2" type="file">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="fotogaleri3">Foto galeri 3</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="fotogaleri3" type="file">
                    </div>
                </div> --}}
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG or JPG (MAX. 800x400px).</p>

                <div class="mb-3 mt-4">
                    <label for="alamat_salon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Toko</label>
                    <textarea id="alamat_salon" name="alamat_salon" value="{{ $salon->alamat_salon}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum vitae elit id dignissim. Donec quis erat tellus. In non dignissim mauris, id efficitur sem. Morbi lectus mauris, scelerisque vel egestas non"></textarea>
                </div>

                <div class="mb-3 mt-4">
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Toko</label>
                    <textarea id="deskripsi" name="deskripsi" value="{{ $salon->deskripsi}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum vitae elit id dignissim. Donec quis erat tellus. In non dignissim mauris, id efficitur sem. Morbi lectus mauris, scelerisque vel egestas non"></textarea>
                </div>

                <div class="mb-3">
                    <label for="visi_salon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visi Toko</label>
                    <textarea id="visi_salon" name="visi_salon" value="{{ $salon->visi_salon}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum vitae elit id dignissim. Donec quis erat tellus. In non dignissim mauris, id efficitur sem."></textarea>
                </div>

                <div class="mb-3">
                    <label for="misi_salon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Misi Toko</label>
                    <textarea id="misi_salon" name="misi_salon" value="{{ $salon->misi_salon}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum vitae elit id dignissim. Donec quis erat tellus. In non dignissim mauris, scelerisque vel egestas non"></textarea>
                </div>

            </div>

            <div class="p-5 bg-white drop-shadow-lg rounded-xl mt-3">
                <h4 class="font-semibold">Jadwal Toko</h4>
                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="grid gap-6 mb-3 md:grid-cols-3">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="weekday_buka">Weekday Buka</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="weekday_buka" name="weekday_buka" value="{{ $salon->weekday_buka}}" type="time">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="weekday_tutup">Weekday Tutup</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="weekday_tutup" name="weekday_tutup" value="{{ $salon->weekday_tutup}}" type="time">
                    </div>
                </div>
                <div class="grid gap-6 mb-3 md:grid-cols-3">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="weekend_buka">Weekend Buka</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="weekend_buka" name="weekend_buka" value="{{ $salon->weeekend_buka}}" type="time">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="weekend_tutup">Weekend Tutup</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="weekend_tutup" name="weekend_tutup" value="{{ $salon->weekend_tutup}}" type="time">
                    </div>
                </div>

                {{-- <div class="mb-3">
                    <label for="instagram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
                    <input type="text" name="instagram" id="instagram" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="rhycopycernter" required>
                </div> --}}

                {{-- <div class="mb-3">
                    <label for="x" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">X</label>
                    <input type="text" id="x" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="rhycopycernter" required>
                </div> --}}

            </div>
            <div class="p-5 bg-white drop-shadow-lg rounded-xl mt-3">
                <h4 class="font-semibold">Social Media</h4>
                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="mb-3">
                    <label for="facebok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebok</label>
                    <input type="text" name="facebook" value="{{ $salon->facebook}}" id="facebok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Lanabeautysalon&spa" required>
                </div>

                <div class="mb-3">
                    <label for="instagram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
                    <input type="text" name="instagram" value="{{ $salon->instagram}}" id="instagram" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Lanabeautysalon&spa" required>
                </div>

                <div class="mb-3">
                    <label for="twitter" class="block mb-2 tetwittert-sm font-medium text-gray-900 dark:text-white">X</label>
                    <input type="text" name="twitter" value="{{ $salon->twitter}}" id="twitter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Lanabeautysalon&spa" required>
                </div>

                <div class="flex flex-row-reverse gap-2">
                    <button type="button" data-modal-target="popup-modal-tambah-toko" data-modal-toggle="popup-modal-tambah-toko"  class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Simpan</button>
                    <button type="button" class="text-black bg-white border-2 hover:bg-gray-500 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-300 dark:hover:bg-gray-400 dark:focus:ring-gray-800">Batal</button>
                </div>

            </div>

            <div id="popup-modal-tambah-toko" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal-tambah-toko">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h4 class="mb-2 text-lg font-bold text-gray-500 dark:text-gray-400">Simpan Perubahan Toko</h4>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Pastikan data toko yang dimasukan sudah sesuai..</h3>
                            <button data-modal-hide="popup-modal-tambah-toko" type="submit" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                Simpan
                            </button>
                            <button data-modal-hide="popup-modal-tambah-toko" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection
