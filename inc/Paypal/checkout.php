<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Thanh toán với PayPal</h1>
    <form action="process_payment.php" method="POST">
        <label for="days">Số ngày đặt phòng:</label>
        <input type="text" id="days" name="days"><br>
        <label for="payment">Tổng số tiền:</label>
        <input type="text" id="payment" name="payment"><br>
        <button type="submit">Hủy Thanh toán</button>
    </form>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AU3g2DuSRfnmlRNKZLB2OIxw6o45I-PyLmBPOGIIk0as8tEaPtto2lh2sRPLNDgWjZi_SWWcmd72Y0g6"></script>
    <script>
        // Tạo nút thanh toán PayPal
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            currency_code: 'USD',
                            value: document.getElementById('payment').value
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Thanh toán thành công! ID đơn hàng: ' + details.id);
                    // Chuyển hướng đến trang thành công sau khi thanh toán
                    window.location.href = 'success.php';
                });
            }
        }).render('body');
    </script>

</body>
</html>
