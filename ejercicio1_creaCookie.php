
<?php
include "cabecera.php";
// Cookie 1 - Nombre
$nombre = "nombre";
$valor_nombre = "Juan Garrido Jiménez";

// Cookie 2 - Edad
$edad = "edad";
$valor_edad = "21";

// Info extra
$expiracion = time() + 3 * 60 * 60;
$path = "/"; // Esto será en todo el dominio, si no se pone, se pondrá '/Ejercicios_UD5'

setcookie($nombre,$valor_nombre,$expiracion,$path);
echo "<h3>Se ha creado la cookie 'nombre'.</h3>";

setcookie($edad,$valor_edad,$expiracion,$path);
echo "<h3>Se ha creado la cookie 'edad'.</h3>";

?>
</body>
</html>
