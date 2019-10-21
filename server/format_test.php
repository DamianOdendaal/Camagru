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
    color: 
}
body {
    font-family:Verdana;
    background-image: url('https://images.unsplash.com/photo-1452587925148-ce544e77e70d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80');
    background-size: 100%;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>
</head>
<body>

<div style="background-color:#A45AE2; padding:15px; text-align:center; ">
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