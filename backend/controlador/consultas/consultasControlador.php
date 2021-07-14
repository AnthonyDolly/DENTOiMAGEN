<?php

class consultasControladorB
{
    #Vista de todas las solicitudes de consultas que requieren confirmacion
    #-----------------------------------------------------------
    public function vistaSolicitudesConsultasControlador()
    {
        $respuesta = DatosConsultasB::vistaSolicitudesConsultasModelo();

        foreach ($respuesta as $key => $item) {
            echo '<form method="post">
                    <table class="highlight responsive-table">
                        <tbody>
                            <tr>
                                <td style="display: none;">
                                    <input type="text" class="form-control "  
                                    name="idC" value =' . $item["ID"] . '>
                                </td>
                                <td>' . $item["DNI"] . '</td>
                                <td>' . $item["Nombre"] . '</td>
                                <td>' . $item["Telefono"] . '</td>
                                <td>' . $item["Correo"] . '</td>
                                <td>' . $item["Fecha"] . '</td>
                                <td>
                                    <input type="text" class="datepicker form-control" id="datepicker" name="fechaC" required value="">
                                </td>
                                <td>
                                    <input type="text" class="timepicker" id="timepicker" name="horaC" required value="">
                                </td>
                                <td>' . $item["Importe"] . '</td>
                                <td>' . $item["Descripcion"] . '</td>
                                <td>' . $item["Sede"] . '</td>
                                <td>' . $item["Medico"] . '</td>
                                <td>
                                    <button type="submit" class="btn waves-effect waves-light gradient-45deg-light-blue-cyan" name="actions" id="agendar" value="agendar">Agendar</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn waves-effect waves-light gradient-45deg-red-pink" name="actions" id="eliminar" value="eliminar">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </form>';
        }
    }

    #Actualizar fecha de la consulta por parte del asistente
    #---------------------------------------------
    public function actualizarFechaConsultaControlador()
    {
        if ($_POST["actions"] == 'agendar') {

            $datosControlador = array(
                "idC" => $_POST["idC"],
                "fecha" => $_POST["fechaC"] . ' ' . $_POST["horaC"],
            );

            $respuesta = DatosConsultasB::actualizarFechaConsultaModelo($datosControlador, "consultas");

            $_SESSION["estado"] = 'agendado';

            if ($respuesta == "success") {
                header('location:index.php?action=consultas-solicitadas');
            } else {
                header("location:index.php");
            }
        }
    }

    #Eliminar consultas basuras por parte del asistente
    #---------------------------------------------
    public function eliminarConsultasBasuraControlador()
    {
        if ($_POST["actions"] == 'eliminar') {

            $datosControlador = $_POST["idC"];

            $respuesta = DatosConsultasB::eliminarConsultasBasuraModelo($datosControlador, "consultas");

            $_SESSION["estado"] = 'eliminado';

            if ($respuesta == "success") {
                header('location:index.php?action=consultas-solicitadas');
            } else {
                header("location:index.php");
            }
        }
    }

    #Vista de todas las consultas que hay en el sistema
    #----------------------------
    public function vistaConsultasControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosConsultasB::vistaConsultasModelo();

