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
                        header("location: user_gallery.php");
                        // $_SESSION['Password'] = $_POST['new_pass'];
                    }
                    else
                    {
                        echo "Incorrect Password!";
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
                    $conn->query("UPDATE camagru.users SET Notifications='$prefence' WHERE Username='$username'");
                }
                if ($prefence == "No")
                {
                    $conn->query("UPDATE camagru.users SET Notifications='$prefence' WHERE Username='$username'");
                }
            }
        }
    }
    else
    {
       header ("location: login.html");
    }
?>