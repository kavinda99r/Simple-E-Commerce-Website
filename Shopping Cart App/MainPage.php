<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>

    <style>
        footer {
            color: white;
            text-align: center;
            padding: 10px 20px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            background-color: #16161d;
        }

        /* Navigation bar styles */
        .nav {
            background-color: #f8f9fa;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 70px;
        }

        .logo p {
            font-size: 26px;
            font-weight: 600;
            margin: 0;
            color: orange;
        }

        .right-links .btn {
            color: white;
            background-color: orange;
            padding: 10px 20px;
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

        .message {
            color: red;
            /* Change to red for error messages */
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="nav">
        <div>
            <p style="font-size: 22px; font-weight:600;">💻<span style="color: orange;">Tech</span>TradeZone.</p>
        </div>

        <div class="right-links">
            <button class="nav-btn" onclick="location.href='index.php'">Home Page</button>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="box form-box">
                <?php
                include("php/config.php");
                $loginError = ""; // Variable to hold the login error message

                if (isset($_POST['submit'])) {
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = $_POST['password']; // Keep the raw password for verification

                    // Fetch user data
                    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email'") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    // Check if user exists and verify password
                    if ($row && password_verify($password, $row['Password'])) {
                        // Password is correct, set session variables
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];

                        header("Location: home.php"); // Redirect to home page after successful login
                        exit();
                    } else {
                        $loginError = "Wrong Username or Password"; // Set the error message
                    }
                }
                ?>

                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login" style="color: white; background: orange;" required>
                    </div>

                    <div class="links">
                        Don't have an account? <a href="register.php" style="color: orange; text-decoration: none;">Sign Up Now</a>
                    </div>

                    <!-- Display error message if there is one -->
                    <?php if (!empty($loginError)): ?>
                        <div class="message">
                            <p><?php echo $loginError; ?></p>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> TechTradeZone. All Rights Reserved.</p>
        </footer>

</body>

</html>