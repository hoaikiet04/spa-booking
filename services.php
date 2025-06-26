<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <title>Dịch vụ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./assets/css/style.css?v=<?= time(); ?>" />

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
    <!-- Navbar/Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-0 px-lg-5 py-0">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <!-- Logo or text -->
          <img
            src="./assets/images/logo_removebg.png"
            alt="Logo" 
          />
          <span>Spa Beauty</span>
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
            <li class="nav-item"><a class="nav-link" href="#">ĐẶT LỊCH</a></li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fa-solid fa-circle-user"></i>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="./user/login.php">Đăng nhập</a>
                </li>
                <li>
                  <a class="dropdown-item" href="./user/register.php"
                    >Đăng ký</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="./user/logout.php"
                    >Đăng xuất</a
                  >
                </li>
              </ul>
            </li>
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

    <!-- Featured Services Section -->
    <section class="featured-services-section py-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-end">
            <h2 class="section-title">
              DỊCH VỤ <span class="section-bar"></span>
            </h2>
            <div class="section-subtitle fw-bold">Tiêu biểu</div>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="service-card">
              <div class="service-img mx-auto mb-3">
                <img src="./assets/images/feature-1.jpg" alt="Chăm sóc da" class="img-fluid rounded-circle" />
              </div>
              <h5 class="service-title">CHĂM SÓC DA</h5>
              <p class="service-desc">Chăm sóc da với liệu trình đặc biệt.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="service-card">
              <div class="service-img mx-auto mb-3">
                <img src="./assets/images/feature-2.jpg" alt="Massage" class="img-fluid rounded-circle" />
              </div>
              <h5 class="service-title">SỨC KHỎE - MASSAGE</h5>
              <p class="service-desc">Massage thư giãn với đá nóng.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="service-card">
              <div class="service-img mx-auto mb-3">
                <img src="./assets/images/feature-3.jpg" class="img-fluid rounded-circle"/>
              </div>
              <h5 class="service-title">CHĂM SÓC CƠ THỂ</h5>
              <p class="service-desc">Chăm sóc toàn thân 360.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="service-card">
              <div class="service-img mx-auto mb-3">
                <img src="./assets/images/feature-4.jpg" class="img-fluid rounded-circle" />
              </div>
              <h5 class="service-title">TRẺ HÓA DA</h5>
              <p class="service-desc">Trẻ hóa da như em bé.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery services "Chăm sóc da" -->
     <!-- 1 -->
    <section class="service-gallery py-5">
      <div class="container">
        <div class="px-2 mb-5">
            <h2 class="section-title px-1">
                  Chăm sóc da <span class="section-bar-about"></span>
            </h2>
        </div>
        <div class="row g-4">

          <!-- Gallery Item Start -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image1.jpg" alt="Liệu trình 1" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Chuyên Sâu (90 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Liệu trình chăm sóc đặc biệt giúp cải thiện làn da, ngăn ngừa lão hoá và giữ gìn sự tươi trẻ.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.490.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

          <!-- Gallery Item 2 -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image2.jpg" alt="Liệu trình 2" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Trẻ Hoá RF (75 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Công nghệ nâng cơ không xâm lấn giúp làn da săn chắc, giảm nếp nhăn và kích thích sản sinh collagen.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.200.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

        </div>
        <div class="row g-4">

          <!-- Gallery Item Start -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image1.jpg" alt="Liệu trình 1" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Chuyên Sâu (90 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Liệu trình chăm sóc đặc biệt giúp cải thiện làn da, ngăn ngừa lão hoá và giữ gìn sự tươi trẻ.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.490.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

          <!-- Gallery Item 2 -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image2.jpg" alt="Liệu trình 2" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Trẻ Hoá RF (75 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Công nghệ nâng cơ không xâm lấn giúp làn da săn chắc, giảm nếp nhăn và kích thích sản sinh collagen.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.200.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

        </div>
      </div>
    </section>

    <!-- Gallery services "Chăm sóc da" -->
     <!-- 2 -->
    <section class="service-gallery py-5">
      <div class="container">
        <div class="px-2 mb-5 text-end">
          <h2 class="section-title section-title-right px-1">
            Trẻ hoá da <span class="section-bar-about"></span>
          </h2>
        </div>

        <div class="row g-4">

          <!-- Gallery Item Start -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image1.jpg" alt="Liệu trình 1" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Chuyên Sâu (90 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Liệu trình chăm sóc đặc biệt giúp cải thiện làn da, ngăn ngừa lão hoá và giữ gìn sự tươi trẻ.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.490.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

          <!-- Gallery Item 2 -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image2.jpg" alt="Liệu trình 2" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Trẻ Hoá RF (75 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Công nghệ nâng cơ không xâm lấn giúp làn da săn chắc, giảm nếp nhăn và kích thích sản sinh collagen.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.200.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

        </div>
        <div class="row g-4">

          <!-- Gallery Item Start -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image1.jpg" alt="Liệu trình 1" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Chuyên Sâu (90 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Liệu trình chăm sóc đặc biệt giúp cải thiện làn da, ngăn ngừa lão hoá và giữ gìn sự tươi trẻ.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.490.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

          <!-- Gallery Item 2 -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image2.jpg" alt="Liệu trình 2" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Trẻ Hoá RF (75 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Công nghệ nâng cơ không xâm lấn giúp làn da săn chắc, giảm nếp nhăn và kích thích sản sinh collagen.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.200.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

        </div>
      </div>
    </section>

    <!-- Gallery services "Chăm sóc da" -->
     <!-- 3 -->
    <section class="service-gallery py-5">
      <div class="container">
        <div class="px-2 mb-5">
            <h2 class="section-title px-1">
                  Chăm sóc da <span class="section-bar-about"></span>
            </h2>
        </div>
        <div class="row g-4">

          <!-- Gallery Item Start -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image1.jpg" alt="Liệu trình 1" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Chuyên Sâu (90 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Liệu trình chăm sóc đặc biệt giúp cải thiện làn da, ngăn ngừa lão hoá và giữ gìn sự tươi trẻ.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.490.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

          <!-- Gallery Item 2 -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image2.jpg" alt="Liệu trình 2" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Trẻ Hoá RF (75 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Công nghệ nâng cơ không xâm lấn giúp làn da săn chắc, giảm nếp nhăn và kích thích sản sinh collagen.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.200.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

        </div>
        <div class="row g-4">

          <!-- Gallery Item Start -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image1.jpg" alt="Liệu trình 1" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Chuyên Sâu (90 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Liệu trình chăm sóc đặc biệt giúp cải thiện làn da, ngăn ngừa lão hoá và giữ gìn sự tươi trẻ.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.490.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

          <!-- Gallery Item 2 -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image2.jpg" alt="Liệu trình 2" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Trẻ Hoá RF (75 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Công nghệ nâng cơ không xâm lấn giúp làn da săn chắc, giảm nếp nhăn và kích thích sản sinh collagen.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.200.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

        </div>
      </div>
    </section>

    <!-- Gallery services "Chăm sóc da" -->
     <!-- 4 -->
    <section class="service-gallery py-5">
      <div class="container">
        <div class="px-2 mb-5 text-end">
          <h2 class="section-title section-title-right px-1">
            Trẻ hoá da <span class="section-bar-about"></span>
          </h2>
        </div>
        <div class="row g-4">

          <!-- Gallery Item Start -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image1.jpg" alt="Liệu trình 1" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Chuyên Sâu (90 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Liệu trình chăm sóc đặc biệt giúp cải thiện làn da, ngăn ngừa lão hoá và giữ gìn sự tươi trẻ.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.490.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

          <!-- Gallery Item 2 -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image2.jpg" alt="Liệu trình 2" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Trẻ Hoá RF (75 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Công nghệ nâng cơ không xâm lấn giúp làn da săn chắc, giảm nếp nhăn và kích thích sản sinh collagen.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.200.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

        </div>
        <div class="row g-4">

          <!-- Gallery Item Start -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image1.jpg" alt="Liệu trình 1" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Chuyên Sâu (90 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Liệu trình chăm sóc đặc biệt giúp cải thiện làn da, ngăn ngừa lão hoá và giữ gìn sự tươi trẻ.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.490.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

          <!-- Gallery Item 2 -->
          <div class="col-md-6">
            <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
              <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0">
                <img src="./assets/images/gallery-image2.jpg" alt="Liệu trình 2" class="img-fluid rounded">
              </div>
              <div class="gallery-content d-flex flex-column justify-content-between">
                <div>
                  <h5 class="gallery-title fw-bold">Liệu Trình Trẻ Hoá RF (75 phút)</h5>
                  <p class="gallery-desc mb-2 text-muted">
                    Công nghệ nâng cơ không xâm lấn giúp làn da săn chắc, giảm nếp nhăn và kích thích sản sinh collagen.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="gallery-price fw-bold text-danger">1.200.000 VND</span>
                  <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Gallery Item End -->

        </div>
      </div>
    </section>




    <!-- Footer section -->
    <footer class="footer-section text-white pt-5 pb-4 position-relative">
      <div class="footer-bg"></div>
      <div class="container position-relative z-2">
        <div class="row g-4">
          
          <!-- Giới thiệu -->
          <div class="col-md-4">
            <div class="d-flex align-items-center mb-3">
              <h5 class="mb-0 fw-bold">Spa Beauty</h5>
            </div>
            <p class="footer-desc">
              "Sáng suốt lựa chọn nơi làm đẹp an toàn, uy tín nhất, cho chất lượng thẩm mỹ hoàn hảo nhất, nghĩa là bạn đang tôn trọng chính bạn. Nên nhớ rằng, làm đẹp là phải đẹp nhưng an toàn."
            </p>
            <div class="footer-social d-flex gap-2">
              <a href="#" class="footer-social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="footer-social-icon" aria-label="Email"><i class="fas fa-envelope"></i></a>
              <a href="#" class="footer-social-icon" aria-label="Google Plus"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="footer-social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
          </div>

          <!-- Liên hệ -->
          <div class="col-md-4 m">
            <h5 class="footer-title mb-3">LIÊN HỆ</h5>
            <p class="mb-2">Mọi thông tin liên hệ, thắc mắc, xin liên hệ chúng tôi:</p>
            <ul class="footer-contact-list">
              <li><strong>Địa chỉ:</strong> Đường Tô Ký, Phường Tân Chánh Hiệp, Quận 12, TP.HCM</li>
              <li><strong>Email:</strong> student@ut.edu.vn</li>
              <li><strong>Điện thoại:</strong> 028 3849 1234</li>
            </ul>
          </div>

          <!-- Fanpage -->
          <div class="col-md-4">
            <h5 class="footer-title mb-3">KẾT NỐI FANPAGE</h5>
            <div class="footer-fanpage">
              
            </div>
          </div>

        </div>
      </div>
    </footer>



    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <!-- Bootstrap Bundle JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- File script riêng -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>
