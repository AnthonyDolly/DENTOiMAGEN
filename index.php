<?php

#EL INDEX: En el mostramos la salida de las vistas al usuario y también a travez de él enviamos las distintas acciones que el usuario envíe al controlador.

require_once "controlador/enlaces.php";
require_once "controlador/clientes/clienteControlador.php";
require_once "controlador/clientes_tratamientos/clientes_tratamientosControlador.php";
require_once "controlador/controles/controlesControlador.php";
require_once "controlador/medicos/medicoControlador.php";
require_once "controlador/asistentes/asistenteControlador.php";
require_once "modelo/enlaces.php";
require_once "modelo/clientes/crud.php";
require_once "modelo/medicos/crud.php";
require_once "modelo/controles/crud.php";
require_once "modelo/clientes_tratamientos/crud.php";
require_once "modelo/asistentes/crud.php";
require_once "modelo/informacion_controles/crud.php";
require_once "controlador/informacion_controles/informacion_controlesControlador.php";
require_once "controlador/informacion_tratamientos/informacion_tramientosControlador.php";
require_once "modelo/informacion_tratamientos/crud.php";
$mvc = new MvcControlador();
$mvc -> plantilla();
