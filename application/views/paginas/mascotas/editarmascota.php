<h3>Editar datos de mascota</h3>

<br></br>

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
        <div class="card">

            <div class="card-body">
                <p class="card-text">
                <form action="" method="post" id="idCrearcatalogo" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" maxlength="15" aria-describedby="emailHelp" placeholder="Ingresa el Nombre de tu Mascota" name="txtNombrepet" id="txtNombrepet" value="<?= $mascota->nombremascota; ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Especie</label>
                        <select name="cbEspecie" class="form-control" id="cbEspecie" value="<?= $especie->nombreespecie; ?>">

                            <?php foreach ($especies as $especie) : ?>
                                <option value="<?= $especie->idespecie ?>"><?= $especie->nombreespecie ?></option>

                            <?php endforeach; ?>


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Fecha de nacimiento</label>
                        <input class="form-control" placeholder="edad" name="ddtFechanan" id="ddtFechanan" type="date" value="<?= $mascota->fechanan; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Color de pelaje</label>
                        <input type="text" class="form-control" maxlength="10" aria-describedby="emailHelp" placeholder="¿De qué color es el pelo de tu Mascota? " name="txtColor" id="txtColor" value="<?= $mascota->color; ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Género</label>
                        <select name="cboSexo" class="form-control" id="cboSexo" value="<?= $mascota->genero; ?>">
                            <!-- <option value="0">Otro</option -->>
                            <option value="1">Macho</option>
                            <option value="2">Hembra</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="customFile">Inserta una Imagen o Foto de tu Mascota</label>
                        <input type="file" class="form-control" name="imapFoto" id="imapImg" value="<?= $mascota->ubicacionimagen; ?>" />
                    </div>

                    <br>
                    </br>

                    <button type="submit" class="btn btn-success" onclick="javascript:crearmascotas()">Guardar cambios</button>
                </form>
                </p>
            </div>

        </div>
    </div>
</div>