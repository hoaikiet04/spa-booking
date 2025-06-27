<?php
require_once './includes/connect.php'; 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Lấy dữ liệu từ form
  $full_name = trim($_POST['full_name']);
  $phone = trim($_POST['phone']);
  $email = trim($_POST['email']);
  $category_id = $_POST['service_category'];
  $service_id = $_POST['service_detail'];
  $booking_date = $_POST['date'];
  $booking_time = $_POST['time_slot'];
  $payment_method = $_POST['payment_method'] === 'cod' ? 'pay_on_spot' : 'online';
  $note = trim($_POST['notes']);

  // (Tuỳ chọn) lấy user_id nếu đã login
  $user_id = $_SESSION['user_id'] ?? null;

  // Validate cơ bản
  if (!$full_name || !$phone || !$category_id || !$service_id || !$booking_date || !$booking_time) {
    $_SESSION['error'] = "Vui lòng điền đầy đủ thông tin bắt buộc.";
    header("Location: booking.php");
    exit;
  }

  // Chuẩn bị insert
  $stmt = $conn->prepare("INSERT INTO bookings (user_id, full_name, phone, email, category_id, service_id, booking_date, booking_time, payment_method, note) 
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("isssiiisss", $user_id, $full_name, $phone, $email, $category_id, $service_id, $booking_date, $booking_time, $payment_method, $note);

  if ($stmt->execute()) {
    // Lưu vào session để hiển thị modal xác nhận
    $_SESSION['success'] = true;
    $_SESSION['booking_data'] = [
      'full_name' => $full_name,
      'phone' => $phone,
      'email' => $email,
      'booking_date' => $booking_date,
      'booking_time' => $booking_time,
      'payment_method' => $payment_method,
      'note' => $note
    ];
  } else {
    $_SESSION['error'] = "Có lỗi xảy ra khi lưu đặt lịch. Vui lòng thử lại.";
  }

  header("Location: ./booking.php");
  exit;
}
