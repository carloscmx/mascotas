<h3>Registro de Mascotas</h3>

<br></br>

<div class="row">
    <div class="col-md-9">
        <form>
            <button type="button" onclick="history.back()" class="btn btn-lg btn-outline-info btn-rounded">Regresar</button>
        </form>
    </div>
</div>

<br></br>

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <form action="" method="post" id="idCrearcatalogo" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="form-group col-lg-4 col-sm-12">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" maxlength="15" aria-describedby="emailHelp" placeholder="Ingresa el nombre de tu mascota" name="txtNombrepet" id="txtNombrepet">
                    </div>

                    <div class="form-group col-lg-4 col-sm-12">
                        <label for="exampleInputPassword1">Tipo de Mascota</label>
                        <select class="form-control select2" name="cbEspecie" id="cbEspecie">
                            <option value="">Selecccionar tipo de mascota</option>
                            <?php foreach ($especies as $especie) : ?>
                                <option value="<?= $especie->idespecie ?>"><?= $especie->nombreespecie ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group col-lg-4 col-sm-12">
                        <label for="exampleInputPassword1">Raza</label>
                        <select class="form-control select2" name="cbRaza" name="cbRaza" id="cbRaza">

                        </select>
                    </div>

                    <div class="form-group col-lg-4 col-sm-12">
                        <label for="exampleInputPassword1">Fecha de nacimiento</label>
                        <input type="date" class="form-control" placeholder="edad" name="ddtFechanan" id="ddtFechanan">
                    </div>

                    <div class="form-group col-lg-4 col-sm-12">
                        <label for="exampleInputEmail1">Color de pelo</label>
                        <input type="text" class="form-control" maxlength="25" aria-describedby="emailHelp" placeholder="¿De qué color es el pelaje de tu mascota? " name="txtColor" id="txtColor">
                    </div>

                    <div class="form-group col-lg-4 col-sm-12">
                        <label for="exampleInputPassword1">Género</label>
                        <select name="cboSexo" class="form-control" id="cboSexo">
                            <!-- <option value="0">Otro</option -->>
                            <option value="1">Macho</option>
                            <option value="2">Hembra</option>

                        </select>
                    </div>

                    <div class="form-group col-4">
                        <label class="form-label" for="customFile">Inserta una Imagen o Foto de tu Mascota</label>
                        <input type="file" class="form-control" name="imapFoto" id="imapImg" />
                    </div>
                </div>

                <div class="form-group col-12">
                    <button type="submit" class="btn btn-lg btn-outline-info btn-rounded" onclick="javascript:crearmascotas()">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= modal_simple("modal1", "Éxito", "Se han guardado los datos de tu mascota correctamente") ?>
<?= modal_simple("modal2", "Error", "Ha ocurrido un inconveniente, verifique que todos los datos estén llenos correctamente") ?>


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
        form_data.append('cbRaza', $("#cbRaza").val());
        form_data.append('ddtFechanan', $("#ddtFechanan").val());
        form_data.append('txtColor', $("#txtColor").val());
        form_data.append('cboSexo', $("#cboSexo").val());

        $.ajax({
            url: "<?= base_url("Catalogo/guardarAnimal") ?>",
            data: form_data,
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            type: "post",
        }).done(function(result) {
            var resultarray = JSON.parse(result);
            if (resultarray.status == "success") {
                <?= success_message5() ?>
                $('#idCrearcatalogo').trigger("reset");
                // window.location.href = "<?= base_url("Catalogo/index") ?>";
            } else {
                <?= question_message() ?>
            }
        }).fail(function(jqXHR) {
            data = jqXHR.responseJSON.message;
            if (data["Nombrepet"] != "") {
                <?= errorToast('${data["Nombrepet"]}') ?>
            }
            if (data["Color"] != "") {
                <?= errorToast('${data["Color"]}') ?>
            }
            $("#btnRestButtom").prop('disabled', false);
        });
    }

    $("#cbEspecie").change(function(e) {
        e.preventDefault();
        let select = $("#cbRaza");
        $.ajax({
            type: "post",
            url: "<?= base_url("Catalogo/razaxespecie") ?>",
            data: {
                id_especie: $(this).val()
            },
            dataType: "json",
            success: function(response) {
                select.find("option").remove();
                $(response).each(function(i, v) {
                    select.append(`<option value="${v.idraza}">${v.nombreraza}</option>`);
                });

            }
        });
    });
</script>