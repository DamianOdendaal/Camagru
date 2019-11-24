<?php
    include ("connect.php");
    session_start();
    $_SESSION['pic_loc'] = $_GET['pic'];

  
    if (isset($_POST['comment']))
    {
        //mailing the notification on comment.
        $image = $_GET['pic'];
        $result_set = $conn->query("SELECT Username FROM camagru.images WHERE Image='$image'");
        $image_owner = $result_set->fetch();
        $result_set1 = $conn->query("SELECT Email FROM camagru.users WHERE Username='$image_owner[0]'");
        $email = $result_set1->fetch();
        $commentor = $_SESSION['Username'];
        $subject = "<i>Camagru</i> - Image Comment";
        $msg = "$commentor has recently commented on your image. Lets go see what $commentor said about your picture!";
        if ($_SESSION['Pref'] == "Yes"){
            mail($email[0], $subject, $msg);
        }

        // storing comments 
        $result = $conn->prepare("INSERT INTO camagru.`comments` (`Comment`, `Username`, `Image`) VALUES (?, ?, ?)");
        $result->bindValue(1, $_POST['comment']);
        $result->bindValue(2, $_SESSION['Username']);
        $result->bindValue(3, $_GET['pic']);
        $result->execute();
    }
    $img = $_GET['pic'];
    $result1 = $conn->query("SELECT * FROM camagru.likes WHERE Image='$img'");
    $amount = $result1->fetchall();
    $likes = count($amount);
    if (isset($_POST['like']))
    {
        //sending likes notification.
        $image = $_GET['pic'];
        $result_set = $conn->query("SELECT Username FROM camagru.images WHERE Image='$image'");
        $image_owner = $result_set->fetch();
        $result_set_01 = $conn->query("SELECT Email FROM camagru.users WHERE Username='$image_owner[0]'");
        $email = $result_set_01->fetch();
        $liker = $_SESSION['Username'];
        $subject = "<i>Camagru</i> - You got a like!";
        $msg = "$liker has recently liked your image. Lets go see which picture $liker liked";
        if ($_SESSION['Pref'] == "Yes"){
            mail($email[0], $subject, $msg);
        }

        //storing likes/
        $result_00 = $conn->prepare("INSERT INTO camagru.`likes` (`Username`, `Image`) VALUES (?, ?)");
        $result_00->bindValue(1, $_SESSION['Username']);
        $result_00->bindValue(2, $_GET['pic']);
        $result_00->execute();
    }
?>
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
        </style>
    </head>
    <body>
        <header class="heading">
            <a href ="user_gallery.php"><img class="logo" src="Pictures/Untitled.png"></a>
            <?php if ($_SESSION) {?>
            <a class="logout" href="log_user_off.php">logout</a>
            <?php }?>
        </header>
        <main >
            <img witdh="350px" height="350px" src='<?php echo $_GET['pic']?>'>
            <?php 
            if ($_SESSION) {
            ?>
            <form action="" method="post">
                <input type="text" name="comment" placeholder="Enter a comment" style="float: left; width: 270px;">
            </form>
            <?php if ($_SESSION)
            { 
                $image_path = $_GET['pic'];
                $result_set = $conn->query("SELECT Username FROM camagru.images WHERE Image='$image_path'");
                $array = $result_set->fetchall();
                if (count($array) > 0)
                {
                    if ($_SESSION['Username'] == $array[0]['Username'])
                    {
                ?>
                <form action="my_gallery.php" method="post">
                    <input type="submit" name="delete" value="delete">
                </form>
                <?php
                    }
                    else {
                        echo "Page invalid";
                    }
                }
            }?>
            <form action="" method="post">
                <input type="submit" name="like" value="like" style="margin-left: 20px; width: 60px;">
                
                <span><?php 
                        if($likes != 0)
                        {
                            echo $likes;
                        }
                       ?>
                </span>
            </form>
            <?php 
            }?>
        </main>
    </body>
</html>
<?php
    if ($_SESSION)
    {
        $image = $_GET['pic'];
        $result_01 = $conn->query("SELECT Comment, Username FROM camagru.comments WHERE Image = '$image'");
        $array = $result_01->fetchall();
        echo '<html>';
        echo '<textarea rows="4" cols="60" style="margin-top: 5px; resize: none;" readonly>';
                    $index = 0;
                    while ($index < count($array))
                    {
                        echo $array[$index]['Username'].": ".$array[$index]['Comment'];
                        echo "\n";
                        $index++;
                    }
        echo '</textarea>';
        echo '';
        echo '</html>';
    }
?>