<!-- Floating Navbar Button -->
<div class="navbar-custom mb-5" id="toggleSidebar">
    <button class="btn">
        <div class="text-center">
            <img class="rounded-circle" src="{{ asset('assets/img/Logo.jpg') }}" alt="ShopTronics"
                style="width: 70px; height: 70px;margin: -10px">
        </div>
    </button>
</div>
{{--  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top" style="border-radius: 10px;">
    @if (Session::has('success'))
        <div id="toast-container"></div>
    @endif
    <div class="container-fluid" style="border-block: 2px solid;writing-mode: horizontal-tb;">
        <button class="btn btn-danger" id="toggleSidebar">☰</button>
        <div class="navbar-nav align-items-center ms-auto">
            <a class="sidebar-control sidebar-main-toggle hidden-xs" style="margin-left: 15px;">
                <marquee style="margin-top: 7px; color:cyan;">DimsumBliss - Electronic Shop</marquee>
            </a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    @if (@Auth::user()->username)
                        <img class="rounded-circle me-lg-2"
                            src="https://ui-avatars.com/api/?name={{ @Auth::user()->username }}&background=FFF&color=000"
                            alt="{{ @Auth::user()->username }}" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex"
                            style="text-transform: uppercase;color:cyan;
                        ">{{ @Auth::user()->username }}</span>
                    @else
                        <img class="rounded-circle me-lg-2"
                            src="https://ui-avatars.com/api/?name=Admin&background=007BFF&color=FFF" alt="Jhon Doe"
                            style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">Administrator</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="{{ route('signout') }}" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</nav>  --}}
<!-- Navbar End -->
