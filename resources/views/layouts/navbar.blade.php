<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <!-- Search -->
        @if (auth()->user()->roles->nama_role == "Admin")
        <a href="{{ url('/dashboard') }}">
        <span class="app-brand-text demo text-body fw-bolder" style="text-transform: none;">Administrator</span>
        </a>
        @endif

        @if (auth()->user()->roles->nama_role == "Penanggungjawab")
        <a href="{{ url('/dashboard') }}">
        <span class="app-brand-text demo text-body fw-bolder" style="text-transform: none;">Penanggungjawab</span>
        </a>
        @endif
        <!-- /Search -->
        

        <ul class="navbar-nav flex-row align-items-center ms-auto">
  
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                @if (auth()->user()->roles->nama_role == "Admin")
                <img src="{{ asset('assets/img/avatars/pas photo.png') }}" alt class=" avatar-img rounded-circle">
                @endif
                @if (auth()->user()->roles->nama_role == "Penanggungjawab")
                <img src="{{ asset('assets/img/avatars/6.png') }}" alt class=" avatar-img rounded-circle">
                @endif
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="#">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        @if (auth()->user()->roles->nama_role == "Admin")
                        <img src="{{ asset('assets/img/avatars/pas photo.png') }}" alt class=" avatar-img rounded-circle">
                        @endif
                        @if (auth()->user()->roles->nama_role == "Penanggungjawab")
                        <img src="{{ asset('assets/img/avatars/6.png') }}" alt class=" avatar-img rounded-circle">
                        @endif
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                      <small class="text-muted">{{ Auth::user()->roles->nama_role }}</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
            
              <li>
                <a class="dropdown-item" href="{{ route ('logout') }}">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
          

        </ul>
      </div>

      
      
  </nav>