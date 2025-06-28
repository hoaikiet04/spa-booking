<nav
  class="navbar navbar-expand-lg bg-white shadow-sm fixed-top px-3 px-lg-5 py-2"
>
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="./index.php">
      <img
        src="./assets/images/logo_removebg.png"
        alt="Logo"
        style="height: 40px; margin-right: 10px"
      />
      <span class="fw-bold text-warning fs-4">Spa Beauty</span>
    </a>

    <!-- Toggle Mobile -->
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div
      class="collapse navbar-collapse justify-content-end align-items-center"
      id="navbarNav"
    >
      <ul class="navbar-nav align-items-center">
        <li class="nav-item px-2">
          <a class="nav-link" href="./index.php">TRANG CHỦ</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="./about.php">GIỚI THIỆU</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="./services.php">DỊCH VỤ</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="./booking.php">ĐẶT LỊCH</a>
        </li>

        <!-- Xin chào -->
        <li class="nav-item px-2 text-secondary small d-none d-lg-block">
          <?php if (isset($_SESSION['user_fullname'])): ?>
          Xin chào,
          <strong><?= htmlspecialchars($_SESSION['user_fullname']) ?></strong>
          <?php else: ?>
          Xin chào!
          <?php endif; ?>
        </li>

        <!-- Avatar Dropdown -->
        <li class="nav-item dropdown px-2">
          <a
            class="nav-link dropdown-toggle d-flex align-items-center"
            href="#"
            id="userDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fa-solid fa-circle-user fa-lg"></i>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="userDropdown"
          >
            <?php if (isset($_SESSION['user_id'])): ?>
            <li><a class="dropdown-item" href="#">Tài khoản của tôi</a></li>
            <?php if ($_SESSION['user_role'] === 'admin'): ?>
            <li>
              <a class="dropdown-item" href="./admin/dashboard.php"
                >Trang quản trị</a
              >
            </li>
            <?php endif; ?>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="./user/logout.php">Đăng xuất</a>
            </li>
            <?php else: ?>
            <li>
              <a class="dropdown-item" href="./user/login.php">Đăng nhập</a>
            </li>
            <li>
              <a class="dropdown-item" href="./user/register.php">Đăng ký</a>
            </li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
