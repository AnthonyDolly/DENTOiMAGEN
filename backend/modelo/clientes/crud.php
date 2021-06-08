<?php

require_once "modelo/conexion.php";

class DatosClientesB extends ConexionB
{
    #Vista de todos los clientes que hay en el sistema
    #----------------------------
    public function vistaClientesModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT id,nombres,apellidos,correo,telefono FROM clientes;");

        $st->execute();

        return $st->fetchAll();
    }

    #Total (en numero) de clientes que hay en el sistema
    #-----------------------------------------
    public function numClientesModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT COUNT(*) AS 'Total' FROM clientes;");

        $st->execute();

        return $st->fetch();
    }

    #Total (en numero) de los nuevos tratamientos que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosClientesModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT COUNT(*) AS 'Nuevos'
        FROM clientes
        WHERE TIMESTAMPDIFF(MONTH, fecha_registro, now()) < 1");

        $st->execute();

        return $st->fetch();
    }
}
