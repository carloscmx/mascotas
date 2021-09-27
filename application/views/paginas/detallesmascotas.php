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

                    <?php
                    $genero = "";
                    switch ($mascota->genero) {
                        case 0:
                            $genero = "Otro";
                            break;
                        case 1:
                            $genero = "Macho";
                            break;
                        case 2:
                            $genero = "Hembra";
                            break;
                        default:
                            $genero = "No definido";
                            break;
                    }
                    ?>

                    <p>Sexo: <?= $genero ?></p>
                    <p>Fecha de registro: <?= $mascota->fecharegistro ?></p>
                    <p>Especie: <?= $especie->nombrespecie ?></p>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!--Expediente medico-->
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">
                    Expediente medico
                </h5>
                <div class="card-body">
                    <p class="card-text">
                    <div class="col-md-12">
                        <div id="card-716615">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-716615" href="#card-element-303795">Collapsible Group Item #1</a>
                                </div>
                                <div id="card-element-303795" class="collapse">
                                    <div class="card-body">
                                        Anim pariatur cliche...
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-716615" href="#card-element-997027">Collapsible Group Item #2</a>
                                </div>
                                <div id="card-element-997027" class="collapse">
                                    <div class="card-body">
                                        Anim pariatur cliche...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>

            </div>
        </div>


    </div>