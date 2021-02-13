<?php
session_start();
require('db_conn.php');
require('User.php');


$current_user = new LoginUser($_POST['username'], $_POST['password']);

if(isset($_POST['login-btn'])) {

    if(!$current_user->authenticateUser($conn)) {
        header("Location:../login.php?wrongData=1");
        exit();
    }
    else if($current_user->authenticateUser($conn)) {
        
        header("Location:../login.php?loginSuccessful=1");
        exit();
    }

}
else {
    header("Location:../login.php");
    exit();
}




?>