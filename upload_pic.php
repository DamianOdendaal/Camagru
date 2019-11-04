<?php
    if (isset($_POST['submit'])){
        $files = $_FILES['file'];
        // print_r($files);
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $actualFileExt = strtolower(end($fileExt));

        $allowedExt = array('jpg', 'jpeg', 'png' , 'pdf', 'gif' );

        if (in_array($actualFileExt, $allowedExt)){
            if ($fileError === 0){
                 if ($fileSize < 1000000){
                    $NewFileName = uniqid('', true).".".$actualFileExt;
                    $FileDestination =  'images'.$NewFileName;
                    move_uploaded_file($fileTmpName,$FileDestination);
                    
                 }else{
                    echo "Your file is too big";
                 }
            }else{
                echo "There was a problem uploading your file";
            }
        }
        else
            echo "You are not able to upload files of this type";
    }

?>