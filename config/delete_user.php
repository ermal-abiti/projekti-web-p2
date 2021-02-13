<?php
session_start();
include 'db_conn.php';
include 'read_post.php';

if ($_SESSION['privilege'] != 1){
    header('Location:../index.php');
    exit();
}
else {
    $sql = "DELETE FROM user_table WHERE user_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i',$_GET['userID']);
    $stmt->execute();
    $stmt->close();
    header('Location:../dashboard.php');
}


?>