<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por POST</title>
</head>
<body>

<form action="./server.php" method="post" enctype="multipart/form-data">

    <!-- Input simple -->
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">

    <br/>
    <!-- Input arreglos -->
    <label>Persona:</label>
    <input type="text" name="personas[]">
    <input type="text" name="personas[]">
    <input type="text" name="personas[]">

    <br/>
    <!-- Input arreglos asociativos -->
    <label>Nombre:</label>
    <input type="text" name="persona[nombre]">
    <label>Apellido:</label>
    <input type="text" name="persona[apellido]">
    <label>Edad:</label>
    <input type="text" name="persona[edad]">

    <br/>
    <!-- Input checkbox -->
    <label>Nombre:</label>
    <input type="checkbox" name="option1">
    <input type="checkbox" name="option2" value="Se hico click en el 2">
    <input type="checkbox" name="option3">

    <!-- <label for="image">Imagen:</label>
    <input type="file" name="image" id="image"> -->

    <button type="submit">Mandar formulario</button>

</form>
    
</body>
</html>