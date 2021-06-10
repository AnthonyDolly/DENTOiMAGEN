<?php

require_once "modelo/conexion.php";

class DatosMedicosB extends ConexionB
{
    #Vista de todos los medicos que hay en el sistema
    #----------------------------
    public function vistaMedicosModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT m.id AS 'ID', m.nombres AS 'Nombres', m.apellidos AS 'Apellidos', m.correo AS 'Correo', m.telefono AS 'Telefono', s.nombre AS 'Sede', e.nombre AS 'Especialidad' 
        FROM medicos m
        INNER JOIN sedes s
        ON m.sede_id = s.id
        INNER JOIN especialidades e
        ON m.especialidad_id = e.id
        ORDER BY m.id;");

        $st->execute();

        return $st->fetchAll();
    }

    #Total (en numero) de dentistas que hay en el sistema
    #-----------------------------------------
    public function numMedicosModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT COUNT(*) AS 'Total' FROM medicos;");

        $st->execute();

        return $st->fetch();
    }

    #Total (en numero) de los nuevos dentistas que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosMedicosModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT COUNT(*) AS 'Nuevos'
        FROM medicos
        WHERE TIMESTAMPDIFF(MONTH, fecha_registro, now()) < 1");

        $st->execute();

        return $st->fetch();
    }
}