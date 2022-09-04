<?php
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     
    include "_dbconnect.php";
    $username = $_POST["user-name"]; 
    $password = $_POST["user-Password"];

    $sql = "SELECT * FROM `userinfo` WHERE `User_name`='$username'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if($username == $row['User_name'] && password_verify($password,$row['user_password']))
    {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["id"] = $row['user_id'];
        header("Location: /projectfile/Bill_1/home_bill.php");
    }
    else 
    {
        header("Location:/projectfile/Bill_1/home.php?user=true");
    }
 }
?>