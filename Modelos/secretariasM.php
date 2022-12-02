<?php

require_once "ConexionBD.php";

class SecretariasM extends ConexionBD{

    static public function IngresarSecretariaM($tablaBD, $datosC){

        $pdo = ConexionBD::ConectarBD()->prepare("SELECT usuario, clave, nombre, apellido, foto, rol, id 
                FROM $tablaBD WHERE usuario = :usuario");

        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        
        $pdo -> execute();

        return $pdo -> fetch();

        //$pdo -> close();

        //$pdo = null;
    }
}