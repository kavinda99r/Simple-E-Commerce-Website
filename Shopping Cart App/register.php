<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
    <style>
        footer {
            background-color: #16161d;
            text-align: center;
            padding: 10px 20px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            color: white;
        }

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
            margin-top: 10px;
            color: green;
            /* Change color as needed */
        }

        .error-message {
            margin-top: 10px;
            color: red;
            /* Color for error messages */
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
    <div class="container">
        <div class="box form-box">

            <?php
            session_start(); // Start the session
            include("php/config.php");

            // Initialize session variables
            if (!isset($_SESSION['successMessage'])) {
                $_SESSION['successMessage'] = "";
            }
            if (!isset($_SESSION['errorMessage'])) {
                $_SESSION['errorMessage'] = "";
            }

            // Handle form submission
            if (isset($_POST['submit'])) {
                // Sanitize inputs
                $username = mysqli_real_escape_string($con, $_POST['username']);
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $age = (int)$_POST['age']; // Cast to integer
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

                // Verifying the unique email
                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                if (mysqli_num_rows($verify_query) != 0) {
                    $_SESSION['errorMessage'] = "This email is already in use. Try another one, please!";
                } else {
                    mysqli_query($con, "INSERT INTO users(Username, Email, Age, Password) VALUES('$username', '$email', '$age', '$password')") or die("Error Occurred");

                    // Set success message
                    $_SESSION['successMessage'] = "Registration successfully!";
                }
                // Redirect to avoid form resubmission
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            }

            ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" style="color: white; background: orange;" required>
                </div>
                <div class="links">
                    Already a member? <a href="MainPage.php" style="color: orange; text-decoration: none;">Login</a>
                </div>
            </form>

            <!-- Display success message at the bottom of the card -->
            <?php if ($_SESSION['successMessage']): ?>
                <div class="message">
                    <p><?php echo $_SESSION['successMessage']; ?></p>
                </div>
                <?php $_SESSION['successMessage'] = ""; // Clear success message after displaying 
                ?>
            <?php endif; ?>

            <!-- Display error message at the bottom of the card -->
            <?php if ($_SESSION['errorMessage']): ?>
                <div class="error-message">
                    <p><?php echo $_SESSION['errorMessage']; ?></p>
                </div>
                <?php $_SESSION['errorMessage'] = ""; // Clear error message after displaying 
                ?>
            <?php endif; ?>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> TechTradeZone. All Rights Reserved.</p>
    </footer>
</body>

</html>