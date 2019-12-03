<?php
    session_start();
    require_once ("Config/connect.php");

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
