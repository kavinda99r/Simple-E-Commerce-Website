<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: MainPage.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>


    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            /* Prevent scrolling */
        }

        .section {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-height: 100vh;
            /* Full height of viewport */
        }

        .main {
            width: 700px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 120px;
        }

        .content {
            display: grid;
            grid-template-columns: repeat(auto-fit, 300px);
            gap: 10px;
            background: white;
            padding: 50px 50px;
            margin-top: 20px;
            margin-right: 30px;
            margin-left: 30px;
            opacity: 100%;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .btn-choice {
            width: 100%;
            text-align: center;
            font-weight: 400;
            font-size: 18px;
            padding: 15px 25px;
            outline: none;
            border: 1px solid black;
            background: none;
            color: black;
            transition: 0.2s;
            border-radius: 5px;
            cursor: pointer;
        }

        i {
            margin-right: 10px;
        }

        .btn-choice:hover {
            background: black;
            color: white;
        }

        .btn-choice:active {
            background: rgb(251, 196, 94);
            border: 1px solid rgb(251, 196, 94);
        }

        /*.back-card{
            background: white;
            padding: 15% 15%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            position: absolute;
            opacity: 60%;
        }*/
        .heading {
            background: red;
        }

        h1 {
            color: rgb(28, 28, 28);
            text-align: center;
            margin-bottom: 15px;
            font-size: 60px;
        }

        .content-p {
            color: rgb(28, 28, 28);
            text-align: center;
            margin-bottom: 15px;
        }

        span {
            color: orange;
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


        h2 {
            text-align: center;
            font-size: 40px;
        }

        footer {
            background-color: #16161d;
            text-align: center;
            padding: 10px 20px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            bottom: 0;
            width: 100%;
            color: white;
        }
    </style>
</head>

<body>
    <div class="nav">
        <div>
            <p style="font-size: 22px; font-weight:600;">💻<span style="color: orange;">Tech</span>TradeZone.</p>
        </div>

        <div class="right-links">
            <!-- Home Button -->
            <button class="nav-btn" onclick="location.href='MainPage.php'">Logout</button>
        </div>
    </div>

    <div class="section">

        <div class="main">
            <div class="content-text">
                <h2>Welcome to <span>TechTradeZone</span></h2>
                <p class="content-p">Explore cutting-edge gadgets and accessories tailored for your needs. Shop smart, shop with confidence, and unlock the future of tech shopping today.</p>

            </div>

            <div class="content">
                <button class="btn-choice" onclick="gotoLink(this)" value="Cart1.php"><i class="fa-solid fa-mobile-screen"></i>Smart Phones</button>
                <button class="btn-choice" onclick="gotoLink(this)" value="Cart2.php"><i class="fa-solid fa-laptop"></i>Laptops</button>
                <button class="btn-choice" onclick="gotoLink(this)" value="Cart3.php"><i class="fa-solid fa-computer"></i>Graphic Cards</button>
                <button class="btn-choice" onclick="gotoLink(this)" value="Cart4.php"><i class="fa-solid fa-keyboard"></i>Other Accessories</button>
            </div>
        </div>


    </div>


    <footer>
        <p>&copy; <?php echo date("Y"); ?> TechTradeZone. All Rights Reserved.</p>
    </footer>

</body>

<script>
    function gotoLink(link) {
        console.log(link.value);
        location.href = link.value;
    }
</script>

</html>