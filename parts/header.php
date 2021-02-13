<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/widgets.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Blogging - All Posts</title>
</head>
<body>
    <div id="web-container">
        <div id="wrapper">

        <header>
                <div id="brand">
                    <a href="index.php">Blogging</a>
                    
                    <button onclick="navToggle()"><br><img src="img/nav-toggle.png" alt=""></button>
                </div>

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <?php 
                            if(isset($_SESSION['userLoggedIn'])) {
                                echo '<li><a href="my_posts.php">My Posts</a></li>';
                            }
                        ?>
                        <li><a href="about.php">About</a></li>
                    </ul>
                    <ul id="ul-userinfo">
                    <?php
                        if(isset($_SESSION['userLoggedIn'])){
                            echo '<li><a href="config/logout.php">Log Out: '. $_SESSION['userLoggedIn'] .' </a></li>';
                        }
                        else {
                            echo '
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                            ';
                        }
                    ?>
                    </ul>
                </nav>
        </header>