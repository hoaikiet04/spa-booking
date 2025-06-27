<?php
require_once './includes/connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $category_id = $_POST['category_id'] ?? '';
    $service_id = $_POST['service_id'] ?? '';
    $booking_date = $_POST['date'] ?? '';
    $booking_time = $_POST['time_slot'] ?? '';
    $payment_method = $_POST['payment_method'] ?? 'cod';
    $note = $_POST['notes'] ?? '';

    // Map giá trị payment_method cho đúng với ENUM
    if ($payment_method === 'cod') {
        $payment_method = 'pay_on_spot';
    } elseif ($payment_method === 'online') {
        $payment_method = 'online';
    }

    // Nếu có đăng nhập, lấy user_id, không thì để NULL
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    $stmt = $conn->prepare("INSERT INTO bookings (user_id, full_name, phone, email, category_id, service_id, booking_date, booking_time, payment_method, note) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "isssiissss",
        $user_id,
        $full_name,
        $phone,
        $email,
        $category_id,
        $service_id,
        $booking_date,
        $booking_time,
        $payment_method,
        $note
    );

    if ($stmt->execute()) {
        $_SESSION['success'] = true;
        header("Location: booking.php");
        exit;
    } else {
        $_SESSION['error'] = "Lỗi khi lưu dữ liệu: " . $conn->error;
        $_SESSION['booking_data'] = $_POST;
    }
    $stmt->close();
    header("Location: booking.php");
    exit;
} else {
    header("Location: booking.php");
    exit;
}