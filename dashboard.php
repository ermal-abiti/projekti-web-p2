<?php

require 'parts/header.php';
require 'config/db_conn.php';
require 'config/read_post.php';


if($_SESSION['privilege'] != 1) {
    header('Location:index.php');
    exit();
}
?>

<main>
    <div class="main-content-wide">
        <h1>Posts</h1>
        <table border=1>
            <tr>
                <th>PostID</th>
                <th>Posted By</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date Posted</th>
                <th>Actions</th>
            </tr>
            <?php
            $posts = readAllPosts($conn);
            foreach($posts as $post) {
                $user = getUserById($conn, $post['user']);
            ?>
            <tr>
                <td><?php echo $post['post_id']; ?></td>
                <td><?php echo $user; ?></td>
                <td><?php echo $post['post_title']; ?></td>
                <td><?php echo $post['post_content']; ?></td>
                <td><?php echo $post['date_posted']; ?></td>
                <td><a href="config/delete_post.php?postID=<?php echo $post['post_id']?>">Delete Post</a></td>
            </tr>
            <?php } ?>
        </table>

        <h1>Users</h1>
        <table border=1>
            <tr>
                <th>UserID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Privilege</th>
                <th>Actions</th>
            </tr>
            <?php
            $users = getAllUsers($conn);
            foreach($users as $user) {
            ?>
            <tr>
                <td><?php echo $user['user_id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['birthday']; ?></td>
                <td><?php echo $user['privilege']; ?></td>
                <td>
                    <?php
                        if ($user['user_id'] != $_SESSION['userID']){
                             
                            echo '<a href="config/delete_user.php?userID='.$user['user_id'].'">Delete User</a> <br>';
                        }
                    ?>
                    <?php
                    if ($user['user_id'] == $_SESSION['userID']){
                        //do nothing
                    }
                    else if($user['privilege'] == 1) {
                        echo '<a href="config/change_privilege.php?userPrivilege=0&userID='.$user['user_id'].'">Remove From Admin</a>';
                    }
                    else {
                        echo '<a href="config/change_privilege.php?userPrivilege=1&userID='.$user['user_id'].'">Make Admin</a>';
                    }
                    ?>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</main>


<?php
require 'parts/footer.php';

?>