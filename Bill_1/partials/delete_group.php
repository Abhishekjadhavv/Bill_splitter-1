<?php
    include "_dbconnect.php";

   $groupName = $_GET['groupName'];

   $query = "SELECT * FROM `group` where `group_name`='$groupName'";
   $result = mysqli_query($conn,$query);
   while($row = mysqli_fetch_assoc($result)){
     $queryDelete = "DELETE FROM `group` WHERE `group_name`='$groupName'";
     $resultDelete = mysqli_query($conn,$queryDelete);
   }

   $query = "SELECT * FROM `own` where `group_name`='$groupName'";
   $result = mysqli_query($conn,$query);
   while($row = mysqli_fetch_assoc($result)){
     $queryDelete = "DELETE FROM `own` WHERE `group_name`='$groupName'";
     $resultDelete = mysqli_query($conn,$queryDelete);
   }

   $query = "SELECT * FROM `amount` where `group_name`='$groupName'";
   $result = mysqli_query($conn,$query);
   while($row = mysqli_fetch_assoc($result)){
     $queryDelete = "DELETE FROM `amount` WHERE `group_name`='$groupName'";
     $resultDelete = mysqli_query($conn,$queryDelete);
   }
?>