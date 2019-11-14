<?php
    include ("connect.php");
    $username = $_POST['username'];
    $DB_NAME->query("UPDATE `users` SET `status` = 'active' WHERE `username` = '$username';");
    header("location: success_verified.php");
?>