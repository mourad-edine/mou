<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<div id="carousel">
   <div id="container">
   </div>
   <img src="" class="bouton" id="g">
   <img src="" class="bouton" id="d">
</div>
<script>
    documents.body.onload= function(){
        nbr = 5;
        p = 0;
        containter = document.getElementById("container");
        g = document.getElementById("g");
        d = document.getElementById("d");
        container.style.width = (800*nbr)+"px";
        for(i = 1;i<= nbr;i++){
            div =document.createElement("div");
            div.className = "photo"
            div.style.backgroundImage = "url('image/im"+i+".jpg')";
            container.appendChild(div);
        }
    }
</script>

</body>
</html>  