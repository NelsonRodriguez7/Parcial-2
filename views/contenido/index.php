<div class="container-xxl">
    <h3 class="fw-bold p-3">Tablero de compra</h3>
    <div class="container-xl">
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach(contenido_controllers::arreglo_productos() as $tabla) { ?>
        <div class="col">
            <div class="card hover-overlay hover-zoom hover-shadow" style="width: 22rem;">
                <img src="<?php echo $tabla->getImagen() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <?php $id = $tabla->getId_producto() ?>
                    <p class="card-text"><?php echo $tabla->getDescripcion() ?></p>
                    <a href="<?php echo "index.php?c=".seg::codificar("pagina_dinamica")."&m=".seg::codificar("pagina_dinamica")."&i=".seg::codificar($id) ?>"><button type="button" class="btn btn-success"><i class="bi bi-eye"> Ver Más</i></button></a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
</div>