<div class="row justify-content-md-center tarjeta">
    <div class="col col-lg-10">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Proceso número <?= $numeroProceso ?></h5>
            </div>
            <div class="card-body">
                <p><strong>Fecha de creación:</strong></p>
                <p class="card-text"><?= $fechaCreacion ?></p>
                <p><strong>Descripción:</strong></p>
                <p class="card-text"><?= $descripcion ?></p>
                <p><strong>Sede:</strong></p>
                <p class="card-text"><?= $sede ?></p>
                <p><strong>Presupuesto:</strong></p>
                <?php
                    $dolar = $presupuesto / 3067.13;
                ?>
                <p class="card-text">COP: <?php echo(number_format($presupuesto,2,",",".")); ?></p>
                <p class="card-text">USD: <?php echo(number_format($dolar,2)); ?></p>
            </div>
        </div>
    </div>
</div>
