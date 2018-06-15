
var photo = document.getElementById("canvas").value;

var video = document.getElementById('video');

if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia)
{
  navigator.mediaDevices.getUserMedia({video:true, audio:true}).then(function(stream){
    video.src=window.URL.createObjectURL(stream);
  });
}

var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');

 document.getElementById('snap').addEventListener('click',function(){
  context.drawImage(video,0,0,320,240);
});
 

// var data=new FormData();
// //from inputs
// data.append(photo.name,photo.files[0]);
// data.append('name',name);
// data.append('price',price);
// data.append('quantity',quantity);
// data.append('description',description);

// var xmlhttp=new XMLHttpRequest()
// xmlhttp.open("POST", "ajaxpost.php");
// xmlhttp.send(data);