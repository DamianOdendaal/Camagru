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
    // $FileDest = 'Uploads/'.$file;
    move_uploaded_file($ImgTmpName, $file);
    
    // $FExt = explode(".", $ImgName);
    // $FileExtention = strtolower(end($FExt));
    // $AllowedExt = array("jpg","jpeg", "png");
    
    $result = $conn->prepare("INSERT INTO camagru.`images` (`Image`, `Username`) VALUES (?, ?)");
    $result->bindValue(1, $file);
    $result->bindValue(2, $_SESSION['Username']);
    $result->execute();
    // file_put_contents($file, $ImgName);        
    header("location: post_post.php");
?>