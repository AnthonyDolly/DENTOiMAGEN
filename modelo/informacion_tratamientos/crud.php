<?php

require_once "modelo/conexion.php";

class InformacionTramientos extends Conexion
{
    #vista Informacion de Controles
    #----------------------------
    public function vistaInformacionTramientosModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT cm.fecha as Fecha, concat(m.nombres,' ',m.apellidos) AS 'Medico', m.id AS 'DNIMedico', ic.sede AS 'Sede', cm.precioSesion AS 'Importe', cm.estadoPago AS 'Estado de pago', cm.asistencia AS 'Asistencia', concat(c.nombres,' ',c.apellidos) AS 'Cliente', c.id AS 'DNICliente', ic.descripcion AS 'Descripcion', ct.fecha_inicio as 'Fecha Inicio', tt.nombre as 'NombreTratamiento'
        FROM controles_mensuales cm
        INNER JOIN informacion_controles ic
        ON cm.id = ic.control_mensual_id
        INNER JOIN clientes_tratamientos ct
        ON cm.cliente_tratamiento_id = ct.id
        INNER JOIN clientes c
        ON ic.cliente_id = c.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN tipos_tratamientos tt
        on t.tipo_tratamiento_id = tt.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        WHERE ic.cliente_id = $datosModelo
        GROUP BY cm.id;");
        
        $st->execute();

        return $st->fetchAll();
    }
}