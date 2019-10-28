<!DOCTYPE html>
<html>
  <body>

    <p>Image to use:</p>
      <img id="scream" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7IP_-27ykB-CR1JJ0BySgI6J7G4evH64RH5CeojKitcGBQDLmjw&s" alt="The Scream" width="220" height="277">
      <img id="big" src="https://images.unsplash.com/photo-1522556189639-b150ed9c4330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="The Scream" width="220" height="277">

  <p>Canvas:</p>
    <canvas id="myCanvas" width="210" height="279" style="border:1px solid #d3d3d3;">
  Your browser does not support the HTML5 canvas tag.</canvas>

  <script>
    window.onload = function() {
      var c = document.getElementById("myCanvas");
      var big = document.getElementById("big");
      var ctx = c.getContext("2d");
      var img = document.getElementById("scream");
      var big = document.getElementById("big");
      ctx.drawImage(big, 0 ,0, big.width, big.height);
      ctx.drawImage(img, 100, 10, 40, 40, 100 ,30, 50 ,60);
      // fix the filter b0ss
    };
</script>
</body>
</html>