<?php
session_start();
if (empty($_SESSION["shopping_cart"])) {
    echo '<script>alert("Your cart is empty! Redirecting to home.")</script>';
    echo '<script>window.location="home.php"</script>';
    exit();
}

// Calculate total price
$total = 0;
foreach ($_SESSION["shopping_cart"] as $key => $value) {
    $total += $value["product_quantity"] * $value["product_price"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
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
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: orange;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: darkorange;
        }

        .btn-back {
            background-color: gray;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
        }

        .btn-back:hover {
            background-color: darkgray;
        }

        h2 {
            color: orange;
            font-weight: 600;
        }

        .total-price {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
            color: green;
        }

        .nav {
            background-color: #f8f9fa;
            display: flex;
            justify-content: space-between;
            /* Align items horizontally */
            align-items: center;
            /* Align items vertically */
            padding: 0 20px;
            /* Add padding for spacing on left and right */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 70px;
            /* Fixed height for the navigation bar */
        }

        .logo p {
            font-size: 26px;
            font-weight: 600;
            margin: 0;
            /* Remove default margin */
            color: orange;
        }

        .right-links .btn {
            color: white;
            background-color: orange;
            padding: 10px 20px;
            /* Padding inside the button */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .right-links .btn:hover {
            background-color: darkorange;

        }

        .nav-btn {
            font-size: 13px;
            color: white;
            background-color: #7e7e7e;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: .3s;
        }

        .nav-btn:hover {
            background-color: #565656;
        }

        footer {
            background-color: #16161d;
            text-align: center;
            padding: 10px 20px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            color: white;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <div class="nav">
        <div>
            <p style="font-size: 22px; font-weight:600; margin-top:15px;">💻<span style="color: orange;">Tech</span>TradeZone.</p>
        </div>

        <!-- Back Button -->
        <div>
            <button class="nav-btn" onclick="history.back()">Back to Cart</button>
        </div>
    </div>
    <div class="container">

        <h2 class="text-center">Payment Details</h2>



        <!-- Total Price Display -->
        <div class="total-price text-center">
            Total Price: $<?php echo number_format($total, 2); ?>
        </div>

        <form action="payment_success.php" method="post" onsubmit="return validateForm()">
            <!-- Name on Card -->
            <div class="form-group">
                <label for="name_on_card">Name on Card</label>
                <input type="text" class="form-control" id="name_on_card" name="name_on_card" placeholder="John Doe" required>
            </div>

            <!-- Card Number -->
            <div class="form-group">
                <label for="card_number">Card Number</label>
                <input type="text" class="form-control" id="card_number" name="card_number" maxlength="16" placeholder="1234 5678 9012 3456" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
            </div>

            <!-- Expiry Date -->
            <div class="form-group">
                <label for="expiry_date">Expiration Date (MM/YY)</label>
                <input type="text" class="form-control" id="expiry_date" name="expiry_date" placeholder="MM/YY" maxlength="5" oninput="formatExpiry(this)" required>
            </div>

            <!-- CVV -->
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" maxlength="3" placeholder="123" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                <small class="form-text text-muted">Must be 3 digits.</small>
            </div>

            <!-- Billing Address -->
            <div class="form-group">
                <label for="billing_address">Billing Address</label>
                <input type="text" class="form-control" id="billing_address" name="billing_address" placeholder="1234 Main St" required>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Submit Payment">
            </div>
        </form>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> TechTradeZone. All Rights Reserved.</p>
    </footer>
    <script>
        function formatExpiry(input) {
            // Remove any non-digit characters
            let value = input.value.replace(/\D/g, '');

            // Format as MM/YY
            if (value.length > 2) {
                value = value.slice(0, 2) + '/' + value.slice(2, 4);
            }

            // Set the formatted value back to the input
            input.value = value;

            // Automatically focus on next input when length reaches 5 (MM/YY)
            if (value.length === 5) {
                document.getElementById('cvv').focus();
            }
        }

        function validateForm() {
            const cvv = document.getElementById('cvv').value;
            if (cvv.length !== 3) {
                alert("CVV must be exactly 3 digits.");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</body>

</html>