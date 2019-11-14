<?php
    include ("connect.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $result = $DB_NAME->prepare("INSERT INTO `users` (`id`, `username`, `password`, `email`, `status`) VALUES (NULL, ?, ?, ?, ?)");
    $result->bindValue(1, $username);
    $result->bindValue(2, $password);
    $result->bindValue(3, $email);
    $result->bindValue(4, 'inactive');
    $result->execute();


    $message = "http://localhost:8080/camagru/verified.php";
    $subject = "Camagru Verification link";


    mail($email, $subject, $message);
    header("location: success_verified.php");

    // create a page that will tell you that you have a confirmation email

?>