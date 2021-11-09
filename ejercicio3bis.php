<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Leer Sesiones</title>
</head>
<body>

<?php
include "cabecera.php";
// Iniciar la sesión
session_start();
echo "<h2>En este ejercicio, es normal ver mensajes de fallos o avisos.</h2><br>";
// Mostrar ambas variables de sesión en el navegador
echo "<h3>El valor de la sesión 'Nombre' es ".$_SESSION['Nombre'].".</h3>";
echo "<h3>El valor de la sesión 'Edad' es ".$_SESSION['Edad'].".</h3>";

// Identificar el archivo o sesión

echo "<p>La sesión actual es: ". session_id() ."</p>";

// Borramos la variable de sesión Nombre

unset($_SESSION['Nombre']);
echo "<h3>Hemos borrado la variable de sesión 'Nombre', lo podemos comprobar viendo el fichero de la sesión que está en " .session_save_path(). " o llamando a la frase anterior.</h3>";
echo "<h4>El valor de la sesión 'Nombre' es ".$_SESSION['Nombre'].".</h4>";
echo "<h4>El valor de la sesión 'Edad' es ".$_SESSION['Edad'].".</h4>";

// Eliminamos todas las variables existente en la sesión actual.

session_unset();
echo "<h4>Hemos borrado todas las variables existentes en la sesión. Como antes, podemos verlo en el fichero o llamando a ambas frases.</h4>";
echo "<h4>El valor de la sesión 'Nombre' es ".$_SESSION['Nombre'].".</h4>";
echo "<h4>El valor de la sesión 'Edad' es ".$_SESSION['Edad'].".</h4>";

// Eliminamos la sesión actual
echo "<h3>Hemos borrado la sesión actual, podemos comprobarlo viendo que ya no está el fichero de sesión.</h3>";
session_destroy();

?>
</body>
</html>