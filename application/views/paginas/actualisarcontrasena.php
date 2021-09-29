<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo.png" alt="" height="26"></span>
                    </a>
                </h2>

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">actualisar contraseña</h3>

                <form class="" action="#" method="POST" id="idFormLogin">

                

                <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Contraseña</label>
                            <input class="form-control" name="txtPassword1" id="txtPassword" required="" placeholder="Contraseña" type="password">
                        </div>
                    </div>
                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">repetir contraseña</label>
                            <input class="form-control" name="txtPassword2" id="txtPassword" required="" placeholder="Contraseña" type="password">
                        </div>
                    </div>

                 

					<div class="form-group row m-b-20">
                      
                    </div>
                    <div class="form-group row m-b-20" style="display: none;">
                        <div class="col-12">
                            <?php
                            if (isset($_GET['route'])) {
                                $url = $_GET['route'];
                                echo "<input type='text' name='route' value='{$url}'>";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row m-b-20">
                        <div class="col-12">


                        </div>
                    </div>

                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:actualisarcontrasena()">actualisar contraseña</button>
                        </div>
                    </div>

                </form>

              

            </div>
        </div>

    </div>
</div>


<?= modal_simple("modal1", "Error", "Por favor valida las credenciales") ?>
<?= modal_simple("modal2", "Espere un momento", "Redirigiendo") ?>





<script>
    function actualisarcontrasena() {
        if ($("#txtPassword1").val() === $("#txtPassword2").val() && $("#txtPassword").val().length > 6) {
            $paramts = $("#idFormRegistro").serialize();
            $.ajax({
                url: "<?= base_url("Login_controller/registroFinal") ?>",
                data: $paramts,
                type: "post",
                beforeSend: function(xhr) {
                    $("#btnSubmitButtom").prop('disabled', true);
                }
            }).done(function() {
                $("#modal1").modal("show");

                setTimeout(function() {
                    window.location.href = "<?= base_url("cliente/inicio") ?>";
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
