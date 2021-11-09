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
?>
<table border="1" style="text-align: center;">
    <tr>
        <th>Nombre</th>
        <th>Signficado</th>
        <th>Retorna</th>
    </tr>
    <tr>
        <td><b>session.use_cookies</b></td>
        <td>Especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente.</td>
        <td>Retorna un booleano.<br>Por defecto, está puesto en 1 (true).</td>
    </tr>
    <tr>
        <td><b>session.use_only_cookies</b></td>
        <td>Especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques que implican pasar el id de sesión en la URL.</td>
        <td>Retorna un booleano.<br>Por defecto, está puesto en 1 (true).</td>
    </tr>
    <tr>
        <td><b>session.save_handler</b></td>
        <td>Define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión.</td>
        <td>Retorna un string.<br>Por defecto, el string es 'files'.</td>
    </tr>
    <tr>
        <td><b>session.name</b></td>
        <td>Especifica el nombre de la sesión que se usa como nombre de cookie. Sólo debería contener caracteres alfanuméricos.</td>
        <td>Retorna un string.<br>Por defecto, el string es 'PHPSESSID'.</td>
    </tr>
    <tr>
        <td><b>session.auto_start</b></td>
        <td>Especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición.</td>
        <td>Retorna un booleano.<br>Por defecto, está puesto en 0 (deshabilitado).</td>
    </tr>
    <tr>
        <td><b>session.cookie_lifetime</b></td>
        <td>Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador. El valor 0 significa "hasta que el navegador se cierre".</td>
        <td>Retorna un integer.<br>Por defecto, está puesto en 0..</td>
    </tr>
    <tr>
        <td><b>session.gc_maxlifetime</b></td>
        <td>Especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada. La recolección de basura puede suceder durante el inicio de sesiones</td>
        <td>Retorna un integer.</td>
    </tr>
</table>
</body>
</html>