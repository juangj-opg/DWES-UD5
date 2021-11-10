<?php
function InsertUser($user,$password,$bank_account){
    try {
        $servidor = "localhost";
        $baseDatos = "autenticacion";
        $usuario = "developer";
        $pass = "developer";
        $c = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$pass);

        $password_generada = password_hash($password, PASSWORD_DEFAULT);

        
        $sql = "INSERT INTO usuarios (user, password, bank_account) VALUES (?, ?, ?)";
        $users = $c->prepare($sql);
        $users -> bindParam(1, $user);
        $users -> bindParam(2, $password_generada);
        $users -> bindParam(3, $bank_account);
        $users->execute();
        
        $UserssAdded = $users -> rowCount();
        if ($UserssAdded == 0) {
            $users->closeCursor(); // Cerrar conexión
            return false;
        } else{
            $id = $c -> lastInsertId(); // Última ID añadida
            $users->closeCursor(); // Cerrar conexión
            return true;
        }

    } catch (PDOException $e) {
        echo "Ha dado un error con la BBDD: " . $e->getMessage();
        return false;
    }
}
