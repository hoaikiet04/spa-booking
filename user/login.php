<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      html,
      body {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
      }

      .background-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-image: url("../assets/images/background-signin.jpg");
        background-size: cover;
        background-position: center;
        filter: blur(6px) brightness(0.9);
        z-index: 0;
      }

      .login-container {
        position: relative;
        z-index: 1;
        max-width: 400px;
        margin: auto;
        margin-top: 80px;
        padding: 40px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      }

      .login-container h2 {
        text-align: center;
        margin-bottom: 30px;
      }

      .form-control {
        border-radius: 10px;
      }

      .btn-login {
        border-radius: 10px;
        background-color: #e6a756;
        color: white;
      }

      .btn-login:hover {
        background-color: rgba(234, 189, 131, 0.95);
      }

      .register-text {
        text-align: center;
        margin-top: 20px;
      }

      .register-text a {
        text-decoration: none;
        color: #e6a756;
      }

      .register-text a:hover {
        text-decoration: underline;
      }
    </style>

  </head>
  <body>
    <!-- Lớp nền có hiệu ứng blur -->
    <div class="background-wrapper"></div>

    <!-- Form login -->
    <div class="login-container">
      <h2>ĐĂNG NHẬP</h2>
      <form method="POST" action="./login_submit.php">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn ..." required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu ..." required>
        </div>
        <button type="submit" class="btn btn-login w-100">Đăng nhập</button>
      </form>
      <div class="register-text">
        Bạn chưa có tài khoản? <a href="./register.php">Đăng ký</a>
      </div>
    </div>
  </body>
</html>
