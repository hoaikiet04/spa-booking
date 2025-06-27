<?php
// Kết nối CSDL
require_once './includes/connect.php';

// Lấy danh sách loại dịch vụ
$categories = $conn->query("SELECT * FROM service_categories");

// Lấy danh sách dịch vụ chi tiết
$services = $conn->query("SELECT * FROM services");

// Chuyển về dạng mảng để dễ xử lý khi dùng JavaScript
$serviceList = [];
while ($row = $services->fetch_assoc()) {
    $serviceList[] = $row;
}
?>
<?php
session_start();

$success = $_SESSION['success'] ?? false;
$error = $_SESSION['error'] ?? null;
$booking_data = $_SESSION['booking_data'] ?? [];

unset($_SESSION['success'], $_SESSION['error'], $_SESSION['booking_data']);
?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <title>Đặt lịch</title>
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
          <img src="./assets/images/logo_removebg.png" alt="Logo" />
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
            <li class="nav-item"><a class="nav-link" href="./index.php">TRANG CHỦ</a></li>
            <li class="nav-item"><a class="nav-link" href="./about.php">GIỚI THIỆU</a></li>
            <li class="nav-item"><a class="nav-link" href="./services.php">DỊCH VỤ</a></li>
            <li class="nav-item"><a class="nav-link" href="./booking.php">ĐẶT LỊCH</a></li>
            
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

    <!-- Spa Booking Form Start -->
    <section class="booking-section py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <form id="spaBookingForm" class="p-4 p-md-5 bg-white rounded-4 shadow" method="POST" action="booking_submit.php">
              <h2 class="mb-4 text-center fw-bold">Đặt Lịch Dịch Vụ Spa</h2>
              <!-- 1. User Information Section -->
              <div class="mb-4">
                <h5 class="mb-3 fw-semibold">Thông tin khách hàng</h5>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="fullName" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullName" name="full_name" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10,}">
                  </div>
                  <div class="col-12">
                    <label for="email" class="form-label">Email (không bắt buộc)</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div>
              </div>
              <!-- 2. Service Selection Section -->
              <div class="mb-4">
                <h5 class="mb-3 fw-semibold">Chọn dịch vụ</h5>
                <div class="row g-3">
                  <!-- Loại dịch vụ -->
                  <div class="col-md-6">
                    <label for="service_category" class="form-label">Loại dịch vụ <span class="text-danger">*</span></label>
                    <select class="form-select" id="service_category" name="category_id" required>
                      <option value="" selected disabled>-- Chọn loại dịch vụ --</option>
                      <?php while ($cat = $categories->fetch_assoc()): ?>
                        <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['category_name']) ?></option>
                      <?php endwhile; ?>
                    </select>
                  </div>
                  <!-- Dịch vụ cụ thể -->
                  <div class="col-md-6">
                    <label for="service_detail" class="form-label">Dịch vụ cụ thể <span class="text-danger">*</span></label>
                    <select class="form-select" id="service_detail" name="service_id" required>
                      <option value="" selected disabled>-- Vui lòng chọn loại dịch vụ trước --</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- 3. Booking Time Section -->
              <div class="mb-4">
                <h5 class="mb-3 fw-semibold">Thời gian đặt lịch</h5>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="date" class="form-label">Ngày hẹn <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="date" name="date" required min="<?= date('Y-m-d') ?>">
                  </div>
                  <div class="col-md-6">
                    <label for="timeSlot" class="form-label">Khung giờ <span class="text-danger">*</span></label>
                    <select class="form-select" id="timeSlot" name="time_slot" required>
                      <option value="" selected disabled>-- Chọn khung giờ --</option>
                      <option value="09:00">09:00 - 10:00</option>
                      <option value="10:00">10:00 - 11:00</option>
                      <option value="11:00">11:00 - 12:00</option>
                      <option value="13:00">13:00 - 14:00</option>
                      <option value="14:00">14:00 - 15:00</option>
                      <option value="15:00">15:00 - 16:00</option>
                      <option value="16:00">16:00 - 17:00</option>
                      <option value="17:00">17:00 - 18:00</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- 4. Payment Method Section -->
              <div class="mb-4">
                <h5 class="mb-3 fw-semibold">Phương thức thanh toán</h5>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="payment_method" id="payment_cod" value="cod" checked>
                  <label class="form-check-label" for="payment_cod">
                    Thanh toán khi đến nơi
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="payment_method" id="payment_online" value="online" disabled>
                  <label class="form-check-label text-muted" for="payment_online">
                    Chuyển khoản / Momo / VNPay (sắp ra mắt)
                  </label>
                </div>
              </div>
              <!-- 5. Notes Section -->
              <div class="mb-4">
                <h5 class="mb-3 fw-semibold">Ghi chú</h5>
                <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Yêu cầu thêm, dị ứng, v.v. (nếu có)"></textarea>
              </div>
              <!-- 6. Submit Button -->
              <div class="d-grid">
                <button type="submit" class="btn-cta btn-lg fw-bold">Xác nhận đặt lịch</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Spa Booking Form End -->
    
    <script>
      // Dữ liệu dịch vụ từ PHP sang JavaScript
      const serviceList = <?= json_encode($serviceList) ?>;

      const categorySelect = document.getElementById('service_category');
      const serviceSelect = document.getElementById('service_detail');

      categorySelect.addEventListener('change', function () {
        const selectedCategoryId = this.value;

        // Xóa dịch vụ cũ
        serviceSelect.innerHTML = '<option value="" disabled selected>-- Chọn dịch vụ --</option>';

        // Lọc và hiển thị dịch vụ mới
        serviceList.forEach(service => {
          if (service.category_id == selectedCategoryId) {
            const option = document.createElement('option');
            option.value = service.id;
            option.textContent = service.title;
            serviceSelect.appendChild(option);
          }
        });

        serviceSelect.disabled = false;
      });
    </script>

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
