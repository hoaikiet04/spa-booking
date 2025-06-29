<?php include "./includes/connect.php"; ?>

<?php
// Lấy tất cả danh mục
$all_categories = $conn->query("SELECT * FROM service_categories");

// Lọc theo category (nếu có)
$filter_id = isset($_GET['category']) ? intval($_GET['category']) : 0;

if ($filter_id > 0) {
    // Nếu người dùng chọn lọc → chỉ lấy danh mục đó
    $categories = $conn->query("SELECT * FROM service_categories WHERE id = $filter_id");
} else {
    // Không lọc → lấy tất cả
    $categories = $conn->query("SELECT * FROM service_categories");
}
?>
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

    <!-- Thanh lọc danh mục -->
    <section class="container my-4" id="filter-section">
      <form method="GET" action="#filter-section" class="filter-bar d-flex flex-wrap align-items-center gap-3 p-3 rounded shadow-sm">
        <label for="category" class="form-label mb-0 fw-semibold text-dark">
          <i class="fa-solid fa-filter me-1"></i> Lọc danh mục:
        </label>
        <select class="form-select w-auto" name="category" id="category" onchange="this.form.submit()">
          <option value="0">Tất cả</option>
          <?php while ($cat = $all_categories->fetch_assoc()): ?>
            <option value="<?= $cat['id'] ?>" <?= $filter_id == $cat['id'] ? 'selected' : '' ?>>
              <?= htmlspecialchars($cat['category_name']) ?>
            </option>
          <?php endwhile; ?>
        </select>
      </form>
    </section>

    <!-- Danh sách các section dịch vụ theo danh mục -->
    <?php while ($cat = $categories->fetch_assoc()): ?>
      <section class="service-gallery py-5">
        <div class="container">
          <div class="px-2 mb-5">
            <h2 class="section-title px-1">
              <?= htmlspecialchars($cat['category_name']) ?> <span class="section-bar-about"></span>
            </h2>
          </div>

          <div class="row g-4">
            <?php
            $category_id = $cat['id'];
            $services = $conn->query("SELECT * FROM services WHERE category_id = $category_id");
            ?>

            <?php while ($row = $services->fetch_assoc()): ?>
              <div class="col-md-6">
                <div class="gallery-box d-flex flex-column flex-md-row h-100 p-3 shadow-sm rounded-3 bg-white">
                  <div class="gallery-image mb-3 mb-md-0 me-md-3 flex-shrink-0" style="max-width: 180px;">
                    <img src="./assets/images/services/<?= htmlspecialchars($row['image_path']) ?>" alt="<?= htmlspecialchars($row['title']) ?>" class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                  </div>
                  <div class="gallery-content d-flex flex-column justify-content-between">
                    <div>
                      <h5 class="gallery-title fw-bold"><?= htmlspecialchars($row['title']) ?> <?= $row['duration'] ? '(' . $row['duration'] . ')' : '' ?></h5>
                      <p class="gallery-desc mb-2 text-muted"><?= mb_strimwidth(strip_tags($row['description']), 0, 150, "...") ?></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                      <span class="gallery-price fw-bold text-color"><?= number_format($row['price'], 0, ',', '.') ?> VND</span>
                      <a href="#" class="btn-cta btn-sm">Đặt lịch</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>

            <?php if ($services->num_rows === 0): ?>
              <div class="col-12 text-muted">Không có dịch vụ nào.</div>
            <?php endif; ?>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
    
    <script>
      window.addEventListener('load', function () {
        if (window.location.hash === "#filter-section") {
          const el = document.getElementById("filter-section");
          if (el) el.scrollIntoView({ behavior: "smooth", block: "center" });
        }
      });
    </script>

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
