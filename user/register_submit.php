<?php
// Bắt đầu session nếu muốn đăng nhập ngay sau khi đăng ký
session_start();

include "../includes/connect.php";

// Lấy dữ liệu từ form
$full_name = trim($_POST['fullname']);
$email = trim($_POST['email']);
$password = $_POST['password'];

// Hash mật khẩu
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Kiểm tra trùng email
$sql_check = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Email đã tồn tại. Vui lòng sử dụng email khác.";
} else {
    // Thêm người dùng mới
    $sql_insert = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bind_param("sss", $full_name, $email, $hashed_password);

    if ($stmt->execute()) {
        // Đăng ký thành công => tự động đăng nhập
        $_SESSION['user_id'] = $stmt->insert_id;
        $_SESSION['user_fullname'] = $full_name;
        $_SESSION['user_role'] = 'user';

        // Chuyển hướng sang trang chủ
        header("Location: ../index.php");
        exit;
    } else {
        echo "Đăng ký thất bại. Vui lòng thử lại.";
    }
}

$conn->close();
?>
