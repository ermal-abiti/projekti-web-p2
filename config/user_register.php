<?php
require('db_conn.php');
require('User.php');

$current_user = new User($_POST['username'], $_POST['password'], $_POST['email'], $_POST['birthday'], 0);

if(isset($_POST['register-btn'])) {

    if($current_user->checkIfUsernameExists($conn)) {
        header("Location:../register.php?usernameExists=1");
        exit();
    }
    else if($current_user->checkIfEmailExists($conn)) {
        header("Location:../register.php?emailExists=1");
        exit();
    }
    else if($current_user->registerUserInDB($conn)) {
        header("Location:../register.php?userRegistered=1");
        exit();
    }
    else {
        echo "$conn->error";
    }

}
else {
    header("Location:../register.php");
    exit();
}




?>