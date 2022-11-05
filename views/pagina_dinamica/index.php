<div class="container-xxl">
    <br>
    <div class="card mb-3">
    <div class="card">
    <div class="card-body">
        <?php foreach(contenido_controllers::arreglo_productos() as $tabla) { $id_comparacion = $tabla->getId_producto() ?>
        <?php if (seg::decodificar($i) == $id_comparacion){?>   
        <h5 class="card-title"><?php echo $tabla->getDescripcion() ?></h5>
        <p class="card-text mb-0">
        Cantidad Disponible Actualmente: <?php echo $tabla->getCantidad_en_existencia()?>
        </p>
        <p class="card-text">
        Precio De Compra: $<?php echo $tabla->getPrecio_venta()?>
        </p>
        <?php if(isset($_SESSION["correo"])) {?>
        <a href="<?php echo "index.php?c=".seg::codificar("pagina_compra")."&m=".seg::codificar("pagina_compra")."&i=".seg::codificar($id_comparacion) ?>">
        <button type="button" class="btn btn-success">Comprar</button>
        </a>
        <?php }else{?>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Comprar
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered      ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¡Estamos A Un Paso De Tu Compra!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Debes Iniciar Sesión Para Poder Terminar Tu Compra
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        
                        <a href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("login") ?>">
                        <button type="button" class="btn btn-primary">
                            Iniciar Sesion
                        </button>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        <?php } ?>
        <p class="card-text">
        <small class="text-muted">Imagen referente - el precio no incluye ITBMS</small>
        </p>
    </div>
    <img src="<?php echo $tabla->getImagen() ?>" class="card-img-bottom" alt="Camera"/>
    <?php } ?>
    <?php } ?>
    </div>
</div>
</div>