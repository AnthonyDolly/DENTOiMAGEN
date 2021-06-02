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
}
