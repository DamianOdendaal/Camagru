<?php
    include ("connect.php");
    session_start();
    if (isset($_SESSION['Username']))
    {
        if (count($_POST) > 0)
        {      
            if (isset($_POST['new_pass']))
            {
                if (isset($_POST['old_pass']))
                {
                    $new_pass = $_POST['new_pass'];
                    $old_pass = $_POST['old_pass'];
                    $username = $_SESSION['Username'];
                    $db_pass = $conn->query("SELECT Password FROM camagru.users WHERE Username='$username'");
                    $pass = $db_pass->fetch();
                    $hashed_old_pass = hash("Sha512", $old_pass);
                    if ($pass[0] === $hashed_old_pass)
                    {
                        $result = $conn->prepare("UPDATE camagru.users SET Password=? WHERE Username=?");
                        $hashed_new_pass = hash("Sha512", $new_pass);
                        $result->bindValue(1, $hashed_new_pass);
                        $result->bindValue(2, $username);
                        $result->execute();
                        $_SESSION['Password'] = $_POST['new_pass'];
                    }
                    else
                    {
                    }
                }
            }
            if (isset($_POST['email']))
            {
                $username = $_SESSION['Username'];
                $result_set = $conn->query("SELECT Email FROM camagru.users WHERE Username='$username'");
                $db_email = $result_set->fetch();
                $new_email = $_POST['email'];
                $result = $conn->prepare("UPDATE camagru.users SET Email=? WHERE Username=?");
                $result->bindValue(1, $new_email);
                $result->bindValue(2, $username);
                $result->execute();
            }
            if (isset($_POST['username']))
            {
                $username = $_SESSION['Username'];
                $new_username = $_POST['username'];
                $result_set = $conn->query("SELECT Username FROM camagru.users WHERE Username='$username'");
                $db_username = $result_set->fetch();
                $result = $conn->prepare("UPDATE camagru.users SET Username=? WHERE Username=?");
                $result->bindValue(1, $new_username);
                $result->bindValue(2, $db_username[0]);
                $result->execute();
                $_SESSION['Username'] = $new_username;
            }
            if (isset($_POST['notification']))
            {
                $username = $_SESSION['Username'];
                $prefence = $_POST['notification'];
                if ($prefence == "Yes")
                {
                    $conn->query("UPDATE camagru.users SET Notification='$prefence' WHERE Username='$username'");
                    $_SESSION['Pref'] = "Yes";
                }
                if ($prefence == "No")
                {
                    $conn->query("UPDATE camagru.users SET Notification='$prefence' WHERE Username='$username'");
                    $_SESSION['Pref'] = "No";
                }
            }
        }
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
            .password {
                position: relative;
                top: 70px;
                left: -365PX;
                margin-right: 5px;
            }
            .P_title {
                font-family: monospace;
                font-size: 15px;
                position: relative;
                top: 60px;
                left: -365PX;
            }
            .E_title {
                font-family: monospace;
                font-size: 15px;
                position: relative;
                top: 90px;
                left: 24px;
            }
            .email {
                position: relative;
                top: 115px;
                left: -71px;
            }
            .U_title {
                font-family: monospace;
                font-size: 15px;
                position: relative;
                top: 132px;
                left: 24px;
            }
            .username {
                position: relative;
                top: 159px;
                left: -97px;
            }
            .prefence{
                position: relative;
                top: 200px;
                left: -143px;
            }
            .prefence_2{
                position: relative;
                top: 225px;
                left: -196px;
            }
            .Pr_title {
                font-family: monospace;
                font-size: 15px;
                position: relative;
                top: 172px;
                left: 24px;
            }
            .yes {
                font-family: monospace;
                font-size: 15px;
                position: relative;
                top: 200px;
                left: -140px;
            }
            .no {
                font-family: monospace;
                font-size: 15px;
                position: relative;
                top: 226px;
                left: -190px;
            }
            .enotification {
                position: relative;
                top: 255px;
                left: -238px;
            }
        </style>
        
    </head>
    <body>
        <header class="heading">
            <img class="logo" src="Pictures/Untitled.png">
            <a class="logout" href="log_user_off.php">logout</a>
        </header>
        <body>
            <nav>
            <a class="cam" href="webcam.php">CAMERA</a>
                <a class="gal" href="user_gallery.php">POST</a>
                <a class="user_gal" href="my_gallery.php">MY_GALLERY</a>
                <a class="user_gal" href="edit_info.php">Edit_Profile</a>
            </nav>
            <main>
                <form action="update_info.php" method="post">
                    <span class="P_title">Edit password</span>
                    <br />
                    <input class="password" type="password" name="new_pass" placeholder="New Password">
                    <input class="password" type="password" name="old_pass" placeholder="Old Password">
                    <input class="password" type="submit" value="submit" value="submit">
                </form>
                <form action="" method="post">
                    <span class="E_title">Edit email</span>
                    <input class="email" class="email" type="email" name="email" placeholder="Enter new Email">
                    <input class="email" type="submit" value="submit">
                </form>
                <form action="" method="post">
                    <span class="U_title">Edit username</span>
                    <input class="username" type="text" name="username" placeholder="Enter new Username">
                    <input class="username" type="submit" value="submit">
                </form>
                <form action="" method="post">
                    <span class="Pr_title">Email notification</span>
                    <input class="prefence" type="radio" name="notification" value="Yes">
                    <span class="yes">Yes</span>
                    <input class="prefence_2" type="radio" name="notification" value="No">
                    <span class="no">No</span>
                    <input class="enotification" type="submit" name="submit" value="submit">
                </form>
            </main>
        </body>
    </body>
</html>