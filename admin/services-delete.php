<?php
include "../includes/connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['service_id'])) {
    $service_id = intval($_POST['service_id']);

    $stmt = $conn->prepare("DELETE FROM services WHERE id = ?");
    $stmt->bind_param("i", $service_id);
    $stmt->execute();
    $stmt->close();
}
header("Location: ./services.php");
exit();
