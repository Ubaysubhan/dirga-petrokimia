
<body>
<div class="max-h-screen sticky top-0">
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div class="relative inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
    <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

    <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
    <div class="relative flex-1 flex flex-col min-h-screen max-w-xs w-full bg-white focus:outline-none">
      <!--
        Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="absolute top-0 right-0 -mr-12 pt-2">
        <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
          <span class="sr-only">Close sidebar</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
        <div class="flex-shrink-0 flex items-center px-4">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-900-text.svg" alt="Workflow">
        </div>
        <nav aria-label="Sidebar" class="mt-5">
          <div class="px-2 space-y-1">
            <!-- Current: "bg-gray-100 text-white-100", Default: "text-yellow-600 hover:bg-green-500 hover:text-white-100" -->
            <a href="#" class="{{ Request::is('BiodataPerusahaan') ? 'active' : '' }} bg-gray-100 text-white-100 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!--
                Heroicon name: outline/home

                Current: "text-yellow-500", Default: "text-yellow-400 group-hover:text-yellow-500"
              -->
              <svg class="text-yellow-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Biodata Perusahaan
            </a>

            <a href="#" class="{{ Request::is('AktaPerusahan') ? 'active' : '' }} text-black-100 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/calendar -->
              <svg class=" {{ Request::is('supplier') ? 'active' : '' }} text-yellow-400 group-hover:text-yellow-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Akta Perusahaan
            </a>

            <a href="#" class="{{ Request::is('NPWP') ? 'active' : '' }} text-black-100 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/user-group -->
              <svg class="text-yellow-400 group-hover:text-yellow-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              NPWP dan SKKPK
            </a>

            <a href="/SuratIzinUsaha" class="{{ Request::is('SuratIzinUsaha') ? 'active' : '' }} text-black-100 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/search-circle -->
              <svg class="text-yellow-400 group-hover:text-yellow-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Surat Izin Usaha
            </a>

            <a href="/Gudang" class="{{ Request::is('Gudang') ? 'active' : '' }} text-black-100 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/speakerphone -->
              <svg class="text-yellow-400 group-hover:text-yellow-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
              </svg>
              Gudang
            </a>

            <a href="/DaftarArmada" class="{{ Request::is('DaftarArmada') ? 'active' : '' }} text-black-100 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/map -->
              <svg class="text-yellow-400 group-hover:text-yellow-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
              </svg>
              Daftar Armada
            </a>

            <a href="/DataTersimpan" class="{{ Request::is('DataTersimpan') ? 'active' : '' }} text-black-100 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/speakerphone -->
              <svg class="text-yellow-400 group-hover:text-yellow-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
              </svg>
              Data Tersimpan
            </a>

            <a href="/DokumenTerlampir" class="{{ Request::is('DokumenTerlampir') ? 'active' : '' }} text-black-100 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/speakerphone -->
              <svg class="text-yellow-400 group-hover:text-yellow-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
              </svg>
              Dokumen Terlampir
            </a>

          </div>
        </nav>
      </div>
      <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
        <a href="#" class="flex-shrink-0 group block">
          <div class="flex items-center">
            <div>
              <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
      <!-- Force sidebar to shrink to fit close icon -->
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex-1 flex flex-col min-h-screen border-r border-gray-200 bg-white">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
          <div class="flex items-center flex-shrink-0 px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-900-text.svg" alt="Workflow">
          </div>
          <nav class="mt-5 flex-1" aria-label="Sidebar">
            <div class="px-2 space-y-1">
              <!-- Current: "bg-gray-200 text-white-100", Default: "text-black-100 hover:bg-green-500 hover:text-white-100" -->
              <a href="/BiodataPerusahaan" class="{{ Request::is('BiodataPerusahaan') ? 'active' : '' }} text-yellow-600 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!--
                  Heroicon name: outline/home

                  Current: "text-yellow-500", Default: "text-yellow-400 group-hover:text-yellow-500"
                -->
                <svg class="text-yellow-400 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Biodata Perusahaan
              </a>

              <a href="/AktaPerusahaan" class="{{ Request::is('AktaPerusahaan') ? 'active' : '' }} text-yellow-600 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/calendar -->
                <svg class=" text-yellow-400 group-hover:text-yellow-500 mr-3 h-6 w-6" href="/supplier"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Akta Perusahaan
              </a>

              <a href="/NPWP" class="{{ Request::is('NPWP') ? 'active' : '' }} text-yellow-600 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/user-group -->
                <svg class="text-yellow-400 group-hover:text-yellow-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                NPWP dan SKKPK
              </a>

              <a href="/SuratIzinUsaha" class="{{ Request::is('SuratIzinUsaha') ? 'active' : '' }} text-yellow-600 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/search-circle -->
                <svg class="text-yellow-400 group-hover:text-yellow-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Surat Izin Usaha
              </a>

              <a href="/Gudang" class="{{ Request::is('Gudang') ? 'active' : '' }} text-yellow-600 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/speakerphone -->
                <svg class="text-yellow-400 group-hover:text-yellow-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                </svg>
                Gudang
              </a>

              <a  href="/DaftarArmada" class="{{ Request::is('DaftarArmada') ? 'active' : '' }} text-yellow-600 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/map -->
                <svg class="text-yellow-400 group-hover:text-yellow-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                </svg>
                Daftar Armada
              </a>

              <a href="/DataTersimpan" class="{{ Request::is('DataTersimpan') ? 'active' : '' }} text-yellow-600 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/map -->
                <svg class="text-yellow-400 group-hover:text-yellow-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                </svg>
                Data Tersimpan
              </a>

              <a href="/DokumenTerlampir" class="{{ Request::is('DokumenTerlampir') ? 'active' : '' }} text-yellow-600 hover:bg-green-500 hover:text-white-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/map -->
                <svg class="text-yellow-400 group-hover:text-yellow-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                </svg>
                Dokumen Terlampir
              </a>

            </div>
          </nav>
        </div>
        
      </div>
    </div>
  </div>
  <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
    <div class="lg:hidden">
      <div class="flex items-center justify-between bg-green-500 border-b border-gray-200 px-4 py-1.5">
        <div>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
        </div>
        <div>
          <button type="button" class="-mr-3 h-12 w-12 inline-flex items-center justify-center rounded-md text-yellow-500 hover:text-white-100">
            <span class="sr-only">Open sidebar</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div class="flex-1 relative z-0 flex overflow-hidden">
      <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
      </main>
    </div>
  </div>
