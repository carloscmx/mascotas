<div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form class="" action="#" method="POST" id="frmCorreo">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="email" name="email" required="" placeholder="Enter your email">
                                    </div>
                                </div>

                                <div class="form-group  text-center m-t-10">
                                    <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:enviarparemetrosregistro()">Registrar</button>
                                </div>

                            </form>

                           

                        </div>
                    </div>

                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
    // A $( document ).ready() block.
$(document).ready(function() { 
    $("#frmCorreo").submit(function(event){
        event.preventDefault();
});
});
 
</script>

<script>
    function enviarparemetrosregistro() {
        $paramts=$("#frmCorreo").serialize();
        $.ajax({
            url: "<?=base_url("Welcome/recibirparametrosregistrocorreo")?>",
            data:$paramts,
            type:"post",
        }).done(function() {
          
        });
    }
    
</script>