{{-- <div class="content-sidebar bg-slate-600 mx-auto w-fit h-screen py-8 sticky top-0">
    <div class="photoProfileUser border-b-2 py-8">
        <div class="phtUser w-1/2 aspect-square overflow-hidden rounded-[100%] mx-auto">
            <img src="{{ asset('asset/img/gambar profil.jpeg') }}" alt=""
                class="w-full h-full object-cover object-center">
        </div>
    </div>
    <div class="listItems mt-6 text-white">
        <ul class="space-y-4 ml-3">
            <li>
                <a href="" class="items-link text-xl flex items-center gap-2 p-2 hover:bg-black rounded-lg">
                    <i class="bi bi-house-fill"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="" class="items-link text-xl flex items-center gap-2 p-2 hover:bg-black rounded-lg">
                    <i class="bi bi-gear"></i>
                    <p>Setting</p>
                </a>
            </li>
            <li>
                <a href="{{ route('loginPost') }}"
                    class="items-link text-xl flex items-center gap-2 p-2 hover:bg-black rounded-lg">
                    <i class="bi bi-box-arrow-left"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div> --}}



<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar fw-bold">
        <nav class="mt-1">
            <ul class="nav nav-pills nav-sidebar flex-column mt-2" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/userprofil') }}" class="nav-link {{ Request::is('userprofil') ? 'active' : '' }}">
                        <i class="fa-solid fa-house-chimney p-1 fs-5" style="color: #ffffff;"></i>
                        <p class="fs-5">
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/userprofil/setting') }}"
                        class="nav-link {{ Request::is('userprofil/setting*') ? 'active' : '' }}">
                        <i class="fa-solid fa-gears p-1 fs-5" style="color: #ffffff;"></i>
                        <p class="fs-5">
                            Setting
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/userprofil/logout') }}"
                        class="nav-link {{ Request::is('userprofil/logout*') ? 'active' : '' }}">
                        <i class="fa-solid fa-power-off p-1 fs-5" style="color: #ffffff;"></i>
                        <p class="fs-5">
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
