<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<?php
include "cabecera.php";
?>
<h1 style="text-align: center;">Índice y explicación de los ejercicios del UD5</h1>
<h2>Ejercicio 1 - Cookies</h2>
<ul>
    <li><a href="./ejercicio1_creaCookie.php"><h3 class="nopad">ejercicio1_creaCookie.php</h3></a></li>
    <ul class="nopad">
        <li>Se utilice el método setcookie, para almacenar dos variables</li>
        <ul>
            <li>Nombre: Que almacene tu nombre completo.</li>
            <li>Edad: Que almacene tu edad.</li>
            <li>Haz que caduque dentro de 3 horas.</li>
            <li>Haz que se envíe en todo el dominio.</li>
        </ul>
    </ul>
    <li><a href="./ejercicio1_leeCookie.php"><h3 class="nopad">ejercicio1_leeCookie.php</h3></a></li>
    <ul class="nopad">
        <li>Muestra la cookie completa.</li>
        <li>Muestra cada uno de los datos en una frase.</li>
    </ul>
</ul>
<h2>Ejercicio 2 - Sesiones</h2>
<ul>
    <li><a href="./ejercicio2.php"><h3 class="nopad">ejercicio2.php</h3></a></li>
    <ul class="nopad">
        <li>Inicializa una sesión.</li>
        <li>Muestra por pantalla el id de dicha sesión.</li>
    </ul>
    <li><a href="./ejercicio2bis.php"><h3 class="nopad">ejercicio2bis.php</h3></a></li>
    <ul class="nopad">
        <li>Crea un nuevo archivo e inicializa otra sesión.</li>
        <li>Muestra por pantalla el id de dicha nueva sesión.</li>
        <li>¿Qué ha sucedido? ¿Porqué?</li>
        <li>Localiza en el directorio correspondiente los ficheros de sesión.</li>
    </ul>
</ul>
<h2>Ejercicio 3 - Sesiones</h2>
<ul>
    <li><a href="./ejercicio3.php"><h3 class="nopad">ejercicio3.php</h3></a></li>
    <ul class="nopad">
        <li>Inicializa una sesión.</li>
        <li>Añade 2 campos a la sesión:</li>
        <ul>
            <li>Nombre.</li>
            <li>Edad.</li>
        </ul>
    </ul>
    <li><a href="./ejercicio3bis.php"><h3 class="nopad">ejercicio3bis.php</h3></a></li>
    <ul>
        <li>Crea un nuevo archivo e inicializa la sesión.</li>
        <li>Muestra por pantalla el valor de los dos campos.</li>
        <li>Identifica el archivo.</li>
        <li>Elimina la variable Nombre mediante la función correspondiente en el segundo script.</li>
        <ul><li>¿Qué sucede en el archivo?</li></ul>
        <li>Elimina todas las variables mediante la función correspondiente en el segundo script.</li>
        <ul><li>¿Qué sucede?</li></ul>
        <li>Destruye la sesión en el segundo script.</li>
        <ul><li>¿Qué sucede?</li></ul>
    </ul>
</ul>
<h2>Ejercicio 4 - Sesiones</h2>
<ul>
    <li><a href="./ejercicio4.php"><h3 class="nopad">ejercicio4.php</h3></a></li>
    <ul>
        <li>Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 adecuado de forma que se muestre por pantalla una tabla con el nombre de las siguientes diretivas configurables en el servidor, su función y sus posibles valores:</li>
        <ul>
            <li>session.use_cookies</li>
            <li>session.use_only_cookies</li>
            <li>session.save_handler</li>
            <li>session.name</li>
            <li>session.auto_start</li>
            <li>session.cookie_lifetime</li>
            <li>session.gc_maxlifetime</li>
        </ul>
    </ul>
</ul>
<h2>Ejercicio 5 - Autenticación - Registrar usuario</h2>
<ul>
    <li><a href="./ejercicio5.php"><h3 class="nopad">ejercicio5.php</h3></a></li>
    <ul>
        <li>Formulario con los siguientes campos:</li>
        <ul>
            <li>Nombre de usuario.</li>
            <li>Contraseña</li>
            <li>Cuenta bancaria</li>
        </ul>
        <li>Recuerda que antes debes crear una base de datos y una tabla con dichos campos, para confirmar que los usuarios son únicos vamos a utilizar el nombre de usuario como clave primaria.</li>
    </ul>
    <li><a href="./ejercicio5BBDD.php"><h3 class="nopad">ejercicio5BBDD.php</h3></a></li>
    <ul>
        <li>Crea una función que inserte una fila con los datos.</li>
        <li>La contraseña debe estar encriptada.</li>
        <li>Prueba a registrar varios usuarios con la misma contraseña.</li>
    </ul>
</ul>
<h2>Ejercicio 6 - Autenticación - Autenticar usuario</h2>
<ul>
    <li><a href="./ejercicio6.php"><h3 class="nopad">ejercicio6.php</h3></a></li>
    <ul>
        <li>Formulario con los siguientes campos:</li>
        <ul>
            <li>Nombre de usuario</li>
            <li>Contraseña</li>
        </ul>
        <li>Mostrar un mensaje si se ha autentificado correctamente.</li>
    </ul>
    <li><a href="./ejercicio6BBDD.php"><h3 class="nopad">ejercicio6BBDD.php</h3></a></li>
    <ul>
        <li>Crea una función getUser que busque la fila del usuario</li>
        <li>Usar password_verify para comprobar la contraseña.</li>
    </ul>
</ul>

</body>
</html>