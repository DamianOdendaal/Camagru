<?php
    session_start();
    include ("Connect.php");
    $email = $_SESSION["Email_P"];
    $statement = $conn->query("SELECT Password FROM camagru.users WHERE Email='$email'");
    $pass = $statement->fetch();
    $result = $conn->prepare("UPDATE camagru.users SET Password=? WHERE Email='$email'");
    $result->bindValue(1, $_POST["Newpass"]);
    $result->execute();
    header("location: index.php"); 
?>