<?php
session_start();
$db_name = "shopping";
$connection = mysqli_connect("localhost", "root", "", $db_name);

if (isset($_POST["add"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            echo '<script>window.location="Cart1.php"</script>';
        } else {
            echo '<script>alert("Product is already in  the cart")</script>';
            echo '<script>window.location="Cart1.php"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'product_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'product_quantity' => $_POST["quantity"],
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Product has been removed")</script>';
                echo '<script>window.location="Cart1.php"</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: "poppins", sans-serif;

        }

        body {
            background: #e4e9f7;
        }

        .container {
            margin-top: 20px;
            margin-bottom: 20px;
            background: white;
            padding-top: 20px;
        }

        .product {
            border: 1px solid #eaeaec;
            margin: 2px 2px 8px 2px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }

        table,
        th,
        tr {
            text-align: center;
            background: white;

        }

        table {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }

        .title2 {
            margin-top: 25px;
            margin-bottom: 25px;
            text-align: center;
            color: white;
            background-color: orange;
            padding: 2%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);

        }

        .main-heading {
            display: flex;
            align-items: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
            padding: 20px;
            justify-content: space-between;
            border-radius: 8px;
        }

        h2 {


            color: orange;
            font-weight: 600;
            background-color: white;

        }

        th {
            background-color: #d4d4d4;

        }

        button {
            text-align: left;
            font-weight: 400;
            font-size: 18px;
            padding: 5px 20px;
            outline: none;
            border: 1px solid black;
            background: none;
            color: black;
            transition: 0.2s;
            border-radius: 5px;

        }

        i {
            margin-right: 10px;
        }

        button:hover {
            background: black;
            color: white;
        }

        button:active {
            background: rgb(251, 196, 94);
            border: 1px solid rgb(251, 196, 94);
        }

        .product {
            background: white;
            padding: 20px 20px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
            margin: 10px 20px;
            justify-content: space-between;
            height: 500px;

        }

        .product img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .section {
            width: 33.33%;
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
            background-color: orange;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: .3s;
        }

        .nav-btn:hover {
            background-color: darkorange;
        }

        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 20px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="nav">
        <div>
            <p style="font-size: 22px; font-weight:600; margin-top:15px;">💻<span style="color: orange;">Tech</span>TradeZone.</p>
        </div>

        <div class="right-links">
            <!-- Home Button -->
            <button class="nav-btn" onclick="location.href='home.php'">Back</button>
        </div>
    </div>

    <div class="container" style="width: 100%">
        <div class="main-heading">

            <h2>Shopping Cart <i class="fa-solid fa-cart-shopping"></i> </h2>

        </div>

        <?php
        $query = "select * from product order by id asc";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <div class="section" style="float: left;">
                    <form method="post" action="Cart1.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div class="product">
                            <img src="<?php echo $row["image"]; ?>" width="190px" height="200px" class="img-responsive">
                            <h5 class="text-info"><?php echo $row["description"]; ?></h5>
                            <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["description"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <input type="submit" name="add" style="margin-top: 5px; background: orange; border:none;" class="btn btn-success" value="Add to cart">
                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Product Description</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>
                <?php
                if (!empty($_SESSION["shopping_cart"])) {
                    $total = 0;
                    foreach ($_SESSION["shopping_cart"] as $key => $value) {
                ?>
                        <tr>
                            <td><?php echo $value["product_name"]; ?></td>
                            <td><?php echo $value["product_quantity"]; ?></td>
                            <td><?php echo $value["product_price"]; ?></td>
                            <td><?php echo number_format($value["product_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="Cart1.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>
                        </tr>
                    <?php
                        $total = $total + ($value["product_quantity"] * $value["product_price"]);
                    }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right"><?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <?php
        // Check if the shopping cart is not empty before showing the "Proceed to Checkout" button
        if (!empty($_SESSION["shopping_cart"])) {
        ?>
            <!-- Proceed to Checkout Button -->
            <div style="text-align: right; margin-top: 20px; padding-bottom: 20px;">

                <div class="content">
                    <button class="btn-choice" onclick="gotoLink(this)" value="payment.php" style="background-color: orange; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Proceed to Checkout</button>
                </div>

            <?php
        }
            ?>

            </div>



</body>

<script>
    function gotoLink(link) {
        console.log(link.value);
        location.href = link.value;
    }
</script>

</html>