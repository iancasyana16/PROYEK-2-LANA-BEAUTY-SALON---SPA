<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <h3 class="text-center text-white mt-3" style="min-width: 100px; overflow: hidden;">
        <i class="fa-solid fa-gauge-high p-1 fs-3" style="color: #ffffff;"></i>
        <span class="dashboard-text h3">Dashboard</span>
    </h3>
    <hr class="text-white">

    <div class="sidebar fw-bold">
        <nav class="mt-1">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/dashboard/home') }}"
                        class="nav-link {{ Request::is('dashboard/home*') ? 'active' : '' }}">
                        <i class="fa-solid fa-house-chimney p-1 fs-5" style="color: #ffffff;"></i>
                        <p class="fs-5">
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/user" class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user p-1 fs-5" style="color: #ffffff;"></i>
                        <p class="fs-5">
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/booking"
                        class="nav-link {{ Request::is('dashboard/booking*') ? 'active' : '' }}">
                        <i class="fa-solid fa-phone-volume p-1 fs-5" style="color: #ffffff;"></i>
                        <p class="fs-5">
                            Booking
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/layanan"
                        class="nav-link {{ Request::is('dashboard/layanan*') ? 'active' : '' }}">
                        <i class="fa-solid fa-cart-shopping p-1 fs-5" style="color: #ffffff;"></i>
                        <p class="fs-5">
                            Layanan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/dashboard/gallery') }}"
                        class="nav-link {{ Request::is('dashboard/gallery*') ? 'active' : '' }}">
                        <i class="fa-solid fa-certificate p-1 fs-5" style="color: #ffffff;"></i>
                        <p class="fs-5">
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/dashboard/setting') }}"
                        class="nav-link {{ Request::is('dashboard/setting*') ? 'active' : '' }}">
                        <i class="fa-solid fa-gears p-1 fs-5" style="color: #ffffff;"></i>
                        <p class="fs-5">
                            Setting
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
