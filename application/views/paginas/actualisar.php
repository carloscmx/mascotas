<div class="row">

    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">
                Nombre: <?= $mascota->nombremascota; ?> ID: <?= $mascota->idmascota; ?></h5>
            <div class="card-body">
                <p class="card-text">
                    <center>
                        <img class="img-fluid" alt="Responsive image" src="<?php echo base_url($mascota->ubicacionimagen); ?>" style="width: 250px; height: 200px;" />
                    </center>
                </p>
            </div>

        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header"> Reseña</h5>
            <div class=" card-body">
                <p class="card-text">
                <p>Fecha de nacimiento: <?= $mascota->fechanan; ?></p>
                <p>Color de pelaje: <?= $mascota->color; ?></p>



                <p>Sexo: <?= $genero ?></p>
                <p>Fecha de registro: <?= $mascota->fecharegistro ?></p>
                <p>Especie: Felino</p>
                </p>
            </div>

        </div>
    </div>
</div>