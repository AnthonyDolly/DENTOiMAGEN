<?php

require_once "modelo/conexion.php";

class DatosControles extends Conexion {
    #Vista control mensual
    #----------------------------
    public function vistaControlModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("CALL vistaControl($datosModelo)");

        $st->execute();

        return $st->fetchAll();
    }

    #Vista control mensual perfil medico
    #---------------------------------------
    public function vistaControlMedicoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("CALL vistaControlMedico($datosModelo)");

        $st->execute();

        return $st->fetchAll();
    }

    #Registro de control mensual por parte del medico
    #--------------------------------------------------
    public function registroControlMedicoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call registroControlMedico(:fecha,:precioSesion,:estadoPago,:CTID,:asistencia)");

        $st->bindParam(":fecha", $datosModelo["fecha"], PDO::PARAM_STR);
        $st->bindParam(":precioSesion", $datosModelo["precio"], PDO::PARAM_STR);
        $st->bindParam(":estadoPago", $datosModelo["estado"], PDO::PARAM_STR);
        $st->bindParam(":CTID", $datosModelo["id"], PDO::PARAM_STR);
        $st->bindParam(":asistencia", $datosModelo["asistencia"], PDO::PARAM_STR);

        if ($st->execute()) {

            return "success";

        } else {
            return "error";
        }

        $st->close();
    }

   /* 
    #Eliminar control mensual por parte del medico
    #------------------------------------------------
    public function eliminarControlMedicoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cliente_tratamiento_id=$datosModelo;");
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }

    */

    
    #Editar control mensual por parte del medico
    #------------------------------------------------
    public function editarCitaControlMensualModelo($datosModelo){
        
        $st = Conexion::conectar()->prepare("CALL editarCitaControlMensual($datosModelo)");

        $st->execute();

        return $st->fetch();
    }


    #Actualizar fecha de control mensual
    #------------------------------------------------
    public function actualizarCitaControlMensualModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call actualizarCitaControlMensual(:idCM,:fecha);");

        $st->bindParam(":idCM", $datosModelo["idCM"], PDO::PARAM_STR);
        $st->bindParam(":fecha", $datosModelo["fecha"], PDO::PARAM_STR);
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }


    
    #Eliminar fecha control mensual
    #------------------------------------------------
    public function eliminarCitaControlMensualModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call eliminarCitaControlMensual($datosModelo);");
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }



    #Actualizar estado pago control mensual
    #------------------------------------------------
    public function actualizarEstadoPagoControlMensualModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call actualizarEstadoPagoControlMensual(:idCM,:estadoPago)");

        $st->bindParam(":idCM", $datosModelo["idCM"], PDO::PARAM_STR);
        $st->bindParam(":estadoPago", $datosModelo["estadoPago"], PDO::PARAM_STR);
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }

    



}
