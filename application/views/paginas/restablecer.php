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

                <h3 class="fw-normal mb-3 pb-3" style="text-align:center">Restablecer Contraseña</h3>

                <form class="" action="#" method="POST" id="idFormLogin">

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="emailaddress">Correo</label>
                            <input class="form-control" type="email" id="email" name="email" required="" placeholder="Ingresa correo para recuperación de contraseña">
                        </div>
                    </div>

                    <div class="form-group col-12">
                        <button class="btn btn-lg btn-outline-info btn-rounded" type="submit" onclick="javascript:restablecerUser()" id="btnRestButtom">Restablecer</button>
                    </div>

                </form>


            </div>
        </div>

    </div>
</div>


<?= modal_simple("modal1", "Aviso", "Se envió un mensaje a tu correo electrónico. Sigue las instrucciones del mensaje para restablecer la contraseña.") ?>



<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
    function restablecerUser() {
        $paramts = $("#idFormLogin").serialize();
        $.ajax({
            url: "<?= base_url("Welcome/restablecerPasswordEmail") ?>",
            data: $paramts,
            type: "post",
            beforeSend: function(xhr) {
                $("#btnRestButtom").prop('disabled', true);
            }
        }).done(function(result) {
            resultobj = result;
            $("#idFormLogin").trigger("reset");
            <?= sucess_message() ?>
            $("#btnRestButtom").prop('disabled', false);
        }).fail(function(jqXHR) {
            data = jqXHR.responseJSON.message;
            if (data["correo"] != "") {
                <?= errorToast('${data["correo"]}') ?>
            }
            $("#btnRestButtom").prop('disabled', false);
        });
    }
</script>

<script>
    $(document).ready(function() {
        $("#idFormLogin").submit(function(event) {
            event.preventDefault();
        });
    });
</script>