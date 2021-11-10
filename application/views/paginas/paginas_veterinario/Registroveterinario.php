<h3 class="fw-normal mb-3 pb-3" style="text-align:center">Registro de Veterinario</h3>

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

            <form action="" method="post" id="idcrearveterinario" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" style="text-align:center;" class="form-control" aria-describedby="emailHelp" placeholder="Nombre del veterinario" name="txtNombrevet" id="txtNombrevet" value="<?= $_SESSION['user_vet']->nombre ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Apellido Paterno</label>
                        <input type="text" style="text-align:center;" class="form-control" aria-describedby="emailHelp" placeholder="Apellido paterno del veterinario" name="txtApellidopvet" id="txtApellidopvet" value="<?= $_SESSION['user_vet']->apellidopat ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Apellido Materno</label>
                        <input type="text" style="text-align:center;" class="form-control" aria-describedby="emailHelp" placeholder="Apellido materno del veterinario" name="txtApellidomvet" id="txtApellidomvet" value="<?= $_SESSION['user_vet']->apellidomat ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Extensión</label>
                        <select name="cboExt" class="form-control" style="text-align:center;" id="cboExt">
                            <!-- <option value="0">Otro</option -->>
                            <option value="1">+52</option>
                            <option value="2">+1</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="exampleInputEmail1">Ingresa tu número telefónico</label>
                        <input type="text" style="text-align:center;" class="form-control" maxlength="10" aria-describedby="emailHelp" placeholder="(999) 999-9999" name="txtTel" id="txtTel">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label">Descripción</label>
                    <div class="col-10">
                        <textarea class="form-control" rows="5" aria-describedby="emailHelp" placeholder="Escribe tu información o cuéntanos un poco más sobre ti" name="txtDescripvet" id="txtDescripvet"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="form-label" for="customFile">Inserta tu Foto</label>
                        <input type="file" class="form-control" name="imapFoto" id="imapFoto" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="customFile">Cédula</label>
                        <input type="file" class="form-control" name="imapCed" id="imapCed">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="customFile">RFC</label>
                        <input type="file" class="form-control" name="imapRFC" id="imapRFC">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="customFile">Horario de Atención</label>
                        <input type="time" style="text-align:center;" class="form-control" aria-describedby="emailHelp" placeholder="Horario de" name="txtHorariovet" id="txtHorariovet">
                    </div>
                    <div class="form-group col-md-4">
                    </div>

                    <br></br>

                    <div class="container">
                        <div class="form-group row text-center m-t-10">
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-outline-info btn-rounded" onclick="javascript:crearveterinario()">Registrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(20.967778, -89.621667),
            zoom: 10,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter
        });

        marker.setMap(map);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ2cU3epaUT7-N_cZuHp43iVvSBjhRbjA&callback=myMap"></script>


<script src="<?= base_url() ?>Highdmin/Admin/HTML/horizontal/assets/js/jquery.min.js"></script>

<?= modal_simple("modal1", "Éxito", "Tus datos se han registrado perfectamente") ?>
<?= modal_simple("modal2", "Error", "Ocurrió un inconveniente. Verifica que todos los campos se encuentren correctamente llenos") ?>

<script>
    $(document).ready(function() {
        $("#idcrearveterinario").submit(function(event) {
            event.preventDefault();
        });
    });
</script>

<script>
    function crearveterinario() {
        var form_data = new FormData();
        var file_data = $('#imapCed').prop('files')[0];
        var file_data = $('#imapRFC').prop('files')[0];
        var file_data = $('#imapFoto').prop('files')[0];
        form_data.append('image', file_data);
        form_data.append('txtNombrevet', $("#txtNombrevet").val());
        form_data.append('txtApellidopvet', $("#txtApellidopvet").val());
        form_data.append('txtApellidomvet', $("#txtApellidomvet").val());
        form_data.append('cboExt', $("#cboExt").val());
        form_data.append('txtTel', $("#txtTel").val())
        form_data.append('txtDescripvet', $("#txtDescripvet").val());
        form_data.append('txtHorariovet', $("#txtHorariovet").val());

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
                <?= success_message6() ?>
                $('#idcrearveterinario').trigger("reset");
                // window.location.href = "<?= base_url("Controllers_Vet/Vetcontroller/indexveterinario") ?>";
            } else {
                <?= question_message() ?>
            }
        });
    }
</script>