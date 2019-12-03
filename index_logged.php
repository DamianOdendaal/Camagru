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
                left: -322px;
            }
            .upload_button {
                margin-top: 120px;
                margin-left: 10px;
                position: relative;
                left: -350px;
            }
            .gal {
                font-size: 30px;
                color: #2f2e2f;
                position: relative;
                top: 12px;
                margin-left: 15px;
                float: left;
            }
               .user_gal {
                font-size: 30px;
                color: #2f2e2f;
                position: relative;
                top: 12px;
                margin-left: 15px;
                float: left;
            }
            .img {
                width: 400px;
                height: 400px;
                margin-left: 8%;
            }
        </style>
            <script language = "Javascript">
                function GetFile(e){
                    var FormInput = document.getElementById('up_img'),
                    fileReader = new FileReader();
                    fileReader.readAsDataURL(FormInput.files[0]);
                    fileReader.onloadend = function (e){
                        var string = e.target.result,
                        ImgElem = document.getElementById('ImageFile');
                        ImgElem.src = string;
                
                        function image_upload(){
                            var image = document.getElementById('image'),
                            canvas = document.getElementById('canvas');
                            image.setAttribute('value', canvas.toDataURL('image/png'));
                        }
                    }

                }
            </script>
    </head>
    <body>
        <header class="heading">
            <img class="logo" src="Pictures/Untitled.png">
            <a class="logout" href="log_user_off.php">logout</a>
        </header>
        <body>
            <nav>
            <a class="cam" href="webcam.php">CAMERA</a>
                <a class="cam" href="pagination.php">GALLERY</a>
                <a class="gal" href="user_gallery.php">POST</a>
                <a class="user_gal" href="my_gallery.php">MY_GALLERY</a>
                <a class="user_gal" href="edit_info.php">Edit_Profile</a>
            </nav>
        </body>
    </body>
</html>