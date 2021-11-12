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

                <h2 class="fw-normal mb-3 pb-3" style="text-align:center">Inicia sesión</h2>

                <form class="" action="#" method="POST" id="idFormLogin">

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="emailaddress">Correo</label>
                            <input class="form-control" type="email" maxlength="35" id="email" name="email" required="" placeholder="Ingresa tu correo electrónico">
                        </div>

                        <div class="form-group col-12">
                            <!-- <a href="page-recoverpw.html" class="text-muted float-right"><small>Olvidaste tu contraseña?</small></a> -->
                            <label for="password">Contraseña</label>
                            <input class="form-control" type="password" required="" id="password" name="password" placeholder="Ingresa tu contraseña">
                        </div>

                        <div class="form-group col-12">
                            <div class="col-12">
                                <?php
                                if (isset($_GET['route'])) {
                                    $url = $_GET['route'];
                                    echo "<input type='text' name='route' value='{$url}'>";
                                }
                                ?>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button class="btn btn-lg btn-outline-info btn-rounded" type="submit" onclick="javascript:validarusuario()">Iniciar Sesión</button>
                        </div>
                    </div>

                </form>

                <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">¿Haz olvidado cual es tu contraseña?</p>
                        <a href="<?= base_url("login/recuperar") ?>" class="text-dark m-l-5" name=""><b>Restablecer Contraseña</b></a>
                    </div>
                </div>

                <p>
                </p>

                <div class="row m-t-20">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">¿No dispones de una cuenta de Boxni?</p>
                        <a href="<?= base_url("registro") ?>" class="text-dark m-l-5" name="btnlogin"><b>Regístrate Aquí</b></a>
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
            url: "<?= base_url("Welcome/varificarLogin") ?>",
            data: $paramts,
            type: "post",
            beforeSend: function(xhr) {
                $("#btnRestButtom").prop('disabled', true);
            }
        }).done(function(result) {
            var resultarray = JSON.parse(result);
            if (resultarray.status == "success") {
                <?= basic_message2() ?>
                window.location.href = resultarray.route;
            }
        }).fail(function(jqXHR) {
            data = jqXHR.responseJSON.message;
            if (data["email"] != "") {
                <?= errorToast('${data["email"]}') ?>
            }
            if (data["password"] != "") {
                <?= errorToast('${data["password"]}') ?>
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