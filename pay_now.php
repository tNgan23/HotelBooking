<!-- pay_now.php -->
<?php
// Bước 1: Kiểm tra xem có thông tin thanh toán từ form không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Bước 2: Thu thập thông tin thanh toán từ form
    $room_name = $_POST['room_name'];
    $amount = $_POST['amount'];
    $customer_name = $_POST['name'];
    $customer_email = $_POST['email'];
    // Các thông tin khác mà bạn muốn gửi đến PayPal

    // Bước 3: Gửi yêu cầu thanh toán đến PayPal (sử dụng API PayPal hoặc HTML form)
    // Code gửi yêu cầu thanh toán sẽ được thực hiện ở đây
    $response = $client->execute($request);
    $orderId = $response->result->id;
    // Sau khi thanh toán thành công, chuyển hướng người dùng đến trang cảm ơn hoặc trang xác nhận thanh toán
    header("Location: payment_success.php");
    exit;
} else {
    // Nếu không có thông tin thanh toán từ form, chuyển hướng người dùng đến trang rooms.php hoặc trang khác
    header("Location: rooms.php");
    exit;
}
?>
