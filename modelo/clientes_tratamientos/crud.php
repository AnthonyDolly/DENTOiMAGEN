<?php

require_once "modelo/conexion.php";

class DatosClientesTratamientos extends Conexion {
    #Vista de los tratamientos del cliente
    #----------------------------
    public function vistaClienteTratamientoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("CALL vistaClienteTratamiento($datosModelo)");

        $st->execute();

        return $st->fetchAll();
    }

    #Vista de los tratamientos en el que esta el medico
    #----------------------------
    public function vistaClienteTratamientoMedicoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call vistaClienteTratamientoMedico($datosModelo);");

        $st->execute();

        return $st->fetchAll();
    }

    #Registro de un nuevo tratamiento
    #-----------------------------------------------
    public function RegistroClienteTratamientoModelo($datosModelo, $tabla) {
        $st = Conexion::conectar()->prepare("CALL RegistroClienteTratamiento(:descripcion,:cantsesiones,:estado,:DNIPaciente,:tratamiento)");

        $st->bindParam(":descripcion", $datosModelo["descripcion"], PDO::PARAM_STR);
        $st->bindParam(":cantsesiones", $datosModelo["cantsesiones"], PDO::PARAM_STR);
        $st->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_STR);
        $st->bindParam(":DNIPaciente", $datosModelo["dni"], PDO::PARAM_STR);
        $st->bindParam(":tratamiento", $datosModelo["tratamiento"], PDO::PARAM_STR);
        var_dump($datosModelo);
        if ($st->execute()) {

            return "success";

        } else {
            return "error";
        }

        $st->close();
    }


    #Editar cliente tratamiento
    #------------------------------------------------
    public function editarClienteTratamientoModelo($datosModelo){
        
        $st = Conexion::conectar()->prepare("CALL editarClienteTratamiento($datosModelo)");

        $st->execute();

        return $st->fetch();
    }

    #Actualizar estado de cliente_tratamiento
    #------------------------------------------------
    public function actualizarClienteTratamientoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("CALL actualizarClienteTratamiento(:idCT,:estado)");

        $st->bindParam(":idCT", $datosModelo["idCT"], PDO::PARAM_STR);
        $st->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_STR);
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }

    #Eliminar cliente_tratamiento
    #------------------------------------------------
    public function eliminarClienteTratamientoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("CALL eliminarClienteTratamiento($datosModelo);");
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }

}

?>