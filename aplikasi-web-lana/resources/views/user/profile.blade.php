@extends('layout.mainuser')
@section('content')
    <section class="content-wrapper p-5">
        <div class="contentFormUpdateProfil border border-black w-full p-6 rounded-xl bg-light" id="updateProfil">
            <div class="headUpdate text-4xl font-bold text-center">
                <h2>Update Profil Anda</h2>
            </div>
            <div class="contentForm w-full mt-8">
                @auth
                <form action="{{ route('settinguser.update', ['id' => auth()->user()->id]) }}" method="POST">
                    <div class="listForm flex items-center w-full gap-3">
                        <div class="itemLabels flex-shrink-0">
                            <div class="listLabels space-y-5 flex flex-col justify-center">
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
                                {{-- <div class="itemLabels">
                                    <div class="theLabels">
                                        <label for="">Username</label>
                                    </div>
                                </div> --}}
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
                                        <div class="border border-black outline-none w-full rounded">
                                            {{-- @if (session('user'))
                                            {{ session('user')->nama }}
                                        @else
                                            Belum diisi
                                        @endif --}}
                                            <input type="text" name="nama" id="" value="{{ old('nama', $user->nama) }}"
                                                class="border border-black text-black outline-none w-full rounded">
                                        </div>
                                        {{-- @if (session('user'))
                                            {{ session('user')->nama }}
                                        @else

                                        @endif --}}
                                    </div>
                                </div>
                                <div class="itemInput">
                                    <div class="thInput">
                                        <div class="border border-black outline-none w-full rounded">
                                            {{-- @if (session('user'))
                                            {{ session('user')->email }}
                                        @else
                                            Belum diisi
                                        @endif --}}
                                            <input type="text" name="email" id=""
                                                value="{{ auth()->user()->email }}" readonly
                                                class="border border-black text-black rounded outline-none w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="itemInput">
                                    <div class="thInput">
                                        <div class="border border-black outline-none w-full rounded">
                                            {{-- @if (session('user'))
                                            {{ session('user')->nomor_telepon }}
                                        @else
                                            Belum diisi
                                        @endif --}}
                                            <input type="text" name="nomor_telepon" id=""
                                                value="{{ auth()->user()->telepon }}"
                                                class="border border-black text-black rounded outline-none w-full">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="itemInput">
                                    <div class="thInput">
                                        <div class="border border-black outline-none w-full rounded">
                                            @if (session('user'))
                                            {{ session('user')->Username }}
                                        @else
                                            Belum diisi
                                        @endif
                                            <input type="text" name="" id=""
                                                class="border border-black text-black outline-none w-full rounded">
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="itemInput">
                                    <div class="thInput">
                                        <div class="border border-black outline-none w-full rounded">
                                            {{-- @if (session('user'))
                                            {{ session('user')->password }}
                                        @else
                                            Belum diisi
                                        @endif --}}
                                            <input type="text" name="password" id=""
                                                value="*********" readonly
                                                class="border border-black text-black rounded outline-none w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="itemInput">
                                    <div class="thInput">
                                        <div class="border border-black outline-none w-full rounded">
                                            {{-- @if (session('user'))
                                            {{ session('user')->alamat }}
                                        @else
                                            Belum diisi
                                        @endif --}}
                                            <input type="text" name="alamat" id=""
                                            value="{{auth()->user()->alamat}}"
                                                class="border border-black text-black rounded outline-none w-full">
                                        </div>
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
                @endauth
            </div>
        </div>
    </section>
@endsection
