<?php
include_once('db_conn.php');

$sql = "SELECT * FROM user_table";

$result = $conn->query($sql);

if ($result->num_rows >0) {
    while ($row = $result->fetch_assoc()){
        echo $row['username'];
    }
}
else {
    echo "0 resulst";
}
?>