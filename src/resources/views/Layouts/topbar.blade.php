<nav class="navbar navbar-expand navbar-light bg-success topbar mb-4 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars" ></i>
    </button>
    <ul class="navbar-nav ml-auto">
        {{-- Account Icon --}}
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="mx-3" src="{{ URL::asset('dist/img/logo/BUMN.png') }}" style="max-width: 60px">
                <img class="mx-3" src="{{ URL::asset('dist/img/logo/PI.png') }}" style="max-width: 60px">
                <img class="mx-3" src="{{ URL::asset('dist/img/logo/PETRO.png') }}" style="max-width: 60px">
                <img class="ml-2 mr-4" src="{{ URL::asset('dist/img/logo/logo rm.png') }}" style="max-width: 60px"  height="30px">
                <span class="d-none d-lg-inline text-white small">{{ auth()->user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <form method="POST" action="/logout">
                <button class="dropdown-item">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 bg-success"></i>
                        Logout
                    </button>
                    @csrf
                   
                </form>
            </div>
        </li>
        {{-- Account Icon --}}
    </ul>
</nav>
