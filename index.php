<?php 
require('parts/header.php');
?>

            

<main>
    
    <div class="main-content">
        
        <div class="blog-post">

            <div class="blog-header">
                <h2>PHP’s Dependency Manager</h2>
                <div class="author"><a href="users/user1.html">ermalabiti</a> - 18/11/2020 18:20</div>
            </div>

            <!-- <div class="styled-hr" ><div></div></div> -->
            <img src="img/media/PHP_Logo.png" alt="thumbnail">

            <div class="blog-content">
                <p>Përshëndetje, Mirë se vini në këtë tutorial për Composer për PHP. Këtu do të mësoni:
                    <ul>
                        <li>Çfarë është Composer</li>
                        <li>Si ta instalojmë Composer</li>
                        <li>Si ta përdorim Composer</li>
                        <li>Krijimin e një projekti të PHP duke përdorur Composer</li>
                        <li>Instalimin i paketave, librarive, ose frameworks duke përdorur Composer</li>
                    </ul>
                    
                    Para se të kyçemi në temë <a href="posts/post1.html">Read More...</a>
                </p>
            </div>
            
        </div>


        <div class="blog-post">

            <div class="blog-header">
                <h2>Gjuha Programuese Python</h2>
                <div class="author"><a href="users/user2.html">ensar.hamza</a> - 13/11/2020 3:32</div>
            </div>

            <!-- <div class="styled-hr" ><div></div></div> -->
            <img src="img/media/python-logo.png" alt="">

            <div class="blog-content">
                <p>Ky artikull synon të përshkruajë të gjitha pikat kryesore të gjuhës programuese Python. Synimi im është të mbaj informacionin të shkurtër, të rëndësishëm dhe të përqendrohem në temat më të rëndësishme që kërkohen.<a href="posts/post2.html">Read More...</a>
                </p>
            </div>
            
        </div>

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
            
            <div class="action-widgets">
                <a class="button button-blue" href="create_post.php">Create a Post</a>
                <a class="button button-red">Embed a Video</a>
            </div>
        </div>

        <div class="sidebar-content">
            <h2>2020 Posts</h2>
            <div class="styled-hr"><div></div></div>
            <ul>
                <li><a href="posts/post1.html">PHP’s Dependency Manager</a></li>
                <li><a href="posts/post2.html">Gjuha Programuese Python</a></li>
            </ul>
        </div>
    </div>
    
</main>


<?php 
require('parts/footer.php');
?>