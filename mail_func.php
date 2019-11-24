<?php
// include_once 'reset.php';
// function sendVerification($email, $token, $url){
// $subject = "<i>Camagru</i> - Email Verification";
// $header = 'MIME-Version: 1.0'."\r\n";
// $header .= 'Content-type: text/html; charset=UTF-8'."\r\n";
// $header .= 'From: Camagru@DoNotReply.co.za'."\r\n";
// $pro_name = explode("/", $_SERVER['SCRIPT_NAME']);
// $var = $_SERVER['HTTP_HOST'];
// $s = "/";
// $ples = $var.$s.$pro_name[1];
// $message = '
// <html>
//     <head>
//         <title>'.$subject.'</title>
//     </head>
 
//     <body>
//         Thanks for signing up to Camagru.<br>
//         To finalise the sign up process, please click the link below <br>
//         <a href="http://'.$ples.'/verified.php?token='.$token.'">Verify my email</a><br>
//         // Alternatively, if the link does not work, paste the url:<br> http://'.$url.'/verified.php?token='.$token.'<br>
//         // If this email does not concern you, please ignore this email.
//     </body>
// ';
// $retval = mail($email, $subject, $message, $header);
// if ($retval == true)
//     echo "Verification mail has been sent to: ".$email;
// else
//     echo "Error";
// }
// $email = 'dodendaa@student.wethinkcode.co.za';
// $token = 'lol';
// $url = $_SERVER['HTTP_HOST'].str_replace("create.php", "", $_SERVER['REQUEST_URI']);
// sendVerification($email, $token, $url);
?>

<?php
// include_once 'reset.php';
function sendVerification($email, $token, $url){
$subject = "<i>Camagru</i> - Email Verification";
// $header = 'MIME-Version: 1.0'."\r\n";
// $header .= 'Content-type: text/html; charset=UTF-8'."\r\n";
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
        Thanks for signing up to camagru.<br>
        To finalise the sign up process, please click the link below <br>
        <a href="http://'.$ples.'/verified.php?token='.$token.'">Verify my email</a><br>
        Alternatively, if the link does not work, paste the url:<br> http://'.$ples.'/verified.php?token='.$token.'<br>
        If this email does not concern you, please ignore this email.
    </body>
';
$retval = mail($email, $subject, $message, $header);
if ($retval == true)
    echo "Verification mail has been sent to: ".$email;
else
    echo "Error";
}
// $email = 'damian@mailinator.com';
// $token = 'lol';
// $url = 'pathway';
// sendVerification($email, $token, $url);
?>