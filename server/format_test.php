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
  opacity: 0.5%;
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
  background-color:#1EE2E2;
  float:right;
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
    background-image: url('https://images.unsplash.com/photo-1500521680613-a8f77c5cd0f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');
    background-repeat: no-repeat;
    background-size:cover;
    /* background-position:center; */
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

<div style="background-color:#1EE2E2; padding:15px; text-align:center; ">
  <h1>Camagru</h1>
</div><br/>

<div style="overflow:auto">
  

  <div class="main">
    <h2>Click below to add a specific filter</h2>
  </div>

  <div class="right">
    <div class = ""><h2>My Gallery</h2><br/>
        <div class="menu">
            <a href="#">Picture 1</a>
            <a href="#">Picture 2</a>
            <a href="#">Picture 3</a>
            <a href="#">Picture 4</a>
        </div>
  </div>
</div>

<div style="background-color:#1EE2E2; text-align:center; padding:10px; margin-bottom:0%;">© copyright Camagru.com</div>  <!-- fix this margin to work with the bottom-->

</body>
</html>