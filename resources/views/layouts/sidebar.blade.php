<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
    <div class="app-brand demo ">
      <a href="/dashboard" class="app-brand-link">
        <span class="app-brand-logo demo">
  
  </span>
  <a href="{{ url('/dashboard') }}">
    <img src="{{ asset('assets/img/favicon/Logo pendidikan.png') }}" alt="Logo" width="30" height="30">
  </a>
  <span class="app-brand-text demo text-body fw-bolder" style="text-transform: uppercase;">PUSINDUK</span>
 
      </a>
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
  
    <div class="menu-inner-shadow"></div>
  
    <ul class="menu-inner py-1">
  
      <!-- Dashboard -->
      <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>
  
      <li class="menu-item {{ Request::is('daftar-guru') ? 'active' : '' }}">
        <a href="/daftar-guru" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Daftar Guru</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('daftar-siswa') ? 'active' : '' }}">
        <a href="/daftar-siswa" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Daftar Siswa</div>
        </a>
      </li>
    </ul>
  
  </aside>