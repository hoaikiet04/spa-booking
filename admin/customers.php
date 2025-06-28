<?php include "../includes/connect.php";?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <title>Khách hàng</title>
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
    <?php include "../includes/header_admin.php" ?>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-lg-2 col-md-3 d-none d-md-block sidebar position-fixed top-0 start-0 h-100">
        <div class="position-sticky">
          <ul class="nav flex-column mt-4">
            <li class="nav-item">
              <a class="nav-link" href="#!">Quản lý người dùng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./services.php">Quản lý dịch vụ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./appointments.php">Lịch hẹn</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Main Content -->
      <main class="col-lg-10 offset-lg-2 col-md-9 offset-md-3 ms-sm-auto px-md-4 main-content">
        <!-- Insert your admin content here -->
        <section class="container mt-5">
          <h2 class="mb-4">Danh sách người dùng</h2>
          <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-warning">
              <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Password</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM users ORDER BY id ASC";
                $result = $conn->query($sql); 
                $i = 1; 
                if ($result->num_rows > 0): 
                  while ($row = $result->fetch_assoc()):
                    if ($row['role'] === 'admin') continue; //
              ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= htmlspecialchars($row['full_name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['password']) ?></td>
                <td>
                  <button
                    type="button"
                    class="btn btn-danger btn-sm btn-delete-user"
                    data-user-id="<?= $row['id'] ?>"
                    data-bs-toggle="modal"
                    data-bs-target="#confirmDeleteModal"
                  >
                    Xoá
                  </button>
                </td>

              </tr>
              <?php endwhile; else: ?>
              <tr>
                <td colspan="5">Không có người dùng nào</td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
          
        </section>
        <!-- Modal xác nhận xoá -->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form method="POST" action="./customers-delete.php">
              <div class="modal-content">
                <div class="modal-header btn-color text-white">
                  <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xoá</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Đóng"></button>
                </div>
                <div class="modal-body">
                  Bạn có chắc chắn muốn xoá người dùng này không?
                </div>
                <input type="hidden" name="user_id" id="deleteUserId">
                <input type="hidden" name="redirect" value="customers.php"> <!-- để chuyển hướng về lại trang -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                  <button type="submit" class="btn btn-color">Xác nhận xoá</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Bundle JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      $('#confirmDeleteModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const userId = button.data('user-id');
        $(this).find('#deleteUserId').val(userId);
      });
    </script>
    <!-- File script riêng -->
    <script src="../assets/js/main-admin.js"></script>
</body>
</html>
