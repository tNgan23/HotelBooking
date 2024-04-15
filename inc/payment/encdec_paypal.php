<?php
require_once 'config_paypal.php';

// Hàm mã hóa thông tin sử dụng base64
function encrypt_data($data) {
    return base64_encode($data);
}

// Hàm giải mã thông tin đã mã hóa bằng base64
function decrypt_data($encoded_data) {
    return base64_decode($encoded_data);
}
?>
