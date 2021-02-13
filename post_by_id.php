<?php
require 'parts/header.php';
require 'config/db_conn.php';
require 'config/read_post.php';

if (!isset($_GET['postID'])) {
    header('Location:index.php');
    exit();
}

$post = readPostById($conn, $_GET['postID']);
$user = getUserById($conn, $post['user']);

?>

<main>
    <!-- https://zubairidrisaweda.medium.com/using-composer-phps-dependency-manager-73883d7826e -->
    <div class="main-content">
        
        <div class="blog-post">

            <div class="blog-header">
                <h2><?php echo $post['post_title'];   ?></h2>
                <div class="author"><a href="user.php?userID=<?php echo $post['user']; ?>"><?php  echo $user;   ?></a> - <?php echo $post['date_posted'];   ?></div>
            </div>

            <!-- <div class="styled-hr" ><div></div></div> -->
            <img src="img/media/<?php echo $post['image_url'];  ?>" alt="thumbnail">

            <div class="blog-content">
                <p><?php echo $post['post_content'];   ?></p>
            </div>
        </div>
    </div>
</main>
            
<?php require 'parts/footer.php'?>