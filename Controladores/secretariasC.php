<?php

class SecretariasC{

    public function IngresarSecretariaC(){

        if(isset($_POST["usuario-Ing"])){

            //valicion para controlar ataques
            if(preg_match('/^(a-zA-Z0-9)+$/', $_POST["usuario-Ing"]) &&
                preg_match('/^(a-zA-Z0-9)+$/', $_POST["clave-Ing"])){

                echo "Validando usurio";

                $tablaBD = "secretarias";

                $datosC = array("usuario"=>$_POST["usuario-Ing"],
                                "clave"=>$_POST["clave-Ing"]);

                $resultado = SecretariasM::IngresarSecretariaM($tablaBD, $datosC);

                if($resultado["usuario"] == $_POST["usuario-Ing"] && $resultado["clave"] == $_POST["clave-Ing"]){
                    echo "Usuario Encontrado";

                    $_SESSION["Ingresar"] = true;

                    $_SESSION["id"] = "";
                    $_SESSION["usuario"] = "";
                    $_SESSION["clave"] = "";
                    $_SESSION["nombre"] = "";
                    $_SESSION["apellido"] = "";
                    $_SESSION["foto"] = "";
                    $_SESSION["rol"] = "";

                    echo '<script>
                    
                    window.location = "inicio";
                    </script>';
                }else{

                    echo 'Error al ingresar';
                }
            }
        }
    }
}