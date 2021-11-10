<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Autenticacion</title>
</head>
<body>
<?php
include "cabecera.php";

// Incluimos las funciones de SQL - BBDD
include "./ejercicio5BBDD.php";

// Si recibe la petición POST, que inserte (o intente) añadir el usuario.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $bank_account = $_POST['bank_account'];
    $Valor = InsertUser($user,$password,$bank_account);
    if ($Valor) {
        echo "<h2>Se ha introducido el usuario correctamente</h2>";
    } else {
        echo "<h3>No se ha podido insertar el usuario.</h3>";
    }
}


?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" style="text-align: center;">
    <table>
        <tr>
            <td><label for="user">Usuario</label></td>
            <td> <input type="text" name="user" id="user" required></td>
        </tr>
        <tr>
            <td><label for="password">Contraseña</label></td>
            <td><input type="password" name="password" id="password" required><br></td>
        </tr>
        <tr>
            <td><label for="bank_account">Cuenta bancaria</label></td>
            <td><input type="text" name="bank_account" id="bank_account" required><br></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Crear usuario"></td>
        </tr>
    </table>
</form>

</body>
</html>