<?php

require_once "modelo/conexion.php";

class DatosConsultasB extends ConexionB
{
    #Vista de todas las solicitudes de consultas que requieren confirmacion
    #-----------------------------------------------------------
    public function vistaSolicitudesConsultasModelo()
    {
        $st = ConexionB::conectar()->prepare("call vistaSolicitudesConsultas();");

        $st->execute();

        return $st->fetchAll();
    }

    #Actualizar fecha de la consulta por parte del asistente
    #---------------------------------------------
    public function actualizarFechaConsultaModelo($datosModelo, $tabla)
    {
        $st = ConexionB::conectar()->prepare("UPDATE consultas 
        SET fecha = :fecha
        WHERE id = :idC;");

        $st->bindParam(":idC", $datosModelo["idC"], PDO::PARAM_STR);
        $st->bindParam(":fecha", $datosModelo["fecha"], PDO::PARAM_STR);

        if ($st->execute()) {
            return "success";
        } else {
            return "error";
        }
    }

    #Eliminar consultas basuras por parte del asistente
    #---------------------------------------------
    public function eliminarConsultasBasuraModelo($datosModelo)
    {
        $st = ConexionB::conectar()->prepare("DELETE FROM consultas WHERE id = $datosModelo;");

        if ($st->execute()) {
            return "success";
        } else {
            return "error";
        }

        $st->close();
    }


    #Vista de todas las consultas que hay en el sistema
    #----------------------------
    public function vistaConsultasModelo()
    {
        $st = ConexionB::conectar()->prepare("call vistaConsultas()");

        $st->execute();

        return $st->fetchAll();
    }

    #Vista de todas las consultas que hay para el día de hoy
    #----------------------------
    public function vistaConsultasHoyModelo()
    {
        $st = ConexionB::conectar()->prepare("call vistaConsultasHoy()");

        $st->execute();

        return $st->fetchAll();
    }

    #Bucar una consulta del día con el nro de DNI de la persona.
    #---------------------------------------------------
    public function buscarConsultaModelo($datosModelo)
    {
        $st = ConexionB::conectar()->prepare("call buscarConsulta($datosModelo)");

        $st->execute();

        return $st->fetchAll();
    }

    #Actualizar estado de asistencia de la consulta del día de hoy.
    #--------------------------------------------------------
    public function actualizarEstadoConsultaModelo($datosModelo, $tabla)
    {
        $st = ConexionB::conectar()->prepare("UPDATE consultas 
        SET asistencia = :estadoAsistencia, fecha = fecha
        WHERE id = :idC;");

        $st->bindParam(":idC", $datosModelo["idC"], PDO::PARAM_STR);
        $st->bindParam(":estadoAsistencia", $datosModelo["estadoAsistencia"], PDO::PARAM_STR);

        if ($st->execute()) {
            return "success";
        } else {
            return "error";
        }
    }
}
