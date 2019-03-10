<?php
/**
 * Created by PhpStorm.
 * User: Elias Arndt
 * Date: 10.03.2019
 * Time: 19:34
 */

session_start();
if(!isset($_SESSION['login'])) {
    header("Location: index.php?status=1");
}

?>

<html>
    <body>
        <img src="https://sayingimages.com/wp-content/uploads/Boy-with-trophy-Mission-accomplished-Meme.jpg">
    </body>
</html>
