<?php

require_once "modelo/conexion.php";

class DatosConsultasB extends ConexionB
{
    #Vista de todas las solicitudes de consultas que requieren confirmacion
    #-----------------------------------------------------------
    public function vistaSolicitudesConsultasModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT c.id AS 'ID', c.dni AS 'DNI', c.nombre AS 'Nombre', c.telefono AS 'Telefono', c.correo AS 'Correo', c.fecha AS 'Fecha', c.precio AS 'Importe', c.descripcion AS 'Descripcion', s.nombre AS 'Sede', concat(m.nombres,' ',m.apellidos) AS 'Medico', c.asistencia AS 'Asistencia' 
        FROM consultas c
        INNER JOIN medicos m
        ON c.medico_id = m.id
        INNER JOIN sedes s
        ON c.sede_id = s.id
        WHERE DATE_FORMAT(c.fecha, '%H:%i') = '00:00'
        ORDER BY id;");

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


    #Vista de todas las consultas que hay en el sistema
    #----------------------------
    public function vistaConsultasModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT c.id AS 'ID', c.dni AS 'DNI', c.nombre AS 'Nombre', c.telefono AS 'Telefono', c.correo AS 'Correo', c.fecha AS 'Fecha', c.precio AS 'Importe', c.descripcion AS 'Descripcion', s.nombre AS 'Sede', concat(m.nombres,' ',m.apellidos) AS 'Medico', c.asistencia AS 'Asistencia' 
        FROM consultas c
        INNER JOIN medicos m
        ON c.medico_id = m.id
        INNER JOIN sedes s
        ON c.sede_id = s.id
        ORDER BY id;");

        $st->execute();

        return $st->fetchAll();
    }

    #Vista de todas las consultas que hay para el día de hoy
    #----------------------------
    public function vistaConsultasHoyModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT c.id AS 'ID', c.dni AS 'DNI', c.nombre AS 'Nombre', c.telefono AS 'Telefono', c.correo AS 'Correo', DATE_FORMAT(c.fecha, '%d/%m/%Y %H:%i') AS 'Fecha', c.precio AS 'Importe', c.descripcion AS 'Descripcion', s.nombre AS 'Sede', concat(m.nombres,' ',m.apellidos) AS 'Medico', c.asistencia AS 'Asistencia' 
        FROM consultas c
        INNER JOIN medicos m
        ON c.medico_id = m.id
        INNER JOIN sedes s
        ON c.sede_id = s.id
        WHERE DATE_FORMAT(c.fecha, '%Y/%m/%d') = DATE_FORMAT(now(), '%Y/%m/%d') AND c.asistencia = 'Pendiente'
        ORDER BY id;");

        $st->execute();

        return $st->fetchAll();
    }

    #Bucar una consulta del día con el nro de DNI de la persona.
    #---------------------------------------------------
    public function buscarConsultaModelo($datosModelo)
    {
        $st = ConexionB::conectar()->prepare("SELECT c.id AS 'ID', c.dni AS 'DNI', c.nombre AS 'Nombre', c.telefono AS 'Telefono', c.correo AS 'Correo', DATE_FORMAT(c.fecha, '%d/%m/%Y %H:%i') AS 'Fecha', c.precio AS 'Importe', c.descripcion AS 'Descripcion', s.nombre AS 'Sede', concat(m.nombres,' ',m.apellidos) AS 'Medico', c.asistencia AS 'Asistencia' 
        FROM consultas c
        INNER JOIN medicos m
        ON c.medico_id = m.id
        INNER JOIN sedes s
        ON c.sede_id = s.id
        WHERE DATE_FORMAT(c.fecha, '%Y/%m/%d') = DATE_FORMAT(now(), '%Y/%m/%d') 
        AND c.asistencia = 'Pendiente' 
        AND c.dni = $datosModelo
        ORDER BY id;");

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
