<?php
    session_start();
    include ("connect.php");
    // print_r($_FILES['file']);
    // echo $_POST['img'];
    // $img = $_POST['img'];
    if (isset($_POST['submit']))  
        $img = $_FILES['file'];
    // print_r($img);

    $ImgName = $_FILES['file']['name'];
    $ImgTmpName = $_FILES['file']['tmp_name'];
    $ImgType = $_FILES['file']['type'];
    $ImgSize = $_FILES['file']['size'];
    
    $file = 'Uploads/'.$ImgName;
    $_SESSION['tmp_loc'] = $file;
    move_uploaded_file($ImgTmpName, $file);
    header("location: post_post.php");
?>