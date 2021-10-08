<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="<?= base_url("welcome/PaginaPrincipal") ?>" class="logo">
                        <img src="<?= base_url() ?>Highdmin/Admin/HTML/horizontal/assets/images/Logob.png" alt="" height="26" class="logo-small">
                    </a>
                </h2>

                <h3 class="fw-normal mb-3 pb-3" style="text-align:center">Registro de Usuario Nuevo</h3>

                <form class="" action="#" method="POST" id="frmCorreo">

                    <div class="form-group m-b-20 row">
                        <div class="col-12 text-center">
                            <label for="emailaddress">Correo</label>
                            <input class="form-control" type="email" maxlength="35" id="email" name="email" required="" placeholder="Ingresa tu correo para registrarte">
                        </div>
                    </div>

                    <div class="form-group  text-center m-t-10">
                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:enviarparemetrosregistro()" id="btnSubmitButtom">Registrar</button>
                    </div>

                </form>

                <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">¿Ya tienes una cuenta? Si es así <a href="<?= base_url("login") ?>" class="text-dark m-l-5" name="btnlogin"><b>Inicia Sesión</b></a></p>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>

<?= modal_simple("modal1", "Éxito", "Muchas gracias por registrarse. A continuación recibirás un mensaje de confirmación para completar tu registro") ?>

<?= modal_simple("modal2", "Error", "Este correo electrónico ya se ha registrado anteriormente.") ?>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // A $( document ).ready() block.
    $(document).ready(function() {
        $("#frmCorreo").submit(function(event) {
            event.preventDefault();
        });
    });
</script>



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
            resultobj = JSON.parse(result);
            if (resultobj.status == "success") {
                $("#frmCorreo").trigger("reset");
                $("#modal1").modal("show");
                $("#btnSubmitButtom").prop('disabled', false);

            } else {
                $("#modal2").modal("show");
                $("#btnSubmitButtom").prop('disabled', false);


            }

        });
    }
</script>