<?php

#EL INDEX: En el mostramos la salida de las vistas al usuario y también a travez de él enviamos las distintas acciones que el usuario envíe al controlador.

require_once "controlador/controlador.php";
require_once "modelo/enlaces.php";
require_once "modelo/clientes/crud.php";
require_once "modelo/medicos/crud.php";
require_once "modelo/controles/crud.php";
require_once "modelo/clientes_tratamientos/crud.php";

$mvc = new MvcControlador();
$mvc -> plantilla();

?>