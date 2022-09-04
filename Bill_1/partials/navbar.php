<?php
 echo'<header class="header">
      <nav class="navbar flex justify-between">
          <div class="logo"><h1>Bill Split<span>ter</span></h1></div>
          <div class="group"><a href="groups.php"><i class="bx bxs-group" title="Groups"></i></a></div>
          <div class="user-img">
            <img src="img/user2.webp" alt="user-img">
            <ul class="drop-menu">
                <li><a href="home_bill.php">'.$_SESSION['username'].'</a></li>
                <li><a href="partials/logout.php" class="log-out-btn">Log out</a></li>
            </ul>
            <div class="close-drop flex justify-center"><i class="bx bx-x"></i></div>
          </div>  
      </nav>
</header>';
?>