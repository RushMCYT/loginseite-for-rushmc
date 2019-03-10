<?php
/**
 * Created by PhpStorm.
 * User: Elias Arndt
 * Date: 10.03.2019
 * Time: 18:37
 */

session_start();

require_once 'config.php';

if(isset($_SESSION['login'])) {
    header("Location: content.php");
    exit();
    return;
}

if(isset($_POST['name']) && isset($_POST['pw'])) {
    if($_POST['name'] == $name && $_POST['pw'] == $passwort) {
        $_SESSION['login'] = $name;
        header("Location: content.php");
        exit();
    }
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Username" required><br>
            <br>
            <input type="password" name="pw" placeholder="Passwort" required>
            <br>
            <button type="submit">LOGIN</button>
        </form>
    </body>
</html>
