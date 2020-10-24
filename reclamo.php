<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/dbc2195786.js" crossorigin="anonymous"></script>
    <title>Reclamo</title>
</head>

<body style="background-color: #fbfbfe; font-family: sans-serif;">
    <center>
        <main>
            <section>
                <form action="confirmacionReclamo.html" method="POST">
                    <fieldset style="width:320px; margin-top: 0em; border: 1px solid black; background-color: white;">
                        <h4>Realizar Reclamo</h4>
                        <p>
                            Nombres:
                            <input name="nombres" value="" required type="text">
                        </p>
                        <p>
                            Apellidos:
                            <input name="apellidos" value="" required type="text">
                        </p>
                        <p>
                            Teléfono:
                            <input type="text" name="telefono" value="" required>
                        </p>
                        <p>
                            Correo:
                            <input type="email" name="correo" value="" required>
                        </p>
                        <p>
                            El motivo:
                            <span style="padding-left:32px">
                                <textarea align="center" width="100%" name="" id="" cols="30" rows="10"
                                    style="resize: none;"></textarea>
                                <p align="center">
                                    <input width="80%" type="submit" value="Enviar">
                                </p>
                    </fieldset>
                </form>
            </section>

            <footer class="footer-page skyblue">
                <div class="image-bg">
                </div>
                <div class="d-flex content-footer">
                    <div class="col-4">
                        <div>
                            <h1>DENTOiMAGEN</h1>
                            <p>C. Los Olivos 62, Los Olivos 15304</p>
                            <p><span>Horario de atención:</span> <br>
                                Lun a Vie. de 8am - 1pm y 3pm-8pm <br>
                                Sab y Dom. de 9am a 2pm
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3>Contacto</h3>
                        <ul>
                            <li>
                                <strong>Telf: </strong> (01) 540 0543
                            </li>
                            <li>
                                <strong>Cel: </strong> +51 924 800 200
                            </li>
                            <li>
                                <strong>Cel: </strong> +51 924 800 500
                            </li>
                            <li>
                                <strong>Correo: </strong> dentoimagen@servicios.pe
                            </li>
                        </ul>
                        <div>
                            <img style="width: 20px; cursor: pointer;" src="image/facebook.svg" alt="">
                            <img style="width: 20px; cursor: pointer;" src="image/instagram.svg" alt="">
                        </div>
                    </div>
                    <div class="col-4 ">
                        <h3>Formas de pago</h3>
                        <div class="d-flex justify-content-between">
                            <img src="image/amex.svg" alt="">
                            <img src="image/diners.svg" alt="">
                            <img src="image/visa.svg" alt="">
                            <img src="image/mastercard.svg" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-12 pt-4 pb-2">
                    <p>Todos los derechos reservados © 2020 | DENTOiMAGEN</p>
                </div>
            </footer>

        </main>
    </center>



</body>

</html>