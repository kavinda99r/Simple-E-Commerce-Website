<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Ensures the body takes at least the full height of the viewport */
        }

        /* Header styles */
        header {
            background-color: #f8f9fa;
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* Ensure vertical alignment */
            padding: 0 20px;
            /* Add some padding to give space on the sides */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 10;
            /* Ensure header is above other content */
            height: 70px;
            /* Set a consistent height for the header */
        }

        header p {
            font-size: 26px;
            font-weight: 600;
            margin: 0;
            /* Remove default margin */
            color: orange;
        }

        .login-btn {
            color: white;
            background-color: orange;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: darkorange;
        }

        /* Full-screen background image */
        .hero {
            position: relative;
            flex-grow: 1;
            /* Allows hero section to expand and fill the remaining space */
            background: url('./Images/background2.jfif') no-repeat center;
            /* Center horizontally */
            background-size: cover;
            background-position: center 60%;
            /* Adjusts the position of the background image */
            overflow: hidden;
        }


        /* Gradient overlay */
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            /* Adjust opacity for desired effect */
        }

        /* Content inside the hero */
        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            top: 50%;
            transform: translateY(80%);
            /* Center vertically */
        }


        .btn {
            background-color: transparent;
            color: orange;
            padding: 15px 30px;
            border: solid 2px orange;
            border-radius: 5px;
            font-size: 18px;
            transition: 0.3s;
            text-decoration: none;
            /* Remove underline from anchor */
            font-weight: 600;
        }

        .btn:hover {
            color: white;
            background-color: darkorange;
            border: solid 2px darkorange;
        }

        /* Topics Section styles */
        .topics {
            background: #f8f9fa;
            padding: 50px 0;
            text-align: center;
            flex-grow: 1;
            /* Ensures topics section expands to fit space */
        }

        .topic {
            margin: 20px 0;
        }

        .topic h3 {
            color: orange;
        }

        /* Footer styles */
        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 20px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            background-color: #16161d;
            color: white;
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
    </style>
</head>

<body>

    <!-- Header Section -->
    <div class="nav">
        <div>
            <p style="font-size: 22px; font-weight:600;">💻<span style="color: orange;">Tech</span>TradeZone.</p>
        </div>

        <div class="right-links">
            <!-- Home Button -->
            <button class="nav-btn" onclick="location.href='MainPage.php'">Login</button>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Shopping Site</h1>
            <p>Your one-stop solution for all your shopping needs. <br>
                Discover the latest technology in laptops, mobile phones, graphic cards, and other accessories. <br>
                Shop now and enjoy exclusive deals and offers!</p>
            <button class="btn" onclick="location.href='MainPage.php'">Get Started</button>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> TechTradeZone. All Rights Reserved.</p>
    </footer>

</body>

</html>