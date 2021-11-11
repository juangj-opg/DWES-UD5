<?php
function getUser($user){
    try {
        $servidor = "localhost";
        $baseDatos = "autenticacion";
        $usuario = "developer";
        $pass = "developer";
        $c = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$pass);

        $sql = "SELECT user, password FROM usuarios WHERE user=?"; 

        $users = $c->prepare($sql);
        $users -> bindParam(1, $user);
        $users ->execute();
        $ArrUsers = $users->fetch(\PDO::FETCH_ASSOC);
        if (is_array($ArrUsers)) {
            $cuentaArr = count($ArrUsers); 

            if ($cuentaArr == 0) { // No ha encontrado ninguna línea
                return false;
            } else{ // Ha encontrado la fila
            return $ArrUsers;
            }
        }
        

    } catch (PDOException $e) {
        echo "Ha dado un error con la BBDD: " . $e->getMessage();
        return false;
    }
}
?>