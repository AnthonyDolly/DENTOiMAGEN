<?php
session_start();

if (!$_SESSION["validar"]) {
    header("location:index.php?action=inicio");
    exit();
}
?>

<main>
    <!-- new table -->
    <div class="content-treatment-user">
        <h1>Mi Tratamiento</h1>
        <div class="table-treatment-user" style="max-width: 1100px; width: 100%;" >
            <table class="text-center">
                <tr class="border-bottom">
                    <td class="font-weight-bold px-3 border-right">DNI del Paciente</td>
                    <td class="font-weight-bold px-3 border-right">Doctor(a)</td>
                    <td class="font-weight-bold px-3 border-right" >Fecha de inicio</td>
                    <td class="font-weight-bold px-3 border-right" >Tratamiento</td>
                    <td class="font-weight-bold px-3 border-right" >Descripción</td>
                    <td class="font-weight-bold px-3 border-right" >Cantidad de sesiones</td>
                    <td class="font-weight-bold px-3 " >Estado</td>
                </tr>

                <tr class="">
                    <?php
                    $ingreso = new MvcControlador();
                    $ingreso -> vistaClienteTratamientoControlador();
                    ?>
                </tr>
            </table>
        </div>
    </div>
    <!-- end table -->
</main>