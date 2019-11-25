<?php
    function sendVerification($email, $token){
        $subject = "<i>Camagru</i> - Email Verification";
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

?>