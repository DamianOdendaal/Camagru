<?php
    require_once ("Config/connect.php");
    require_once ('mail_func.php');
    session_start();
    
    try
    {
        $username = $_POST['Username'];
        $email = trim($_POST['Email']);
        if (trim($_POST['Username']) == NULL || trim($_POST['Username']) == ''){
            header("location: Please.php");
        }
        $password = $_POST["Password"];

        $check = $conn->prepare("SELECT Username, Email FROM camagru.users as u WHERE u.Username = ? OR u.Email = ?");
        $check->bindParam(1, $username);
        $check->bindParam(2, $email);
        $check->execute();

        $res = $conn->prepare("SELECT Username FROM camagru.users WHERE Username =?");
        $res->bindParam(1, $username);
        $res = $conn->execute();

        // $res = $conn->execute();
        // print_r($res);


        if (1)
        {
            $_POST['Username'] = $username;                      
            $password_hash = hash("sha512", $password);
        
            $vkey = hash("sha512", $username . $email);


            $statement = $conn->prepare('INSERT INTO camagru.`users` (`Username`, `Password`, `Email`, `Token`) VALUES (?, ?, ?, ?)');
            $statement->execute(
                array(
                    $username,
                    $password_hash,
                    $email,
                    $vkey
                )
            );


            $to = $email;
            $subject = "Camagru - Verification link";

            sendVerification($to, $subject);
            header("location: confirmation.php");
        }
        else
        {
            echo '';
        }
            header("location: already_exists.php");

    }



    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>