<?php

require_once "modelo/conexion.php";

class DatosConsultasB extends ConexionB
{
    #Vista de todas las consultas que hay en el sistema
    #----------------------------
    public function vistaConsultasModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT id AS 'ID', dni AS 'DNI', nombre AS 'Nombre', telefono AS 'Telefono', correo AS 'Correo', fecha AS 'Fecha', precio AS 'Importe', descripcion AS 'Descripcion', sede_id AS 'Sede', medico_id AS 'Medico', asistencia AS 'Asistencia' 
        FROM consultas
        ORDER BY id;");

        $st->execute();

        return $st->fetchAll();
    }
}
