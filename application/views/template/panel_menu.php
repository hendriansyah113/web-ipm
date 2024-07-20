<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa-regular fa-user-secret"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN IPM</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
     
      <li class="nav-item active">
        <a class="nav-link" href="./">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Main Menu Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php 
      if ($this->session->userdata('role') == '1') {
       ?>
       <li class="nav-item">
          <a class="nav-link collapsed" href="<?= base_url(); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fa fa-eye" aria-hidden="true"></i>
              <span>Website</span>
          </a>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('panel/user'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-users" aria-hidden="true"></i>
          <span>User</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('panel/artikel'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Berita</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('panel/galeri'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-photo-video"></i>
          <span>Galeri</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('panel/kegiatan'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-folder" aria-hidden="true"></i>
          <span>Kegiatan</span>
        </a>
      </li>
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-cogs fa-fw"></i>
        <span>Pengaturan</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="settingsDropdown">
        <a class="dropdown-item" href="<?= base_url('panel/formulir'); ?>">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Formulir</span>
        </a>
        <a class="dropdown-item" href="<?= base_url('panel/profil'); ?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Profil</span>
        </a>
    </div>
</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('panel/setting'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-cog" aria-hidden="true"></i>
          <span>Panel</span>
        </a>
      </li>
      <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        <span>Logout</span>
    </a>
</li>

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <?php }elseif ($this->session->userdata('role') == '2') {?>
       <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('panel/artikel'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user-clock"></i>
          <span>Artikel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('panel/slide'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user-clock"></i>
          <span>Slider</span>
        </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('panel/galeri'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user-clock"></i>
          <span>Galeri</span>
        </a>
      </li>
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <?php }?>
    </ul>
    <!-- End of Sidebar -->

    <!-- menu footer -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('username'); ?></span>
                
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/1716304906-Logo-IPM.jpg'); ?>" alt="Profile Image">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
               
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <script>
  // Mendapatkan URL saat ini
  var currentUrl = window.location.href;

  // Mendapatkan semua elemen <a> dalam sidebar
  var sidebarLinks = document.querySelectorAll('#accordionSidebar a.nav-link');

  // Loop melalui setiap link sidebar
  sidebarLinks.forEach(function(link) {
    // Memeriksa apakah URL saat ini cocok dengan href dari link saat ini
    if (currentUrl === link.href) {
      // Menambahkan kelas 'active' pada link yang sesuai
      link.classList.add('active');

      // Juga menambahkan kelas 'show' pada link yang merupakan parent dari link aktif
      link.closest('.nav-item').classList.add('show');

      // Menemukan parent dari parent (yang merupakan dropdown) dari link aktif
      var dropdownParent = link.closest('.dropdown');

      // Jika dropdown ditemukan, tambahkan kelas 'show' pada dropdown untuk menampilkannya
      if (dropdownParent) {
        dropdownParent.classList.add('show');
      }
    }
  });
</script>
</body>
