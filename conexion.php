<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "clinica_dental";

$conexion = mysqli_connect($server,$user,$pass,$db);

mysqli_set_charset($conexion, "utf8");

?>
