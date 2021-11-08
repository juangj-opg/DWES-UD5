<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Leer cookie</title>
</head>
<body>
<?php
include "cabecera.php";
echo "<h3>El valor del cookie 'nombre' es ".$_COOKIE['nombre'].".<h3>";

echo "<h3>El valor del cookie 'edad' es ".$_COOKIE['edad'].".<h3>";

?>
</body>
</html>