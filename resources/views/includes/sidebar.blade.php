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
        <li class="sidebar-item has-sub">
          <a href="#" class='sidebar-link'>
            <i class="far fa-server"></i>
            <span>Master</span>
          </a>
          <ul class="submenu "> 
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('master/data-kecamatan') ? 'text-primary' : '' }}">
                Data Kecamatan
              </a>
            </li>
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('master/data-desa') ? 'text-primary' : '' }}">
                Data Desa
              </a>
            </li>     
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('master/evaluasi') ? 'text-primary' : '' }}">
                Evaluasi
              </a>
            </li>     
          </ul>
        </li>
        <li class="sidebar-item has-sub {{ Request::is('kegiatan') ? 'active' : '' }}">
          <a href="#" class='sidebar-link'>
            <i class="far fa-calendar-day"></i>
            <span>Kegiatan</span>
          </a>
          <ul class="submenu "> 
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('kegiatan/csr') ? 'text-primary' : '' }}">
                CSR
              </a>
            </li>
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('kegiatan/lsm') ? 'text-primary' : '' }}">
                LSM
              </a>
            </li>     
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('kegiatan/akademisi') ? 'text-primary' : '' }}">
                Akademisi/Peneliti
              </a>
            </li>     
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('kegiatan/laporan-triwulan-pd') ? 'text-primary' : '' }}">
                Laporan Triwulan PD
              </a>
            </li>     
          </ul>
        </li>
        <li class="sidebar-item has-sub {{ Request::is('pagu-anggaran*') ? 'active' : '' }}">
          <a href="#" class='sidebar-link'>
            <i class="far fa-money-bill-wave"></i>
            <span>Pagu Anggaran</span>
          </a>
          <ul class="submenu "> 
            <li>
              <a href="{{ route('monev.index') }}" class="{{ Request::is('pagu-anggaran/monev') ? 'text-primary' : '' }}">Monev</a>
            </li>
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('pagu-anggaran/rka') ? 'text-primary' : '' }}">
                Pagu RKA
              </a>
            </li>
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('pagu-anggaran/dpa') ? 'text-primary' : '' }}">
                Pagu DPA
              </a>
            </li>     
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('pagu-anggaran/pergeseran') ? 'text-primary' : '' }}">
                Pagu Pergeseran
              </a>
            </li>     
          </ul>
        </li>
        <li class="sidebar-item has-sub {{ Request::is('dokren*') ? 'active' : '' }}">
          <a href="#" class='sidebar-link'>
            <i class="far fa-bars"></i>
            <span>Dokren</span>
          </a>
          <ul class="submenu "> 
            <li>
              <a href="{{ route('renstra.index') }}" class="{{ Request::is('dokren/renstra') ? 'text-primary' : '' }}">
                RENSTRA
              </a>
            </li>
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('dokren/renja') ? 'text-primary' : '' }}">
                RENJA
              </a>
            </li>     
            <li>
              <a href="{{ route('home') }}" class="{{ Request::is('dokren/iku') ? 'text-primary' : '' }}">
                IKU
              </a>
            </li>     
          </ul>
        </li>
        <li class="sidebar-item {{ Request::is('account') ? 'active' : '' }}">
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