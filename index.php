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

    <!-- Featured Services Section -->
    <section class="featured-services-section py-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-end">
            <h2 class="section-title">
              DỊCH VỤ <span class="section-title-bar"></span>
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

    <!-- Interesting Facts Section -->
    <section class="facts-section position-relative section-spacing my-5">
      <div class="facts-bg"></div>
      <div class="container position-relative z-2">
        <div class="row align-items-center">
          <!-- Stats -->
          <div class="col-lg-6 d-flex flex-lg-row flex-column justify-content-between text-center text-lg-start mb-4 mb-lg-0">
            <div class="fact-item mb-4 mb-lg-0">
              <div class="fact-number">12,345</div>
              <div class="fact-label">Khách hàng tin dùng</div>
            </div>
            <div class="fact-item mb-4 mb-lg-0">
              <div class="fact-number">67</div>
              <div class="fact-label">Lượt đánh giá</div>
            </div>
            <div class="fact-item">
              <div class="fact-number">25</div>
              <div class="fact-label">Năm kinh nghiệm</div>
            </div>
          </div>
          <!-- Boxed content -->
          <div class="col-lg-6">
            <div class="facts-box p-4 p-lg-5">
              <div class="facts-box-label mb-2">Một vài</div>
              <h3 class="facts-box-title mb-3">SỰ THẬT VỀ BEAUTY SPA</h3>
              <p>
                Chúng tôi mong muốn trở thành nhà cung cấp dịch vụ chăm sóc sức khoẻ – sắc đẹp, hướng đến trở thành một mô hình chuẩn mực và tiên phong trong lĩnh vực dịch vụ làm đẹp tại thị trường Việt Nam.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Service Quality Section -->
    <section class="service-quality-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <!-- Progress Bars -->
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="quality-bar-group">
              <div class="quality-bar-item mb-4">
                <div class="quality-bar-label mb-1">Dịch vụ CSKH thân thiện</div>
                <div class="quality-bar">
                  <div class="quality-bar-fill" style="width: 95%;">
                    <span class="quality-bar-percent">95%</span>
                  </div>
                </div>
              </div>
              <div class="quality-bar-item mb-4">
                <div class="quality-bar-label mb-1">Áp dụng công nghệ mới</div>
                <div class="quality-bar">
                  <div class="quality-bar-fill" style="width: 80%;">
                    <span class="quality-bar-percent">80%</span>
                  </div>
                </div>
              </div>
              <div class="quality-bar-item mb-4">
                <div class="quality-bar-label mb-1">Khách hàng hài lòng 100%</div>
                <div class="quality-bar">
                  <div class="quality-bar-fill" style="width: 95%;">
                    <span class="quality-bar-percent">95%</span>
                  </div>
                </div>
              </div>
              <div class="quality-bar-item mb-4">
                <div class="quality-bar-label mb-1">Đảm bảo chất lượng</div>
                <div class="quality-bar">
                  <div class="quality-bar-fill" style="width: 90%;">
                    <span class="quality-bar-percent">90%</span>
                  </div>
                </div>
              </div>
              <div class="quality-bar-item">
                <div class="quality-bar-label mb-1">Giá cả hợp lý</div>
                <div class="quality-bar">
                  <div class="quality-bar-fill" style="width: 85%;">
                    <span class="quality-bar-percent">85%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Text Content -->
          <div class="col-lg-6">
            <h2 class="service-quality-title mb-4">Chất lượng dịch vụ hàng đầu</h2>
            <p>
              Demo Spa cung cấp một danh sách dịch vụ đầy đủ, trong đó có những liệu pháp tuyệt vời cho da và toàn thân, và chỉ sử dụng các sản phẩm cho da và mặt hoàn toàn thiên nhiên và hữu cơ. Các gói dịch vụ của chúng tôi được thiết kế không chỉ để chiều chuộng, mà còn để cung cấp các lợi ích rõ rệt nhằm xoa dịu tâm hồn và thân thể quý khách.
            </p>
            <p>
              Một lần thăm viếng Demo Spa sẽ được bắt đầu bằng việc phân tích da kỹ lưỡng bởi một trong những chuyên viên thẩm mỹ dạn dày kinh nghiệm của chúng tôi. Chúng tôi sẽ đề ra một phác đồ dịch vụ phù hợp với nhu cầu cá nhân của mỗi khách hàng.  Chúng tôi chỉ sử dụng các sản phẩm dưỡng da thiên nhiên ngoại hạng được sản xuất với liều lượng nhỏ từ Pháp. Và quý khách sẽ được thấy rõ sự chuyển biến tích cực của làn da ngay sau một lần trị liệu.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section position-relative py-5">
      <div class="testimonials-bg"></div>
      <div class="container position-relative z-2">
        <h2 class="text-center testimonials-title mb-5">Khách hàng nói gì về chúng tôi?</h2>
        <div class="testimonials-slider-wrapper d-flex align-items-center justify-content-center">
          <button class="testimonial-arrow arrow-left me-3" aria-label="Trước">
            <span>&lt;</span>
          </button>
          <div class="testimonials-slider row flex-nowrap overflow-hidden w-100" style="max-width: 1200px;">
            <!-- Testimonial cards (add as many as you want, only 3 will show at a time) -->
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="testimonial-avatar mb-3" alt="Elly Trần">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                  Đời sống phát triển, con người trở nên quan tâm, chăm sóc sức khỏe của mình kĩ càng hơn...
                </div>
                <div class="testimonial-author fw-bold">Elly Trần <span class="fw-normal">/ Người mẫu</span></div>
              </div>
            </div>
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="https://randomuser.me/api/portraits/women/65.jpg" class="testimonial-avatar mb-3" alt="Ngọc Trinh">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                  Dịch vụ tuyệt vời, nhân viên thân thiện và chuyên nghiệp. Tôi rất hài lòng với trải nghiệm tại đây!  nhân viên thân thiện và chuyên nghiệp. Tôi rất hài lòng với trải nghiệm tại đây!  nhân viên thân thiện và chuyên nghiệp. Tôi rất hài lòng với trải nghiệm tại đây!
                </div>
                <div class="testimonial-author fw-bold">Ngọc Trinh <span class="fw-normal">/ Người mẫu</span></div>
              </div>
            </div>
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="https://randomuser.me/api/portraits/women/68.jpg" class="testimonial-avatar mb-3" alt="Minh Hằng">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                  Không gian sang trọng, dịch vụ chất lượng cao. Tôi sẽ quay lại và giới thiệu cho bạn bè!
                </div>
                <div class="testimonial-author fw-bold">Minh Hằng <span class="fw-normal">/ Ca sĩ</span></div>
              </div>
            </div>
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="https://randomuser.me/api/portraits/women/69.jpg" class="testimonial-avatar mb-3" alt="Lan Ngọc">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                  Dịch vụ tuyệt vời, nhân viên thân thiện và chuyên nghiệp. Tôi rất hài lòng với trải nghiệm tại đây!
                </div>
                <div class="testimonial-author fw-bold">Lan Ngọc <span class="fw-normal">/ Diễn viên</span></div>
              </div>
            </div>
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="testimonial-avatar mb-3" alt="Quang Dũng">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                  Không gian sang trọng, dịch vụ chất lượng cao. Tôi sẽ quay lại và giới thiệu cho bạn bè!
                </div>
                <div class="testimonial-author fw-bold">Quang Dũng <span class="fw-normal">/ Doanh nhân</span></div>
              </div>
            </div>
            <!-- ...thêm nhiều testimonial-card-col nếu muốn... -->
          </div>
          <button class="testimonial-arrow arrow-right ms-3" aria-label="Sau">
            <span>&gt;</span>
          </button>
        </div>
      </div>
    </section>

    <!-- Service Packages Section -->
    <section class="service-packages-section py-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="service-packages-title mb-4">CÁC GÓI DỊCH VỤ</h2>
          </div>
        </div>
        <div class="row g-5">
          <!-- Card 1 -->
          <div class="col-md-4">
            <div class="service-package-card">
              <img src="./assets/images/service-1.jpg" alt="Chăm sóc da" class="service-package-img img-fluid mb-3" />
              <h5 class="service-package-name">CHĂM SÓC DA</h5>
              <a href="#" class="service-package-btn mt-2">XEM THÊM</a>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-md-4">
            <div class="service-package-card">
              <img src="./assets/images/service-3.jpg" alt="Sức khỏe - Massage" class="service-package-img img-fluid mb-3" />
              <h5 class="service-package-name">SỨC KHỎE – MASSAGE</h5>
              <a href="#" class="service-package-btn mt-2">XEM THÊM</a>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-md-4">
            <div class="service-package-card">
              <img src="./assets/images/service-2.jpg" alt="Chăm sóc cơ thể" class="service-package-img img-fluid mb-3" />
              <h5 class="service-package-name">CHĂM SÓC CƠ THỂ</h5>
              <a href="#" class="service-package-btn mt-2">XEM THÊM</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section py-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12 text-center">
            <h2 class="gallery-title mb-2">
              Thư Viện Ảnh <span class="gallery-title-highlight">Beauty Spa</span>
            </h2>
            <div class="gallery-subtitle mb-3">
              Không gian được thiết kế tối giản với màu gỗ chủ đạo.<br>
              <b>Beauty Spa</b> sẽ cho bạn cảm giác thư giãn thật sự khi đến.
            </div>
          </div>
        </div>
        <div class="row g-4">
          <!-- Gallery Item 1 -->
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="./assets/images/gallery-image6.jpg" alt="Beauty Spa 1" class="gallery-img" />
              <div class="gallery-caption">
                Chào mừng bạn đến với Beauty Spa - Dịch vụ Spa tại TP. Hồ Chí Minh. Đội ngũ nhân viên của chúng tôi luôn sẵn sàng hỗ trợ bạn.
              </div>
            </div>
          </div>
          <!-- Gallery Item 2 -->
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="./assets/images/gallery-image2.jpg" alt="Beauty Spa 2" class="gallery-img" />
              <div class="gallery-caption">
                Chúng tôi cung cấp các sản phẩm chăm sóc da được tuyển chọn kỹ lưỡng, bao gồm cả các loại dầu massage luôn có sẵn để trải nghiệm tại Beauty Spa.
              </div>
            </div>
          </div>
          <!-- Gallery Item 3 -->
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="./assets/images/gallery-image3.jpg" alt="Beauty Spa 3" class="gallery-img" />
              <div class="gallery-caption">
                Không gian sảnh của chúng tôi được thiết kế theo phong cách hiện đại Nhật Bản, là một trong những điểm nhấn của Beauty Spa.
              </div>
            </div>
          </div>
          <!-- Gallery Item 4 -->
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="./assets/images/gallery-image4.jpg" alt="Beauty Spa 4" class="gallery-img" />
              <div class="gallery-caption">
                Hàng tre tại lối vào mang đậm phong cách khu vườn Nhật Bản, dấu ấn đặc trưng của Beauty Spa.
              </div>
            </div>
          </div>
          <!-- Gallery Item 5 -->
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="./assets/images/gallery-image5.jpg" alt="Beauty Spa 5" class="gallery-img" />
              <div class="gallery-caption">
                Trước và sau buổi trị liệu tại spa, hãy thoải mái thư giãn trong không gian sảnh tiện nghi của chúng tôi.
              </div>
            </div>
          </div>
          <!-- Gallery Item 6 -->
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="./assets/images/gallery-image1.jpg" alt="Beauty Spa 6" class="gallery-img" />
              <div class="gallery-caption">
                Không gian trị liệu của chúng tôi được thiết kế để mang đến môi trường thư giãn cho khách hàng.
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
              <img src="./assets/images/logo_removebg.png" alt="Logo" style="height: 60px;" class="me-2" />
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
              <li><strong>Email:</strong> sutudent@ut.edu.vn</li>
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
