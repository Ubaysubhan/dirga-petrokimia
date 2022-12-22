<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <div class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ URL::asset('dist/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3"></div>
    </div>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span></span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Menu
    </div>

    {{-- Biodata Perusahaan --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"
            aria-expanded="true" aria-controls="collapseOrders">
            <i class="fas fa-dolly"></i>
            <span>Biodata Perusahaan</span>
        </a>
        <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('BiodataPerusahaan') ? 'active' : '' }}" href="/order">Pengisian Data</a>
                <a class="collapse-item {{ Request::is('order-detail') ? 'active' : '' }}" href="/order/create">Data tersimpan</a>
            </div>
        </div>
    </li>
    {{-- Biodata Perusahaan --}}

    {{-- Akta Perusahaan --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuppliers"
            aria-expanded="true" aria-controls="collapseSuppliers">
            <i class="far fa-address-card"></i>
            <span>Akta Perusahaan</span>
        </a>
        <div id="collapseSuppliers" class="collapse" aria-labelledby="headingSuppliers"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Akta Perusahaan</h6>
                <a class="collapse-item {{ Request::is('AktaPerusahaan') ? 'active' : '' }}" href="/supplier">Pengisian Data</a>
                <a class="collapse-item {{ Request::is('supplier/create') ? 'active' : '' }}" href="/supplier/create">Data Tersimpan</a>
            </div>
        </div>
    </li>
    {{-- Akta Perusahaan --}}    

    {{-- NPWP dan SKKPK --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
            aria-expanded="true" aria-controls="collapseCategories">
            <i class="fas fa-archive"></i>
            <span>NPWP dan SKKPK</span>
        </a>
        <div id="collapseCategories" class="collapse" aria-labelledby="headingCategories"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">NPWP dan SKKPK</h6>
                <a class="collapse-item {{ Request::is('NPWP') ? 'active' : '' }}" href="/category">Pengisian Data</a>
                <a class="collapse-item {{ Request::is('category/create') ? 'active' : '' }}" href="/category/create">Data Tersimpan</a>
            </div>
        </div>
    </li>
    {{-- NPWP dan SKKPK --}}

    {{-- Surat Izin Usaha --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuratizin"
            aria-expanded="true" aria-controls="collapseSuratizin">
            <i class="fas fa-boxes"></i>
            <span>SuratIzinUsaha</span>
        </a>
        <div id="collapseSuratizin" class="collapse" aria-labelledby="headingProducts"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Surat Izin Usaha</h6>
                <a class="collapse-item {{ Request::is('SuratIzin') ? 'active' : '' }}" href="/product">Pengisian Data</a>
                <a class="collapse-item {{ Request::is('product/create') ? 'active' : '' }}" href="/product/create">Data Tersimpan</a>
            </div>
        </div>
    </li>
    {{-- Surat Izin Usaha --}}

    {{-- Gudang --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGudang"
            aria-expanded="true" aria-controls="collapseGudang">
            <i class="bi bi-box-seam"></i>
            <span>Gudang</span>
        </a>
        <div id="collapseGudang" class="collapse" aria-labelledby="headingProducts"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gudang</h6>
                <a class="collapse-item {{ Request::is('Gudang') ? 'active' : '' }}" href="">Pengisian Data</a>
                <a class="collapse-item {{ Request::is('product/create') ? 'active' : '' }}" href="/product/create">Data Tersimpan</a>
            </div>
        </div>
    </li>
    {{-- Gudang --}}

    {{-- Products --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArmada"
            aria-expanded="true" aria-controls="collapseArmada">
            <i class="bi bi-truck"></i>
            <span>Daftar Armada</span>
        </a>
        <div id="collapseArmada" class="collapse" aria-labelledby="headingProducts"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Daftar Armada</h6>
                <a class="collapse-item {{ Request::is('DaftarArmada') ? 'active' : '' }}" href="/DaftarArmada">Pengisian Data</a>
                <a class="collapse-item {{ Request::is('product/create') ? 'active' : '' }}" href="/product/create">Data Tersimpan</a>
            </div>
        </div>
    </li>
    {{-- Products --}}
    <hr class="sidebar-divider">
</ul>
