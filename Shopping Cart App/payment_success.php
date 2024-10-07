<?php
session_start();
// Clear the shopping cart after payment
unset($_SESSION["shopping_cart"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #e4e9f7;
            font-family: "poppins", sans-serif;
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: orange;
            font-weight: 600;
        }

        .btn {
            background-color: orange;
            color: white;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: darkorange;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>✅</h1>
        <h2>Payment Successful!</h2>
        <p>Thank you for your purchase. Your payment has been processed successfully.</p>

        <h4>Delivery Information</h4>
        <p>Your order is on the way and will be delivered to you shortly.</p>
        <p>If you have any questions, please contact our support team.</p>

        <!-- Optional: Add a button to go back to home or shop -->
        <div>
            <a href="home.php" class="btn">Return to Home</a>
        </div>
    </div>
</body>

</html>