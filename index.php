<?php 
session_start();
require('parts/header.php');
require('config/db_conn.php');
require('config/read_post.php');
?>

<div class="alerts-area">
    <?php
        if (isset($_GET['postUploaded'])){
            echo '<div class="alert alert-green" id="validation-alert">
            Post was created successfully!</div>';
        }
        
    ?>
    <div class="alert hidden" id="validation-alert">
    </div>
</div>

<main>
    
    <div class="main-content">
    
        <?php
        $posts = readAllPosts($conn);
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

    <div class="sidebar">
        <div class="sidebar-content">
            <div class="search-bar">
                <form class="form-container">
                    <div class="form-item">
                        <label for=""></label>
                        <input type="text" name="" id="" placeholder="Search...">
                        <button class="button button-white">Search</button>
                    </div>
                </form>
            </div>
            
            <div class="styled-hr"><div></div></div>

            <?php if(isset($_SESSION['userLoggedIn'])) {?>
                <div class="action-widgets">
                    <a class="button button-blue" href="create_post.php">Create a Post</a>
                    <a class="button button-red">Embed a Video</a>
                </div>
            <?php
                }
                else {
                    echo '<p><a href="login.php">Log In</a> to add content!</p>';
                }
            ?>
        </div>

        <div class="sidebar-content">
            <h2>Recents</h2>
            <div class="styled-hr"><div></div></div>
            <ul>
                <?php
                    foreach($posts as $post) {
                ?>
                <li><a href="post_by_id.php?postID=<?php echo $post['post_id']; ?>"><?php echo $post['post_title'];?></a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
    
</main>


<?php 
require('parts/footer.php');
?>