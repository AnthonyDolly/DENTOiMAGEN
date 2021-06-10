<?php

require_once "modelo/conexion.php";

class DatosControlesB extends ConexionB
{
    #Vista de todos los controles que hay en el sistema
    #----------------------------
    public function vistaControlesModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT cm.id AS ID, c.id AS DNI, concat(c.nombres, ' ', c.apellidos) AS Paciente, concat(m.nombres, ' ', m.apellidos) AS 'Dentista', DATE_FORMAT(cm.fecha, '%d/%m/%Y %H:%i') AS Fecha, cm.precioSesion AS 'Importe', cm.estadoPago AS 'Estado de Pago', cm.asistencia AS 'Asistencia'
        FROM controles_mensuales cm 
        INNER JOIN clientes_tratamientos ct 
        ON cm.cliente_tratamiento_id = ct.id 
        INNER JOIN clientes c 
        ON ct.cliente_id = c.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m 
        ON t.medico_id = m.id
        ORDER BY cm.id;
        ");

        $st->execute();

        return $st->fetchAll();
    }

    #Vista de todos los controles que hay para el día de hoy
    #----------------------------
    public function vistaControlesHoyModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT cm.id AS 'ID', c.id AS DNI, concat(c.nombres, ' ', c.apellidos) AS Paciente, DATE_FORMAT(cm.fecha, '%d/%m/%Y %H:%i') AS Fecha, cm.precioSesion AS 'Importe', cm.estadoPago AS 'Estado de Pago', cm.asistencia AS 'Asistencia'
        FROM controles_mensuales cm 
        INNER JOIN clientes_tratamientos ct 
        ON cm.cliente_tratamiento_id = ct.id 
        INNER JOIN clientes c 
        ON ct.cliente_id = c.id
        WHERE DATE_FORMAT(cm.fecha, '%Y/%m/%d') = DATE_FORMAT(now(), '%Y/%m/%d');");

        $st->execute();

        return $st->fetchAll();
    }

    public function actualizarEstadosControlModelo($datosModelo, $tabla)
    {
        $st = ConexionB::conectar()->prepare("UPDATE $tabla 
        SET estadoPago = :estadoPago, asistencia = :estadoAsistencia 
        WHERE id = :idCM;");

        $st->bindParam(":idCM", $datosModelo["idCM"], PDO::PARAM_STR);
        $st->bindParam(":estadoPago", $datosModelo["estadoPago"], PDO::PARAM_STR);
        $st->bindParam(":estadoAsistencia", $datosModelo["estadoAsistencia"], PDO::PARAM_STR);

        if ($st->execute()) {
            return "success";
        } else {
            return "error";
        }
    }

    #Total (en numero) de controles que hay en el sistema
    #-----------------------------------------
    public function numControlesModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT COUNT(*) AS 'Total' FROM controles_mensuales;");

        $st->execute();

        return $st->fetch();
    }

    #Total (en numero) de los nuevos controles que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosControlesModelo()
    {
        $st = ConexionB::conectar()->prepare("SELECT COUNT(*) AS 'Nuevos'
        FROM controles_mensuales
        WHERE TIMESTAMPDIFF(MONTH, fecha_creacion, now()) < 1");

        $st->execute();

        return $st->fetch();
    }
}
