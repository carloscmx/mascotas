<h3>Registro de mascotas</h3>

<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="card-body">
                <p class="card-text">
                <form action="" method="post" id="idCrearcatalogo" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nombre" name="txtNombrepet" id="txtNombrepet">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">especie</label>
                        <select name="cbEspecie" class="form-control" id="cbEspecie">

                            <?php foreach ($especies as $especie) : ?>
                                <option value="<?= $especie->idespecie ?>"><?= $especie->nombreespecie ?></option>

                            <?php endforeach; ?>


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Fecha de nacimiento</label>
                        <input class="form-control" placeholder="edad" name="ddtFechanan" id="ddtFechanan" type="date">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Color de pelaje</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Color" name="txtColor" id="txtColor">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sexo</label>
                        <select name="cboSexo" class="form-control" id="cboSexo">
                            <!-- <option value="0">Otro</option -->>
                            <option value="1">Macho</option>
                            <option value="2">Hembra</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="customFile">Default file input example</label>
                        <input type="file" class="form-control" name="imapFoto" id="imapImg" />

                    </div>

                    <button type="submit" class="btn btn-primary" onclick="javascript:crearmascotas()">Registrar</button>
                </form>
                </p>
            </div>

        </div>
    </div>
</div>

<?= modal_simple("modal1", "Exito", "Se ha guardado correctamente") ?>
<?= modal_simple("modal2", "Error", "Ha ocurrido un error verifique sus datos") ?>

<script>
    $(document).ready(function() {
        $("#idCrearcatalogo").submit(function(event) {
            event.preventDefault();
        });
    });
</script>
<script>
    function crearmascotas() {
        var form_data = new FormData();
        var file_data = $('#imapImg').prop('files')[0];
        form_data.append('image', file_data);
        form_data.append('txtNombrepet', $("#txtNombrepet").val());
        form_data.append('cbEspecie', $("#cbEspecie").val());
        form_data.append('ddtFechanan', $("#ddtFechanan").val());
        form_data.append('txtColor', $("#txtColor").val());
        form_data.append('cboSexo', $("#cboSexo").val());





        $.ajax({
            url: "<?= base_url("Catalogo/guardarAnimal") ?>",
            data: form_data,
            dataType: 'text', 
            cache: false,
            contentType: false,
            processData: false,
            type: "post",
        }).done(function(result) {
            var resultarray = JSON.parse(result);
            if (resultarray.status == "success") {
                $("#modal1").modal("show");

                $('#idCrearcatalogo').trigger("reset");


                // window.location.href = "<?= base_url("Catalogo/index") ?>";
            } else {
                $("#modal2").modal("show");
            }

        });
    }
</script>