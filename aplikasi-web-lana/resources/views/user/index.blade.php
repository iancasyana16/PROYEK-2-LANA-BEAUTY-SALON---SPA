@extends('layout.mainuser')
@section('content')
    <style>
        /* .my-section-content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; Atur tinggi container, sesuaikan kebutuhan
        Tambahan gaya sesuai kebutuhan
    } */
    </style>
    <section class="w-full">
        <div class="contentFormUpdateProfil text-white  border-black w-full p-6 rounded-xl bg-slate-600"
            id="updateProfil">
            <div class="headUpdate text-4xl font-bold text-center">
                <h2>Update Profil Anda</h2>
            </div>
            <div class="contentForm w-full mt-8">
                @auth
                    {{-- @foreach ($user as $apdet) --}}
                        <form action=" {{ route('settinguser.update', ['id' => auth()->user()->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="listForm flex items-center w-full gap-3">
                                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                <div class="itemLabels flex-shrink-0">
                                    <div class="listLabels space-y-2 flex flex-col justify-center">
                                        <div class="itemLabels">
                                            <div class="theLabels">
                                                <label for="">Nama Lengkap</label>
                                            </div>
                                        </div>
                                        <div class="itemLabels">
                                            <div class="theLabels">
                                                <label for="">Email</label>
                                            </div>
                                        </div>
                                        <div class="itemLabels">
                                            <div class="theLabels">
                                                <label for="">Nomor Telepon</label>
                                            </div>
                                        </div>
                                        <div class="itemLabels">
                                            <div class="theLabels">
                                                <label for="">Password</label>
                                            </div>
                                        </div>
                                        <div class="itemLabels">
                                            <div class="theLabels">
                                                <label for="">Alamat</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemInputs w-full">
                                    <div class="listInputs space-y-2">
                                        <div class="itemInput">
                                            <div class="thInput">
                                                <div class="border border-black outline-none w-full ">
                                                </div>
                                                <input type="text" name="nama" id=""
                                                    value="{{ old('nama', $user->nama) }}"
                                                    class="border border-black text-black outline-none w-full">
                                            </div>
                                        </div>
                                        <div class="itemInput">
                                            <div class="thInput">
                                                <div class="border border-black  outline-none w-full">
                                                </div>
                                                <input type="text" name="email" id=""
                                                    value="{{ auth()->user()->email }}" readonly
                                                    class="border border-black text-black outline-none w-full">
                                            </div>
                                        </div>
                                        <div class="itemInput">
                                            <div class="thInput">
                                                <div class="border border-black outline-none w-full">
                                                </div>
                                                <input type="text" name="telepon" id=""
                                                    value="{{ auth()->user()->telepon }}"
                                                    class="border border-black text-black outline-none w-full">
                                            </div>
                                        </div>
                                        <div class="itemInput">
                                            <div class="thInput">
                                                <div class="border border-black outline-none w-full">
                                                    {{-- @if (session('user'))
                                            {{ session('user')->password }}
                                        @else --}}
                                                    {{-- Belum diisi --}}
                                                    {{-- @endif --}}
                                                </div>
                                                <input type="password" name="password" id=""
                                                    value="{{ auth()->user()->password }}" readonly
                                                    class="border border-black text-black outline-none w-full">
                                            </div>
                                        </div>
                                        <div class="itemInput">
                                            <div class="thInput">
                                                <div class="border border-black outline-none w-full">
                                                    {{-- @if (session('user'))
                                            {{ session('user')->alamat }}
                                        @else
                                            Belum diisi
                                        @endif --}}
                                                </div>
                                                <input type="text" name="alamat" id=""
                                                    value="{{ auth()->user()->alamat }}"
                                                    class="border border-black text-black outline-none w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
                                <button type="submit" class="bg-red-700 text-white px-4 py-2 rounded-md">Batal</button>
                            </div>
                        </form>
                    {{-- @endforeach --}}

                    {{-- Tampilkan Data Pengguna --}}
                    {{-- <div>
                        Nama: {{ $user->nama }}
                        Email: {{ $user->email }}
                        <!-- Tampilkan data pengguna lainnya -->
                    </div>
                    <a href="{{ route('settinguser.edit', ['edit' => 1]) }}">Edit Profil</a> --}}
                @endauth

            </div>
        </div>
    </section>
@endsection
