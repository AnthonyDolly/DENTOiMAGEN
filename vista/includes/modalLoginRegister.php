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
                        <input type="submit" name="btningresar" value="Ingresar" class="w-50" style="color: white; padding: .3em 2em; background-color: #3498db; border: 0; border-radius: .3em;">
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
                            <input type="text" class="form-control w-100 d-block dniForm" name="dni" placeholder="DNI" id="dniB" required>
                            <input type="text" class="form-control w-100 d-block" name="nombres" placeholder="Nombres" id="nombres" required>
                            <input type="text" class="form-control w-100 d-block" name="apellidos" placeholder="Apellidos" id="apellidos" required>
                            <input type="text" minlength="9" class="form-control w-100 d-block" name="telefono" placeholder="Telefono" id="telefono" required>
                        </div>
                        <div class="group-correo-username">
                            <input type="email" class="form-control w-100 d-block" name="correo" placeholder="Correo Electrónico" class="email" id="email" required>
                        </div>
                        <div class="group-password">
                            <input type="password" class="form-control w-100 d-block" name="password" placeholder="Contraseña" required>
                            <input type="password" class="form-control w-100 d-block" name="r-password" placeholder="Repetir contraseña" required>
                        </div>
                        <div class="group-submit">
                            <input type="submit" name="btnregistrar" class="w-50 mx-auto" value="Registrarse" style="color: white; padding: .3em 2em; background-color: #3498db; border: 0; border-radius: .3em; display: block;
                                      ">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const dniB = document.getElementById('dniB');
    const nombres = document.getElementById('nombres');
    const apellidos = document.getElementById('apellidos');
    const telefono = document.getElementById('telefono');
    const email = document.getElementById('email');

    const filtrar = () => {
        const texto = dniB.value.toLowerCase();

        nombres.value = '';
        apellidos.value = '';
        telefono.value = '';
        email.value = '';

        for (let paciente of pacientes) {
            let dni = paciente.dni.toLowerCase()
            if (dni.indexOf(texto) != -1) {
                nombres.value = `${paciente.nombres}`
                apellidos.value = `${paciente.apellidos}`
                telefono.value = `${paciente.telefono}`
                email.value = `${paciente.email}`
            }
        }
    }
    dniB.addEventListener('keyup', filtrar);
</script>