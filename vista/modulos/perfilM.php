<?php
session_start();

if (!$_SESSION["validarM"]) {
    header("location:index.php?action=inicio");
    exit();
}
?>

<main>
    <section min-width="360" style="width: 100%; margin-top: -.3em;">
        <div class="container-perfil-personal">
            <div class="perfil-paisaje"></div>
            <article class="perfil-article-flex">
                <div class="container-perfil-feature">
                    <div class="perfil-photo"></div>
                    <div class="perfil-feature">
                        <h2>
                        <?php
                            echo $_SESSION['usernameM'];
                        ?>
                        </h2>
                        <h5>Cirujana Dentista</h>
                            <p> 
                            <?php
                                echo $_SESSION['correo'];
                            ?>
                            </p>
                            <a href="index.php?action=citas-medicos&dni=<?php echo $_SESSION['id']; ?>">Mis citas</a>
                            <a href="index.php?action=horario-medicos" style="margin-left: 1em;">Horario de trabajo</a>
                            <a href="index.php?action=registrar-incidencia" style="display: block; margin-top: .5em;">Registrar incidencia</a>
                            <a href="index.php?action=registrar-tratamiento" style="display: block; margin-top: .5em;">Registrar Tramiento</a>
                            <a href="index.php?action=mis-tratamientos&dni=<?php echo $_SESSION['id']; ?>" style="display: block; margin-top: .5em;">Ver mis
                                Tratamientos</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
