<?php
session_start();
require('db_conn.php');
require('Post.php');

if (isset($_POST['post_btn']) && isset($_SESSION['userLoggedIn'])) {
    
    $current_post = new Post($_SESSION['userID'], $_POST['post_title'], $_POST['post_content'], $_POST['date_posted']);

    if(isset($_FILES['post_image'])){
        $errors= array();
        $file_name = $_FILES['post_image']['name'];
        // echo $file_name. "<br>";
        $file_size =$_FILES['post_image']['size'];
        // echo $file_size. "<br>";
        $file_tmp =$_FILES['post_image']['tmp_name'];
        // echo $file_tmp. "<br>";
        $file_type=$_FILES['post_image']['type'];
        // echo $file_type. "<br>";
        $file_ext=strtolower(end(explode('.',$_FILES['post_image']['name'])));
        // echo $file_ext. "<br>";
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be max 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"../img/media/".$file_name);
           echo "Successfully uploaded the image!". "<br>";
        }else{
           print_r($errors);
           exit();
        }
     }

    $current_post->image_name = $file_name;
    print_r($current_post);
    if ($current_post->uploadPostToDB($conn)) {
        header("Location:../index.php?postUploaded=true");
        exit();
    }
    else {
        echo "$conn->error";
        echo "Error while trying to upload the post!";
    }



}
else {
    header("Location:../index.php");
}

?>