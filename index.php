<?php
    require 'conexion/conexion.php';
    $sql = "SELECT * FROM libros";
    $resultado  = $mysql->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
</head>
<body>
    <h2>BIBLIOTECA EL SALVADOR PHP</h2>
    <a href="view/nuevo.php">Nuevo +</a>
    <table border = "1" width="80%">
        <thead>
            <tr>
            <td>Nombre</td>            
            <td>Tipo</td>
            <td>Numero de Paginas</td>
            <td>Escritor</td>
            <td>Precio</td>
            <td colspan="2" >Aciones</td>
            
        </tr>
        </thead>
        <tbody>
            <?php while($row = $resultado->fetch_assoc()){?>
            
            <tr>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['tipo'];?></td>
                <td><?php echo $row['N_paginas'];?></td>
                <td><?php echo $row['Escritor'];?></td>
                <td><?php echo $row['Precio'];?></td>
                <td><a href="view/modificar.php?id=<?php echo $row['ID'];?>">Editar</a></td>
                <td><a href="controller/eliminar.php?id=<?php echo $row['ID'];?>">Eliminar</a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    
</body>
</html>