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
    }
                // function intoTable(){
                    var x = document.createElement("TABLE");
                    x.setAttribute("id", "myTable");
                    document.body.appendChild(x);
                  
                    var y = document.createElement("TR");
                    y.setAttribute("id", "myTr");
                    document.getElementById("myTable").appendChild(y);
                  
                    var z = document.createElement("TD");
                    var t = document.createElement("IMG");
                    t.setAttribute("src", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsGd_YwYO_jSZuhD5Ll4XI8tYz-IRJuAsc9XhBe34HYjUG_Uey&s");
                    z.appendChild(t);
                    document.getElementById("myTr").appendChild(z);
                // }
})();
