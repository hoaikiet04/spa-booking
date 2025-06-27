<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Đăng ký</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
    }

    /* Lớp nền riêng biệt chứa ảnh và hiệu ứng blur */
    .background-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-image: url('../assets/images/background-signup.jpg');
      background-size: cover;
      background-position: center;
      filter: blur(6px) brightness(0.9);
      z-index: 0;
    }

    /* Căn giữa form đăng ký */
    body {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .signup-container {
      position: relative;
      z-index: 1;
      width: 100%;
      max-width: 450px;
      padding: 40px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .signup-container h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-control {
      border-radius: 10px;
    }

    .btn-signup {
      border-radius: 10px;
      background-color: rgb(245, 191, 120);
      color: white;
    }

    .btn-signup:hover {
      background-color: #e6a756;
    }

    .login-text {
      text-align: center;
      margin-top: 20px;
    }

    .login-text a {
      text-decoration: none;
      color: #e6a756;
    }

    .login-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <!-- Nền mờ -->
  <div class="background-wrapper"></div>

  <!-- Form đăng ký -->
  <div class="signup-container">
    <h2>ĐĂNG KÝ</h2>
    <form action="register_submit.php" method="POST">
      <div class="mb-3">
        <label for="fullname" class="form-label">Họ và Tên</label>
        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Ví dụ: Nguyễn Văn A" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Ví dụ: nguyenvana@gmail.com" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Vui lòng nhập mật khẩu" required />
      </div>
      <button type="submit" class="btn btn-signup w-100">Đăng ký</button>
    </form>

    <div class="login-text">
      Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a>
    </div>
  </div>
</body>
</html>
