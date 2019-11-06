function intoTable($image_path){
    var table = document.createElement("TABLE");
    table.setAttribute("id", "myTable");
    document.body.appendChild(table);
  
    var row = document.createElement("TR");
    row.setAttribute("id", "myTr");
    document.getElementById("myTable").appendChild(row);
  
    var data = document.createElement("TD");
    var image = document.createElement("IMG");
    image.setAttribute("src", $image_path);
    data.appendChild(image);
    document.getElementById("myTr").appendChild(data);
}