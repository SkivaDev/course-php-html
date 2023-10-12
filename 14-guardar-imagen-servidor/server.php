<?php

echo "<pre>";

var_dump($_FILES);

echo "</pre>";

$basename = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$destination = "./images/$basename";

move_uploaded_file($image, $destination);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <body>
  
  <h1>Imagen guardada</h1>
  <img src="<?php echo $destination; ?>" alt="<?php echo $basename; ?>">

 </body>
 </html>
