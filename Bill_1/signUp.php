<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ====== custom css here ======= -->
    <link rel="stylesheet" href="css/login_sign.css">
    <link rel="stylesheet" href="css/utility.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>SignUp - Bill Splitter</title>
</head>

<body>
    <div class="alert flex  justify-center"><span></span></div>
    <div class="container flex justify-center">
        <div class="login-box signUp_box">
            <h1>Bill Splitter</h1>
            <p>If your want to split bill with your friends then signup first in our app</p>
            <form action="#" id="sign_form">
                <div class="input-box flex">
                    <input type="text" placeholder="User name" name="user-name" id="username" required>
                </div>
                <div class="input-box flex">
                    <input type="email" placeholder="User Email" name="user-Email" id="email" required>
                </div>
                <div class="input-box flex">
                    <input type="password" placeholder="Password" name="user-Password" id="password" required>
                    <i class='bx bxs-hide hide-btn'></i>
                </div>
                <div class="input-box flex">
                    <input type="password" placeholder="Confirm Password" name="CUser-Password" id="Cpassword" required>
                    <i class='bx bxs-hide hide-btn'></i>
                </div>
                <button type="submit" class="btn">Sign Up</button>
            </form>
            <div class="login-box-footer flex justify-center">
                <span>Already have an account?</span><a href="home.php"> Log in.</a>
            </div>
        </div>
    </div>

    <!-- ===== js here === -->
    <script src="js/signup.js"></script>
</body>

</html>