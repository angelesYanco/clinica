<?php

class ConexionBD{

    public function ConectarBD(){


        $bd = new PDO("mysql:host=localhost;dbname=clinica", "root", "");

        $bd -> exec("set name utf8");

        return $bd;

    }
}