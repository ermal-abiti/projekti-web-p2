<?php 
require('parts/header.php');



if (!isset($_SESSION['userLoggedIn'])) {
    header("Location:login.php");
    exit();
}
?>


        
<main>
    
    <div class="main-content">
        <div class="alerts-area">
            <div class="alert hidden" id="validation-alert">
            </div>
        </div>

        <form action="config/posting.php" method="post" enctype="multipart/form-data">
        
            <div class="main-content-blank">
                <h2 style="text-align:center;">Create A Post</h2>
                <div class="styled-hr"><div></div></div>
                <div class="form-container login-form">
                    <div class="form-item"><input type="text" name="post_title" id="post_title" placeholder="Title" required/></div>

                    <div class="form-item"><label for="post_image">Thumbnail: </label><input type="file" accept=".png,.jpeg,.jpg" name="post_image" id="post_image" placeholder="Title" required/></div>
                    
                    <div class="form-item"><textarea name="post_content" id="" cols="30" rows="10" placeholder="Content" required></textarea></div>

                    <div class="form-item"><input type="datetime-local" name="date_posted" placeholder="Posted on" required></div>

                    <div class="form-item"><button name="post_btn" value="POST" class="button button-blue" type="submit">POST</button></div>
                </div>
            </div>
        
        </form>

    </div>
    
</main>

<?php 
require('parts/footer.php');
?>
