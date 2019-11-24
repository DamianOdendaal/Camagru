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
                margin-top: -20;
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
            #exists {
                font-size: 10px;
                position: relative;
                left: 22px;
                top: 8px;
                font-family: monospace;
                color: red;
            }
            .OR {
                font-family: monospace;
                color: gray;
                text-align: center;
                margin-top: -1px;
                font-size: 16px;
            }
            .forgot {
                font-family: monospace;
                text-align: center;
                font-size: 14px;
            }
        </style>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <form action="reset.php" method="post">
            <br />
            <fieldset class="border">
                <legend>Reset Password</legend>
                <img class="logo" src="Pictures/Untitled.png">
                <p><input class="bs" type="password" name="Newpass" Placeholder=" New Password" pattern="{1,}" title="password is not valid" required></p>
                <input class="submit" type="submit" name="Submit" value="Reset Password">
            </fieldset>
        </form>
        <section class="bs_2">
            <div class="bs_3">Dont have an account?
                <a href="index.php">Sign Up</a></div>
        </section>
    </body>
</html>