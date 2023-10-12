<?php
require '../conexion/conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM libros WHERE ID = '$id'";
$resultado  = $mysql->query($sql);
$row=$resultado->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1>Modificar Libro</h1>
    <form name="modificarLibros" action="../controller/modificar.php" method="post">
        <table width="50%">
            <tr>
                <input type="hidden" name="ID" value="<?php echo $id;?>">
                <td>
                    Nombre
                </td>
                <td>
                    <input type="text" name="nombre" size="25"  value="<?php echo $row['nombre']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Tipo
                </td>
                <td>
                    <input type="text" name="tipo" size="25"  value="<?php echo $row['tipo']; ?>">
                </td>
                </tr>
            <tr>
                <td>
                    Numero de Paginas
                </td>
                <td>
                    <input type="text" name="N_paginas" size="25"  value="<?php echo $row['N_paginas']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Escritor
                </td>
                <td>
                    <input type="text" name="escritor" size="25"  value="<?php echo $row['Escritor']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Precio
                </td>
                <td>
                    <input type="text" name="precio" size="25"  value="<?php echo $row['Precio']; ?>">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Modificar"></td>
            </tr>

        </table>


    </form>
</body>
</html>