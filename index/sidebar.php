<aside class="app-sidebar bg-dark shadow-lg rounded-end text-white" data-bs-theme="dark">
  <!-- Sidebar Brand -->
  <div class="sidebar-brand d-flex align-items-center justify-content-center py-3 border-bottom">
    <a href="index.php" class="brand-link d-flex align-items-center text-decoration-none text-white">
      <img src="../dist/assets/img/custom-logo.png" alt="Logo" class="img-thumbnail rounded-circle me-2" style="width: 40px; height: 40px;">
      <span class="h5 mb-0">Dashboard Dosen</span>
    </a>
  </div>

  <!-- Sidebar Menu -->
  <div class="sidebar-wrapper px-3 py-2">
    <nav>
      <ul class="nav flex-column" role="menu">

        <li class="nav-item mb-1">
          <a href="index.php" class="nav-link text-white d-flex align-items-center">
            <i class="fa fa-home me-2"></i>
            <span>Home</span>
          </a>
        </li>

        <li class="nav-item mb-1">
          <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#dataMasterCollapse" role="button">
            <span><i class="fa fa-database me-2"></i>Data Dosen</span>
            <i class="fa fa-chevron-down"></i>
          </a>
          <div class="collapse" id="dataMasterCollapse">
            <ul class="nav flex-column ms-3">
              <li class="nav-item"><a href="prodi_list.php" class="nav-link text-white"><i class="fa fa-university me-2"></i>Program Studi</a></li>
              <li class="nav-item"><a href="dosen_list.php" class="nav-link text-white"><i class="fa fa-user-tie me-2"></i>Pengajar</a></li>
              <li class="nav-item"><a href="bidang_ilmu.php" class="nav-link text-white"><i class="fa fa-project-diagram me-2"></i>Bidang Ilmu</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item mb-1">
          <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#kegiatanCollapse" role="button">
            <span><i class="fa fa-tasks me-2"></i>Penelitian & Kegiatan</span>
            <i class="fa fa-chevron-down"></i>
          </a>
          <div class="collapse" id="kegiatanCollapse">
            <ul class="nav flex-column ms-3">
              <li class="nav-item"><a href="penelitian_list.php" class="nav-link text-white"><i class="fa fa-book me-2"></i>Penelitian</a></li>
              <li class="nav-item"><a href="tim_peneliti.php" class="nav-link text-white"><i class="fa fa-users me-2"></i>Tim Peneliti</a></li>
              <li class="nav-item"><a href="jenis_kegiatan_list.php" class="nav-link text-white"><i class="fa fa-tasks me-2"></i>Jenis Kegiatan</a></li>
              <li class="nav-item"><a href="kegiatan_list.php" class="nav-link text-white"><i class="fa fa-calendar-alt me-2"></i>Daftar Kegiatan</a></li>
              <li class="nav-item"><a href="kegiatan_dosen_list.php" class="nav-link text-white"><i class="fa fa-chalkboard-teacher me-2"></i>Aktivitas Dosen</a></li>
            </ul>
          </div>
        </li>         

      </ul>
    </nav>
  </div>
</aside>
