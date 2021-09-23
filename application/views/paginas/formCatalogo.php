<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Nuevo</title>
</head>

<body>
<<<<<<< HEAD
    <h1>Completa los campos</h1>
    <?= var_dump($_SESSION) ?>
=======
    <h1>nuevo</h1>
    
>>>>>>> 572b8a9585e44bc81f8e40e23c810e54d112cb18



    <div class="col-5">
        <form action="" method="post" id="idCrearcatalogo" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputEmail1">nombre</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="nombre" name="txtNombrepet" id="txtNombrepet">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Fecha de nacimiento</label>
                <input class="form-control" placeholder="edad" name="ddtFechanan" id="ddtFechanan" type="date">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Color de pelaje</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="color" name="txtColor" id="txtColor">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Sexo</label>
                <input type="text" class="form-control" placeholder="genero" name="">
            </div>

            <div class="form-group">
                <label class="form-label" for="customFile">Default file input example</label>
                <input type="file" class="form-control" name="imapFoto" id="imapImg" />

            </div>

            <button type="submit" class="btn btn-primary" onclick="javascript:crearmascotas()">Submit</button>
        </form>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<body>
  <h3>Para Regresar presiona aqui</h3>
  <?= var_dump($_SESSION) ?>
  <a href="<?= base_url("welcome/index") ?>">Regresar al inicio</a>
</body>

</html>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
    function crearmascotas() {
        var form_data = new FormData();
        var file_data = $('#imapImg').prop('files')[0];
        form_data.append('image', file_data);
        form_data.append('txtNombrepet', $("#txtNombrepet").val());
        form_data.append('ddtFechanan', $("#ddtFechanan").val());
        form_data.append('txtColor', $("#txtColor").val());



        $.ajax({
            url: "<?= base_url("Catalogo/guardarAnimal") ?>",
            data: form_data,
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            type: "post",
        }).done(function(result) {
            var resultarray = JSON.parse(result);
            if (resultarray.status == "success") {
                $("#modal1").modal("show");


                window.location.href = "<?= base_url("Catalogo/index") ?>";
            } else {
                $("#modal2").modal("show");
            }

        });
    }
</script>

<script>
    $(document).ready(function() {
        $("#idCrearcatalogo").submit(function(event) {
            event.preventDefault();
        });
    });
</script>