<?php

require_once "conexion.php";

                class ModeloFormularios{

    /************************
     * Seleccionar Registro Alumno
     ************************/

     static public function mdlSeleccionarRegistros($tabla,$item,$valor){
        
        if ($item == null && $valor == null) {
            $sql="SELECT * FROM $tabla where alumno.matricula='$valor'";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $sql = "SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla 
            WHERE $item = :$item ORDER BY id DESC";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":" . $item, $valor,  PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }
    }
        
     

         /************************
        * Seleccionar Registro Admin
        ************************/
        static public function mdlSeleccionarRegistrosAdmin($tabla1,$item1,$valor1){
            if($item1 == null && $valor1 == null){
            $sql=="SELECT * FROM $tabla1 where usuario.email='$valor1'";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute(array($valor));
            return $stmt->fetchAll();
        } else {
            $sql = "SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla1 
            WHERE $item1 = :$item1 ORDER BY id DESC";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":" . $item1, $valor1,  PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }
        }
    }

    
