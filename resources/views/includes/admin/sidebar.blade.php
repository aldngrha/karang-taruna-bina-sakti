<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="{{ url('frontend/images/640px-Lambang_Kabupaten_Lampung_Tengah.png') }}" alt="" width="40" />
    </div>
    <div class="sidebar-brand-text">Karang Taruna <br> Bina Sakti</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Posts
  </div>

  <!-- Nav Item - Tables -->
  <li class="nav-item {{ request()->is('admin/slider*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('slider.index') }}">
      <i class="fas fa-image"></i>
      <span>Slide</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item {{ request()->is('admin/article*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('article.index') }}">
      <i class="fas fa-newspaper"></i>
      <span>Artikel</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item {{ request()->is('admin/gallery*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('gallery.index') }}">
      <i class="fas fa-images"></i>
      <span>Galeri</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Pages
  </div>

  <!-- Nav Item - Profil Collapse Menu -->
  <li class="nav-item {{ request()->is('admin/vision*', 'admin/history*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
      aria-controls="collapseTwo">
      <i class="fas fa-user fa-cog"></i>
      <span>Profil Karang Taruna</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Profil Karang Taruna :</h6>
        <a class="collapse-item" href="{{ route('vision.index') }}">Visi dan Misi</a>
        <a class="collapse-item" href="{{ route('history.index') }}">Sejarah</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Strukturisasi Collapse Menu -->
  <li class="nav-item {{ request()->is('admin/structure*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('structure.index') }}">
      <i class="fas fa-sitemap"></i>
      <span>Struktur Karang Taruna</span></a>
  </li>

  <!-- Nav Item - Strukturisasi Collapse Menu -->
  <li class="nav-item {{ request()->is('admin/agenda*', 'admin/tahun-agenda*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAgenda" aria-expanded="true"
      aria-controls="collapseUtilities">
      <i class="fas fa-calendar-check"></i>
      <span>Agenda</span>
    </a>
    <div id="collapseAgenda" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Agenda :</h6>
        <a class="collapse-item" href="{{ route('agenda-year.index') }}">Penanggalan Agenda</a>
        <a class="collapse-item" href="{{ route('agenda.index') }}">Daftar Agenda</a>
      </div>
    </div>
  </li>

  <li class="nav-item {{ request()->is('admin/program*', 'admin/tahun-program*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProgram" aria-expanded="true"
      aria-controls="collapseUtilities">
      <i class="fas fa-briefcase"></i>
      <span>Program Kerja</span>
    </a>
    <div id="collapseProgram" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Program Kerja :</h6>
        <a class="collapse-item" href="{{ route('program-year.index') }}">Penanggalan Program</a>
        <a class="collapse-item" href="{{ route('program.index') }}">Daftar Program</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>