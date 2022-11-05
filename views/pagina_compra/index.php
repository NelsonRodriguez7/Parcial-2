<div class="container-fluid">
    <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
        <div class = "col-auto">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Detalles De La Compra</div>
                <?php foreach(contenido_controllers::arreglo_productos() as $tabla) { $id_comparacion = $tabla->getId_producto() ?>
                <?php if (seg::decodificar($i) == $id_comparacion){?>
                <div class="card-body text-primary">
                    <h5 class="card-title">Nombre: <?php echo $tabla->getDescripcion()?></h5>
                    <p class="card-text mb-0">Precio: $<?php echo $precio=$tabla->getPrecio_venta() ?></p>
                    <?php $total=($precio*0.07)+$precio?>
                    <p class="card-text">Precio total con ITBMS: $<?php echo $total ?></p>
                    <button type="button" class="btn btn-info">Pagar</button>
                </div>
                <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>