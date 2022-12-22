<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <div class="sidebar-brand d-flex align-items-center justify-content-center bg-success" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ URL::asset('dist/img/logo/LogoDirga.png') }}">
        </div>
       
    </div>
   
@if (auth()->user()->is_admin)

{{-- Admin --}}

@can('admin')
 <div class="sidebar-heading mt-3">
     Admin
 </div>
 <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin"
         aria-expanded="true" aria-controls="collapseAdmin">
         <i class=" fas fa-archive"></i>
         <span>Verifikasi</span>
     </a>
     <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin"
         data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <h6 class="collapse-header">Verifikasi</h6>
             <a class="collapse-item font-weight-bold {{ Request::is('Admin.distributor-eksekutif') ? 'active' : '' }}" href="/Admin/distributor-eksekutif">Distributor Eksekutif</a>
             <a class="collapse-item font-weight-bold {{ Request::is('Admin.distributor-utama') ? 'active' : '' }}" href="/Admin/distributor-utama">Distributor Utama</a>
             <a class="collapse-item font-weight-bold {{ Request::is('Admin.reguler') ? 'active' : '' }}" href="/Admin/reguler">Reguler</a>
             <a class="collapse-item font-weight-bold {{ Request::is('Admin.nitralite') ? 'active' : '' }}" href="/Admin/nitralite">Nitralite</a>
             <a class="collapse-item font-weight-bold {{ Request::is('Admin.petroganik') ? 'active' : '' }}" href="/Admin/petroganik">Petroganik Premium</a>

         </div>
     </div>
 </li>
@endcan
@else
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Menu
    </div>

    {{-- Orders --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"
            aria-expanded="true" aria-controls="collapseOrders">
            <i class="fas fa-dolly"></i>
            <span>Biodata Perusahaan</span>
        </a>
        <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded font-weight-bold">
                <a class="collapse-item {{ Request::is('BiodataPerusahaan') ? 'active' : '' }}" href="/BiodataPerusahaan">Pengisian Data</a>
                
            </div>
        </div>
    </li>
    {{-- Orders --}}

    {{-- Akta Perusahaan --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuppliers"
            aria-expanded="true" aria-controls="collapseSuppliers">
            <i class="far fa-address-card"></i>
            <span>Akta Perusahaan</span>
        </a>
        <div id="collapseSuppliers" class="collapse" aria-labelledby="headingSuppliers"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded font-weight-bold">
                <h6 class="collapse-header">Akta Perusahaan</h6>
                <a class="collapse-item {{ Request::is('AktaPerusahaan') ? 'active' : '' }}" href="/AktaPerusahaan">Pengisian Data</a>
                
            </div>
        </div>
    </li>
    {{-- Akta Perusahaan --}}    

    {{-- NPWP dan SPPKP --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
            aria-expanded="true" aria-controls="collapseCategories">
            <i class="fas fa-archive"></i>
            <span>NPWP dan SPPKP</span>
        </a>
        <div id="collapseCategories" class="collapse" aria-labelledby="headingCategories"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded font-weight-bold">
                <h6 class="collapse-header">NPWP dan SPPKP</h6>
                <a class="collapse-item {{ Request::is('NPWP') ? 'active' : '' }}" href="/NPWP">Pengisian Data</a>
              
            </div>
        </div>
    </li>
    {{-- NPWP dan SPPKP --}}

    {{-- Surat Izin Usaha --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuratizin"
            aria-expanded="true" aria-controls="collapseSuratizin">
            <i class="fas fa-boxes"></i>
            <span>SuratIzinUsaha</span>
        </a>
        <div id="collapseSuratizin" class="collapse" aria-labelledby="headingProducts"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded font-weight-bold">
                <h6 class="collapse-header">Surat Izin Usaha</h6>
                <a class="collapse-item {{ Request::is('SuratIzin') ? 'active' : '' }}" href="/SuratIzinUsaha">Pengisian Data</a>
                
            </div>
        </div>
    </li>
    {{-- Surat Izin Usaha --}}

    {{-- Gudang --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGudang"
            aria-expanded="true" aria-controls="collapseGudang">
            <i class="far fa-address-card"></i>
            <span>Gudang</span>
        </a>
        <div id="collapseGudang" class="collapse" aria-labelledby="headingGudang"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded font-weight-bold">
                <h6 class="collapse-header">Gudang</h6>
                <a class="collapse-item {{ Request::is('Gudang') ? 'active' : '' }}" href="/Gudang">Pengisian Data</a>
                
            </div>
        </div>
    </li>
    {{-- Gudang --}}

    {{-- armada --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArmada"
            aria-expanded="true" aria-controls="collapseArmada">
            <i class="fas fa-archive"></i>
            <span>Daftar Armada</span>
        </a>
        <div id="collapseArmada" class="collapse" aria-labelledby="headingArmada"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded font-weight-bold">
                <h6 class="collapse-header">Daftar Armada</h6>
                <a class="collapse-item {{ Request::is('DaftarArmada') ? 'active' : '' }}" href="/DaftarArmada">Pengisian Data</a>
               
            </div>
        </div>
    </li>

    {{-- Status Verifikasi --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStatus"
            aria-expanded="true" aria-controls="collapseStatus">
            <i class="fas fa-archive"></i>
            <span>Status Verifikasi</span>
        </a>
        <div id="collapseStatus" class="collapse" aria-labelledby="headingStatus"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded font-weight-bold text-center">
                <h6 class="collapse-header">Status Verifikasi</h6>
                {{-- <a class="collapse-item {{ Request::is('Status Verifikasi') ? 'active' : '' }}" href="/StatusVerifikasi">Pengisian Data</a> --}}
                @if (auth()->user()->status_verifikasi == null)    
                    <div class="badge bg-primary text-wrap text-white" style="width: 6rem;">
                        Dalam Proses
                    </div>
                @elseif (auth()->user()->status_verifikasi == 1)
                    <div class="badge bg-success text-wrap text-white" style="width: 6rem;">
                    Pengajuan Diterima
                    </div>
                @elseif (auth()->user()->status_verifikasi == 2)
                    <div class="badge bg-danger text-wrap text-white" style="width: 6rem;">
                    Pengajuan Ditolak
                    </div>
                @endif
               
            </div>
        </div>
    </li>



   @endif
    <hr class="sidebar-divider">
 
</ul>



