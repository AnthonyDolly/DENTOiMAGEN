
<main class="heightBlock">
    <!-- new table -->
    <div class="content-historial-clinico">
        <!-- <h1>Mi historial Clínico</h1> -->
        
        <div class="table-historial-clinico pt-4" style="max-width: 900px;">
            <h1 class="mb-3">Mi Historial de Tratamientos</h1>
            <!-- <p style="text-align: end;"><i style="cursor: pointer;" class="fas fa-edit"></i></p> -->
            <table class="text-center">
                <tr class="border-bottom">
                    <td class="font-weight-bold px-3 border-right d-none">Id ct</td>
                    <td class="font-weight-bold px-3 border-right ">DNI del paciente</td>
                    <td class="font-weight-bold px-3 border-right ">Doctor(a)</td>
                    <td class="font-weight-bold px-3 border-right ">Fecha de inicio</td>
                    <td class="font-weight-bold px-3 border-right ">Tratamiento</td>
                    <td class="font-weight-bold px-3 ">Ver Detalle</td>
                </tr>
                <?php
                    $ingreso = new informacionTramientosControlador();
                    $ingreso->vistaInformacionTramientosControlador();
                ?>
               
            </table>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="table-historial-clinico mt-4" style="max-width: 900px;">
            <h1 class="mb-3">Mi Historial de Citas</h1>
            <!-- <p style="text-align: end;"><i style="cursor: pointer;" class="fas fa-edit"></i></p> -->
            <table class="text-center">
                <tr class="border-bottom">
                    <td class="font-weight-bold px-3 border-right ">Fecha/Hora</td>
                    <td class="font-weight-bold px-3 border-right ">Doctor(a)</td>
                    <td class="font-weight-bold px-3 border-right ">Sede</td>
                    <td class="font-weight-bold px-3 border-right ">Precio de control</td>
                    <td class="font-weight-bold px-3 border-right ">Estado de Pago</td>
                    <td class="font-weight-bold px-3 border-right ">Asistencia</td>
                    <td class="font-weight-bold px-3 ">Ver Detalle</td>

                </tr>
             
                <?php
                    $ingreso = new informacionControlesControlador();
                    $ingreso->vistaInformacionControlesControlador();
                ?>
               
            </table>
        </div>
    </div>
    <!-- end table -->
</main>

