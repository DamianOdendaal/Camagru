<html lang="en">
    <head>
        <style>
                    
       </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="content">
            <form method = "post" action="posting.php" enctype = "multipart/form-data">
                <input type="hidden" name = "size" value="1000000">
                    <div>
                        <input type="file" name = "image">
                    </div>
                    <div>
                        <textarea name="text" placeholder = "Put a story behind your picture" cols="40" rows="3"></textarea>
                    </div>
                    <div>
                        <input type="submit" name = "upload" value = "upload_image">
                    </div>
            </form>
        </div>
    </body>
</html> 