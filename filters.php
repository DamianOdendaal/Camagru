<!DOCTYPE html>
<html>
  <head>
    <style>

#myCanvas1 {
  margin-left:-11.5%;
  z-index: 1%;
}
    </style>
  </head>
  <body>

    <p>Image to use:</p>
      <img id="scream" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7IP_-27ykB-CR1JJ0BySgI6J7G4evH64RH5CeojKitcGBQDLmjw&s" alt="The Scream" width="220" height="277">
      <img id="big" src="https://images.unsplash.com/photo-1522556189639-b150ed9c4330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="The Scream" width="220" height="277">

  <p>Canvas:</p>
    <canvas id="myCanvas" width="210" height="279" style="border:1px solid #d3d3d3;">Your browser does not support the HTML5 canvas tag.</canvas>
  <canvas id="myCanvas1" width="210" height="279" style="border:1px solid #d3d3d3;">Your browser does not support the HTML5 canvas tag.</canvas>

  <!-- <script>
    window.onload = function() {
      var canvas = document.getElementById("myCanvas");
      var canvas1 = document.getElementById("myCanvas1");
      var big = document.getElementById("big");
      var star = document.getElementBytagName("polygon");
      var ctx = canvas.getContext("2d");
      var ctx1 = canvas1.getContext("2d");
      // var img = document.getElementById("scream");
      var big = document.getElementById("big");
      ctx.drawImage(big, 0 ,0, big.width, big.height);
      ctx1.drawImage(star, 0, 0, star.width, star.height);
    };
</script> -->
    <script scr = "video.js"></script>
</body>
</html>