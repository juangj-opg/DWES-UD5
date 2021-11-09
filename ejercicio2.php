<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Sesiones</title>
</head>
<body>
<?php
include "cabecera.php";
// Iniciar la sesión
session_start();

// ID de la sesión y mostrarla en pantalla

$ID = session_id();

echo "<p>El ID de la sesión es: <b>$ID</b></p>";
echo "<p>El directorio donde se guardan las sesiones es: <b>".session_save_path()."</b></p>";
?>
</body>
</html>