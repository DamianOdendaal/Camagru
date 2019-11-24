<!DOCTYPE html>
<html>
    <head>
        <style>
            .heading {
                border-bottom: 1px solid #cac6c6;
                background-color: white;
            }
            body {
                background-color: #f3f2f2;
                margin: 0px;
            }
            .logo {
                margin-left: 20px;
                width: 90px;
            }
            .user_name {
                float: right;
                margin-top: 35px;
                margin-right: 30px;
            }
            .logout {
                float: right;
                margin-top: 35px;
                margin-right: 45px;
            }
            .gallery {
                width: 40px;
                position: relative;
                left: 75px;
                top: -23px;
            }
            a:link {
                text-decoration: none;
                font-family: monospace;
                font-size: 17px;
            }
            .post {
                font-size: 30px;
                color: #2f2e2f;
                position: relative;
                top: 12px;
                margin-left: 15px;
                float: left;
            }
            .cam {
                font-size: 30px;
                color: #2f2e2f;
                position: relative;
                top: 12px;
                margin-left: 15px;
                float: left;
            }
            .upload {
                margin-top: 120px;
                position: relative;
                left: -210px;
            }
            .upload_button {
                margin-top: 120px;
                margin-left: 10px;
                position: relative;
                left: -230px;
            }
            .gal {
                font-size: 30px;
                color: #2f2e2f;
                position: relative;
                top: 12px;
                margin-left: 15px;
                float: left;
            }
            .booth {
                position: relative;
                top: 45px;
                left: -200px;
            }
            .pic_button {
                position: relative;
                top: 30px;
                left: -250px;
            }
            #canvas {
                width: 400px;
                height: 300px;
                position: relative;
                top: 40px;
                left: 218px;
                border: 2px solid black;
                display: none;
            }
            #image {
                width: 400px;
                height: 300px;
                position: relative;
                top: 40px;
                left: 218px;
                border: 2px solid black;
            }
            .img_filter {
                position: relative;
                left: -205px;
                top: 50px;
            }
            .upload_b {
                position: relative;
                top: 55px;
                left: 12px;
            }
            .go_back {
                position: relative;
                top: 55px;
                left: 170px;
            }
        </style>
    </head>
    <body>
        <header class="heading">
            <center><img class="logo" src="Pictures/Untitled.png">
            <a href="user_gallery.php"><img class="gallery" src="Pictures/gallery.png"></a></center>
            <a class="logout" href="log_user_off.php">logout</a>
        </header>
        <nav>
                <a class="post" href="user_gallery.php">POST</a>
                <a class="cam" href="webcam.php">CAMERA</a>
                <a class="gal" href="pagination.php">GALLERY</a>
        </nav>
        <div>
            <?php
                session_start();
                include "connect.php";
            ?>
            <img class="img_filter" src='<?php echo $_SESSION['tmp_loc'];?>'>
            <br />
            <a class="upload_b" href="upload_2.php"><button>upload</button></a>
            <a class="go_back" href="webcam.php"><button>Cancel</button></a>
        </div>
    </body>
</html>