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
    <h1>nuevo</h1>
    <?= var_dump($_SESSION) ?>



    <div class="col-5">
        <form action="" method="post" id="idCrearcatalogo" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputEmail1">nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombre" name="nombrre">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">edad</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="edad" name="edad">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">color</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="color" name="color">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">genero</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="genero" name="genero">
            </div>

            <div class="form-group">
                <label class="form-label" for="customFile">Default file input example</label>
                <input type="file" class="form-control" id="" name="ubicacionimagen" />

            </div>

            <button type="submit" class="btn btn-primary" name="guardar">Submit</button>
        </form>

    </div>

    <?= large_modal("modal1", "registro", "formulario gardado") ?>

    <?= large_modal("modal2", "Error", "no se guardo") ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
    function crearmascotas() {
        $paramts = $("#idCrearcatalogo").serialize();
        $.ajax({
            url: "<?= base_url("Catalogo/catalogocrear") ?>",
            data: $paramts,
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