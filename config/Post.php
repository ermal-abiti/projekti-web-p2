<?php

class Post {
    private $user;
    private $post_title;
    private $post_content;
    public $image_name = "";
    private $date_posted;

    public function __construct($user, $p_title, $p_content, $date) {
        $this->user = $user;
        $this->post_title = $p_title;
        $this->post_content = $p_content;
        $this->date_posted = $date;
    }

    public function uploadPostToDB($conn) {
        $sql = "INSERT INTO posts_table (user, post_title, post_content, image_url, date_posted) VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return false;
        }
        else {
            mysqli_stmt_bind_param($stmt, "issss", $this->user, $this->post_title, $this->post_content, $this->image_name, $this->date_posted);
            mysqli_stmt_execute($stmt);
            return true;
        }
        
    }




}

?>