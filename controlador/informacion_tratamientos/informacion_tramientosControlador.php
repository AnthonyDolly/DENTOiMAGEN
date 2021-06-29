

<?php

class informacionTramientosControlador
{

    // #listado control mensual
    #----------------------------------------
    public function vistaInformacionTramientosControlador()
    {

        $datosControlador = $_GET['dni'];
        $respuesta = InformacionTramientos::vistaInformacionTramientosModelo($datosControlador, "controles_mensuales");
        $i = 0;
        foreach ($respuesta as $row => $item) {
            $i++;

            echo '<tr>
                    <td class="px-3 border-right pt-3">' . $item["DNICliente"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Medico"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Fecha Inicio"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["NombreTratamiento"] . '</td>            
                    <td class="px-3 pt-3">    
                        <a href="index.php?action=pdfTrat&nT='.$item["NombreTratamiento"].'"">
                            <button  style="height: 40px;" type="submit" name="boton" class="btn btn-primary mx-auto borderd d-block">
                                <i style="cursor: pointer;"class="fas fa-download"></i>
                            </button>
                        </a>
                    </td>
                </tr>';
        }
    }



    // #listado control mensual
    #----------------------------------------
    public function vistaPDFInformacionTratamientoControlador()
    {
        $datosControlador = $_GET['idIC'];
        $respuesta = InformacionTramientos::vistaInformacionTramientosModelo($datosControlador, "controles_mensuales");
        // $test = 10;
       return $respuesta;

    }
}
