<?php
session_start();
session_destroy();
setcookie('emailcookie','', time()+86400 * 30);
setcookie('passwordcookie','', time()+86400 * 30);
header("location:LoginPage.php");
?>