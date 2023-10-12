<?php
require '../conexion/conexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM libros WHERE ID = '$id'";
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

    <h1>Libro Eliminado correctamente</h1>

    <?php } else { ?>

        <h1>Error al eliminar el Libro</h1>

        <?php } ?>

        <p></p>

        <a href="../index.php">Regresar a la pagina principal</a>

      
</body>
</html>