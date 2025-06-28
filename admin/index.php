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
    <!-- Top Navbar -->
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
                    <a class="nav-link" href="./customers.php">Quản lý người dùng</a>
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
                <h1 class="h3 mb-4">Admin Dashboard</h1>
                <!-- list ảnh banner -->
                <section class="banner__image">
                    <img
                        src="../assets/images/bg-banner.jpg"
                        alt="bg1"
                        class="custom-banner slide-show"
                    />
                    <img
                        src="../assets/images/bg-banner2.jpg"
                        alt="bg2"
                        class="custom-banner slide-show"
                    />
                    <img
                        src="../assets/images/bg-banner3.jpg"
                        alt="bg3"
                        class="custom-banner slide-show"
                    />
                    <img
                        src="../assets/images/bg-banner4.jpg"
                        alt="bg4"
                        class="custom-banner slide-show"
                    />
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
