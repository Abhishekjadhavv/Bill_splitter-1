<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ---- custom css here ---- -->
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/home.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title> Bill Splitter - Home page</title>
</head>
<body>
    <!-- ----- header ----- -->
     <?php include "partials/navbar.php";?>
     <!-- ----- header end here --- -->
     <main class="main">
          <div class="note">
             <span>Note : You can only add people who have already signed up here and<br/>make sure your name is selected.</span>
          </div>
          <div class="search">
                 <form action="#" id="form">
                     <div class="search-box flex">
                       <i class='bx bx-search'></i>
                       <input type="text" placeholder="Search people to add in your group" name="search-text" id="search">
                    </div>
                 </form>
          </div>
          <div class="search-data">
             <div class="inner-search-box">
                <div class="noFound">
                    <span>No recent searches.</span>
                </div>
             </div>
             <form action="#" class="form-add-member">
                <label for="">Group Name</label>
                <input type="text" placeholder="Enter your group name" id="groupName" required>
                <button type="submit" class="btn">Add Member</button>
             </form>
          </div>
     </main>


   <!-- ------ js here --   -->
   <script src="js/home.js"></script>
   <script src="js/searchfetchdata.js"></script>
   <script src="js/addMember.js"></script>
</body>
</html>