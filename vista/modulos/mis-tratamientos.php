<main>
    <div class="content-citas-personal">
        <h1>Mis Tratamientos</h1>
        <div class="table-citas-personal" style="max-width: 900px;">
            <p style="text-align: end;">
                <!-- <a href="editarMisTratamientos.php">
                    <i style="cursor: pointer;" class="fas fa-edit"></i>
                </a> -->
            </p>
            <div>
                <?php
                    $ingreso = new MvcControlador();
                    $ingreso -> vistaClienteTratamientoMedicoControlador();
                ?>
            </div>
        </div>
    </div>
</main>
