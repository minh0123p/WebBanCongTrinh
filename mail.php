<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ form
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Email đích
    $to = "hhminh2021@gmail.com";

    // Tiêu đề và nội dung email
    $subject = "Liên hệ từ website - $name";
    $body = "Họ tên: $name\nEmail: $email\n\nNội dung:\n$message";

    // Header
    $headers = "From: $email";

    // Gửi email
    if (mail($to, $subject, $body, $headers)) {
        echo "Gửi email thành công. Cảm ơn bạn đã liên hệ!";
    } else {
        echo "Có lỗi xảy ra khi gửi email.";
    }
} else {
    echo "Truy cập không hợp lệ.";
}
?>

