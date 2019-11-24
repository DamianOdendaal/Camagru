(function () {
     var video = document.getElementById('video'),
         vendorUrl = window.URL || window.webkitURL,
         canvas = document.getElementById('canvas'),
         context = canvas.getContext('2d'),
        //  image = document.getElementById('image');
        inp_img = document.getElementById('img_sub');

     navigator.getMedia = navigator.getUserMedia ||
         navigator.webkitGetUserMedia ||
         navigator.mozGetUserMedia ||
         navigator.msGetUserMedia;
     
     navigator.getMedia({
         video: true,
         audio: false
     }, function (stream) {
         video.srcObject = stream;
         video.play();
     }, function (error) {
         console.log('error');
     })
     
     document.getElementById('pic_button').addEventListener('click', function () {
        context.drawImage(video, 0, 0, 400, 300);
        image.setAttribute('src', canvas.toDataURL('image/png'));
     });
   //  inp_img.setAttribute('value', canvas.toDataURL('image/png'));
 }) ();

function upload_img()
{
    var inp_img = document.getElementById('img_sub');
    var canvas = document.getElementById('canvas');
    inp_img.setAttribute('value', canvas.toDataURL('image/png'));
}
function tmp_upload()
{
    var inp_img = document.getElementById('tmp_img');
    var canvas = document.getElementById('canvas');
    inp_img.setAttribute('value', canvas.toDataURL('image/png'));
}
function tmp_u2()
{
    var inp_img = document.getElementById('tmp_i2');
    var canvas = document.getElementById('canvas');
    inp_img.setAttribute('value', canvas.toDataURL('image/png'));
}
function tmp_u3()
{
    var inp_img = document.getElementById('tmp_i3');
    var canvas = document.getElementById('canvas');
    inp_img.setAttribute('value', canvas.toDataURL('image/png'));
}