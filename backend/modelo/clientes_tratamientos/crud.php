<?php

require_once "modelo/conexion.php";

class DatosClientesTratamientosB extends ConexionB
{
    #Vista de todos los tratamientos que hay en el sistema
    #----------------------------
    public function vistaClienteTratamientosModelo()
    {
        $st = ConexionB::conectar()->prepare("call vistaClienteTratamientoB()");

        $st->execute();

        return $st->fetchAll();
    }

    #Total (en numero) de tratamientos que hay en el sistema
    #-----------------------------------------
    public function numClienteTratamientosModelo()
    {
        $st = ConexionB::conectar()->prepare("call numClienteTratamientosB()");

        $st->execute();

        return $st->fetch();
    }

    #Total (en numero) de los nuevos tratamientos que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosClienteTratamientosModelo()
    {
        $st = ConexionB::conectar()->prepare("call numNuevosClienteTratamientosB()");

        $st->execute();

        return $st->fetch();
    }
}
