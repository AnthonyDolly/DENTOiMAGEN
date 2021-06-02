<!-- Modal Login-->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 0;">
            <form method="post">
                <div class="modal-header" style="background-color: skyblue; margin-bottom: 1em;">
                    <h5 class="modal-title">Iniciar Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div style="text-align: center;" class="mx-auto">
                    <div class="form-group-login">
                        <label style="display: block; font-size: .8em;">Username</label>
                        <input class="form-control w-75 mx-auto" type="text" name="usernameI" required="" size="30">
                    </div>
                    <div class="form-group-login">
                        <label style="display: block; font-size: .8em;">Password</label>
                        <input class="form-control w-75 mx-auto" type="Password" name="passwordI" required="" size="30">
                    </div>
                    <div class="group-submit-Login">
                        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close"
                            data-toggle="modal" data-target="#RegisterModal"
                            style="display: inline-block; font-size: .8em; color: #3498db;">¿No
                            tienes cuenta? Regístrate
                        </button>
                        <input type="submit" name="btningresar" value="Ingresar"
                            style="color: white; padding: .3em 2em; background-color: #3498db; border: 0; border-radius: .3em;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 0;">
            <form method="post">
                <div class="modal-header" style="background-color: skyblue; margin-bottom: 1em;">
                    <h5>Registrarse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div style="margin-left: .2em; margin-right: .2em;">
                    <div class="form-group-register w-75 mx-auto py-4 ">
                        <div class="group-names">
                            <input type="text" class="form-control w-100 d-block" name="dni" placeholder="DNI" required>
                            <input type="text" class="form-control w-100 d-block" name="nombres" placeholder="Nombres" required>
                            <input type="text" class="form-control w-100 d-block" name="apellidos" placeholder="Apellidos" required>
                            <input type="text" class="form-control w-100 d-block" name="telefono" placeholder="Telefono" required>
                        </div>
                        <div class="group-correo-username">
                            <input type="email" class="form-control w-100 d-block" name="correo" placeholder="Correo Electrónico" class="email"
                                required>
                        </div>
                        <div class="group-password">
                            <input type="password" class="form-control w-100 d-block" name="password" placeholder="Contraseña" required>
                            <input type="password" class="form-control w-100 d-block" name="r-password" placeholder="Repetir contraseña" required>
                        </div>
                        <div class="group-submit">
                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close"
                                data-toggle="modal" data-target="#LoginModal"
                                style="display: inline-block; font-size: .8em; color: #3498db;">¿Ya
                                tienes cuenta? Iniciar sesión
                            </button>
                            <input type="submit" class="right" name="btnregistrar" value="Registrarse" style="color: white; padding: .3em 2em; background-color: #3498db; border: 0; border-radius: .3em;
                                        ">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
