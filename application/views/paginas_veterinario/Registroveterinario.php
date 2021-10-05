<h3>Registro de veterinario</h3>

<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="card-body">
                <p class="card-text">
                <form action="" method="post" id="idCrearcatalogo" enctype="multipart/form-data">

                    <div class="container">
                        <div class="row">
                            <div class="col col-6">
                                <label for="exampleInputEmail1">Nombre(s)</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nombre del veterinario" name="txtNombrevet" id="txtNombrevet">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col col-6">
                                <label for="exampleInputEmail1">Apellido Paterno</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Apellido paterno del veterinario" name="txtApellidopvet" id="txtApellidopvet">
                            </div>
                            <div class="col col-6">
                                <label for="exampleInputEmail1">Apellido Materno</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Apellido materno del veterinario" name="txtApellidomvet" id="txtApellidomvet">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col col-4">
                                <label for="exampleInputPassword1">Extensión</label>
                                <select name="cboExt" class="form-control" id="cboExt">
                                    <!-- <option value="0">Otro</option -->>
                                    <option value="1">+52</option>
                                    <option value="2">+1</option>
                                </select>
                            </div>
                            <div class="col col-4">
                                <label for="exampleInputEmail1">Teléfono</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ingresa tu N° telefonico" name="txtTel" id="txtTel">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col col-6">
                                <label for="exampleInputEmail1">Dirección</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ingresa tu domicilio" name="txtDireccion" id="txtDir">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col col-4">
                                <label class="form-label" for="customFile">Subir cedulaz</label>
                                <input type="file" class="form-control" name="imapFoto" id="imapced" />
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col col-4">
                                <button type="submit" class="btn btn-primary" onclick="javascript:crearveterinario()">Registrar</button>
                            </div>
                        </div>
                    </div>
                </form>
                </p>
            </div>

        </div>
    </div>
</div>

<?= modal_simple("modal1", "Exito", "Los datos se han registrado perfectamente") ?>
<?= modal_simple("modal2", "Error", "Ocurrio un error verifica que todos los campos se encuentren") ?>

<script>
    $(document).ready(function() {
        $("#idCrearcatalogo").submit(function(event) {
            event.preventDefault();
        });
    });
</script>

<script>
    function crearveterinario() {
        var form_data = new FormData();
        var file_data = $('#imapced').prop('files')[0];
        form_data.append('image', file_data);
        form_data.append('txtNombrevet', $("#txtNombrevet").val());
        form_data.append('txtApellidopvet', $("#txtApellidopvet").val());
        form_data.append('txtApellidomvet', $("#txtApellidomvet").val());
        form_data.append('cboExt', $("#cboExt").val());
        form_data.append('txtTel', $("#txtTel").val());
        form_data.append('txtDir', $("#txtDir").val());

        $.ajax({
            url: "<?= base_url("Controllers_Vet/Vetcontroller/guardardatosveterinario") ?>",
            data: form_data,
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            type: "post",
        }).done(function(result) {
            var resultarray = JSON.parse(result);
            if (resultarray.status == "success") {
                $("#modal1").modal("show");
                $('#idCrearcatalogo').trigger("reset");
                // window.location.href = "<?= base_url("Controllers_Vet/Vetcontroller/indexveterinario") ?>";
            } else {
                $("#modal2").modal("show");
            }
        });
    }
</script>