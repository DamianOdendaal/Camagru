<?php
    session_start();
    include ("connect.php");
    // print_r($_POST);
    if (array_key_exists("s1", $_POST))
        $img = $_POST['s1'];
    elseif (array_key_exists("s2", $_POST))
        $img = $_POST['s2'];
    elseif (array_key_exists("s3", $_POST))
        $img = $_POST['s3'];
    else
        $img = $_POST['img'];

    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = 'tmp_img/img'.date('YmdHis').'.png';   
    file_put_contents($file, $data);
    $_SESSION['tmp_loc'] = $file;
    $dst = imagecreatefrompng($file);


    header("location: filter_1.php");
    header('Content-Type: image/png');
    imagepng($dst);
    imagedestroy($dst);
?>
