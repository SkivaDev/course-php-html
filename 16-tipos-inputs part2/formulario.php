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

    <!-- Input Radios -->
    <label for="colombia">Colombia:</label>
    <input type="radio" name="pais" id="colombia" value="Colombia">

    <label for="peru">Perú:</label>
    <input type="radio" name="pais" id="peru" value="Perú">

    <label for="argentina">Argentina:</label>
    <input type="radio" name="pais" id="argentina" value="Argentina">

    <button type="submit">Mandar formulario</button>

</form>
    
</body>
</html>