<?php
    session_start();
    require_once ("Config/connect.php");
    $link = "http://";
    $name = "/camagru";
    $homepage = $link.$_SERVER['HTTP_HOST'].$name."/index.php";

    $statement = $conn->prepare("UPDATE camagru.users SET Status='Inactive' WHERE Username=?");
    $statement->bindValue(1, $_SESSION["Username"]);
    $statement->execute();
    session_destroy();
    header("location: $homepage");
?>