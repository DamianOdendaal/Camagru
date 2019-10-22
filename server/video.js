(function() {
    var captureButton = document.getElementById('capture');
    captureButton.addEventListener("click", onCapture);		//google
    var canvas = document.getElementById('canvas'),
    context = canvas.getContext('2d'),
    video = document.getElementById('video');

    vendorUrl = window.URL || window.webkitURL;		// google 

    navigator.getMedia =    navigator.getUserMedia ||
                            navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia ||
                            navigator.msGetUserMedia;

    var streamObj;
    navigator.getMedia({
        video: true,
        audio: false
    }, function(stream){
        streamObj = stream;		// test without using the stream object here
        video.srcObject = stream;
        video.play()
    }, function(error){
        console.log('h');
    });

    function onCapture() {
        console.log(canvas.width, canvas.height); // remember to remove these
        console.log(canvas.width, canvas.height);
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
    }
})();

