<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- ---- custom css here ---- -->
     <link rel="stylesheet" href="css/utility.css">
     <link rel="stylesheet" href="css/home.css">
     <link rel="stylesheet" href="css/group1.css">
     <!-- Boxicons CSS -->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

     <title>Groups - Bill Splitter</title>
</head>
<body>
    <!-- ----- header ----- -->
    <?php include "partials/navbar.php";?>
    <!-- ----- header end here --- -->
    
    <!-- ----- main --- -->
    <main class="main main-group">
         <h1>Your Groups here</h1>
         <section class="groups-data">
              <div class="groups">

              <?php
                include "partials/_dbconnect.php";
                if(isset($_SESSION['username'])){
                $id = $_SESSION['username'];    
                $sql = "SELECT * FROM `group` where `added_user_id` = '$id'";
                $result = mysqli_query($conn,$sql);
                $num = mysqli_num_rows($result);
                if(!$num){
                    echo '<h4 class="NoAdded">No Groups Added</h4>';
                }
                while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="groups-content ">
                            <div class="groups-header flex justify-between">
                                <div class="group-header-icon"><i class="bx bxs-group" title="Groups"></i></div>
                                <div class="group-header-groupName">
                                    <span>'.$row['group_name'].'</span>';
                                   $groupName = $row['group_name'];
                                   $groupUser = "SELECT * FROM `group` where `group_name` = '$groupName'";
                                   $groupUserResult = mysqli_query($conn,$groupUser);
                                   $Members = mysqli_num_rows($groupUserResult);
                                    echo  '<p>'.$Members.' Members</p>';
                               echo '</div>
                                <div class="group-header-arrow flex">
                                    <i class="bx bxs-trash-alt trash"></i>
                                    <i class="bx bx-chevron-up up-arrow"></i>
                                </div>
                            </div>
                            <div class="groups-member">
                                <div class="amount">
                                <div class="group-member-header">
                                    <form class="amount-form">
                                        <input type="number" placeholder="Total" name="'.$groupName.'"required>
                                        <button type="submit" class="total_btn">Split an expense</button>
                                    </form>
                                </div> 
                                <div class="expenses flex justify-between">
                                    <div class="own">';
                                    $id = $_SESSION['id'];
                                    $query = "SELECT * FROM `own` WHERE `group_name` = '$groupName' and `belong`= '$id'";
                                    $queryResult = mysqli_query($conn,$query);
                                    $ownAmount = mysqli_fetch_assoc($queryResult);
                                    $num = mysqli_num_rows($queryResult);
                                    if($num){
                                        echo  '<h4>Your own expenses : <span>₹ '.$ownAmount['own_amount'].'</span></h4>';
                                    }else{
                                        echo  '<h4>Your own expenses : <span>₹ 0</span></h4>';
                                    }
                             echo   '</div>
                                    <div class="group-expenses">';
                                    $query = "SELECT * FROM `amount` WHERE `group_name` = '$groupName'";
                                    $queryResult = mysqli_query($conn,$query);
                                    $groupAmount = mysqli_fetch_assoc($queryResult);
                                    $num = mysqli_num_rows($queryResult);
                                    if($num){
                                        echo  '<h4>Group expenses : <span>₹ '.$groupAmount['group_amount'].'</span></h4>';
                                    }else{
                                        echo  '<h4>Group expenses : <span>₹ 0</span></h4>';
                                    }
                             echo    '</div>
                                </div>
                                </div>
                            <div class="Members">';
                            while($groupUserRow = mysqli_fetch_assoc($groupUserResult)){
                                echo '<div class="Member flex justify-between">
                                        <img src="img/user-img.jpg">
                                        <div class="member-name">';
                                echo  '<span>'.$groupUserRow['added_user_id'].'</span>';
                                echo   '</div>
                                        <div class="member-amount">';
                                        if($num){
                                          echo'<strong>₹ '.number_format($groupAmount['group_amount']/$Members,2).'</strong>';
                                        }else{
                                          echo '<strong>₹ 0</strong>';
                                        }
                                 echo ' </div>
                                  </div>';
                            } 
                        echo '</div>                         
                        </div>
                    </div> '; 
                }
                
            }

        ?>    
            </div>
         </section>
    </main>


    <!-- ------ js here --   -->
   <script src="js/home.js"></script>
   <script src="js/group.js"></script>
   <script src="js/amount.js"></script>
   <script src="js/delete_group.js"></script>
</body>
</html>