        foreach ($respuesta as $key => $item) {
            echo '<tr>
                    <td>' . $item["ID"] . '</td>
                    <td>' . $item["DNI"] . '</td>
                    <td>' . $item["Nombre"] . '</td>
                    <td>' . $item["Telefono"] . '</td>
                    <td>' . $item["Correo"] . '</td>
                    <td>' . $item["Fecha"] . '</td>
                    <td>' . $item["Importe"] . '</td>
                    <td>' . $item["Descripcion"] . '</td>
                    <td>' . $item["Sede"] . '</td>
                    <td>' . $item["Medico"] . '</td>
                    <td>' . $item["Asistencia"] . '</td>
                </tr>';
        }
    }

    #Vista de todas las consultas que hay para el día de hoy
    #----------------------------------------
    public function vistaConsultaHoyControlador()
    {
            //sasdasd
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosConsultasB::vistaConsultasHoyModelo();

        foreach ($respuesta as $key => $item) {
            echo '<form method="post">
                    <table class="highlight responsive-table">
                        <tbody>
                            <tr>
                                <td style="display: none;">
                                    <input type="text" class="form-control "  
                                    name="idC" value =' . $item["ID"] . '>
                                </td>
                                <td style="width: 7%;" >' . $item["DNI"] . '</td>
                                <td style="width: 10%;" >' . $item["Nombre"] . '</td>
                                <td style="width: 10%;" >' . $item["Fecha"] . '</td>
                                <td style="width: 10%;" >' . $item["Importe"] . '</td>
                                <td style="width: 10%;" >' . $item["Medico"] . '</td> 
                                <td style="width: 15%;" >
                                    <select name="asistencia">
                                        <option value="1" selected>Pendiente</option>
                                        <option value="2">Asistió</option>
                                        <option value="3">Faltó</option>
                                    </select>
                                </td>
                                <td style="width: 15%;">
                                    <button type="submit" class="btn waves-effect waves-light gradient-45deg-light-blue-cyan" name="actions" id="actualizar" value="actualizar">Actualizar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header" style="display:block !important;padding:.2rem;">
                            <span style="font-weight:bold;">Contactar...</span>
                        </div>
                        <div class="collapsible-body" style="display:flex;justify-content:space-around;background: white;">
                            <p><i class="material-icons">perm_identity</i>Nombre: ' . $item["Nombre"] . '</p>
                            <p><i class="material-icons">email</i><a style="color:black;" href="mailto:' . $item["Correo"] . '"> Correo: ' . $item["Correo"] . '</a></p>
                            <p><i class="material-icons">perm_phone_msg</i><a style="color:black;"href="https://api.whatsapp.com/send?phone=51' . $item["Telefono"] . '&amp;text=Hola%20' . $item["Paciente"] . '" target="_blank">Telefono: ' . $item["Telefono"] . '</a></p>
                        </div>
                    </li>
                </ul>';
                
        }
    }

    #Bucar una consulta del día con el nro de DNI del paciente.
    #---------------------------------------------------
    public function buscarConsultaControlador()
    {
        if (isset($_POST["dniBC"])) {
            $datosControlador = $_POST["dniBC"];
            $respuesta = DatosConsultasB::buscarConsultaModelo($datosControlador);

            if (isset($respuesta)) {
                foreach ($respuesta as $key => $item) {
                    echo '<form method="post">
                            <table class="highlight responsive-table">
                                <tbody>
                                    <tr>
                                        <td style="display: none;">
                                            <input type="text" class="form-control "  
                                            name="idC" value =' . $item["ID"] . '>
                                        </td>
                                        <td style="width: 7%;" >' . $item["DNI"] . '</td>
                                        <td style="width: 10%;" >' . $item["Nombre"] . '</td>
                                        <td style="width: 10%;" >' . $item["Fecha"] . '</td>
                                        <td style="width: 10%;" >' . $item["Importe"] . '</td>
                                        <td style="width: 10%;" >' . $item["Medico"] . '</td>
                                        <td style="width: 15%;" >
                                            <select name="asistencia">
                                                <option value="1" selected>Pendiente</option>
                                                <option value="2">Asistió</option>
                                                <option value="3">Faltó</option>
                                            </select>
                                        </td>
                                        <td style="width: 15%;">
                                            <button type="submit" class="btn waves-effect waves-light gradient-45deg-light-blue-cyan" name="actions" id="actualizar" value="actualizar">Actualizar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header" style="display:block !important;padding:.2rem;">
                                    <span style="font-weight:bold;">Contactar...</span>
                                </div>
                                <div class="collapsible-body" style="display:flex;justify-content:space-around;background: white;">
                                    <p><i class="material-icons">perm_identity</i>Nombre: ' . $item["Nombre"] . '</p>
                                    <p><i class="material-icons">email</i><a style="color:black;" href="mailto:' . $item["Correo"] . '"> Correo: ' . $item["Correo"] . '</a></p>
                                    <p><i class="material-icons">perm_phone_msg</i><a style="color:black;"href="https://api.whatsapp.com/send?phone=51' . $item["Telefono"] . '&amp;text=Hola%20' . $item["Paciente"] . '" target="_blank">Telefono: ' . $item["Telefono"] . '</a></p>
                                </div>
                            </li>
                        </ul>';
                }
            }
        }
    }

    #Actualizar estado de la consulta
    #----------------------------------------
    public function actualizarEstadoConsultaControlador()
    {
        if (isset($_POST["idC"]) && $_POST["actions"] == 'actualizar') {

            $datosControlador = array(
                "idC" => $_POST["idC"],
                "estadoAsistencia" => $_POST["asistencia"]
            );

            $respuesta = DatosConsultasB::actualizarEstadoConsultaModelo($datosControlador, "consultas");

            $_SESSION["estado"] = 'agendado';

            if ($respuesta == "success") {
                header('location:index.php?action=inicio');
            } else {
                header("location:index.php");
            }
        }
    }



 
}
