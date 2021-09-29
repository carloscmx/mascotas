<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo.png" alt="" height="26"></span>
                    </a>
                </h2>

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia sesion</h3>

                <form class="" action="#" method="POST" id="idFormLogin">

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="emailaddress">Correo</label>
                            <input class="form-control" type="email" id="email" name="email" required="" placeholder="Email">
                        </div>
                    </div>


                    <div class="form-group row m-b-20">
                        <div class="col-12">
                            <!-- <a href="page-recoverpw.html" class="text-muted float-right"><small>Olvidaste tu contraseña?</small></a> -->
                            <label for="password">Contraseña</label>
                            <input class="form-control" type="password" required="" id="password" name="password" placeholder="Contraseña">
                        </div>
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
                            <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:validarusuario()">iniciar sesion</button>
                        </div>
                    </div>

                </form>

                <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">No tienes una cuenta? <a href="<?= base_url("registro") ?>" class="text-dark m-l-5" name="btnlogin"><b>Registrate</b></a></p>
                    </div>
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Olvidaste tu contraseña? <a href="<?= base_url("recuperarcontrasena") ?>" class="text-dark m-l-5" name="btnlogin"><b>Recuperar</b></a></p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<?= modal_simple("modal1", "Error", "Por favor valida las credenciales") ?>
<?= modal_simple("modal2", "Espere un momento", "Redirigiendo") ?>





<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
    function validarusuario() {
        $paramts = $("#idFormLogin").serialize();
        $.ajax({
            url: "<?= base_url("Login_controller/varificarLogin") ?>",
            data: $paramts,
            type: "post",
        }).done(function(result) {
            var resultarray = JSON.parse(result);
            if (resultarray.status == "success") {
                $("#modal2").modal("show");


                window.location.href = resultarray.route;
            } else {
                $("#modal1").modal("show");
            }

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