<?php

require 'parts/header.php';
require 'conf/db_conn.php';
// echo $_SESSION['privilege'];

// if($_SESSION['privilege'] != 1) {
//     header('Location:index.php');
//     exit();
// }
?>

<main>
    <div class="main-content-wide">
        <h1>Posts</h1>
        <table>
            <tr>
                <th>title</th>
                <th>title2</th>
            </tr>
            <tr>
                <td>data</td>
                <td>data2</td>
            </tr>
        </table>
    </div>
</main>


<?php
require 'parts/footer.php';

?>