<?php
    session_start();
    include ("connect.php");
    $_SESSION["Email_P"] = $_POST["Email"];;
    $email = $_SESSION["Email_P"];
    $subject = "<i>Camagru</i> - Password Reset";
    $header = 'MIME-Version: 1.0'."\r\n";
    $header .= 'Content-type: text/html; charset=UTF-8'."\r\n";
    $header .= 'From: Camagru@DoNotReply.co.za'."\r\n";
    $pro_name = explode("/", $_SERVER['SCRIPT_NAME']);
    $var = $_SERVER['HTTP_HOST'];
    $s = "/";
    $ples = $var.$s.$pro_name[1];
    $message = '
     <html>
         <head>
             <title>'.$subject.'</title>
         </head>
         <body>
             To reset your password, please click the link below <br>
             <a href="http://'.$ples.'/pass_reset.php">Verify my email</a><br>
             Alternatively, if the link does not work, paste the url:<br> http://'.$ples.'/pass_reset.php<br>
         </body>
     ';
    mail($email, $subject, $message, $header);
    echo "An email has been sent to ".$email;
    // header("location: link_pass.php");
?>