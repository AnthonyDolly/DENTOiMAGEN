<?php

require_once "modelo/conexion.php";

class DatosConsultasB extends ConexionB
{
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
}
