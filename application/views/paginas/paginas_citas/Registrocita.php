<h3>Registro de CIta</h3>

<br></br>

<div class="row">
    <div class="col-md-9">
        <form>
            <button type="button" onclick="history.back()" class="btn-sm btn-outline-danger btn-rounded">Regresar</button>
        </form>
    </div>
</div>

<br></br>

<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="card-body">
                <p class="card-text">
                <form action="" method="post" id="idCrearcita" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Mascota registrada</label>
                        <select name="cbMascotacita" class="form-control" id="cbMascotacita">
                            <?php foreach ($mascota as $mascotas) : ?>
                                <option value="<?= $mascota->idmascota ?>"><?= $mascota->nombremascota ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripcion</label>
                        <input type="text" class="form-control" maxlength="" aria-describedby="emailHelp" placeholder="" name="txtColor" id="txtColor" style="height: 200px;">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Fecha de registro</label>
                        <input class="form-control" placeholder="edad" name="ddtFechanan" id="ddtFechanan" type="date">
                    </div>

                    <br>
                    </br>

                    <button type="submit" class="btn-lg btn-outline-success btn-rounded" onclick="javascript:crearcita()">Registrar la cita</button>
                </form>
                </p>
            </div>

        </div>
    </div>
</div>

<?= modal_simple("modal1", "Éxito", "Se ha registro una nueva cita") ?>
<?= modal_simple("modal2", "Error", "No has llenado todos los campos") ?>

<script>
    $(document).ready(function() {
        $("#idCrearcita").submit(function(event) {
            event.preventDefault();
        });
    });
</script>
<script>
    function crearcita() {
        var form_data = new FormData();
        var file_data = $('#imapImg').prop('files')[0];
        form_data.append('image', file_data);
        form_data.append('txtNombrepet', $("#txtNombrepet").val());
        form_data.append('cbEspecie', $("#cbEspecie").val());
        form_data.append('ddtFechanan', $("#ddtFechanan").val());
        form_data.append('txtColor', $("#txtColor").val());
        form_data.append('cboSexo', $("#cboSexo").val());

        $.ajax({
            url: "<?= base_url("Controllers_Cita/Citacontroller/guardarcita") ?>",
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

                $('#idCrearcita').trigger("reset");


                // window.location.href = "<?= base_url("Controllers_Cita/Citacontroller/indexcita") ?>";
            } else {
                <?= question_message() ?>
            }

        });
    }
</script>