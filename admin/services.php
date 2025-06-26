<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <title>Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../assets/css/style-admin.css?v=<?= time(); ?>" />

    <!-- Bootstrap CSS CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
  </head>
<body>
  <!-- Top Navbar -->
  <!-- Navbar/Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-0 py-0 border-bottom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../assets/images/logo_removebg.png" alt="Logo" />
          <span>Spa Beauty</span>
        </a>

        <!-- Nút toggle cho mobile -->
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

        <!-- Menu khi toggle -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">       
            <!-- Dropdown người dùng -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="userDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fa-solid fa-circle-user"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="./user/login.php">Đăng nhập</a></li>
                <li><a class="dropdown-item" href="./user/register.php">Đăng ký</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="./user/logout.php">Đăng xuất</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-lg-2 col-md-3 d-none d-md-block sidebar position-fixed top-0 start-0 h-100">
        <div class="position-sticky">
          <ul class="nav flex-column mt-4">
            <li class="nav-item">
              <a class="nav-link" href="#">Quản lý người dùng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quản lý dịch vụ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lịch hẹn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Thêm dịch vụ</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Main Content -->
      <main class="col-lg-10 offset-lg-2 col-md-9 offset-md-3 ms-sm-auto px-md-4 main-content">
        <!-- Insert your admin content here -->
        <h1 class="h3 mb-4">Welcome to the Admin Dashboard</h1>
        <p>This is your main content area. Add your dashboard widgets, tables, or forms here.</p>
      </main>
    </div>
  </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Bundle JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- File script riêng -->
    <script src="../assets/js/main-admin.js"></script>
</body>
</html>
