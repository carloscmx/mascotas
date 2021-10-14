<h2>
	<p style="text-align: center;"> Bienvenido a Boxni. </p>
</h2>
<h4>
	<p style="text-align: center;"> Boxni es el primer administrador de mascotas, donde cada persona puede registrar a sus mascotas y dar recomendaciones para ir al veterinario más cercano. </p>
</h4>
<h5>
	<p style="text-align: center;"> Recuerda que puedes ingresar a nuestro sitio web o descargar nuestra App -> link
</h5>


<div class="row">
	<div class="col-md-9">
	</div>
	<div class="col-md-9">

		<a href="<?= base_url("cliente/mascotas/registro") ?>"><button type="button" class="btn btn-success">
				Registrar una Mascota
			</button></a>
	</div>
</div>

<h4>
	<p style="text-align: center;">Mascotas Registradas:</p>
</h4>


<?php
if (empty($mascotas)) {
	echo "<div class='row'>
	<div class='col-md-12'>
		<div class='alert alert-success alert-dismissable'>
			<button type='button'class='close'data-dismiss='alert' aria-hidden='true'>
				×
			</button>
			<h4>
				No tienes una mascota registrada 
			</h4> Es momento de comenzar con el registro de tu(s) mascota(s) , para eso selecciona el Boton <strong> Registrar una Mascota</strong>
		</div>
	</div>
</div>";
}

?>
<div class="row">
	<?php foreach ($mascotas as $mascota) : ?>
		<div class="col-md-4 mt-4">
			<div class="card">
				<h5 class="card-header">
					ID: <?= $mascota->idmascota ?>
				</h5>
				<div class="card-body">
					<p class="card-text">
						Nombre: <?= $mascota->nombremascota ?>
					</p>
				</div>
				<div class="card-footer">
					<a href="<?= base_url("cliente/mascotas/detalle?detalle={$mascota->idmascota}") ?>">Ver detalles de la mascota</a></p>
					<a href="<?= base_url("cliente/mascotas/actualisarmascotas?detalle={$mascota->idmascota}") ?>">Actualizar datos</a></p>
					<a href="<?= base_url("cliente/mascotas/borrarmascota?detalle={$mascota->idmascota}") ?>">Eliminar mascota</a>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

</div>