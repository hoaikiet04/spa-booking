<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <title>Giới thiệu</title>
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

    <!-- About Us Section -->
    <section class="about-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <!-- Image with colored bar -->
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="about-img-wrapper position-relative">
              <span class="about-img-bar"></span>
              <img src="./assets/images/about-section.jpg" alt="Spa" class="img-fluid about-img" />
            </div>
          </div>
          <!-- Text content -->
          <div class="col-lg-6">
            <h2 class="about-title mb-3">CHÚNG TÔI LÀ AI?</h2>
            <div class="about-title-underline mb-4"></div>
            <p>
              Demo Spa cung cấp một danh sách dịch vụ đầy đủ, trong đó có những liệu pháp tuyệt vời cho da và toàn thân, và chỉ sử dụng các sản phẩm cho da và mặt hoàn toàn thiên nhiên và hữu cơ. Các gói dịch vụ của chúng tôi được thiết kế không chỉ để chiều chuộng, mà còn để cung cấp các lợi ích rõ rệt nhằm xoa dịu tâm hồn và thân thể quý khách.
            </p>
            <p>
              Một lần thăm viếng Demo Spa sẽ được bắt đầu bằng việc phân tích da kỹ lưỡng bởi một trong những chuyên viên thẩm mỹ dạn dày kinh nghiệm của chúng tôi. Chúng tôi sẽ đề ra một phác đồ dịch vụ phù hợp với nhu cầu cá nhân của mỗi khách hàng. Chúng tôi chỉ sử dụng các sản phẩm dưỡng da thiên nhiên ngoại hạng được sản xuất với liều lượng nhỏ từ Pháp. Và quý khách sẽ được thấy rõ sự chuyển biến tích cực của làn da ngay sau một lần trị liệu.
            </p>
            <a href="#" class="btn about-btn mt-3">XEM THÊM <span class="about-btn-arrow">→</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Members Section -->
    <section class="team-section py-5">
    <div class="container">
        <div class="px-2 mb-5">
            <h2 class="section-title px-1">
                  ĐỘI NGŨ BÁC SĨ <span class="section-bar-about"></span>
            </h2>
        </div>
        <div class="row g-4 align-items-stretch">
        
        <!-- 4 khối nhỏ bên trái -->
        <div class="col-lg-7 order-lg-first">
            <div class="row g-4">
            <div class="col-md-6 col-lg-6">
                <div class="team-member-card text-center h-100">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="David Gray" class="team-member-img mb-3" />
                <div class="team-member-info">
                    <h5 class="team-member-name mb-1">David Gray</h5>
                    <div class="team-member-role">Wellness Agent 02</div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="team-member-card text-center h-100">
                <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Taylor Roberts" class="team-member-img mb-3" />
                <div class="team-member-info">
                    <h5 class="team-member-name mb-1">Taylor Roberts</h5>
                    <div class="team-member-role">Wellness Agent 03</div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="team-member-card text-center h-100">
                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Robert Willson" class="team-member-img mb-3" />
                <div class="team-member-info">
                    <h5 class="team-member-name mb-1">Robert Willson</h5>
                    <div class="team-member-role">Wellness Agent 04</div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="team-member-card text-center h-100">
                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Austin Evon" class="team-member-img mb-3" />
                <div class="team-member-info">
                    <h5 class="team-member-name mb-1">Austin Evon</h5>
                    <div class="team-member-role">Wellness Agent 05</div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Khối to bên phải -->
        <div class="col-lg-5 order-lg-last">
            <div class="team-member-card team-member-featured h-100 text-center text-lg-start">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Robert Willson" class="team-member-img mb-3 mb-lg-4" />
            <div class="team-member-info">
                <h4 class="team-member-name mb-1">Robert Willson</h4>
                <div class="team-member-role">Wellness Agent 01</div>
            </div>
            </div>
        </div>

        </div>
    </div>
    </section>
    <!-- Facilities Section -->
    <section class="facilities-section py-5">
    <div class="container">
    <div class="px-2 mb-5">
        <h2 class="section-title px-1">
                  CƠ SỞ HIỆN ĐẠI <span class="section-bar-about"></span>
            </h2>
        </div>
        <div class="facility-list">
        <!-- Facility 1 -->
        <div class="row facility-row align-items-center mb-5">
            <div class="col-md-6">
            <img src="./assets/images/about-section.jpg" alt="Không gian Spa" class="facility-img img-fluid rounded-3 shadow" />
            </div>
            <div class="col-md-6">
            <div class="facility-info facility-info-right bg-white shadow-sm">
                <div class="facility-date">2021-12-01</div>
                <div class="facility-name fw-bold">Không gian Spa</div>
                <div class="facility-desc">
                Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend.
                </div>
            </div>
            </div>
        </div>
        <!-- Facility 2 (reverse) -->
        <div class="row facility-row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6">
            <img src="./assets/images/about-section.jpg" alt="Bể bơi ngâm mình" class="facility-img img-fluid rounded-3 shadow" />
            </div>
            <div class="col-md-6">
            <div class="facility-info facility-info-left bg-highlight shadow-sm">
                <div class="facility-date">2021-10-14</div>
                <div class="facility-name fw-bold">Bể bơi ngâm mình</div>
                <div class="facility-desc">
                Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend.
                </div>
            </div>
            </div>
        </div>
        <!-- Facility 3 -->
        <div class="row facility-row align-items-center mb-5">
            <div class="col-md-6">
            <img src="./assets/images/about-section.jpg" alt="Massage trị liệu" class="facility-img img-fluid rounded-3 shadow" />
            </div>
            <div class="col-md-6">
            <div class="facility-info facility-info-right bg-white shadow-sm">
                <div class="facility-date">2015-04-16</div>
                <div class="facility-name fw-bold">Massage trị liệu</div>
                <div class="facility-desc">
                Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend.
                </div>
            </div>
            </div>
        </div>
        <!-- Facility 4 (reverse) -->
        <div class="row facility-row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6">
            <img src="./assets/images/about-section.jpg" alt="Phòng chờ - thư giãn" class="facility-img img-fluid rounded-3 shadow" />
            </div>
            <div class="col-md-6">
            <div class="facility-info facility-info-left bg-highlight shadow-sm">
                <div class="facility-date">2021-03-18</div>
                <div class="facility-name fw-bold">Phòng chờ – thư giãn</div>
                <div class="facility-desc">
                Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend.
                </div>
            </div>
            </div>
        </div>
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
