<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
</head>
<body>
    <h1>Nuevo Libro</h1>
    <form name="nuevo_libro" action="../controller/guardar.php" method="post">
        <table width="50%">
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" size="25"></td>
            </tr>
            <tr>
                <td>Tipo</td>
                <td><input type="text" name="tipo" size="25"></td>
            </tr>
            <tr>
                <td>Numero de paginas</td>
                <td><input type="number" name="N_paginas" size="25"></td>
            </tr>
            <tr>
                <td>Escritor</td>
                <td><input type="text" name="escritor" size="25"></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><input type="text" name="precio" size="25"></td>
            </tr>
            <tr>
                
                <td><input type="submit" name="btnEnviar" value="ACEPTAR" ></td>
            </tr>

        </table>
    </form>
    
</body>
</html>