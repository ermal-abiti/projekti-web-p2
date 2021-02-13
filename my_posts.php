<?php
require('parts/header.php');
require 'config/db_conn.php';
require 'config/read_post.php';

if (!isset($_SESSION['userLoggedIn'])) {
    header('Location:index.php');
    exit();
}
?>
        
<!-- <div class="alerts-area">
    <div class="alert alert-green">
        this is a message
    </div>
</div> -->

<main>
    
    <div class="main-content">
        
    <?php
        $posts = readPostsByUser($conn, $_SESSION['userID']);
        foreach($posts as $post) {
        ?>
        <div class="blog-post">

            <div class="blog-header">
                <h2><?php echo $post['post_title']; ?></h2>
                <div class="author"><a href="user.php?userID=<?php echo $post['user']; ?>"><?php echo getUserById($conn, $post['user']) ?></a> - <?php echo $post['date_posted']?></div>
            </div>

            <!-- <div class="styled-hr" ><div></div></div> -->
            <img src="img/media/<?php echo $post['image_url']?>" alt="thumbnail">

            <div class="blog-content">
                <p>
                <?php echo substr($post['post_content'],0, 230)?>
                <a href="post_by_id.php?postID=<?php echo $post['post_id'] ?>">Read More...</a>
                </p>
            </div>

        </div>
    <?php   } ?>

    </div>
</main>

<?php
require('parts/footer.php');
?>