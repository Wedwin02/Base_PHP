<?php
      
    require '../conexion/conexion.php';

    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $N_paginas = $_POST['N_paginas'];
    $escritor = $_POST['escritor'];
    $precio = $_POST['precio'];
    $flo = floatval($precio);

    $sql = "INSERT INTO libros (nombre,tipo,N_paginas,escritor,precio) VALUES ('$nombre','$tipo','$N_paginas','$escritor','$flo')";
     
    $resultado  = $mysql->query($sql);
   
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Respuesta</title>
</head>
<body>
<?php

if($resultado>0) {  ?>

    <h1>Usuario Guardado correctamente</h1>

    <?php } else { ?>

        <h1>Error al guardar el Usuario</h1>

        <?php } ?>

        <p></p>

        <a href="../index.php">Regresar a la pagina principal</a>

      
</body>
</html>