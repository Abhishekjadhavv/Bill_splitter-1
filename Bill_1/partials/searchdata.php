<?php
include "_dbconnect.php";

$data = $_POST["search-text"];

$sql = "SELECT * FROM `userinfo` WHERE `User_name` like '%$data%'";
$result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);
    if(!$num){
       echo ' <div class="noFound">
                <span> No results found.</span>
             </div>';
    }
    while($row = mysqli_fetch_assoc($result)){
        echo '<form id="search-form">
                <div class="search-user-data flex">
                    <div class="search-user-img">
                    <img src="./img/'.$row['user_img'].'" alt="user-img">
                    </div>
                    <div class="search-user-username">
                        <a href="#">'.$row['User_name'].'</a>
                        <p>Bill Splitter</p>
                    </div>
                    <input type="checkbox" name="'.$row['user_id'].'" id='.$row['User_name'].' class="checkbox" onclick=addMember(this)>
                </div>      
             </from> ';
       }
?>