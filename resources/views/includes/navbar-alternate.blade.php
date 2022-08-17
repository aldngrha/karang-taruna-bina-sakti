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
            <ul class="dropdown-menu">
              <li class="nav-item dropdown">
                <a class="dropdown-item dropdown-toggle" role="button" id="agendaMenu" data-toggle="collapse"
                  data-target="#agendaYears">Agenda
                  Karang Taruna</a>
                <ul class="collapse" id="agendaYears">
                  @foreach ($items as $item)
                  <a href="{{ route('schedule', $item->id) }}" class="dropdown-item">{{ $item->agenda_year->date
                    }}</a>
                  @endforeach
                </ul>
              </li>
              <div class="dropdown-divider"></div>
              <li class="nav-item dropdown">
                <a class="dropdown-item dropdown-toggle" role="button" id="programMenu" data-toggle="collapse"
                  data-target="#programYears">Program Kerja</a>
                <ul class="collapse" id="programYears">
                  @foreach ($programs as $program)
                  <a href="{{ route('program', $program->id) }}" class="dropdown-item">{{ $program->agenda_year->date
                    }}</a>
                  @endforeach
                </ul>
              </li>
              <div class="dropdown-divider"></div>
              <a href="{{ route('sign') }}" class="dropdown-item">Pendaftaran</a>
            </ul>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>