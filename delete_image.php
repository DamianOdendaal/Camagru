<?php
    require_once ("connect.php");
    function delete_image($image_name)
    {
        $result_set = $conn->prepare("DELETE FROM images WHERE Image=?");
        $result_set->bindValue(1, $image_name);
        $result_set->execute();
    }
?>