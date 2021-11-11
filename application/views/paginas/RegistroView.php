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

                <form id="idFormRegistro">

                    <input type="hidden" name="token" value="<?= $_GET['token'] ?>">
                    <input type="hidden" name="email" value="<?= $_GET['mail'] ?>">

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="text">Contraseña</label>
                            <input class="form-control" name="password" id="txtPassword" maxlength="10" required="" placeholder="Inserta una contraseña a máximo de 10 caracteres" type="password">
                        </div>

                        <div class="form-group col-12">
                            <label for="text">Repite contraseña</label>
                            <input class="form-control" name="txtPassword1" id="txtPassword1" maxlength="10" required="" placeholder="Ingresa de nuevo tu Contraseña" type="password">
                        </div>
                        <button class="btn btn-lg btn-outline-info btn-rounded" type="submit" id="btnSubmitButtom">Registrar
                        </button>

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
    $(document).ready(function() {

        <?= basic_message() ?>
        $("#idFormRegistro").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?= base_url('Welcome/registroFinal') ?>",
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $("#btnSubmitButtom").prop('disabled', true);
                },
                success: function(response) {
                    <?= success_message3() ?>
                    window.location = "<?php echo base_url('Sesion/PaginaPrincipal') ?>";
                },
                error: function(jqXHR) {
                    $("#btnSubmitButtom").prop('disabled', false);
                    let data = jqXHR.responseJSON;
                    if (jqXHR.status == 500) {
                        <?= errorToast('${data.message}') ?>
                    } else {
                        if (data.message['correo'] != '') {
                            <?= errorToast('${data.message["correo"]}') ?>
                        }
                        if (data.message['token'] != '') {
                            <?= errorToast('${data.message["token"]}') ?>
                        }
                        if (data.message['contraseña'] != '') {
                            <?= errorToast('${data.message["contraseña"]}') ?>
                        }
                        if (data.message['confirmacion'] != '') {
                            <?= errorToast('${data.message["confirmacion"]}') ?>
                        }
                    }
                }
            });
        });
    });
</script>