<?php
session_start();

if (!$_SESSION["validarM"]) {
    header("location:index.php?action=inicio");
    exit();
}
?>

<main>
    <!-- new table -->
    <div class="content-citas-personal">
        <h1>Citas</h1>
        <div class="table-citas-personal" style="max-width: 900px;">
            <p style="text-align: end;"><i style="cursor: pointer;" class="fas fa-edit"></i></p>
            <table class="text-center" >
                <tr class="border-bottom">
                    <td class="font-weight-bold px-3 border-right ">Fecha</td>
                    <td class="font-weight-bold px-3 border-right ">Hora</td>
                    <td class="font-weight-bold px-3 border-right ">Paciente</td>
                    <td class="font-weight-bold px-3 border-right ">Sede</td>
                    <td class="font-weight-bold px-3 border-right ">Precio de control</td>
                    <td class="font-weight-bold px-3 border-right ">Estado de Pago</td>
                    <td class="font-weight-bold px-3 ">Asistencia</td>
                </tr>
                <tr class="">
                    <?php
                    $ingreso = new MvcControlador();
                    $ingreso -> vistaControlMedicoControlador();
                    ?>
                </tr>
            </table>
        </div>
    </div>
    <!-- end table -->
</main>