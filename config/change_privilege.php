<?php
session_start();
include 'db_conn.php';
include 'read_user.php';

if ($_SESSION['privilege'] != 1){
    header('Location:../index.php');
    exit();
}
else {
    $sql = "UPDATE user_table SET privilege=? WHERE user_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii',$_GET['userPrivilege'], $_GET['userID']);
    $stmt->execute();
    $stmt->close();
    header('Location:../dashboard.php');
}


?>