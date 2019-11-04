<?php
	include ('database.php');
	$message = "";

    // condition to check if the submit button was pressed, if its pressed we give it the path to store the uploaded pic
    if (isset($_POST['upload'])){
        $target = "images/".basename($_FILES['image']['name']);

        // connect to the database
        $connect = new PDO($DB_SERVER, $DB_USER, $DB_PASSWORD);                                                                     //come here and add the database name

        // get all of the data that was submitted from the form

        $images = $_FILES['image']['name'];
        $text = $_POST['text'];

        $sql = "INSERT INTO images (image, text) VALUES ('$images', '$text')";

        $connect->exec($sql); // this stores the values into the database table (images)
    }

	// now we move the images to the images dir
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target))				//try tmp_name if you get any bugs
		$message = "Image has successfully uploaded";
	else 
		$message = "There is a problem loading your image.";
                                                                  // if anything is breaking for no good reason then check the occurences of image and change them to images 
?>


<html lang="en">
    <head>
        <style>
            #images {
                width: 50%;
                margin: 20px auto;
                border: 2px solid black;
            }
            form {
                margin: 20px auto;
                width: 50%;
            }
            form div {
                margin-top: 5px;
            }
            #img_div {
                width: 80%;
                padding: 5px;
                margin: 15px auto;
                border: 2px solid black;
            }
            #img_div:after {
                images: "";
                display: block;
                clear: both;
            }
            img {
                float: left;
                margin: 5px;
                width: 300px;
                height: 140px;
            }
       </style>
        <meta charset="UTF-8">
        <meta name="viewport" images="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- <div id="images">
	     displaying the images from the database
	<?php
        // $connect = new PDO($DB_SERVER, $DB_USER, $DB_PASSWORD);
		// $sql = 'SELECT * FROM images';
        // while ($pic = $connect->query($sql))
        // {
		// 	echo "<div id = 'img_div'>";                      
		// 		echo "<img src = 'images/".$pic['image']['name']."'>";
		// 		echo "<p>".$pic['text']."</p>";
		// 	echo "</div>";
		// }											
	
	?>
        </div> 
            <form method = "post" action="posting.php" enctype = "multipart/form-data">
                <input type="hidden" name = "size" value="1000000">
                    <div>
                        <input type="file" name = "image">
                    </div>
                    <div>
                        <textarea name="text" placeholder = "Put a story behind your picture" cols="40" rows="3"></textarea>
                    </div>
                    <div>
                        <input type="submit" name = "upload" value = "Upload Image">
                        <a href = "gallery.php"><input type="submit" name = "upload" value = "View Images"></a>
                    </div>
            </form>
        </div>
    </body>
</html>