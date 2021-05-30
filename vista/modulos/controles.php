<main>
    <!-- <table> -->
    <!-- new table -->
    <div class="content-citas">
        <h1>Mis Controles de Tratamiento</h1>
        <div class="table-citas-controles text-center" style="max-width: 900px; width: 100%;">
            <table>
                <p class="d-flex ">
                    <tr class="text-center border-bottom">
                        <td class="px-3 font-weight-bold border-right">Fecha</td>
                        <td class="px-3 font-weight-bold border-right">Hora</td>
                        <td class="px-3 font-weight-bold border-right">Doctor(a)</td>
                        <td class="px-3 font-weight-bold border-right">Sede</td>
                        <td class="px-3 font-weight-bold border-right">Precio de control</td>
                        <td class="px-3 font-weight-bold border-right">Estado de Pago</td>
                        <td class="px-3 font-weight-bold ">Asistencia
                </p>
                </tr>
                </p>

                <p class="">
                    <?php
                    $ingreso = new controlesControlador();
                    $ingreso->vistaControlControlador();
                    ?>
                </p>
            </table>
        </div>
    </div>
    <!-- end new table -->
    <!-- </table> -->
</main>