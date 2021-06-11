<?php

require_once "modelo/conexion.php";

class DatosMedicosB extends ConexionB
{
    #Vista de todos los medicos que hay en el sistema
    #----------------------------
    public function vistaMedicosModelo()
    {
        $st = ConexionB::conectar()->prepare("CALL vistaMedicosB()");

        $st->execute();

        return $st->fetchAll();
    }

    #Total (en numero) de dentistas que hay en el sistema
    #-----------------------------------------
    public function numMedicosModelo()
    {
        $st = ConexionB::conectar()->prepare("CALL numMedicosB()");

        $st->execute();

        return $st->fetch();
    }

    #Total (en numero) de los nuevos dentistas que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosMedicosModelo()
    {
        $st = ConexionB::conectar()->prepare("call numNuevosMedicosB()");

        $st->execute();

        return $st->fetch();
    }
}