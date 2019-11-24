<?php
    session_start();
    $dst = imagecreatefrompng($_SESSION['tmp_loc']);
    $src = imagecreatefrompng("stickers/sticker_1.png");
    imagecopymerge($dst, $src, 140, 80, 10, 10, 10, 10, 0);
?>