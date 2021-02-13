<?php
require('db_conn.php');
ini_set('display_errors', 1);

function getUserById($conn,$id) {
    $sql = 'SELECT * FROM user_table WHERE user_id=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result->num_rows >0) {
        while ($row = $result->fetch_assoc()){
            return $row['username'];
        }
    }
    $stmt->close();
}

function readAllPosts($conn) {
    $sql = "SELECT * FROM posts_table ORDER BY post_id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->get_result();
    $posts = $result->fetch_all(MYSQLI_ASSOC);
    return $posts;
}

function readPostById($conn, $id) { 
    $sql = "SELECT * FROM posts_table WHERE post_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();

    $result = $stmt->get_result();
    $post = $result->fetch_assoc();
    return $post;
}

function readPostsByUser($conn, $user) {
    $sql = "SELECT * FROM posts_table WHERE user=? ORDER BY post_id";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i',$user);
    $stmt->execute();

    $result = $stmt->get_result();
    $posts = $result->fetch_all(MYSQLI_ASSOC);
    return $posts;
}

function getAllUsers($conn) {
    $sql = "SELECT * FROM user_table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->get_result();
    $posts = $result->fetch_all(MYSQLI_ASSOC);
    return $posts;
}
?>