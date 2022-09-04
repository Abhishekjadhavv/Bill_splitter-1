<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
       if(isset($_SESSION['id'])){
            include "_dbconnect.php";
            $amount = $_GET['value'];
            $groupName = $_GET['groupname'];
            $id = $_SESSION['id'];
            $query = "SELECT * FROM `amount` WHERE `group_name` = '$groupName'";
            $queryResult = mysqli_query($conn,$query);
            $num = mysqli_num_rows($queryResult);
            if($num == 1){
                 $data = mysqli_fetch_assoc($queryResult);
                 $oldValue = $data['group_amount'];
                 $newValue = number_format($amount) + number_format($oldValue);
                 $update = "UPDATE `amount` SET `group_amount`='$newValue' WHERE `group_name` = '$groupName'";
                 $result = mysqli_query($conn,$update);  

            }else{
                $sql = "INSERT INTO `amount`(`group_name`, `group_amount`) VALUES ('$groupName','$amount')";
                $result = mysqli_query($conn,$sql);  
            }

            // ------ own amount ---
            $query = "SELECT * FROM `own` WHERE `group_name` = '$groupName' and `belong`= '$id'";
            $queryResult = mysqli_query($conn,$query);
            $num = mysqli_num_rows($queryResult);
            if($num == 1){
                 $data = mysqli_fetch_assoc($queryResult);
                 $oldValue = $data['own_amount'];
                 $newValue = number_format($amount) + number_format($oldValue);
                 $update = "UPDATE `own` SET `own_amount`='$newValue' WHERE `group_name` = '$groupName'";
                 $result = mysqli_query($conn,$update);  

            }else{
                $sql = "INSERT INTO `own`(`own_amount`, `group_name`,`belong`) VALUES ('$amount','$groupName','$id')";
                $result = mysqli_query($conn,$sql);  
            }


       }
}

?>