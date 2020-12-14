<?php

require_once "modelo/conexion.php";

class Datos extends Conexion{
    #Registrar clientes
    #----------------------------
    public function registroClienteModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("INSERT INTO $tabla (id,nombres,apellidos,correo,telefono,contra) VALUES (:dni,:nombres,:apellidos,:correo,:telefono,:password)");

        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $st->bindParam(":nombres", $datosModelo["nombres"], PDO::PARAM_STR);
        $st->bindParam(":apellidos", $datosModelo["apellidos"], PDO::PARAM_STR);
        $st->bindParam(":correo", $datosModelo["correo"], PDO::PARAM_STR);
        $st->bindParam(":telefono", $datosModelo["telefono"], PDO::PARAM_STR);
        $st->bindParam(":password", $datosModelo["password"], PDO::PARAM_STR);

        if ($st->execute()) {

            return "success";

        } else {
            return "error";
        }

        $st->close();
    }


    #Ingreso clientes
    #-----------------------------
    public function ingresoClienteModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT id,contra, concat(nombres, ' ', apellidos) AS Usuario, correo AS Correo FROM $tabla WHERE id = :dni");
        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $st->execute();
        
        return $st->fetch();

        $st->close();
    }

    
}

?>