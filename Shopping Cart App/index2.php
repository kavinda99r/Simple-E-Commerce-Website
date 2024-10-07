<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", "san-serif";
        }

        /*body{
            background-image: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("Background.jpg");
            background-size: cover;

        }*/
        .section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
        }

        .main {
            display: grid;
        }

        .content {
            display: grid;
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

        button {
            margin-right: 30px;
            margin-left: 30px;
            text-align: left;
            font-weight: 400;
            font-size: 18px;
            padding: 10px 20px;
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

        p {
            color: rgb(28, 28, 28);
            text-align: center;
            margin-bottom: 15px;
        }

        span {
            color: orange;
        }
    </style>
</head>

<body>

    <div class="section">

        <div class="main">
            <h1>Welcome to <span>Shopping</span></h1>
            <p>Get ulitimate tech shopping experience</p>
            <div class="content">
                <button onclick="gotoLink(this)" value="Cart1.php"><i class="fa-solid fa-mobile-screen"></i>Smart Phones</button>
                <button onclick="gotoLink(this)" value="Cart1.php"><i class="fa-solid fa-laptop"></i>Laptops</button>
                <button onclick="gotoLink(this)" value="Cart1.php"><i class="fa-solid fa-computer"></i>Desktop Computer</button>
                <button onclick="gotoLink(this)" value="Cart1.php"><i class="fa-solid fa-keyboard"></i>Other Accessories</button>
            </div>
        </div>


    </div>
</body>
<script>
    function gotoLink(link) {
        console.log(link.value);
        location.href = link.value;
    }
</script>

</html>