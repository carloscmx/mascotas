<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo.png" alt="" height="26"></span>
                    </a>
                </h2>

                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Recuperar contraseña</h5>

                <form class="" action="#" method="POST" id="frmCorreo">

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="emailaddress">Correo</label>
                            <input class="form-control" type="email" id="email" name="email" required="" placeholder="Correo">
                        </div>
                    </div>

                    <div class="form-group  text-center m-t-10">
                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:enviarrecuperacion()" id="btnSubmitButtom">Registrar</button>
                    </div>

                </form>

                <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Ya tienes una cuenta? <a href="<?= base_url("login") ?>" class="text-dark m-l-5" name="btnlogin"><b>Iniciar Sesion</b></a></p>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>

<?= modal_simple("modal1", "Exito", "Muchas gracias por registrarse recibira un correo electronico para completar su registro") ?>

<?= modal_simple("modal2", "Error", "Ya se ha registrado este correo electronico anterioirmente.") ?>



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
    function enviarrecuperacion() {
        $paramts = $("#frmCorreo").serialize();
        $.ajax({
            url: "<?= base_url("Welcome/correocontrasena") ?>",
            data: $paramts,
            type: "post",
            beforeSend: function(xhr) {
                $("#btnSubmitButtom").prop('disabled', true);
            }
        }).done(function(result) {
            resultobj = JSON.parse(result);
            if (resultobj.status == "success") {
                $("#frmCorreo").trigger("reset");
               // $("#modal1").modal("show");
               alert("correo enviado");
                $("#btnSubmitButtom").prop('disabled', false);

            } else {
                $("#modal2").modal("show");
                $("#btnSubmitButtom").prop('disabled', false);


            }

        });
    }
</script>
