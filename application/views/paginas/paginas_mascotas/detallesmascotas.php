<div class="row">
    <div class="col-md-9">
        <form>
            <button type="button" onclick="history.back()" class="btn-sm btn-outline-danger btn-rounded">Regresar</button>
            <button type="button" class="btn-sm btn-outline-dark btn-rounded" onclick="javascript:window.print()">Imprimir</button>
        </form>
    </div>
</div>

<br></br>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header" style="text-align: center;">
                Nombre: <?= $mascota->nombremascota; ?> </p>
            </h5>
            <div class="card-body">
                <p class="card-text">
                    <center>
                        <img class="img-fluid" alt="Responsive image" src="<?php echo base_url($mascota->ubicacionimagen); ?>" style="width: 300px; height: 250px;" />
                    </center>
                </p>
            </div>

        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header" style="text-align: center;"> Reseña</h5>
            <div class=" card-body">
                <p class="card-text">
                <p><b>Fecha de nacimiento:</b> <?= $mascota->fechanan; ?></p>
                <p><b>Color de pelaje:</b> <?= $mascota->color; ?></p>

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

                <p><b>Sexo:</b> <?= $genero ?></p>
                <p><b>Fecha de registro:</b> <?= $mascota->fecharegistro ?></p>
                <p><b>Tipo de mascota:</b> <?= $especie->nombreespecie ?></p>
                <p><b>Raza:</b> <?= $raza->nombreraza ?></p>
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
            <h5 class="card-header" style="text-align: center;">
                Expediente Médico
            </h5>
            <div class="card-body">
                <p class="card-text">
                <div class="col-md-12">
                    <div id="card-716615">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-716615" href="#card-element-303795">Cita Registrada #1</a>
                            </div>
                            <div id="card-element-303795" class="collapse">
                                <div class="card-body">
                                    Aqui se mostrará la información registrada pronto..
                                    No cuenta con ninguna cita por el momento
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-716615" href="#card-element-997027">Cita Registrada #2</a>
                            </div>
                            <div id="card-element-997027" class="collapse">
                                <div class="card-body">
                                    Aqui se mostrará la información registrada pronto..
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