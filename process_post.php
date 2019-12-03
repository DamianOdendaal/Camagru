<?php
    session_start();
    require_once ("Config/connect.php");
    if (isset($_POST['submit'])) {
        $img = $_FILES['file'];
    }


    $ImgName = $_FILES['file']['name'];
    $ImgTmpName = $_FILES['file']['tmp_name'];
    $ImgType = $_FILES['file']['type'];
    $ImgSize = $_FILES['file']['size'];
    
    $file = 'Uploads/img'.date('YmdHis').'.png';
    move_uploaded_file($ImgTmpName, $file);
    $_SESSION['tmp_loc'] = $file;
    $result = $conn->prepare("INSERT INTO camagru.`images` (`Image`, `Username`) VALUES (?, ?)");
    $result->bindValue(1, $file);
    $result->bindValue(2, $_SESSION['Username']);
    $result->execute();
    // file_put_contents($file, $data);
    header("location: post_post.php");
?>