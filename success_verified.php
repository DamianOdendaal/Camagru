<?php
    include ("connect.php");
    $username = $_POST['username'];
    $DB_NAME->query("UPDATE `users` SET `status` = 'active' WHERE `username` = '$username';");
    header("location: success_verified.php");           // actually make a button that they will press that will redirect them to the index page

    // make sure the send mail works and see if you can do a sql injection
?>