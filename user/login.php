<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng nhập</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      background: url('../assets/images/background-signin.jpg') no-repeat center center fixed;
      background-size: cover;
    }

    .blur-background {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      backdrop-filter: blur(6px);
      background-color: rgba(255, 255, 255, 0.2);
      z-index: 0;
    }

    .login-container {
      position: relative;
      z-index: 1;
      max-width: 400px;
      margin: auto;
      padding: 40px;
      margin-top: 80px;
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
      background-color:#e6a756;
      color: white;
    }

    .btn-login:hover {
      background-color:rgba(234, 189, 131, 0.95);
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
  <div class="blur-background"></div>

  <div class="login-container">
    <h2>ĐĂNG NHẬP</h2>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn ...">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="password" placeholder="Nhập mật  khẩu ...">
      </div>
      <button type="submit" class="btn btn-login w-100">Đăng nhập</button>
    </form>
    <div class="register-text">
      Bạn chưa có tài khoản? <a href="./register.php">Đăng ký</a>
    </div>
  </div>
</body>
</html>
