<?php include "../includes/connect.php"; ?>

<?php
// Lấy danh sách danh mục
$categories = $conn->query("SELECT * FROM service_categories");

// Lấy category_id để lọc (nếu có)
$filter_id = isset($_GET['category']) ? intval($_GET['category']) : 0;

// Truy vấn dịch vụ
$sql = "SELECT s.*, c.category_name 
        FROM services s 
        JOIN service_categories c ON s.category_id = c.id";
if ($filter_id > 0) {
    $sql .= " WHERE s.category_id = $filter_id";
}
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <title>Dịch vụ - Admin</title>
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
    <style>
    .service-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
  </style>
  </head>
<body>
  <!-- Top Navbar -->
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
              <a class="nav-link" href="#!">Quản lý dịch vụ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./appointments.php">Lịch hẹn</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Main Content -->
      <main class="col-lg-10 offset-lg-2 col-md-9 offset-md-3 ms-sm-auto px-md-4 main-content">
        <section class="container py-5 mt-5">
          <h2 class="mb-4">Danh sách dịch vụ</h2>

          <!-- Bộ lọc và nút thêm nằm cùng 1 hàng -->
          <div class="row mb-4 align-items-center">
            <!-- Bộ lọc -->
            <div class="col-md-6 d-flex align-items-center">
              <form method="GET" class="d-flex align-items-center w-100">
                <label for="category" class="form-label me-2 mb-0">Lọc theo danh mục:</label>
                <select name="category" id="category" class="form-select w-auto" onchange="this.form.submit()">
                  <option value="0">Tất cả</option>
                  <?php while ($cat = $categories->fetch_assoc()): ?>
                    <option value="<?= $cat['id'] ?>" <?= $filter_id == $cat['id'] ? 'selected' : '' ?>>
                      <?= htmlspecialchars($cat['category_name']) ?>
                    </option>
                  <?php endwhile; ?>
                </select>
              </form>
            </div>

            <!-- Nút Thêm dịch vụ -->
            <div class="col-md-6 text-md-end mt-2 mt-md-0">
              <button type="button" class="btn btn-warning btn-color" data-bs-toggle="modal" data-bs-target="#addServiceModal">
                + Thêm dịch vụ
              </button>
            </div>
          </div>

          <!-- Modal thêm dịch vụ -->
          <div class="modal fade" id="addServiceModal" tabindex="-1">
            <div class="modal-dialog">
              <form class="modal-content" method="POST" enctype="multipart/form-data">
                <div class="modal-header btn-color">
                  <h5 class="modal-title">Thêm dịch vụ</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">Tên dịch vụ</label>
                    <input type="text" class="form-control" name="title" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea class="form-control" name="description" rows="3" required></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Giá (VNĐ)</label>
                    <input type="number" step="0.01" class="form-control" name="price" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <select class="form-select" name="category_id" required>
                      <option value="" disabled selected>-- Chọn danh mục --</option>
                      <?php
                        $res = $conn->query("SELECT * FROM service_categories");
                        while ($cat = $res->fetch_assoc()):
                      ?>
                        <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['category_name']) ?></option>
                      <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" name="image" accept="image/*" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-warning btn-color">Thêm</button>
                </div>
              </form>
            </div>
          </div>

          <!-- Xử lý thêm dịch vụ -->
          <?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $category_id = $_POST['category_id'];

            $targetDir = "../assets/images/services/";
            $fileName = basename($_FILES["image"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

            $stmt = $conn->prepare("INSERT INTO services (category_id, title, image_path, description, price) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("isssd", $category_id, $title, $fileName, $description, $price);
            $stmt->execute();
            echo "<div class='alert alert-success mt-3'>Thêm dịch vụ thành công!</div>";
          }
          ?>

          <!-- Danh sách dịch vụ -->
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php if ($result && $result->num_rows > 0): ?>
              <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col">
                  <div class="card service-card h-100 shadow-sm">
                    <img src="../assets/images/services/<?= htmlspecialchars($row['image_path']) ?>" class="card-img-top" alt="<?= htmlspecialchars($row['title']) ?>">
                    <div class="card-body">
                      <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
                      <p class="card-text"><?= mb_strimwidth(strip_tags($row['description']), 0, 100, "...") ?></p>
                      <p class="fw-bold text-color"><?= number_format($row['price'], 0, ',', '.') ?> VNĐ</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                      <form method="POST" action="./services-delete.php" onsubmit="return confirm('Bạn có chắc muốn xoá dịch vụ này?');">
                        <input type="hidden" name="service_id" value="<?= $row['id'] ?>">
                        <button class="btn btn-color btn-sm w-100">Xoá</button>
                      </form>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php else: ?>
              <div class="col-12 text-muted">Không có dịch vụ nào phù hợp.</div>
            <?php endif; ?>
          </div>
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
