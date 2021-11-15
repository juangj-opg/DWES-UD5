<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Rols</title>
</head>
<body>
<?php
include "cabecera.php";

// Incluimos las funciones de SQL - BBDD
include "./ejercicio7BBDD.php";

// Si recibe la petición POST, que inserte (o intente) añadir el usuario.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST['user'];
    $password = $_POST['password'];
    
    $Valor = getUser($user);
    if (!empty($Valor)) {
        $user_SQL = $Valor['user'];
        $password_SQL = $Valor['password'];
        if(password_verify($password, $password_SQL)) {
            // Hacer la redirección según el perfil
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

            // Meter perfil en la sesión
            $perfil = $Valor['perfil'];
            session_start();
            $_SESSION['perfil'] = $perfil;

            if($perfil == "admin"){ // Admin
                
                $extra = 'admin.php';
                header("Location: http://$host$uri/$extra");
                exit;
            } else if($perfil == "usuario") { // Usuario
                $extra = 'usuario.php';
                header("Location: http://$host$uri/$extra");
                exit;
            } else if(empty($perfil) || $perfil == NULL){ // No tiene rol
                echo "<h2>El usuario no tiene ningún rol.</h2>";
            }
        } else {
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
                        <td style="color:red;"><b>Contraseña incorrecta</b></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
    } else {
        ?>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" style="text-align: center;">
                <table>
                    <tr>
                        <td><label for="user">Usuario</label></td>
                        <td> <input type="text" name="user" id="user" required></td>
                        <td style="color:red;"><b>El usuario <?php echo $user; ?> no ha sido creado.</b></td>
                    </tr>
                    <tr>
                        <td><label for="password">Contraseña</label></td>
                        <td><input type="password" name="password" id="password" required><br></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>
        <?php
    }
    

    
} else {
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
                <td colspan="2"><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
<?php
}


?>


</body>
</html>