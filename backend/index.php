<?php

#EL INDEX: En el mostramos la salida de las vistas al usuario y también a travez de él enviamos las distintas acciones que el usuario envíe al controlador.

require_once "../backend/controlador/enlaces.php";
require_once "../backend/modelo/enlaces.php";
require_once "../backend/controlador/clientes_tratamientos/clientes_tratamientosControlador.php";
require_once "../backend/modelo/clientes_tratamientos/crud.php";
require_once "../backend/controlador/clientes/clientesControlador.php";
require_once "../backend/modelo/clientes/crud.php";
require_once "../backend/controlador/medicos/medicosControlador.php";
require_once "../backend/modelo/medico/crud.php";
require_once "../backend/controlador/controles/controlesControlador.php";
require_once "../backend/modelo/controles/crud.php";
require_once "../backend/controlador/consultas/consultasControlador.php";
require_once "../backend/modelo/consultas/crud.php";

$mvc = new MvcControladorB();
$mvc->plantilla();
