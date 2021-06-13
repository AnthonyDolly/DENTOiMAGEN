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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Informacion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong></strong></p>
                        <p><strong> Paciente:  <?php echo ' ' . $_POST['datamo'] . ' '; ?> </strong></p>
                        <p><strong> DNI:  </strong></p>
                        <p><strong> Sede: </strong> datamodal </p>
                        <p><strong> Precio de control: </strong></p>
                        <p><strong> Mensaje </strong></p>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">C</button> -->
                        <button type="button" class="btn btn-primary">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end table -->
</main>