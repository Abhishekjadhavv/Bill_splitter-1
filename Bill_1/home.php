<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ====== custom css here ======= -->
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/login_sign.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Login - Bill Splitter</title>
</head>

<body>
<?php
     if(isset( $_GET["user"]) == "true")
        echo "<script>alert('Error : Invalid password or username.');</script>";
    ?>
    <div class="container flex justify-center">
        <div class="login-box">
            <h1> Bill Splitter</h1>
            <form action="partials/logindata.php" method="POST">
                <div class="input-box flex">
                    <input type="text" placeholder="User name" name="user-name" required>
                </div>
                <div class="input-box flex">
                    <input type="password" placeholder="Password" name="user-Password" id="password" required>
                    <i class='bx bxs-hide hide-btn'></i>
                </div>
                <button type="submit" class="btn">Log in</button>
            </form>
            <div class="login-box-footer flex justify-center">
                <span>Don't have an account?</span><a href="signUp.php"> Sign up</a>
            </div>
        </div>
    </div>

    <!-- ---- js here --- -->
    <script src="js/login.js"></script>
</body>

</html>