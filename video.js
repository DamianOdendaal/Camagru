(function() {
    var captureButton = document.getElementById('capture');
    captureButton.addEventListener("click", onCapture);	
    var canvas = document.getElementById('canvas'),
    context = canvas.getContext('2d'),
    svg = document.getElementById('svg'),  
    star = document.getElementById('star'),
    smart = document.getElementById('smart'),
    crown = document.getElementById('crown'),                
    video = document.getElementById('video');
    star.addEventListener("mouseover", Stickers);

    // vendorURL = window.URL || window.webkitURL;	

    navigator.getMedia =    navigator.getUserMedia ||
                            navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia ||
                            navigator.msGetUserMedia;

    navigator.getMedia({
        video: true,
        audio: false
    }, function(stream){
        video.srcObject = stream;
        video.play();
    }, function(error){
        console.log('error');
    });
    
    function onCapture() {
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        // console.log(canvas.toDataURL());
    }
    
    function Stickers() {
        // context.drawImage(video, 0, 0, canvas.width, canvas.height);
        video.play();
        context.drawImage(svg, 0, 0, svg.width , svg.height);
    }
    function drawPattern(){
        var svgns = "http://www.w3.org/2000/svg",
        container = document.getElementById( 'cont' );
        for (var x = 0; x < 500; x += 20) {
            for (var y = 0; y < 300; y += 50) {
               var circle = document.createElementNS(svgns, 'circle');
               circle.setAttributeNS(null, 'cx', x);
               circle.setAttributeNS(null, 'cy', y);
               circle.setAttributeNS(null, 'r', 50);
               circle.setAttributeNS(null, 'style', 'fill: none; stroke: purple; stroke-width: 1px; opacity: 1;' );
               container.appendChild(circle);
            }
        }
    }
})();
