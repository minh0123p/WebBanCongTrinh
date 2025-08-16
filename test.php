<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (mail("hhminh2021@gmail.com", "Test Mail", "Đây là nội dung thử", "From: test@example.com")) {
    echo "✅ Gửi email thành công!";
} else {
    echo "❌ Gửi không được.";
}
?>
