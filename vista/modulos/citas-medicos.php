<?php
session_start();

if (!$_SESSION["validarM"]) {
    header("location:index.php?action=inicio");
    exit();
}
?>

<main class="heightBlock">
    <!-- new table -->
    <div class="content-citas-personal">
        <h1>Citas</h1>
        <div class="table-citas-personal">
            <!-- <p style="text-align: end;"><i style="cursor: pointer;" class="fas fa-edit"></i></p> -->
            <table class="text-center">
                <tr class="border-bottom">
                    <td class="font-weight-bold px-3 border-right ">Fecha</td>
                    <td class="font-weight-bold px-3 border-right ">Hora</td>
                    <td class="font-weight-bold px-3 border-right ">Paciente</td>
                    <td class="font-weight-bold px-3 border-right ">Sede</td>
                    <td class="font-weight-bold px-3 border-right ">Precio de control</td>
                    <td class="font-weight-bold px-3 border-right ">Estado de Pago</td>
                    <td class="font-weight-bold px-3 border-right ">Asistencia</td>
                    <td class="font-weight-bold px-3 border-right ">Estado Informacion</td>
                    <td class="font-weight-bold px-3 border-right ">Editar</td>
                    <td class="font-weight-bold px-3 border-right">Eliminar</td>
                    <td class="font-weight-bold px-3 ">Guardar</td>

                </tr>
                <tr class="">
                    <?php
                    $ingreso = new controlesControlador();
                    $ingreso->vistaControlMedicoControlador();
                    ?>
                </tr>
            </table>
        </div>

        
        <!-- <form method="POST">  -->
            <?php
            
            $modaInfo = new controlesControlador();
            $modaInfo -> modalInformacion();
            ?>
        <!-- </form> -->
        <?php
        $registroInformacion = new informacionControlesControlador();
        $registroInformacion->registroInformacionControlesControlador();
        ?>


    </div>
    <!-- end table -->
</main>