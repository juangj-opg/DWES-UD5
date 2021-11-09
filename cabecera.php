<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera</title>
</head>
<!-- Estilos usados -->
<link rel="stylesheet" href="styles.css">
<!-- WireFrame usado -->
<!-- https://wireframe.cc/sqRwM5 -->
<body>

<!-- Cabecera -->

<div id="cabecerapadre">
 <div id="cabecerahijo">
     <a href="./index.php">
        <h1 id="titulo">DWS</h1>
        <h2 id="titulo">Ejercicios UD5</h2>
    </a>
 </div>
</div>
<div id="contenedor">

<!-- Fin Cabecera -->

<!-- Menú -->
<?php
        $Ruta = $_SERVER['PHP_SELF'];
        $Nombre = explode("/",$Ruta);
        //  echo $Nombre[2]; // Es la última ruta
?>
<ul>
  <li><a <?php if($Nombre[2] == "ejercicio1_creaCookie.php" ) { echo "class='active'"; } ?> href="./ejercicio1_creaCookie.php">Ej. 1 - Crear Cookies</a></li>
  <li><a <?php if($Nombre[2] == "ejercicio1_leeCookie.php" ) { echo "class='active'"; } ?> href="./ejercicio1_leeCookie.php">Ej. 1 - Leer Cookies</a></li>
  <li><a <?php if($Nombre[2] == "ejercicio2.php" ) { echo "class='active'"; } ?> href="./ejercicio2.php">Ej. 2 - Sesiones</a></li>
  <li><a <?php if($Nombre[2] == "ejercicio2bis.php" ) { echo "class='active'"; } ?> href="./ejercicio2bis.php">Ej. 2bis - Sesiones</a></li>
  <li><a <?php if($Nombre[2] == "ejercicio3.php" ) { echo "class='active'"; } ?> href="./ejercicio3.php">Ej. 3 - Crear sesiones</a></li>
  <li><a <?php if($Nombre[2] == "ejercicio3bis.php" ) { echo "class='active'"; } ?> href="./ejercicio3bis.php">Ej. 3bis - Leer sesiones</a></li>
  <li><a <?php if($Nombre[2] == "ejercicio4.php" ) { echo "class='active'"; } ?> href="./ejercicio4.php">Ej. 4 - Ver variables sesiones</a></li>
</ul>

<!-- Fin Menú -->

<!-- Contenido -->

<div id="contenido" style="margin-left:25%;padding:1px 16px;">
    <div id="contenido2">
        