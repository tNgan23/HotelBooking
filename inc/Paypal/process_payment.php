<?php
require 'vendor/autoload.php'; // Include SDK PayPal PHP

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

// Thông tin Sandbox PayPal
$clientId = 'AU3g2DuSRfnmlRNKZLB2OIxw6o45I-PyLmBPOGIIk0as8tEaPtto2lh2sRPLNDgWjZi_SWWcmd72Y0g6';
$clientSecret = 'EBmEybwEEsO8vvmjyY2SpdGEtVh8pt2_Ckp3B4A6Suti3Vw0yWkZQaU8tNO1Rejek594X0ReOTgaQcxz';

// Thiết lập môi trường Sandbox
$environment = new SandboxEnvironment($clientId, $clientSecret);
$client = new PayPalHttpClient($environment);

// Kiểm tra xem người dùng đã hoàn thành thanh toán hay không
if (isset($_GET['token'])) {
    // Nếu có tham số 'token' trong URL, có nghĩa là người dùng đã hoàn thành thanh toán
    // Lấy thông tin đơn hàng từ biểu mẫu thanh toán
    $days = $_POST['number_of_days']; // Số ngày đặt phòng
$payment = $_POST['total_amount']; // Tổng số tiền thanh toán


    // Tạo đơn hàng PayPal
    $request = new OrdersCreateRequest();
    $request->prefer('return=representation');
    $request->body = [
        'intent' => 'CAPTURE',
        'purchase_units' => [[
            'amount' => [
                'currency_code' => 'USD',
                'value' => $payment // Số tiền thanh toán
            ]
        ]]
    ];
    

    try {
        // Gọi API PayPal để tạo thanh toán
        $response = $client->execute($request);
        $orderId = $response->result->id;

        // Lưu thông tin đơn hàng vào cơ sở dữ liệu MySQL
        // CODE LƯU CSDL Ở ĐÂY...
        // Ví dụ: INSERT INTO orders (product, amount, transaction_id) VALUES ('$product', $amount, '$orderId');

        // Chuyển hướng đến trang thành công
        header('Location: success.php');
    } catch (Exception $e) {
        echo 'Lỗi: ' . $e->getMessage();
    }
} else {
    // Nếu không có tham số 'token' trong URL, chuyển hướng đến trang hủy bỏ
    header('Location: cancel.php');
}
?>
