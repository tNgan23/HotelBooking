<?php
// Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "paypal";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

?>
