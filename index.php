<?php

/*===========================================
Mostrar Errores en el directio del proyecto
============================================*/
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'c:/xampp/htdocs/errores/php_error_log');

require_once "Controladores/plantillaC.php";

require_once "Controladores/secretariasC.php";
require_once "Modelos/secretariasM.php";

$plantilla = new Plantilla();
$plantilla -> LlamarPlantilla();
