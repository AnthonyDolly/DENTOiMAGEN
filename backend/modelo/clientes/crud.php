<?php

require_once "modelo/conexion.php";

class DatosClientesB extends ConexionB
{
    #Vista de todos los clientes que hay en el sistema
    #----------------------------
    public function vistaClientesModelo()
    {
        $st = ConexionB::conectar()->prepare("call vistaClientesB()");

        $st->execute();

        return $st->fetchAll();
    }

    #Total (en numero) de clientes que hay en el sistema
    #-----------------------------------------
    public function numClientesModelo()
    {
        $st = ConexionB::conectar()->prepare("CALL numCLientesB()");

        $st->execute();

        return $st->fetch();
    }

    #Total (en numero) de los nuevos clientes que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosClientesModelo()
    {
        $st = ConexionB::conectar()->prepare("call numNuevosClientesB()");

        $st->execute();

        return $st->fetch();
    }
}
