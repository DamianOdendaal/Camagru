<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
.menu {
  float:left;
  width:20%;
  text-align:center;
} 
.menu a {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;
} 
.main {
  float:left;
  width:60%;
  padding:0 20px;
}
.right {
  background-color:#e5e5e5;
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}

h1 {
    font-family:calibri;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>
</head>
<body style="font-family:Verdana;color:#aaaaaa;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1>Camagru</h1>
</div>

<div style="overflow:auto">
  <div class="menu">
    <a href="#">Picture 1</a>
    <a href="#">Picture 2</a>
    <a href="#">Picture 3</a>
    <a href="#">Picture 4</a>
  </div>

  <div class="main">
    <h2>Click below to add a specific filter</h2>
  </div>

  <div class="right">
    <h2>My Gallery</h2>
  </div>
</div>

<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© copyright Camagru.com</div>

</body>
</html>