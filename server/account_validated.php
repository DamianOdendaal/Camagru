// add a box that has a message that says that you have successfully registered but make the message and the part where you can login one div thats centered 

<html>
	<head>
		<style>
			form {
				margin-top: 40%;
				text-align: center;
			}
			body {
				background: url('https://images.unsplash.com/photo-1506638794690-bbea5c6f0ab7?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80');
            background-repeat: no-repeat;
				/* height:100%; */
				background-size:cover;
			}
		</style>
	</head>
	<body>
		<div class="sign">
  			<form action="" method="POST">
    			<fieldset>
			<legend>Forgot your password ?</legend>
      				<label for="name">Please enter your <u>Email</u>.<br>A reset password link<br>will be sent to your<br>email address.<br><br></label><input type="email" name="username" maxlength="64" required><br>
    			</fieldset>
    				<p style="text-align: center;"><input class="submit-btm" type="submit" value="Send"></p>
  			</form>
		</div>
	</body>

</html>
