<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Crear Sesiones</title>
</head>
<body>
<?php
include "cabecera.php";
// Iniciar la sesión
session_start();

// Añadimos dos campos a la sesión
echo "<h2>Añadimos dos campos a la sesión, 'Nombre' y 'Edad'.</h2>";
$_SESSION['Nombre'] = 'Juan Garrido Jiménez';
$_SESSION['Edad'] = '21';
?>
</body>
</html>