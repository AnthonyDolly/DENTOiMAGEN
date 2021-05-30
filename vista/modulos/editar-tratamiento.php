<main style="margin: 10rem auto;">
    <div class="content-citas-personal">
        <h1>Editar Tratamientos</h1>
        <div class="table-citas-personal " style="max-width: 900px;">
            <p style="text-align: end;">
            </p>
            <form method="POST">
                <div>
                    <?php
                    $editar = new clientes_tratamientosControlador();
                    $editar->editarClienteTratamientoControlador();
                    $editar->actualizarClienteTratamientoControlador();
                    ?>
                </div>

                <!-- <a href="index.php?action=actualizar">
                    <button class="btn btn-primary mt-5">
                        ACTUALIZAR
                    </button>
                </a> -->
            </form>
            <br>
        </div>
    </div>
</main>