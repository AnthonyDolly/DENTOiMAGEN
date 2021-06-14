<?php
session_start();

if (!$_SESSION["validar"]) {
    header("location:index.php?action=inicio");
    exit();
}
?>

<main>
    <section min-width="360" style="width: 100%; margin-top: -.3em;">
        <div class="container-perfil-cliente">
            <div class="perfil-paisaje"></div>
            <article class="perfil-article-flex">
                <div class="container-perfil-feature">
                    <div class="perfil-photo"></div>
                    <div class="perfil-feature">
                        <h2><?php echo $_SESSION["username"] ?></h2>
                        <h5>Paciente</h5>
                        <p><?php echo $_SESSION["correo"] ?></p>
                        <a class="d-block" href="index.php?action=controles&dni=<?php echo $_SESSION["id"] ?>">Mis Controles</a>
                        <a class="d-block" href="index.php?action=tratamiento&dni=<?php echo $_SESSION["id"] ?>">Mi tratamiento</a>
                        <a class="d-block" href="index.php?action=historial-clinico&dni=<?php echo $_SESSION["id"] ?>">Mi Historial Clínico</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
</main>