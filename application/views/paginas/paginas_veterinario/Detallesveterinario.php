<div class="row">
    <div class="col-md-9">
        <form>
            <button type="button" onclick="history.back()" class="btn btn-outline-danger btn-rounded">Regresar</button>
            <button type="button" class="btn btn-outline-dark btn-rounded" onclick="javascript:window.print()">Imprimir</button>
        </form>
    </div>
</div>

<br></br>

<div class="row">
    <div class="col-md-12">
        <h3 class="text-center text-info">
            Descripción
        </h3>
        <dl>
            <h3 class="text-center">
                <?= $veterinariosinfo->descripcionvet ?>
            </h3 class="text-center">
        </dl>
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
                    <dt class="text-center">
                        Nombre:
                    </dt>
                    <dd class="text-center">
                        <?= $veterinariosinfo->nombreveterinario ?>
                    </dd>
                    <dt class="text-center">
                        Apellido Paterno:
                    </dt>
                    <dd class="text-center">
                        <?= $veterinariosinfo->apellidopvet ?>
                    </dd>
                    <dt class="text-center">
                        Apellido Materno:
                    </dt>
                    <dd class="text-center">
                        <?= $veterinariosinfo->apellidomvet ?>
                    </dd>
                    <dt class="text-center">
                        Número de Teléfono:
                    </dt>
                    <dd class="text-center">
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
                    <dt class="text-center">
                        Horario de Atención:
                    </dt>
                    <dd class="text-center">
                        <?= $veterinariosinfo->horariovet ?>
                    </dd>
                </dl>
            </div>

            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="<?php echo base_url($veterinariosinfo->fotovet); ?>" class="rounded-right" style=" width: 250px; height: 200px;" />
            </div>
        </div>

        <br></br>

        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center text-info">
                    Cédula
                </h3>
                <dl>
                    <dd class="text-center">
                        <?= $veterinariosinfo->cedula ?>
                    </dd>
                </dl>
            </div>
            <div class="col-md-4">
                <h3 class="text-info text-center">

                </h3>
            </div>
            <div class="col-md-4">
                <h3 class="text-info text-center">
                    RFC
                </h3>
                <dl>
                    <dd class="text-center">
                        <?= $veterinariosinfo->rfc ?>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>