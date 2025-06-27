<?php include "../includes/connect.php";?>
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
    <!-- Navbar/Header -->
    <?php session_start(); ?>
    <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top px-3 px-lg-5 py-2">
        <div class="container-fluid">
          <!-- Logo -->
          <a class="navbar-brand d-flex align-items-center" href="./index.php">
            <img src="../assets/images/logo_removebg.png" alt="Logo" style="height: 40px; margin-right: 10px;">
            <span class="fw-bold text-warning fs-4">Spa Beauty</span>
          </a>

          <!-- Toggle Mobile -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Menu -->
          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
            <ul class="navbar-nav align-items-center">  
              <!-- Xin chào -->
              <li class="nav-item px-2 text-secondary small d-none d-lg-block">
                <?php if (isset($_SESSION['user_fullname'])): ?>
                  Xin chào, <strong><?= htmlspecialchars($_SESSION['user_fullname']) ?></strong>
                <?php else: ?>
                  Xin chào!
                <?php endif; ?>
              </li>

              <!-- Avatar Dropdown -->
              <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-circle-user fa-lg"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                  <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a class="dropdown-item" href="#!">Tài khoản của tôi</a></li>
                    <?php if ($_SESSION['user_role'] === 'admin'): ?>
                      <li><a class="dropdown-item" href="#!">Trang quản trị</a></li>
                    <?php endif; ?>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="../user/logout.php">Đăng xuất</a></li>
                  <?php else: ?>
                    <li><a class="dropdown-item" href="#!">Đăng nhập</a></li>
                    <li><a class="dropdown-item" href="#!">Đăng ký</a></li>
                  <?php endif; ?>
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
                <a class="nav-link" href="./customers.php">Quản lý người dùng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./services.php">Quản lý dịch vụ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Lịch hẹn</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Main Content -->
        <main class="col-lg-10 offset-lg-2 col-md-9 offset-md-3 ms-sm-auto px-md-4 main-content">
          <section class="container mt-5">
              <h2 class="mb-4">Danh sách lịch hẹn</h2>
              <table class="table table-bordered table-hover text-center align-middle">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Dịch vụ</th>
                    <th>Ngày & Giờ</th>
                    <th>Ghi chú</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql = "
                    SELECT 
                      b.id, 
                      b.full_name, 
                      b.phone, 
                      s.title AS service_title, 
                      b.booking_date, 
                      b.booking_time,
                      b.note -- thêm dòng này
                    FROM bookings b
                    JOIN services s ON b.service_id = s.id
                    ORDER BY b.booking_date DESC, b.booking_time DESC
                    ";
                    $result = $conn->query($sql);
                    $i = 1;
                    if ($result && $result->num_rows > 0):
                      while ($row = $result->fetch_assoc()):
                  ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= htmlspecialchars($row['full_name']) ?></td>
                    <td><?= htmlspecialchars($row['phone']) ?></td>
                    <td><?= htmlspecialchars($row['service_title']) ?></td>
                    <td><?= date('d/m/Y', strtotime($row['booking_date'])) . ' - ' . date('H:i', strtotime($row['booking_time'])) ?></td>
                    <td><?= htmlspecialchars($row['note']) ?></td>
                  </tr>
                  <?php endwhile; else: ?>
                  <tr>
                    <td colspan="6">Không có lịch hẹn nào</td>
                  </tr>
                  <?php endif; ?>
                </tbody>
              </table>
          </section>
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
