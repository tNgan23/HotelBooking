<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        /* CSS để trang trí */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        h2 {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Successful!</h2>
        <?php if(isset($_POST['room_name']) && isset($_POST['amount']) && isset($_POST['email'])): ?>
            <p>Thank you for booking <?php echo $_POST['room_name']; ?>. Your payment of $<?php echo $_POST['amount']; ?> has been confirmed.</p>
            <p>A confirmation email has been sent to <?php echo $_POST['email']; ?>.</p>
        <?php else: ?>
            <p>There was an error processing your payment.</p>
        <?php endif; ?>
        <!-- Nội dung khác tùy ý -->
    </div>
</body>
</html>
