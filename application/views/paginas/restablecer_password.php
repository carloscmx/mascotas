<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo.png" alt="" height="26"></span>
                    </a>
                </h2>

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Reestablecer contrasena</h3>

                <form class="" action="#" method="POST" id="idFormLogin">

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="emailaddress">Escribe tu nueva password</label>
                            <input class="form-control" type="password" id="password1" name="email" required="" placeholder="Escribe tu nueva contrasena">
                        </div>
                    </div>
                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="emailaddress">Repite tu password</label>
                            <input class="form-control" type="password" id="password2" name="email" required="" placeholder="Repite tu contasena">
                        </div>
                    </div>




                    <div class="form-group row m-b-20">
                        <div class="col-12">


                        </div>
                    </div>

                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:restablecerUser()">Restablecer</button>
                        </div>
                    </div>

                </form>


            </div>
        </div>

    </div>
</div>


<?= modal_simple("modal1", "Aviso", "Si su correo electronico se encuentra registrado se enviara un correo electronico de para restablecer su cuenta.") ?>

<?= modal_simple("modal2", "Error", "Las contrasenas no corresponden.") ?>




<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
    function restablecerUser() {
        $password1 = $("#password1").val();
        $password2 = $("#password2").val();
        var formData = new FormData();
        formData.append('password', $password1);
        formData.append("token", "<?= $this->uri->segment(4) ?>");
        if ($password1 == $password2) {
            $.ajax({
                url: "<?= base_url("Welcome/updatePassword") ?>",
                data: formData,
                type: "post",
                processData: false,
                contentType: false
            }).done(function(result) {
                $array = JSON.parse(result);
                alert($.trim($array.message));

                window.location.href = "<?= base_url("cliente/inicio"); ?>";

            });

        } else {
            alert("Las credenciales no son iguales.");
        }


    }
</script>
<script>
    $(document).ready(function() {
        $("#idFormLogin").submit(function(event) {
            event.preventDefault();
        });
    });
</script>