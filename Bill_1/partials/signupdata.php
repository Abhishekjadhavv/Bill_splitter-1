<?php
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     include "_dbconnect.php";

     $userName = $_POST["user-name"];
     $userEmail = $_POST["user-Email"];
     $userPassword = $_POST["user-Password"];
     $ComUserPassword = $_POST["CUser-Password"];

     $sql = "SELECT * FROM `userinfo` WHERE `User_name`='$userName'";
     $result = mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);
     if($num == 1)
     {  
        echo "exit";
     }
     else if($userPassword === $ComUserPassword)
     {
        $hash=password_hash($userPassword,PASSWORD_DEFAULT);
        $user_pic="user2.webp";
        $sql = "INSERT INTO `userinfo`(`User_name`, `user_email`, `user_password`,`user_img`) VALUES ('$userName','$userEmail','$hash','$user_pic')";
        $result = mysqli_query($conn,$sql);
     }else{
        echo "Not Match";
     } 
}
?>