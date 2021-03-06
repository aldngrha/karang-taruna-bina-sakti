<div class="title bg-light">
  <div class="container">
    <h4 class="text-center pt-3 pb-3">
      Selamat Datang di Situs Resmi Karang Taruna Desa Purworejo
    </h4>
  </div>
</div>

<div class="title-two">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-sm-6">
        <h3 class="text-light">
          <img class="mr-2" src="{{ url('frontend/images/640px-Lambang_Kabupaten_Lampung_Tengah.png') }}" alt=""
            width="40" />Karang Taruna
          Bina Sakti Desa Purworejo
        </h3>
        <p class="text-light">
          Kecamatan Bangunrejo Kabupaten Lampung Tengah, <br />Provinsi
          Lampung
        </p>
      </div>
      @guest
      <div class="col-lg-2">
        <a href="{{ route('login') }}" class="btn btn-light mt-4">
          <i class="fa fa-user mr-2"></i>Login Admin
        </a>
      </div>
      @endguest
    </div>
  </div>
</div>

<div class="title-three bg-light">
  <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light">
      <a class="home" href="{{ route('home') }}"><i class="fa fa-home"></i></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item dropdown mx-md-2">
            <a class="nav-link {{ request()->is('vision', 'history') ? 'active' : '' }} dropdown-toggle" id="navbardrop"
              data-toggle="dropdown">Profil Karang Taruna</a>
            <div class="dropdown-menu">
              <a href="{{ route('vision') }}" class="dropdown-item">Visi Misi Karang Taruna</a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('history') }}" class="dropdown-item">Sejarah Karang Taruna</a>
            </div>
          </li>

          <li class="nav-item dropdown mx-md-2">
            <a class="nav-link {{ request()->is('structure', 'member') ? 'active' : '' }} dropdown-toggle"
              id="navbardrop" data-toggle="dropdown">Strukturisasi Karang Taruna</a>
            <div class="dropdown-menu">
              <a href="{{ route('structure') }}" class="dropdown-item">Struktur Organisasi</a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('member') }}" class="dropdown-item">Jumlah Anggota</a>
            </div>
          </li>
          <li class="nav-item dropdown mx-md-2">
            <a class="nav-link {{ request()->is('schedule', 'program', 'sign') ? 'active' : '' }} dropdown-toggle"
              id="navbardrop" data-toggle="dropdown">Kegiatan</a>
            <div class="dropdown-menu">
              <a href="{{ route('schedule') }}" class="dropdown-item">Agenda Karang Taruna</a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('program') }}" class="dropdown-item">Program Kerja</a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('sign') }}" class="dropdown-item">Pendaftaran</a>
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>