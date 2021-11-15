<?php
session_start();

$perfil = $_SESSION['perfil'];

if ($perfil == 'admin') {
    echo "<h2>Eres el jefe supremo, ¿no quieres ir a tu página?</h2>";
} else if ($perfil = 'usuario') {
    echo "<h2>Hola pringao.</h2>";
} else if ($perfil == "") {
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'ejercicio7.php';
    header("Location: http://$host$uri/$extra");
    exit;
}
?>