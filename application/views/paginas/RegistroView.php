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

                <h3 class="fw-normal mb-3 pb-3" style="text-align:center">Registro</h3>

                <form class="" action="" method="post" id="idFormRegistro">

                    <div class="form-group m-b-20 row">
                        <div class="col-12 text-center">
                            <label for="text">Nombre</label>
                            <input class="form-control" type="text" name="txtNombre" required="" placeholder=" Inserta tu Nombre(s)">
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12 text-center">
                            <label for="text">Apellido Paterno</label>
                            <input class="form-control" type="text" name="txtApepat" required="" placeholder="Inserta tu Apellido Paterno">
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12 text-center">
                            <label for="text">Apellido Materno</label>
                            <input class="form-control" type="text" name="txtAmater" required="" placeholder="Inserta tu Apellido Materno">
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12 text-center">
                            <label for="start">Fecha de Nacimiento</label>
                            <br>
                            <input type="date" id="start" name="dttFechanan" value="2018-07-22">

                        </div>

                    </div>


                    <div class="form-group m-b-20 row">
                        <div class="col-12 text-center">
                            <label for="text">Tipo de Usuario</label>
                            <select name="cboTusario" class="form-control">
                                <option value="2">Cliente</option>
                                <option value="3">Veterinario</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12 text-center">
                            <label for="text">Contraseña</label>
                            <input class="form-control" name="txtPassword" id="txtPassword" maxlength="10" required="" placeholder="Inserta una contraseña a máximo de 10 caracteres" type="password">
                        </div>
                    </div>


                    <div class="form-group m-b-20 row" style="display: none;">
                        <div class="col-12 text-center">
                            <label for="text">Contraseña</label>
                            <input class="form-control" type="text" value="<?= $this->uri->segment(3) ?>" name="txtToken" id="txtToken" maxlength="10" required="" placeholder="">
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12 text-center">
                            <label for="text">Repite contraseña</label>
                            <input class="form-control" name="txtPassword1" id="txtPassword1" maxlength="10" required="" placeholder="Ingresa de nuevo tu Contraseña" type="password">
                        </div>
                    </div>
                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button class="btn-lg btn-outline-info btn-rounded" type="submit" onclick="javascript:enviarparemetrosregistro()" id="btnSubmitButtom">Registrar
                            </button>
                        </div>
                    </div>


            </div>

            </form>

        </div>

    </div>


</div>

</div>

<?= modal_simple("modal0", "¡SE COMPLETO TU REGISTRO!", "Estamos muy entusiasmados porque ya eres parte de nuestra familia.<br/>
		<br/>
        Recuerda que en Boxni, podrás encontrar una variedad de servicios para tu mascota como veterinarias, tiendas de alimento, farmacias, spa hoteles y mucho más.") ?>
<?= modal_simple("modal1", "Bienvenido", "Ya casi eres parte de Boxni. Registra tus datos personales para finalizar") ?>
<?= modal_simple("modal2", "Error", "Debes llenar todos los campos correctamente") ?>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/localization/messages_es.min.js" integrity="sha512-Ou4GV0BYVfilQlKiSHUNrsoL1nznkcZ0ljccGeWYSaK2CaVzof2XaZ5VEm5/yE/2hkzjxZngQHVwNUiIRE8yLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    function enviarparemetrosregistro() {
        if ($("#txtPassword").val() === $("#txtPassword1").val() && $("#txtPassword").val().length > 6) {
            $paramts = $("#idFormRegistro").serialize();
            $.ajax({
                url: "<?= base_url("Welcome/registroFinal") ?>",
                data: $paramts,
                type: "post",
                beforeSend: function(xhr) {
                    $("#btnSubmitButtom").prop('disabled', true);
                }
            }).done(function(response) {
                $resonseJson = JSON.parse(response);
                <?= success_message3() ?>

                setTimeout(function() {
                    window.location.href = $resonseJson.url;
                }, 6000);

            });

        } else {
            <?= error_message3() ?>
            $("#btnSubmitButtom").prop('disabled', false);

        }

    }
</script>

<script>
    $(document).ready(function() {

        <?= basic_message() ?>
        $("#idFormRegistro").submit(function(event) {
            event.preventDefault();

        });
    });
</script>