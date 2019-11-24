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
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = 'tmp_img/img'.date('YmdHis').'.png';   
    file_put_contents($file, $data);
    $_SESSION['tmp_loc'] = $file;
    $dst = imagecreatefrompng($file);
    if (array_key_exists("s1", $_POST))
        $src = imagecreatefrompng("stickers/stickers_1.png");
    elseif (array_key_exists("s2", $_POST))
        $src = imagecreatefrompng("stickers/stickers_2.png");
    elseif (array_key_exists("s3", $_POST))
        $src = imagecreatefrompng("stickers/stickers_3.png");
    if (array_key_exists("s1", $_POST))
        imagecopymerge($dst, $src, 0, 0, 10, 10, 50, 50, 100);
    elseif (array_key_exists("s2", $_POST))
        imagecopymerge($dst, $src, 0, 0, 10, 10, 50, 50, 100);
    elseif (array_key_exists("s3", $_POST))
        imagecopymerge($dst, $src, 0, 0, 10, 10, 50, 50, 100);
    imagepng($dst, $file);
    imagedestroy($dst);
    imagedestroy($src);
    header("location: filter_1.php");
?>