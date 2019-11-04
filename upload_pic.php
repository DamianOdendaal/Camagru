<?php
    if (isset($_POST['submit'])){
        $files = $_FILES['file'];
        print_r($files);
        $file_n = $_FILES['file']['name'];
    }

?>