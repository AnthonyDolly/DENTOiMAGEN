<?php
ob_start();
?>

<?php
session_start();

if (!$_SESSION["validarA"]) {
    header("location:/dentoimagen/index.php?action=inicio");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
include "includes/head.php";
?>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <?php
    include "includes/header.php";
    include "includes/left-sidebar-nav.php";
    include "includes/right-sidebar-nav.php";
    ?>

    <?php
    $mvc = new MvcControladorB();
    $mvc->enlacesPaginaControlador();
    ?>

    <?php
    include "includes/footer.php";
    ?>


    <?php
    include "includes/foot.php";
    ?>
</body>

</html>

<?php
ob_end_flush();
?>