function intoTable($image_path){
    var table = document.createElement("TABLE");
    document.body.appendChild(table);
  
    var row = document.createElement("TR");
    document.getElementById("myTable").appendChild(row);
  
    var data = document.createElement("TD");
    var image = document.createElement("IMG");
    image.setAttribute("src", $image_path);
    data.appendChild(image);
    row.appendChild(data);
}