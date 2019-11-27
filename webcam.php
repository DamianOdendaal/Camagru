<!DOCTYPE html>
<html>
    <head>
        <style>
            .heading {
                border-bottom: 1px solid #cac6c6;
                background-color: white;
            }
            body {
                background: url('https://images.unsplash.com/photo-1492931307820-62fa5a68e0df?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat;
                background-size: cover;
                /* background-position: center; */
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
                position: relative;
                top: 5px;
                left: 218px;
                border: 2px solid black;
                display:;
            }
            #image {
                width: 400px;
                height: 300px;
                position: relative;
                top: 40px;
                left: 218px;
            }
               .user_gal {
                font-size: 30px;
                color: #2f2e2f;
                position: relative;
                top: 12px;
                margin-left: 15px;
                float: left;
            }
            button {
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
        <header class="heading">
        <a href = "user_gallery.php"><img class="logo" src="Pictures/Untitled.png"></a>
            <a class="logout" href="log_user_off.php">logout</a>
        </header>
        <nav>
        <a class="cam" href="webcam.php">CAMERA</a>
                <a class="cam" href="pagination.php">GALLERY</a>
                <a class="gal" href="user_gallery.php">POST</a>
                <a class="user_gal" href="my_gallery.php">MY_GALLERY</a>
                <a class="user_gal" href="edit_info.php">Edit_Profile</a>
        </nav>
         <div class="booth">
            <video id="video" width="400px" height="300px"></video>
            <button><a href="#" id="pic_button">take pic</a></button>
            <canvas id="canvas" width="400px" height="300px"></canvas>
            <!-- <img id="image" src="" hidden> -->
        </div>
        <div style="position: relative; top: 100px; left: 20px;">
            <form action="submit_page.php" method="post" onsubmit="upload_img();">
                <input id="img_sub" name="img" type="hidden" value="">
                 <input id="img_upload" type="submit" value="Upload">
             </form>
            <form action="process_tmp_img.php" method="post" onsubmit="tmp_upload();">
                <input  id="tmp_img" name="s1" type="hidden" value="">
                <input type="submit" value="sticker_1">
            </form>
            <form action="process_tmp_img.php" method="post" onsubmit="tmp_u2();">
                <input  id="tmp_i2" name="s2" type="hidden" value="">
                <input type="submit" value="sticker_2">
            </form>
            <form action="process_tmp_img.php" method="post" onsubmit="tmp_u3();">
                <input  id="tmp_i3" name="s3" type="hidden" value="">
                <input type="submit" value="sticker_3">
            </form>
        </div>
        <script src="photo.js">
        </script>
    </body>
</html>