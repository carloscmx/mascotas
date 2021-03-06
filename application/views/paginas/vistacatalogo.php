<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>inicio</title>
</head>

<body>
    <h1>Catalogos de Mascotas</h1>
    <?= var_dump($_SESSION) ?>

    <?php foreach ($data as $contenido) { ?>



        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $contenido->nombremascota; ?></h5>
                            <p class="card-text"><?php echo $contenido->fechanan; ?></p>
                            <a href="<?= base_url("Catalogo/detallesCatalogo?detalle={$contenido->idmascota}") ?>" class="btn btn-primary">detalles</a>
                            <a href="#" class="btn btn-secondary">editar</a>
                            <a href="#" class="btn btn-danger">eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<body>
  <h3>Para regresar presiona aqui</h3>
  <?= var_dump($_SESSION) ?>
  <a href="<?= base_url("welcome/index") ?>">Regresar al inicio</a>
</body>

</html>