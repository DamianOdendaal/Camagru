<?php
    include ('connect.php');
    session_start();
    print_r($_SESSION);
    $array = explode('/', $_SESSION['tmp_loc']);
    $image_name = $array[1];
    $imageTmpName = $_SESSION['tmp_loc'];
    $imagePath = "Uploads/$image_name";
    $result = $conn->prepare("INSERT INTO camagru.`images` (`Image`, `Username`) VALUES (?, ?)");
    $result->bindValue(1, $imagePath);
    $result->bindValue(2, $_SESSION['Username']);
    $result->execute();
    rename($imageTmpName, $imagePath);
    header ("location: webcam.php");
?>