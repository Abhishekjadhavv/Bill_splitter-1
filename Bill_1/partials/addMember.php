<?php
session_start();
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
       include "_dbconnect.php";

       $groupName = $_GET['groupName'];
       $ids = explode(',',$_GET['id']);
       array_unshift($ids,$_SESSION['username']);

       foreach ($ids as $value) {
        $sql = "SELECT * FROM `group` WHERE `group_name`='$groupName' and `added_user_id` = '$value'";
        $result = mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);

        if($num !== 1)
        {   
            
            $sql = "INSERT INTO `group`(`group_name`,`added_user_id`) VALUES ('$groupName','$value')";
            $result = mysqli_query($conn,$sql);   
        }
       }
       header("Location:/projectfile/Bill_1/groups.php");
    }

    ?>