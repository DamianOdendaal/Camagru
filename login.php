<html>
	<head>

		<style>
		* {
  margin: 0px;
  padding: 0px;
}

body {
  background: url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
  background-size:cover;
	width:100%;
	height:100%;
	font-size: 200%;
	background-position: center;
}

#wrapper {
  width: 500px;
  height: 50%;
  overflow: hidden;
  border: 0px solid #000;
  margin: 50px auto;
  padding: 10px;
}

.main-content {
  width: 250px;
  height: 40%;
  margin: 10px auto;
  background-color: #fff;
  border: 2px solid #e6e6e6;
  padding: 40px 50px;
}

.header {
  border: 0px solid #000;
  text-align: center;
  font-family: Bookman, URW Bookman L, serif;
  margin-bottom: 5px;
  font-size: 25px;
}

.header img {
  height: 50px;
  width: 175px;
  margin: auto;
  position: relative;
  left: 40px;
}

.input-1,
.input-2 {
  width: 100%;
  margin-bottom: 5px;
  padding: 8px 12px;
  border: 1px solid #dbdbdb;
  box-sizing: border-box;
  border-radius: 3px;
}

.overlap-text {
  position: relative;
}

.overlap-text a {
  position: absolute;
  top: 8px;
  right: 10px;
  color: #003569;
  font-size: 14px;
  text-decoration: none;
  font-family: 'Overpass Mono', monospace;
  letter-spacing: -1px;
}

.btn {
  width: 100%;
  background-color: #3897f0;
  border: 1px solid #3897f0;
  padding: 5px 12px;
  color: #fff;
font-weight: bold;
  cursor: pointer;
  border-radius: 3px;
}

.sub-content {
  width: 250px;
  height: 40%;
  margin: 10px auto;
  padding: 20px 50px;
}

.s-part {
  text-align: center;
  font-family: 'Overpass Mono', monospace;
  word-spacing: -3px;
  letter-spacing: -2px;
  font-weight: normal;
}

.s-part a {
  text-decoration: none;
  cursor: pointer;
  color: #3897f0;
  font-family: 'Overpass Mono', monospace;
  word-spacing: -3px;
  letter-spacing: -2px;
  font-weight: normal;
}
		</style>
	</head>
	<body>
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">

<div id="wrapper">
  <div class="main-content">
    <div class="header">
		<span>Camagru</span>
    </div>
    <div class="l-part">
      <input type="text" placeholder="Username" class="input-1" />
      <div class="overlap-text">
        <input type="password" placeholder="Password" class="input-2" />
        <a href="forgot_p.php">Forgot?</a>
      </div>
      <input type="button" value="Log in" class="btn" />
    </div>
  </div>
  <div class="sub-content">
    <div class="s-part">
      Don't have an account?<a href="sign_up.php">Sign up</a>
    </div>
  </div>
</div>
	</body>

</html>

