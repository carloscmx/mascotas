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
                <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center text-info">
                    Dirección y Teléfono
                </h3>
            </div>
            <div class="col-md-4">
                <h3 class="text-info text-center">
                    Archivos o comprobantes
                </h3>
            </div>
            <div class="col-md-4">
                <h3 class="text-info text-center">
                    Ubicación (Google Maps)
                </h3>
            </div>
        </div>
    </div>
</div>