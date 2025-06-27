<?php
session_start();
require_once '../includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password']; // KHÔNG hash ở đây

    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Vui lòng điền đầy đủ thông tin.";
        header("Location: login.php");
        exit();
    }

    // Tìm người dùng theo email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Kiểm tra mật khẩu
        if (password_verify($password, $user['password'])) {
            // Lưu session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_fullname'] = $user['full_name'];
            $_SESSION['user_role'] = $user['role'];

            // Chuyển hướng theo vai trò
            if ($user['role'] === 'admin') {
                header("Location: ../admin/index.php");
            } else {
                header("Location: ../index.php");
            }
            exit();
        }
    }

    // Nếu sai thông tin
    $_SESSION['error'] = "Email hoặc mật khẩu không chính xác.";
    header("Location: login.php");
    exit();
} else {
    header("Location: ./login.php");
    exit();
}
