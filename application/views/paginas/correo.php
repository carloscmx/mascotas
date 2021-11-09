<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="<?= base_url("welcome/PaginaPrincipal") ?>" class="logo">
                        <span>
                            <img src="<?= base_url("resources/boxni/studio/img/logo.png") ?>" alt="" height="45">
                        </span>
                    </a>
                </h2>

                <h3 class="fw-normal mb-3 pb-3" style="text-align:center">Registro de Usuario Nuevo</h3>

                <form class="" action="#" method="POST" id="frmCorreo">

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="my-input">Nombre(s)</label>
                            <input id="txtNombre" class="form-control" type="text" name="txtNombre">
                        </div>

                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="my-input">Apellido Paterno</label>
                            <input id="txtApepat" class="form-control" type="text" name="txtApepat">
                        </div>

                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="my-input">Apellido Materno</label>
                            <input id="txtApemat" class="form-control" type="text" name="txtApemat">
                        </div>

                        <div class="form-group col-12">
                            <label for="my-input">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" placeholder="edad" name="ddtFechanan" id="ddtFechanan">
                        </div>

                        <div class="form-group col-12">
                            <label for="my-input">Correo</label>
                            <input id="email" class="form-control" type="text" name="email">
                        </div>

                        <div class="form-group col-12">
                            <label for="my-input">Tipo de Usuario</label>
                            <select name="cboTusuario" class="form-control">
                                <option value="2">Cliente</option>
                                <option value="3">Veterinario</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group col-12">
                        <button class="btn btn-lg btn-outline-info btn-rounded" type="submit" onclick="javascript:enviarparemetrosregistro()" id="btnSubmitButtom">Registrar</button>
                    </div>

                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">¿Ya tienes una cuenta de Boxni? Si es así <a href="<?= base_url("login") ?>" class="text-dark m-l-5" name="btnlogin"><b>Inicia Sesión</b></a></p>
                        </div>
                    </div>


            </div>
        </div>

    </div>
</div>

<?= modal_simple("modal1", "Éxito", "Muchas gracias por registrarse. A continuación recibirás un mensaje de confirmación para completar tu registro") ?>

<?= modal_simple("modal2", "Error", "Este correo ya se encuentra registrado o no se encuentra válido") ?>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
    function enviarparemetrosregistro() {
        $paramts = $("#frmCorreo").serialize();
        $.ajax({
            url: "<?= base_url("Welcome/recibirparametrosregistrocorreo") ?>",
            data: $paramts,
            type: "post",
            beforeSend: function(xhr) {
                $("#btnSubmitButtom").prop('disabled', true);
            }
        }).done(function(result) {
            resultobj = result;
            $("#frmCorreo").trigger("reset");
            <?= sucess_message2() ?>
            $("#btnSubmitButtom").prop('disabled', false);
        }).fail(function(jqXHR) {
            data = jqXHR.responseJSON.message;
            if (data["correo"] != "") {
                <?= errorToast('${data["correo"]}') ?>
            }
            if (data["Nombre"] != "") {
                <?= errorToast('${data["Nombre"]}') ?>
            }
            if (data["Apellidopat"] != "") {
                <?= errorToast('${data["Apellidopat"]}') ?>
            }
            if (data["Apellidomat"] != "") {
                <?= errorToast('${data["Apellidomat"]}') ?>
            }
            if (data["Fechanacimiento"] != "") {
                <?= errorToast('${data["Fechanacimiento"]}') ?>
            }
            if (data["Tipousuario"] != "") {
                <?= errorToast('${data["Tipousuario"]}') ?>
            }
            $("#btnSubmitButtom").prop('disabled', false);
        });
    }
</script>

<script>
    // A $( document ).ready() block.
    $(document).ready(function() {
        $("#frmCorreo").submit(function(event) {
            event.preventDefault();
        });
    });
</script>