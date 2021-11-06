<div id="sidebar" class='active'>
  <div class="sidebar-wrapper active">
    <div class="sidebar-header">
      <a href="{{ route('home') }}" class="brand">
        <h1>SILIGI</h1>
      </a>
    </div>
    <div class="sidebar-menu">
      <ul class="menu">

        <li class='sidebar-title'>Menu</li>

        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class='sidebar-link'>
            <i class="far fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item  has-sub">
          <a href="#" class='sidebar-link'>
            <i class="far fa-server"></i>
            <span>Master</span>
          </a>
          <ul class="submenu "> 
            <li>
              <a href="{{ route('home') }}">Data Kecamatan</a>
            </li>
            <li>
              <a href="{{ route('home') }}">Data Desa</a>
            </li>     
            <li>
              <a href="{{ route('home') }}">Evaluasi</a>
            </li>     
          </ul>
        </li>
        <li class="sidebar-item  has-sub">
          <a href="#" class='sidebar-link'>
            <i class="far fa-calendar-day"></i>
            <span>Kegiatan</span>
          </a>
          <ul class="submenu "> 
            <li>
              <a href="{{ route('home') }}">CSR</a>
            </li>
            <li>
              <a href="{{ route('home') }}">LSM</a>
            </li>     
            <li>
              <a href="{{ route('home') }}">Akademisi/Peneliti</a>
            </li>     
            <li>
              <a href="{{ route('home') }}">Laporan Triwulan PD</a>
            </li>     
          </ul>
        </li>
        <li class="sidebar-item  has-sub">
          <a href="#" class='sidebar-link'>
            <i class="far fa-money-bill-wave"></i>
            <span>Pagu Anggaran</span>
          </a>
          <ul class="submenu "> 
            <li>
              <a href="{{ route('home') }}">Pagu RKA</a>
            </li>
            <li>
              <a href="{{ route('home') }}">Pagu DPA</a>
            </li>     
            <li>
              <a href="{{ route('home') }}">Pagu Pergeseran</a>
            </li>     
          </ul>
        </li>
        <li class="sidebar-item  has-sub">
          <a href="#" class='sidebar-link'>
            <i class="far fa-bars"></i>
            <span>Dokren</span>
          </a>
          <ul class="submenu "> 
            <li>
              <a href="{{ route('home') }}">RENSTRA</a>
            </li>
            <li>
              <a href="{{ route('home') }}">RENJA</a>
            </li>     
            <li>
              <a href="{{ route('home') }}">IKU</a>
            </li>     
          </ul>
        </li>
        <li class="sidebar-item {{ Request::is('pindai') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class='sidebar-link'>
            <i class="far fa-user"></i>
            <span>Account</span>
          </a>
        </li>

      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>