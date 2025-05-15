<nav class="app-header navbar navbar-expand bg-primary-subtle shadow-sm">
  <div class="container-fluid d-flex align-items-center">
    <!--begin::Logo-->
    <a href="#" class="navbar-brand d-flex align-items-center me-3">
      <img src="../dist/assets/img/custom-logo.png" alt="Logo" height="32" class="me-2" />
      <span class="fw-bold text-dark">Admin</span>
    </a>
    <!--end::Logo-->

    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-dark" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-grid"></i>
        </a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="index.php" class="nav-link text-dark">Dashboard</a>
      </li>
    </ul>
    <!--end::Start Navbar Links-->

    <!--begin::End Navbar Links-->
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link text-dark" data-widget="navbar-search" href="#" role="button">
          <i class="bi bi-search"></i>
        </a>
      </li>

      <!--begin::User Menu Dropdown-->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
          <img
            src="../dist/assets/img/woman.png"
            class="user-image rounded-circle border border-2"
            alt="User Image"
            width="32"
            height="32"
          />
          <span class="d-none d-md-inline ms-2 text-dark fw-semibold">Abil</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end bg-light">
          <li class="user-header text-bg-secondary text-center">
            <img
              src="../dist/assets/img/woman.png"
              class="rounded-circle border"
              alt="User Image"
              width="80"
              height="80"
            />
            <p class="mt-2 mb-0 fw-bold">Abil - Data Analyst</p>
            <small class="text-white-50">Information Systems, Class of 2025</small>
          </li>
          <li class="user-footer d-flex justify-content-between px-3 py-2 bg-white">
            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
            <a href="#" class="btn btn-sm btn-outline-danger">Logout</a>
          </li>
        </ul>
      </li>
      <!--end::User Menu Dropdown-->
    </ul>
    <!--end::End Navbar Links-->
  </div>
</nav>
