<?php
// CHỈ session_start nếu chưa có
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ngăn không cho chạy file này trực tiếp trên trình duyệt
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
    header("Location: /spa-booking/index.php"); // Đường dẫn tuyệt đối
    exit();
}

// Nếu chưa đăng nhập
if (!isset($_SESSION['user_id'])) {
    ?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
      <meta charset="UTF-8">
      <title>Yêu cầu đăng nhập</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
        body {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          background-color: #f8f9fa;
        }
        .alert-box {
          padding: 2rem;
          background: white;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0,0,0,0.1);
          text-align: center;
        }
        .btn-color {
          background-color: #ecc77e !important;
          color: #fff !important;
        }
        .text-color {
          color: #ecc77e !important;
        }
      </style>
    </head>
    <body>
      <div class="alert-box">
        <h4 class="mb-3 text-color">Bạn chưa đăng nhập!</h4>
        <p>Vui lòng đăng nhập để sử dụng chức năng đặt lịch.</p>
        <div class="d-flex justify-content-center gap-3 mt-4">
          <a href="/spa-booking/user/login.php" class="btn btn-color">Đăng nhập</a>
          <a href="/spa-booking/index.php" class="btn btn-secondary">Về trang chủ</a>
        </div>
      </div>
    </body>
    </html>
    <?php
    exit(); // Không chạy tiếp trang gốc
}
