<?php
session_start();

// Hủy toàn bộ session
session_unset();
session_destroy();

// Tùy chọn: xóa session cookie nếu cần
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Chuyển hướng về trang đăng nhập hoặc trang chủ
header("Location: ../index.php"); // Hoặc: ./login.php
exit();
?>
