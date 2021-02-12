<?php


$host = "localhost";
$username = "admin";
$database = "inxhueb_projekti_db1";
$password = "";

$conn = new mysqli($host, $username, $password, $database);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}


?>