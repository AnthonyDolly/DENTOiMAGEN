<main class="heightBlock"> 
    <div class="content-citas-personal">
        <h1 class="pt-4">Mis Tratamientos</h1>
        <div class="table-citas-personal" style="max-width: 950px;">
            <p style="text-align: end;">
                <!-- <a href="editarMisTratamientos.php">
                    <i style="cursor: pointer;" class="fas fa-edit"></i>
                </a> -->
            </p>
            <div>
                <?php
                $ingreso = new clientes_tratamientosControlador();
                $ingreso->vistaClienteTratamientoMedicoControlador();
                ?>
            </div>
        </div>
    </div>
</main>