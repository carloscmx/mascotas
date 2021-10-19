<div class="row">
    <div class="col-md-9">
        <form>
            <button type="button" onclick="history.back()" class="btn btn-danger">Regresar</button>
        </form>
    </div>
</div>

<br></br>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-center text-info">
                    Información Personal
                </h3>
                <dl>
                    <dt>
                        ID:
                    </dt>
                    <dd>
                        <?= $veterinariosinfo->idveterinarioinfo ?>
                    </dd>
                    <dt>
                        Nombre:
                    </dt>
                    <dd>
                        <?= $veterinariosinfo->nombreveterinario ?>
                    </dd>
                    <dt>
                        Apellido Paterno:
                    </dt>
                    <dd>
                        <?= $veterinariosinfo->apellidopvet ?>
                    </dd>
                    <dt>
                        Apellido Materno:
                    </dt>
                    <dd>
                        <?= $veterinariosinfo->apellidomvet ?>
                    </dd>
                </dl>
            </div>
            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="<?php echo base_url($veterinariosinfo->fotovet); ?>" class="rounded-circle" " style=" width: 250px; height: 200px;" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center text-info">
                    Dirección y Teléfono
                </h3>
                <dl>
                    <dt>
                        Número de Teléfono:
                    </dt>
                    <dd>
                        <?php
                        $genero = "";
                        switch ($veterinariosinfo->extension) {
                            case 0:
                                $extension = "Otro";
                                break;
                            case 1:
                                $extension = "+1";
                                break;
                            case 2:
                                $extension = "+52";
                                break;
                            default:
                                $extension = "No definido";
                                break;
                        }
                        ?>
                        <?= $extension ?>
                        <?= $veterinariosinfo->telefono ?>
                    </dd>
                    <dt>
                        Direccion:
                    </dt>
                    <dd>
                        <?= $veterinariosinfo->direccion ?>
                    </dd>
            </div>
            <div class="col-md-4">
                <h3 class="text-info text-center">
                    Ubicación (Google Maps)
                </h3>
            </div>
            <div class="col-md-4">
                <h3 class="text-info text-center">
                    Archivos o comprobantes
                </h3>
            </div>
        </div>
    </div>
</div>