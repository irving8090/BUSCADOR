<?php
class Conexion{

static public function conectar(){
        #PDO PHP DATA ("Nom de servidor, nom de la bd, usuario, password")

        $link = new PDO("mysql:host=localhost; dbname=db_ingles2","root","");

        $link->exec("set names utf8");

        return $link;
    }
}
       


    
    