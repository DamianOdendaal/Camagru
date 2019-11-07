(function() {
    var captureButton = document.getElementById('capture');
    captureButton.addEventListener("click", onCapture);	
    var canvas = document.getElementById('canvas'),
    context = canvas.getContext('2d'),                  
    video = document.getElementById('video');

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
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        // console.log(canvas.toDataURL());
    }
})();
