<?php
    include ('connect.php');
    session_start();
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imagePath = "Uploads/$imageName";
    $result = $conn->prepare("INSERT INTO camagru.`images` (`Image`, `Username`) VALUES (?, ?)");
    $result->bindValue(1, $imagePath);
    $result->bindValue(2, $_SESSION['Username']);
    $result->execute();
    move_uploaded_file($imageTmpName, $imagePath); 
    header ("location: webcam.php");
?>