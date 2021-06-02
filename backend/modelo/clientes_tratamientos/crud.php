<?php

require_once "modelo/conexion.php";

class DatosClientesTratamientosB extends Conexion
{
    #Vista de todos los tratamientos que hay en el sistema
    #----------------------------
    public function vistaClienteTratamientoModelo($datosModelo, $tabla)
    {
        $st = ConexionB::conectar()->prepare("SELECT ct.id, ct.descripcion, ct.cantSesiones AS 'Sesiones', ct.fecha_inicio AS 'Fecha de inicio', ct.estado, c.id AS 'DNI', concat(c.nombres,' ',c.apellidos) AS 'Paciente', concat(m.nombres,' ',m.apellidos) AS 'Dentista', tt.nombre AS 'Tratamiento'
        FROM clientes_tratamientos ct
        INNER JOIN clientes c 
        ON ct.cliente_id = c.id
        INNER JOIN tratamientos t 
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m 
        ON t.medico_id = m.id
        INNER JOIN tipos_tratamientos tt
        ON t.tipo_tratamiento_id = tt.id
        GROUP BY ct.id
        ORDER BY ct.id;");
    }
}
