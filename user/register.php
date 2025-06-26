<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Đăng ký</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body, html {
      height: 100%;
      margin: 0;
      background: url('../assets/images/background-signup.jpg') no-repeat center center fixed;
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

    .signup-container {
      position: relative;
      z-index: 1;
      max-width: 450px;
      margin: auto;
      padding: 40px;
      margin-top: 80px;
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
      background-color:rgb(245, 191, 120);
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
  <div class="blur-background"></div>

  <div class="signup-container">
    <h2>ĐĂNG KÝ</h2>
    <form>
      <div class="mb-3">
        <label for="fullname" class="form-label">Họ và Tên</label>
        <input type="text" class="form-control" id="fullname" placeholder="Ví dụ: Nguyễn Văn A" />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Ví dụ: nguyenvana@email.com" />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu ..." />
      </div>
      <button type="submit" class="btn btn-signup w-100">Đăng ký</button>
    </form>
    <div class="login-text">
      Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a>
    </div>
  </div>
</body>
</html>
