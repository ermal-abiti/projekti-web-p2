<?php 
require('parts/header.php');
?>


        
<main>
    
    <div class="main-content">
        <div class="alerts-area">
            <div class="alert hidden" id="validation-alert">
            </div>
        </div>
        <div class="main-content-blank">
            <h2 style="text-align:center;">Create A Post</h2>
            <div class="styled-hr"><div></div></div>
            <div class="form-container login-form">
                <div class="form-item"><input type="text" name="Post Title" id="username" placeholder="Title"/></div>

                <div class="form-item"><label for="Post Title">Thumbnail: </label><input type="file" accept=".png,.jpeg,.jpg" name="Post Title" id="username" placeholder="Title"/></div>
                
                <div class="form-item"><textarea name="Post Content" id="" cols="30" rows="10" placeholder="Content"></textarea></div>

                <div class="form-item"><button class="button button-blue">POST</button></div>
            </div>
        </div>
    </div>
    
</main>

<?php 
require('parts/footer.php');
?>
