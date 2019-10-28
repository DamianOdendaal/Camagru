<!DOCTYPE html>
<html>
<body>

<p>Image to use:</p>
<img id="scream" src="https://images.unsplash.com/photo-1507908708918-778587c9e563?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="The Scream" width="220" height="277">
<img id="big" src="https://images.unsplash.com/photo-1512542089687-4431ecf9c140?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="The Scream" width="220" height="277">

<p>Canvas:</p>
<canvas id="myCanvas" width="900" height="900" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>
window.onload = function() {
  var c = document.getElementById("myCanvas");
//   var b = document.getElementById("myCanvas");
  var big = document.getElementById("big");
  var ctx = c.getContext("2d");
//   var btx = b.getContext("2d");
  var img = document.getElementById("scream");
  var big = document.getElementById("big");
  ctx.drawImage(big, 10 , 10);
  ctx.drawImage(img, 90, 130, 50, 60, 100, 50, 50, 60);
};
</script>


</body>
</html>