<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>


  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">


    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
        <img class="img-profile rounded-circle" src="{{ url('backend/img/undraw_profile.svg') }}">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <button type="button" data-toggle="modal" data-target="#changePassword" class="dropdown-item">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Ubah Password
        </button>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="dropdown-item" type="submit">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </button>
        </form>
      </div>
    </li>

  </ul>

  <!-- Modal -->
  <div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</nav>