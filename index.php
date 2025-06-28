<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <title>Trang chủ</title>
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
    <?php session_start(); ?>
    <?php include "./includes/header.php" ?>

    <!-- Hero Section with Carousel Indicators -->
    <section class="hero-section d-flex align-items-center">
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <h1 class="hero-title">Thư thái trọn vẹn <br>Vẻ đẹp thăng hoa</h1>
        <p class="hero-desc">
        Khám phá dịch vụ 5 sao và không gian đẳng cấp, nơi bạn được chăm sóc sức khỏe và sắc đẹp một cách tốt nhất.
        </p>
        <button class="btn-cta" id="bookBtn"><a href="./booking.php" class="btn-cta">Đặt lịch ngay</a></button>
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
            <div class="section-subtitle fw-bold"></div>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="service-card">
              <div class="service-img mx-auto mb-3">
                <img src="./assets/images/feature-1.jpg" alt="Chăm sóc da" class="img-fluid rounded-circle" />
              </div>
              <h5 class="service-title">CHĂM SÓC DA</h5>
              <p class="service-desc">Nâng niu làn da, rạng rỡ nét thanh xuân.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="service-card">
              <div class="service-img mx-auto mb-3">
                <img src="./assets/images/feature-2.jpg" alt="Massage" class="img-fluid rounded-circle" />
              </div>
              <h5 class="service-title">CÔNG NGHỆ TRỊ LIỆU</h5>
              <p class="service-desc">Khơi nguồn sắc vóc <br>Kiến tạo vẻ đẹp tương lai.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="service-card">
              <div class="service-img mx-auto mb-3">
                <img src="./assets/images/feature-3.jpg" class="img-fluid rounded-circle"/>
              </div>
              <h5 class="service-title">CHĂM SÓC CƠ THỂ</h5>
              <p class="service-desc">Thư thái toàn diện, phục hồi năng lượng.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="service-card">
              <div class="service-img mx-auto mb-3">
                <img src="./assets/images/feature-4.jpg" class="img-fluid rounded-circle" />
              </div>
              <h5 class="service-title">CHĂM SÓC SỨC KHỎE</h5>
              <p class="service-desc">Cân bằng thân tâm <br>Sống trọn vẹn từng khoảnh khắc.</p>
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
            <h2 class="about-title mb-3">KHÁM PHÁ SPA BEAUTY</h2>
            <div class="about-title-underline mb-4"></div>
            <p>
            <b>Spa Beauty</b> là điểm đến lý tưởng cho hành trình tái tạo vẻ đẹp và thư giãn tâm hồn của bạn. Chúng tôi mang đến <b>danh sách dịch vụ spa đa dạng, từ chăm sóc da chuyên sâu đến các liệu pháp thư giãn toàn thân</b>, được thực hiện bởi đội ngũ chuyên gia tay nghề cao. Mỗi liệu trình tại đây đều sử dụng <b>sản phẩm cao cấp, có nguồn gốc tự nhiên</b>, đảm bảo hiệu quả tối ưu và sự an toàn tuyệt đối cho làn da cùng sức khỏe của bạn.
            </p>
            <p>
            Chúng tôi tin rằng sự cân bằng giữa sức khỏe thể chất và tinh thần là chìa khóa cho vẻ đẹp bền vững. Với <b>không gian sang trọng, ấm cúng cùng sự phục vụ tận tâm</b>, Spa Beauty cam kết mang đến cho quý khách những trải nghiệm đẳng cấp, giúp bạn tìm lại sự rạng rỡ, năng lượng tràn đầy và cảm giác thư thái trọn vẹn sau mỗi lần ghé thăm.
            </p>
            <a href="./about.php" class="btn-cta py-2">XEM THÊM</a>
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
              <div class="fact-number">15</div>
              <div class="fact-label">Năm kinh nghiệm</div>
            </div>
          </div>
          <!-- Boxed content -->
          <div class="col-lg-6">
            <div class="facts-box p-4 p-lg-5">
              <h3 class="facts-box-title mb-3">NIỀM TIN VỮNG CHẮC TỪ KHÁCH HÀNG</h3>
              <p>
                Hơn 15 năm qua, <b>Spa Beauty</b> đã chinh phục hàng chục nghìn khách hàng bằng dịch vụ 5 sao và sự tận tâm. Vô vàn đánh giá tích cực là minh chứng cho vị thế dẫn đầu và chất lượng vượt trội của chúng tôi. Chúng tôi không ngừng hoàn thiện để xứng đáng với niềm tin của bạn.
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
            <h2 class="service-quality-title mb-4">HÃY TRẢI NGHIỆM SỰ KHÁC BIỆT THỰC SỰ</h2>
            <p>
            Bạn không cần phải chấp nhận những dịch vụ spa thông thường. Tại <b>Spa Beauty</b>, chúng tôi <b>định nghĩa lại đẳng cấp chăm sóc</b>, mang đến một danh mục liệu pháp <b>tuyệt vời về chất lượng và an toàn tuyệt đối</b>. Chúng tôi chỉ sử dụng <b>sản phẩm được kiểm chứng, không chứa điều gì khiến bạn phải nghi ngờ</b>, cùng đội ngũ chuyên gia sẽ lắng nghe và đáp ứng mọi nhu cầu, dù là nhỏ nhất.
            </p>
            <p>
            Đừng lãng phí thời gian và tiền bạc vào những trải nghiệm hời hợt. <b>Spa Beauty cam kết mang đến sự thay đổi rõ rệt ngay sau lần đầu tiên.</b> Chúng tôi không chỉ hứa hẹn; chúng tôi <b>chứng minh bằng kết quả</b>. Hãy đến và cảm nhận sự khác biệt mà một dịch vụ spa thực sự chất lượng có thể mang lại cho vẻ đẹp và sức khỏe của bạn.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section position-relative py-5">
      <div class="testimonials-bg"></div>
      <div class="container position-relative z-2">
        <h2 class="text-center testimonials-title mb-5">CÂU CHUYỆN VỀ SỰ HÀI LÒNG</h2>
        <div class="testimonials-slider-wrapper d-flex align-items-center justify-content-center">
          <button class="testimonial-arrow arrow-left me-3" aria-label="Trước">
            <span>&lt;</span>
          </button>
          <div class="testimonials-slider row flex-nowrap overflow-hidden w-100" style="max-width: 1200px;">
            <!-- Testimonial cards (add as many as you want, only 3 will show at a time) -->
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="./assets/images/feedback1.jpg" class="testimonial-avatar mb-3" alt="Elly Trần">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                Thật sự bất ngờ với chất lượng dịch vụ ở Spa Beauty! Từ không gian ấm cúng đến mùi hương dịu nhẹ, mọi thứ đều giúp tôi thư giãn tuyệt đối. Các bạn nhân viên vô cùng tận tâm và chuyên nghiệp, kỹ thuật massage đỉnh cao làm tan biến mọi mệt mỏi. Tôi chắc chắn sẽ quay lại!
                </div>
                <div class="testimonial-author fw-bold">Pháp Kiều <span class="fw-normal">/ Rapper</span></div>
              </div>
            </div>
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="./assets/images/feedback3.jpg" class="testimonial-avatar mb-3" alt="Ngọc Trinh">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                Tôi đã thử nhiều spa nhưng Spa Beauty có lẽ là nơi khiến tôi hài lòng nhất. Tôi chọn gói trị liệu body và cảm thấy cơ thể nhẹ nhõm hẳn. Sản phẩm sử dụng rất cao cấp, không hề gây kích ứng da nhạy cảm của tôi. Đây đúng là địa điểm lý tưởng để nạp lại năng lượng sau những ngày làm việc căng thẳng.
                </div>
                <div class="testimonial-author fw-bold">Ngọc Trinh <span class="fw-normal">/ Người mẫu</span></div>
              </div>
            </div>
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="./assets/images/feedback2.jpg" class="testimonial-avatar mb-3" alt="Minh Hằng">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                Một trải nghiệm thực sự đẳng cấp! Cơ sở vật chất hiện đại, sạch sẽ và rất riêng tư. Tôi đặc biệt ấn tượng với kỹ năng của chuyên viên massage, họ thực sự hiểu cơ thể và biết cách thư giãn từng bó cơ. Tôi cảm thấy khỏe khoắn và tràn đầy sức sống sau buổi trị liệu. Rất khuyến khích mọi người nên thử!
                </div>
                <div class="testimonial-author fw-bold">Minh Hằng <span class="fw-normal">/ Ca sĩ</span></div>
              </div>
            </div>
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="./assets/images/feedback4.jpg" class="testimonial-avatar mb-3" alt="Lan Ngọc">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                Vừa bước vào đã thấy khác biệt, không gian sang trọng và thơm mát. Tôi chọn dịch vụ trẻ hóa da công nghệ cao và kết quả vượt ngoài mong đợi! Da tôi săn chắc và mịn màng hơn rõ rệt chỉ sau vài buổi. Nhân viên tư vấn rất kỹ lưỡng và luôn hỏi han trong suốt quá trình. Tôi hoàn toàn tin tưởng Spa Beauty!
                </div>
                <div class="testimonial-author fw-bold">Lan Ngọc <span class="fw-normal">/ Diễn viên</span></div>
              </div>
            </div>
            <div class="col-md-4 testimonial-card-col d-none">
              <div class="testimonial-card p-4 text-center">
                <img src="./assets/images/feedback5.jpg" class="testimonial-avatar mb-3" alt="Quang Dũng">
                <div class="testimonial-stars mb-2">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="testimonial-text mb-3">
                  Là nam giới nhưng tôi vẫn muốn tìm một nơi thư giãn thật sự. Spa Beauty đã không làm tôi thất vọng. Liệu trình chăm sóc da mặt chuyên sâu khiến da tôi sáng và sạch hơn hẳn. Đặc biệt, nhân viên rất chu đáo, tư vấn nhiệt tình mà không hề tạo áp lực. Rất đáng tiền!
                </div>
                <div class="testimonial-author fw-bold">Hiếu Thứ Hai <span class="fw-normal">/ Rapper</span></div>
              </div>
            </div>
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
              <a href="./services.php" class="service-package-btn mt-2">XEM THÊM</a>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-md-4">
            <div class="service-package-card">
              <img src="./assets/images/service-3.jpg" alt="Sức khỏe - Massage" class="service-package-img img-fluid mb-3" />
              <h5 class="service-package-name">SỨC KHỎE – MASSAGE</h5>
              <a href="./services.php" class="service-package-btn mt-2">XEM THÊM</a>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-md-4">
            <div class="service-package-card">
              <img src="./assets/images/service-2.jpg" alt="Chăm sóc cơ thể" class="service-package-img img-fluid mb-3" />
              <h5 class="service-package-name">CHĂM SÓC CƠ THỂ</h5>
              <a href="./services.php" class="service-package-btn mt-2">XEM THÊM</a>
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
                Không gian sảnh của chúng tôi được thiết kế theo phong cách hiện đại, là một trong những điểm nhấn của Beauty Spa.
              </div>
            </div>
          </div>
          <!-- Gallery Item 4 -->
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="./assets/images/gallery-image4.jpg" alt="Beauty Spa 4" class="gallery-img" />
              <div class="gallery-caption">
                Hàng tre tại lối vào mang đậm phong cách khu vườn truyền thống, dấu ấn đặc trưng của Beauty Spa.
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
    <?php include "./includes/footer.php"?>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- File script riêng -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>
