<?php
    session_start();
    require_once ("Config/connect.php");
    $newPassword = hash("sha512", $_POST["Newpass"]);
    $email = $_SESSION["Email_P"];
    $statement = $conn->query("SELECT Password FROM camagru.users WHERE Email='$email'");
    $pass = $statement->fetch();
    $result = $conn->prepare("UPDATE camagru.users SET Password=? WHERE Email='$email'");
    $result->bindValue(1, $newPassword);
    $result->execute();
    header("location: index.php"); 
?>