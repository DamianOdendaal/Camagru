<?php
//pattern="[a-zA-Z0-9]+@+[a-zA-Z]+\.{1, }"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Signup
        </title>
        <style>
            .bs {
                border: 1px solid #c0c0c0;
                border-radius: 4px;
                width: 300px;
                height: 35px;
                margin-left: 16px;
                margin-bottom: 12px;
                color: #404040;
            }
            .border {
                border: 1px solid gray;
                width: 340px;
                border-radius: 4px;
                margin: auto;
                margin-top: 10px;
                margin-bottom: 20px;
            }
            legend {
                font-family: monospace;
                font-size: 22px;
                color: #0099ff;
            }
            .submit {
                border: 0px;
                background-color: #0099ff;
                width: 300px;
                height: 35px;
                margin-bottom: 19px;
                margin-left: 16px;
                border-radius: 4px;
                position: relative;
                color: aliceblue;
            }
            .logo {
                margin-left: 88px;
                width: 150px;
                padding: 0px;
                border: 0px;
                height: 130px;
            }
            .tcs {
                text-align: center;
                position: relative;
                top: -27px;
                font-family: monospace;
                font-size: 14px;
                color: #404040;
            }
            .bs_2 {
                margin: auto;
                border: 1px solid gray;
                width: 363px;
                border-radius: 4px;
                font-family: monospace;
                font-size: 15px;
                height: 50px;
            }
            .bs_3 {
                margin-top: 14px;
                margin-right: 8px;
                text-align: center;
            }
        </style>
        <!-- <link rel="stylesheet" href="stylesheet.css"> -->
    </head>
    <body>
        <form action="create.php" method="post">
            <br />
            <fieldset class="border">
                <legend>Signup</legend>
                <img class="logo" src="Pictures/Untitled.png">
                <p class="tcs">By signing up, you agree to our Terms and Conditions.</p>
                <p><input class="bs" type="text" name="Username" placeholder=" Enter Username" pattern="[^]{1,}" title="Username is not valid" required></p>
                <p><input class="bs" type="password" name="Password" placeholder=" Enter Password" pattern="{1,}" title="Password not valid" required></p>
                <P><input class="bs" type="email" name="Email"   placeholder="Enter Email" required></P>
                <input class="submit" type="submit" name="Submit" value="Sign Up">
            </fieldset>
        </form>
        <section class="bs_2">
            <div class="bs_3">Have an account already?
                <a href="login.html">Login</a></div>
        </section>
    </body>
</html>