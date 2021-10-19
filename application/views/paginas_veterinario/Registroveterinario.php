<h3 class="fw-normal mb-3 pb-3" style="text-align:center">Registro de Veterinario</h3>

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
                <form action="" method="post" id="idcrearveterinario" enctype="multipart/form-data">

                    <div class="container">
                        <div class="form-group m-b-20 row">
                            <div class="col-12 text-center">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nombre del veterinario" name="txtNombrevet" id="txtNombrevet" value="<?= $_SESSION['user_vet']->nombre ?>">
                            </div>
                        </div>
                    </div>

                    <div class=" container">
                        <div class="form-group m-b-20 row">
                            <div class="col col-6 text-center">
                                <label for="exampleInputEmail1">Apellido Paterno</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Apellido paterno del veterinario" name="txtApellidopvet" id="txtApellidopvet" value="<?= $_SESSION['user_vet']->apellidopat ?>">
                            </div>
                            <div class="col col-6 text-center">
                                <label for="exampleInputEmail1">Apellido Materno</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Apellido materno del veterinario" name="txtApellidomvet" id="txtApellidomvet" value="<?= $_SESSION['user_vet']->apellidomat ?>">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group m-b-20 row">
                            <div class="col col-6 text-center">
                                <label for="exampleInputPassword1">Extensión</label>
                                <select name="cboExt" class="form-control" id="cboExt">
                                    <!-- <option value="0">Otro</option -->>
                                    <option value="1">+52</option>
                                    <option value="2">+1</option>
                                </select>
                            </div>
                            <div class="col col-6 text-center">
                                <label for="exampleInputEmail1">Teléfono</label>
                                <input type="text" class="form-control" maxlength="10" aria-describedby="emailHelp" placeholder="Ingresa tu N° Telefónico" name="txtTel" id="txtTel">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group m-b-20 row">
                            <div class="col col-12 text-center">
                                <label for="exampleInputEmail1">Dirección</label>
                                <input type="text" class="form-control" maxlength="70" aria-describedby="emailHelp" placeholder="Ingresa tu domicilio" name="txtDireccion" id="txtDir">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group m-b-20 row">
                            <div class="col col-6 text-center">
                                <label for="exampleInputEmail1">Cédula</label>
                                <input type="text" class="form-control" maxlength="8" aria-describedby="emailHelp" placeholder="Ingresa tu cédula" name="txtDireccion" id="txtCed">
                            </div>
                            <div class="col col-6 text-center">
                                <label for="exampleInputEmail1">RFC</label>
                                <input type="text" class="form-control" maxlength="13" aria-describedby="emailHelp" placeholder="Ingresa tu RFC" name="txtDireccion" id="txtRFC">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group m-b-20 row">
                            <div class="col col-6 text-center">
                                <label class="form-label" for="customFile">Inserta tu Comprobante</label>
                                <input type="file" class="form-control" name="imapcomp" id="imapcomp" />
                            </div>
                            <div class="col col-6 text-center">
                                <label class="form-label" for="customFile">Inserta tu Foto</label>
                                <input type="file" class="form-control" name="imapFoto" id="imapfoto" />
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group m-b-20 row">
                            <div class="col col-12 text-center">
                                <label class="form-label" for="customFile">Inserta tu Ubicación</label>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                                    Mostrar Mapa
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="latitud">Latitud</label>
                                                <input type="text" id="latitud" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="longitud">Longitud</label>
                                                <input type="text" id="longitud" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="googleMap" style="width: 100%; height: 400px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row m-b-20">
                        <div class="col-12">

                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group row text-center m-t-10">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success" onclick="javascript:crearveterinario()">Registrar</button>
                            </div>
                        </div>
                    </div>
                </form>
                </p>
            </div>

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
        var file_data = $('#imapcomp').prop('files')[0];
        var file_data = $('#imapfoto').prop('files')[0];
        form_data.append('image', file_data);
        form_data.append('txtNombrevet', $("#txtNombrevet").val());
        form_data.append('txtApellidopvet', $("#txtApellidopvet").val());
        form_data.append('txtApellidomvet', $("#txtApellidomvet").val());
        form_data.append('cboExt', $("#cboExt").val());
        form_data.append('txtTel', $("#txtTel").val());
        form_data.append('txtDir', $("#txtDir").val());
        form_data.append('txtCed', $("#txtCed").val());
        form_data.append('txtRFC', $("#txtRFC").val());

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
                $('#idcrearveterinario').trigger("reset");
                // window.location.href = "<?= base_url("Controllers_Vet/Vetcontroller/indexveterinario") ?>";
            } else {
                $("#modal2").modal("show");
            }
        });
    }
</script>