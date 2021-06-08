<?php

require_once "modelo/conexion.php";

class DatosControlesB extends ConexionB
{
    #Vista de todos los controles que hay en el sistema
    #----------------------------
    public function vistaControlesModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT c.id AS DNI, concat(c.nombres, ' ', c.apellidos) AS Paciente, DATE_FORMAT(cm.fecha, '%d/%m/%Y %H:%i') AS Fecha, cm.precioSesion AS 'Importe', cm.estadoPago AS 'Estado de Pago', cm.asistencia AS 'Asistencia'
        FROM controles_mensuales cm 
        INNER JOIN clientes_tratamientos ct 
        ON cm.cliente_tratamiento_id = ct.id 
        INNER JOIN clientes c 
        ON ct.cliente_id = c.id
        WHERE DATE_FORMAT(cm.fecha, '%Y/%m/%d') = DATE_FORMAT(now(), '%Y/%m/%d');");

        $st->execute();

        return $st->fetchAll();
    }
}
