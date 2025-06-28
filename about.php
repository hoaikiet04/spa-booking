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
    <?php session_start(); ?>
    <?php include "./includes/header.php" ?>

    <!-- Hero Section with Carousel Indicators -->
    <section class="hero-section d-flex align-items-center">
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <h1 class="hero-title">Dịch vụ 5 sao <br> Không gian thoải mái</h1>
        <p class="hero-desc">
        Thư thái trọn vẹn, vẻ đẹp thăng hoa. Spa Beauty cam kết mang đến trải nghiệm chăm sóc sức khỏe và sắc đẹp tuyệt vời nhất cho bạn.
        </p>
        <button class="btn-cta" id="bookBtn"><a class="btn-cta" href="./booking.php">Đặt lịch ngay</a></button>
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
              <img src="./assets/images/about-title.jpg" alt="Spa" class="img-fluid about-img" />
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

    <!-- Team Members Section -->
    <section class="team-section py-5">
    <div class="container">
        <div class="px-2 mb-5">
            <h2 class="section-title px-1">
                  ĐỘI NGŨ NHÂN VIÊN GIÀU KINH NGHIỆM<span class="section-bar-about"></span>
            </h2>
        </div>
        <div class="row g-4 align-items-stretch">
        
        <!-- 4 khối nhỏ bên trái -->
        <div class="col-lg-7 order-lg-first">
            <div class="row g-4">
            <div class="col-md-6 col-lg-6">
                <div class="team-member-card text-center h-100">
                <img src="./assets/images/doctor5.jpg" alt="David Gray" class="team-member-img mb-3" />
                <div class="team-member-info">
                    <h5 class="team-member-name mb-1">David Gray</h5>
                    <div class="team-member-role">5 năm kinh nghiệm</div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="team-member-card text-center h-100">
                <img src="./assets/images/doctor4.jpg" alt="Taylor Roberts" class="team-member-img mb-3" />
                <div class="team-member-info">
                    <h5 class="team-member-name mb-1">Taylor Roberts</h5>
                    <div class="team-member-role">5 năm kinh nghiệm</div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="team-member-card text-center h-100">
                <img src="./assets/images/staff1.jpg" alt="Robert Willson" class="team-member-img mb-3" />
                <div class="team-member-info">
                    <h5 class="team-member-name mb-1">Robert Willson</h5>
                    <div class="team-member-role">7 năm kinh nghiệm</div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="team-member-card text-center h-100">
                <img src="./assets/images/staff2.jpg" alt="Austin Evon" class="team-member-img mb-3" />
                <div class="team-member-info">
                    <h5 class="team-member-name mb-1">Austin Evon</h5>
                    <div class="team-member-role">7 năm kinh nghiệm</div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Khối to bên phải -->
        <div class="col-lg-5 order-lg-last">
            <div class="team-member-card team-member-featured h-100 text-center text-lg-start">
            <img src="./assets/images/doctor3.jpg" alt="Robert Willson" class="team-member-img mb-3 mb-lg-4" />
            <div class="team-member-info">
                <h4 class="team-member-name mb-1">Taylor Swift</h4>
                <div class="team-member-role">12 năm kinh nghiệm</div>
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
              <img src="./assets/images/facility1.jpg" alt="Không gian Spa" class="facility-img img-fluid rounded-3 shadow" />
              </div>
              <div class="col-md-6">
              <div class="facility-info facility-info-right bg-white shadow-sm">
                  <div class="facility-date"></div>
                  <div class="facility-name fw-bold">KHÔNG GIAN ĐẲNG CẤP - THIẾT KẾ ĐỘC ĐÁO</div>
                  <div class="facility-desc">
                  Bước vào Spa Beauty, quý khách sẽ ngay lập tức cảm nhận được sự khác biệt từ không gian. Chúng tôi đã kiến tạo nên một ốc đảo yên bình với thiết kế tinh tế, kết hợp hài hòa giữa nét hiện đại và vẻ đẹp tự nhiên, tạo nên một không gian thư giãn lý tưởng, sang trọng mà vẫn ấm cúng. Mọi chi tiết, từ ánh sáng dịu nhẹ, hương thơm thư thái đến âm nhạc êm dịu, đều được chăm chút tỉ mỉ để đánh thức mọi giác quan, mang đến trải nghiệm nghỉ dưỡng hoàn hảo ngay giữa lòng thành phố.
                  </div>
              </div>
              </div>
          </div>
          <!-- Facility 2 (reverse) -->
          <div class="row facility-row align-items-center mb-5 flex-md-row-reverse">
              <div class="col-md-6">
                <img src="./assets/images/facility2.jpg" alt="Bể bơi ngâm mình" class="facility-img img-fluid rounded-3 shadow" />
              </div>
              <div class="col-md-6">
                <div class="facility-info facility-info-left bg-highlight shadow-sm">
                    <div class="facility-date"></div>
                    <div class="facility-name fw-bold">CÔNG NGHỆ HIỆN ĐẠI - HIỆU QUẢ TỐI ƯU</div>
                    <div class="facility-desc">
                    Spa Beauty tự hào dẫn đầu xu hướng làm đẹp với việc đầu tư vào hệ thống máy móc, trang thiết bị công nghệ cao tiên tiến nhất thế giới. Từ các thiết bị trẻ hóa da không xâm lấn, máy móc chăm sóc cơ thể chuyên sâu cho đến các công nghệ trị liệu chuyên biệt, tất cả đều được nhập khẩu chính hãng, đạt chuẩn quốc tế và được kiểm định nghiêm ngặt. Sự kết hợp giữa công nghệ đỉnh cao và kỹ thuật chuyên nghiệp đảm bảo mang đến cho quý khách những liệu trình an toàn, hiệu quả vượt trội và kết quả rõ rệt ngay từ lần đầu trải nghiệm.                </div>
                </div>
              </div>
          </div>
          <!-- Facility 3 -->
          <div class="row facility-row align-items-center mb-5">
              <div class="col-md-6">
              <img src="./assets/images/facility3.jpg" alt="Massage trị liệu" class="facility-img img-fluid rounded-3 shadow" />
              </div>
              <div class="col-md-6">
              <div class="facility-info facility-info-right bg-white shadow-sm">
                  <div class="facility-date"></div>
                  <div class="facility-name fw-bold">SẢN PHẨM CAO CẤP - TINH HOA TỪ THIÊN NHIÊN</div>
                  <div class="facility-desc">
                  Chất lượng dịch vụ tại Spa Beauty còn được khẳng định qua nguồn gốc và thành phần của từng sản phẩm chúng tôi sử dụng. Chúng tôi chỉ tin dùng các dòng mỹ phẩm và tinh chất trị liệu đến từ những thương hiệu danh tiếng toàn cầu, được chiết xuất từ thiên nhiên và đã qua kiểm nghiệm lâm sàng khắt khe. Mỗi sản phẩm đều được lựa chọn kỹ lưỡng để phù hợp với từng loại da, từng vấn đề cụ thể, đảm bảo cung cấp dưỡng chất tinh túy nhất, nâng cao hiệu quả trị liệu và nuôi dưỡng làn da, cơ thể bạn từ sâu bên trong.                </div>
              </div>
              </div>
          </div>
          <!-- Facility 4 (reverse) -->
          <div class="row facility-row align-items-center mb-5 flex-md-row-reverse">
              <div class="col-md-6">
              <img src="./assets/images/facility4.jpg" alt="Phòng chờ - thư giãn" class="facility-img img-fluid rounded-3 shadow" />
              </div>
              <div class="col-md-6">
              <div class="facility-info facility-info-left bg-highlight shadow-sm">
                  <div class="facility-date"></div>
                  <div class="facility-name fw-bold">ĐỘI NGŨ TẬN TÂM - TAY NGHỀ ĐỈNH CAO</div>
                  <div class="facility-desc">
                  Trái tim của Spa Beauty chính là đội ngũ chuyên gia trị liệu giàu kinh nghiệm, được đào tạo bài bản theo tiêu chuẩn quốc tế và luôn cập nhật những xu hướng làm đẹp mới nhất. Với sự am hiểu sâu sắc về cấu trúc da, kỹ thuật massage điêu luyện và khả năng lắng nghe tinh tế, mỗi chuyên viên của chúng tôi không chỉ thực hiện liệu trình mà còn là người tư vấn tận tâm, đồng hành cùng quý khách trên hành trình tìm lại vẻ đẹp và sự tự tin. Sự chuyên nghiệp, tỉ mỉ và thái độ phục vụ chu đáo chính là cam kết của chúng tôi cho mỗi trải nghiệm của bạn.                </div>
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
