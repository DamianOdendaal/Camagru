<?php
    require_once ("database.php");
    require_once ("connect.php");
    require_once ('mail_func.php');
    session_start();
    
    try
    {
        // print_r($_SERVER);
        $check = $conn->prepare("SELECT Username, Email FROM camagru.users as u WHERE u.Username = ? OR u.Email = ?");
        $check->bindParam(1, $_POST['Username']);
        $check->bindParam(2, $_POST['Email']);
        $check->execute();
        $results = 0;
        $result_count = 0;
        if ($results == $result_count)
        {
            $result_count += 1;
            $_SESSION['Username'] = $_POST["Username"];
            $username = $_POST["Username"];
            $password_hash = hash("sha512", $_POST["Password"]);
            // echo "Username = ".$username . "Passowrd".$password_hash;
        
            $statement = $conn->prepare('INSERT INTO camagru.`users` (`Username`, `Password`, `Email`, `Token`) VALUES (?, ?, ?, ?)');
            $vkey = hash("sha512", $username . $_POST['Email']);
            $statement->execute(
                array(
                    $username,
                    $password_hash,
                    $_POST['Email'],
                    $vkey
                )
            );
            $to = $_POST['Email'];
            $subject = "Verification link";

            sendVerification($to, $subject, $msg);
            header("location: confirmation.php");
        }
        else
            header("location: already_exists.php");

    } catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>