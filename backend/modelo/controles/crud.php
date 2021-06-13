<?php

require_once "modelo/conexion.php";

class DatosControlesB extends ConexionB
{
    #Vista de todos los controles que hay en el sistema
    #----------------------------
    public function vistaControlesModelo()
    {
        $st = ConexionB::conectar()->prepare("call vistaControlB()");

        $st->execute();

        return $st->fetchAll();
    }

    #Vista de todos los controles que hay para el día de hoy
    #----------------------------
    public function vistaControlesHoyModelo()
    {
        $st = ConexionB::conectar()->prepare("call vistaControlesHoyB()");

        $st->execute();

        return $st->fetchAll();
    }

    #Actualizar estado de pago y estado de asistencia del control mensual del día de hoy.
    #-----------------------------------------------------------------------
    public function actualizarEstadosControlModelo($datosModelo, $tabla)
    {
        $st = ConexionB::conectar()->prepare("call actualizarEstadosControl(:idCM,:estadoPago,:estadoAsistencia)");

        $st->bindParam(":idCM", $datosModelo["idCM"], PDO::PARAM_STR);
        $st->bindParam(":estadoPago", $datosModelo["estadoPago"], PDO::PARAM_STR);
        $st->bindParam(":estadoAsistencia", $datosModelo["estadoAsistencia"], PDO::PARAM_STR);

        if ($st->execute()) {
            return "success";
        } else {
            return "error";
        }
    }

    #Total (en numero) de controles que hay en el sistema
    #-----------------------------------------
    public function numControlesModelo()
    {
        $st = ConexionB::conectar()->prepare("call numControlesB;");

        $st->execute();

        return $st->fetch();
    }

    #Total (en numero) de los nuevos controles que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosControlesModelo()
    {
        $st = ConexionB::conectar()->prepare("CALL numNuevosControlesB;");

        $st->execute();

        return $st->fetch();
    }

    #Bucar una cita del día con el nro de DNI del paciente.
    #---------------------------------------------------
    public function buscarClienteModelo($datosModelo)
    {
        $st = ConexionB::conectar()->prepare("call buscarCliente($datosModelo)");

        $st->execute();

        return $st->fetchAll();
    }
}
