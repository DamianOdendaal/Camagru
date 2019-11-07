<html>
<body>

<svg id="cont"></svg>

<script>

    var svgns = "http://www.w3.org/2000/svg",
    container = document.getElementById( 'cont' );
for (var x = 0; x < 500; x += 50) {
    for (var y = 0; y < 300; y += 50) {
        var circle = document.createElementNS(svgns, 'circle');
        circle.setAttributeNS(null, 'cx', x);
        circle.setAttributeNS(null, 'cy', y);
        circle.setAttributeNS(null, 'r', 50);
        circle.setAttributeNS(null, 'style', 'fill: none; stroke: blue; stroke-width: 1px;' );
        container.appendChild(circle);
    }
}



</script>

</body>
</html>