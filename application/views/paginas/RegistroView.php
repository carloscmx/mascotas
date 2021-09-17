<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo.png" alt="" height="26"></span>
                    </a>
                </h2>

                <form class="" action="" method="post" id="idFormRegistro">

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Nombre</label>
                            <input class="form-control" type="text" id="nombre" required="" placeholder="Enter your email" name="nombre">
                        </div>
                    </div>

                    <form class="" action="" method="post">

                        <div class="form-group m-b-20 row">
                            <div class="col-12">
                                <label for="emailaddress">correo</label>
                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email"  name="correo">
                            </div>
                        </div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                <label for="password">contraseña</label>
                                <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                            </div>
                        </div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">

                            </div>
                        </div>

                        <div class="form-group row text-center m-t-10">
                            <div class="col-12">
                                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:enviarparemetrosregistro()">Sign In
                                    </button >
                            </div>
                        </div>

                    </form>

            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
    function enviarparemetrosregistro() {
        $paramts=$("#idFormRegistro").serialize();
        $.ajax({
            url: "<?=base_url("Welcome/recibirparametrosregistro")?>",
            data:$paramts,
            type:"post",
        }).done(function() {
          alert("hokokdsad");
        });
    }
    
</script>
<script>
    // A $( document ).ready() block.
$(document).ready(function() { 
    $("#idFormRegistro").submit(function(event){
        event.preventDefault();
});
});
 
</script>