</div>
</body>



</html>

<!-- <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <div class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ URL::asset('dist/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">IMS PBKK</div>
    </div>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
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
            <span>Orders</span>
        </a>
        <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Orders</h6>
                <a class="collapse-item {{ Request::is('product') ? 'active' : '' }}" href="/product">Orders List</a>
                <a class="collapse-item {{ Request::is('order-detail') ? 'active' : '' }}" href="/order/create">New Order</a>
            </div>
        </div>
    </li>
    {{-- Orders --}}

    {{-- Suppliers --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuppliers"
            aria-expanded="true" aria-controls="collapseSuppliers">
            <i class="far fa-address-card"></i>
            <span>Suppliers</span>
        </a>
        <div id="collapseSuppliers" class="collapse" aria-labelledby="headingSuppliers"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Suppliers</h6>
                <a class="collapse-item {{ Request::is('supplier') ? 'active' : '' }}" href="/supplier">Suppliers List</a>
                <a class="collapse-item {{ Request::is('supplier/create') ? 'active' : '' }}" href="/supplier/create">Add Supplier</a>
            </div>
        </div>
    </li>
    {{-- Suppliers --}}    

    {{-- Categories --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
            aria-expanded="true" aria-controls="collapseCategories">
            <i class="fas fa-archive"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategories" class="collapse" aria-labelledby="headingCategories"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Categories</h6>
                <a class="collapse-item {{ Request::is('category') ? 'active' : '' }}" href="/category">Categories List</a>
                <a class="collapse-item {{ Request::is('category/create') ? 'active' : '' }}" href="/category/create">Add Category</a>
            </div>
        </div>
    </li>
    {{-- Categories --}}

    {{-- Products --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
            aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-boxes"></i>
            <span>Products</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Products</h6>
                <a class="collapse-item {{ Request::is('product') ? 'active' : '' }}" href="/product">Products List</a>
                <a class="collapse-item {{ Request::is('product/create') ? 'active' : '' }}" href="/product/create">Add Product</a>
            </div>
        </div>
    </li>
    {{-- Products --}}
    <hr class="sidebar-divider">
</ul> -->
