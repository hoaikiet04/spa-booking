<?php
include '../includes/connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = intval($_POST['user_id']);
    $redirect = isset($_POST['redirect']) ? $_POST['redirect'] : './customers.php';

    // Kiểm tra xem user có tồn tại và không phải là admin
    $stmt = $conn->prepare("SELECT role FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $row = $result->fetch_assoc()) {
        if ($row['role'] === 'admin') {
            header("Location: $redirect?error=admin_cannot_be_deleted");
            exit();
        }

        // Xoá người dùng
        $delete = $conn->prepare("DELETE FROM users WHERE id = ?");
        $delete->bind_param("i", $user_id);
        $delete->execute();
        $delete->close();

        header("Location: $redirect?deleted=success");
        exit();
    } else {
        header("Location: $redirect?error=user_not_found");
        exit();
    }
} else {
    header("Location: ./customers.php?error=invalid_request");
    exit();
}
