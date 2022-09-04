<?php
session_start();
session_unset();
session_destroy();
header("Location: /projectfile/Bill_1/home.php");
exit;
?>