<?php
    session_start();
    require_once ("connect.php");
    try {
        $_SESSION['Username'] = $_POST["Username"];
        $username = $_POST["Username"];
        $result = $conn->prepare("UPDATE camagru.users SET Status = 'Active' WHERE Username='$username'");
        $result->execute();
        $password_hash = hash("sha512", $_POST["Password"]);
        $statement = $conn->query("SELECT Username, Password, Status FROM camagru.users");
        $authenticate = $statement->fetchall();
        $index = 0;

        while ($index < sizeof($authenticate)){
            $array = $authenticate[$index];
            if ($_SESSION['Username'] === $array['Username'])
            {
                if (($password_hash === $array['Password']))
                {
                    header("location: index_logged.php");
                    // echo "This should work!";
                }else
                    echo "Invalid Password";
            }else {
                echo "Usernames dont match!";
            }
            $index++;
        }
            
    }
    catch(PDOException $e){
        print_r($e);
    }
?>