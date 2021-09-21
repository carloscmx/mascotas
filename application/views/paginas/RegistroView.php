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
                            <input class="form-control" type="text" name="txtNombre" required="" placeholder="Correo">
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Apellido paterno</label>
                            <input class="form-control" type="text" name="txtApepat" required="" placeholder="Apellido paterno" >
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

<input type="date" id="start" name="dttFechanan"
       value="2018-07-22"
        >

                        </div>

                    </div>

                    
                    <div class="form-group m-b-20 row">
                    <input class="form-control" type="text" name="txtToken" value="<?=$this->uri->segment(3)?>">

                        </div>
                        
                    </div>


                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Contraseña</label>
                            <input class="form-control" type="text" name="txtPassword" id="txtPassword" required="" placeholder="Contraseña">
                        </div>
                    </div>
                    
                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="text">Repite contraseña</label>
                            <input class="form-control" type="text" name="txtPassword1"  id="txtPassword1" required="" placeholder="Contraseña">
                        </div>
                    </div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">

                            </div>
                        </div>

                        <div class="form-group row text-center m-t-10">
                            <div class="col-12">
                                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:enviarparemetrosregistro()">Registrar
                                    </button >
                            </div>
                        </div>

                    </form>

            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/localization/messages_es.min.js" integrity="sha512-Ou4GV0BYVfilQlKiSHUNrsoL1nznkcZ0ljccGeWYSaK2CaVzof2XaZ5VEm5/yE/2hkzjxZngQHVwNUiIRE8yLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function enviarparemetrosregistro() {
        if($("#txtPassword").val()===$("#txtPassword1").val() &&  $("#txtPassword").val().length>6){
            $paramts=$("#idFormRegistro").serialize();
        $.ajax({
            url: "<?=base_url("Welcome/registroFinal")?>",
            data:$paramts,
            type:"post",
        }).done(function() {
        });
        }else{
            alert("PENDEJO PON BIEN TU PASSWORD");
        }
       
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