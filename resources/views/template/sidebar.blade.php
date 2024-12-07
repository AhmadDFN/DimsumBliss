<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="text-center ps-2 mb-2">
        <img class="rounded-circle" src="{{ asset('assets/img/Logo.jpg') }}" alt="ShopTronics"
            style="width: 100px; height: 100px;margin-right: 10px;margin-top:-5px; ">
    </div>
    <h2>DimsumBliss</h2>

    <div class="user-info">
        <span>{{ @Auth::user()->username }}</span>
        <span class="level" style="font-size: 25px">Level: Admin</span>
    </div>

    <!-- Navigation Items -->
    <ul class="nav flex-column">
        <!-- Users -->
        <li class="nav-item">
            <a class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" href="{{ url('/') }}"><i
                    class="fa fa-tachometer-alt"></i> Dashboard</a>
        </li>

        <!-- Transaksi -->
        <li class="nav-item dropdown dropup">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownTransaksi" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-file-invoice"></i> Transaksi
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownTransaksi">
                <li><a class="dropdown-item" href="{{ url('/transaksi') }}">Detail Transaksi</a></li>
                <li><a class="dropdown-item" href="{{ url('/transaksi/create') }}">Transaksi Baru</a></li>
            </ul>
        </li>

        <!-- Pelanggan -->
        <li class="nav-item dropdown dropup">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownPelanggan" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-users"></i> Pelanggan
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownPelanggan">
                <li><a class="dropdown-item" href="{{ url('/pelanggan') }}">Data Pelanggan</a></li>
                <li><a class="dropdown-item" href="{{ url('/pelanggan/create') }}">Tambah Pelanggan</a></li>
            </ul>
        </li>

        <!-- Produk -->
        <li class="nav-item dropdown dropup">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownProduk" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-cogs"></i> Produk
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownProduk">
                <li><a class="dropdown-item" href="{{ url('/produk') }}">Data Produk</a></li>
                <li><a class="dropdown-item" href="{{ url('/pengadaan/create') }}">Pengadaan Barang</a></li>
            </ul>
        </li>

        <!-- Laporan -->
        <li class="nav-item dropdown dropup">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownLaporan" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-chart-bar"></i> Laporan
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownLaporan">
                <li><a class="dropdown-item" href="{{ url('detailtransaksi') }}">Detail Transaksi</a></li>
                <li><a class="dropdown-item" href="{{ url('detailhutang') }}">Detail Hutang</a></li>
                <li>
                    <a class="dropdown-item" href="{{ url('pengadaan') }}">Detail Pengadaan Barang</a>
                </li>
            </ul>
        </li>

        <!-- Users -->
        <li class="nav-item">
            <a class="nav-link {{ $title == 'Akun' ? 'active' : '' }}" href="{{ url('/akun') }}"><i
                    class="fas fa-users-cog"></i> Akun</a>
        </li>

        <!-- Logout -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('signout') }}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </li>
    </ul>
</div>
