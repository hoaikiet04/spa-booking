<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <title>Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./assets/css/style.css" />

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
    <!-- Navbar -->
    <!-- Navbar/Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-0 px-lg-5 py-0">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <!-- Logo or text -->
          <img
            src="./assets/images/logo_removebg.png"
            alt="Logo"
          />
          Spa Beauty
        </a>
        <!-- Nút toggle -->
        <button
          class="navbar-toggler"
          type="button"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu toggle -->
        <div class="navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">TRANG CHỦ</a></li>
            <li class="nav-item"><a class="nav-link" href="#">GIỚI THIỆU</a></li>
            <li class="nav-item"><a class="nav-link" href="#">DỊCH VỤ</a></li>
            <li class="nav-item"><a class="nav-link" href="#">BLOG</a></li>
            <li class="nav-item"><a class="nav-link" href="#">ĐẶT LỊCH</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-circle-user"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section with Carousel Indicators -->
    <section class="hero-section d-flex align-items-center">
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <h1 class="hero-title">Dịch vụ 5 sao, không gian thoải mái</h1>
        <p class="hero-desc">
          Demo Spa mong muốn trở thành nhà cung cấp dịch vụ chăm sóc sức khoẻ
          tốt nhất cho bạn.
        </p>
        <button class="btn-cta" id="bookBtn">Đặt lịch ngay</button>
      </div>
    </section>


    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <!-- Bootstrap Bundle JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- File script riêng -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>
