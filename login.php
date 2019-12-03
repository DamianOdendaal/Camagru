 <!DOCTYPE html>
<html>
    <head>
        <title>
            Signup
        </title>
        <style>
          body {
                background: url('https://images.unsplash.com/photo-1574281183650-14db8f28c259?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80') no-repeat;
                background-size: cover;
                background-position:center;
            }
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
                color: black;
            }
        </style>
    </head>
    <body>
        <form action="authenticated.php" method="post">
            <br />
            <fieldset class="border">
                <legend>Login</legend>
                <img class="logo" src="Pictures/Untitled.png">
                <p><input class="bs" type="text"  name="Username" placeholder=" Enter Username"  title="Username is not valid" required></p>
                <p><input class="bs" type="password"  name="Password" placeholder=" Enter Password" pattern="(?=.*[A-Z0-9])(?=.*[a-z]).{8,}" title="Password not valid" required></p>
                <input class="submit" type="submit" name="Submit" value="Login">
                <p class="bs_3">OR</p>   
                <a style="font-family: monospace; position: relative; left: 102px; font-size: 15px" href="forgot_password.php">forgot password</a>
            </fieldset>
        </form>
        <section class="bs_2">
            <div class="example">Do nots have an account yet?
                <a href="sign_up.php">Sign Up</a></div>
        </section>
    </body>
</html>