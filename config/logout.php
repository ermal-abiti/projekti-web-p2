<?php
session_start();

if(isset($_SESSION['userLoggedIn']) || isset($_SESSION['userID']) || isset($_SESSION['privilege'])) {
    unset($_SESSION['userLoggedIn']);
    unset($_SESSION['userID']);
    unset($_SESSION['privilege']);
    header("Location:../index.php");
}
else {
    header("Location:../index.php");
}

?>