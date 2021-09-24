<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo.png" alt="" height="26"></span>
                    </a>
                </h2>

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registro</h3>

                <form class="" action="" method="post" id="idFormRegistro">

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Nombre</label>
                            <input class="form-control" type="text" name="txtNombre" required="" placeholder="Correo">
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Apellido paterno</label>
                            <input class="form-control" type="text" name="txtApepat" required="" placeholder="Apellido paterno">
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Apellido materno</label>
                            <input class="form-control" type="text" name="txtAmater" required="" placeholder="Apellido materno">
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="start">Fecha nacimiento:</label>
                            <br>
                            <input type="date" id="start" name="dttFechanan" value="2018-07-22">

                        </div>

                    </div>


                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Contraseña</label>
                            <input class="form-control" name="txtPassword" id="txtPassword" required="" placeholder="Contraseña" type="password">
                        </div>
                    </div>


                    <div class="form-group m-b-20 row" style="display: none;">
                        <div class="col-12">
                            <label for="text">Contraseña</label>
                            <input class="form-control" type="text" value="<?= $this->uri->segment(3) ?>" name="txtToken" id="txtToken" required="" placeholder="">
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Repite contraseña</label>
                            <input class="form-control" name="txtPassword1" id="txtPassword1" required="" placeholder="Contraseña" type="password">
                        </div>
                    </div>
                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:enviarparemetrosregistro()" id="btnSubmitButtom">Registrar
                            </button>
                        </div>
                    </div>

            </div>

            </form>

        </div>
    </div>

</div>
</div>

<?= modal_simple("modal1", "Bienvenido", "Muchas gracias por formar parte de.....") ?>

<?= modal_simple("modal2", "Error", "LLENA TODOS LOS CAMPOS.") ?>

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
            }).done(function() {
                $("#modal1").modal("show");

                setTimeout(function() {
                    window.location.href = "<?= base_url("inicio") ?>";
                }, 2000);

            });

        } else {
            $("#modal2").modal("show");
            $("#btnSubmitButtom").prop('disabled', false);

        }

    }
</script>

<script>
    $(document).ready(function() {

        $("#idFormRegistro").submit(function(event) {
            event.preventDefault();

        });
    });
</script>
