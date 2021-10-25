<h1>
	<p style="text-align: center;"> Bienvenido a Boxni. </p>
</h1>
<h4>
	<p style="text-align: center;"> Boxni es el primer administrador de mascotas, donde cada persona puede registrar a sus mascotas y dar recomendaciones para ir al veterinario más cercano. </p>
</h4>
<h5>
	<p style="text-align: center;"> Recuerda que puedes ingresar desde nuestro sitio web
		<a href="https://boxni.mx/">www.boxni.com.mx</a>

	<p style="text-align: center;">O también puedes descargar nuestra
		<a href="<?= base_url('resources/assets/docs/BoxniApp_beta.apk') ?>" download="Boxni">App</a>
</h5>

<br>
</br>

<div class="row">
	<div class="col-md-9">
	</div>
	<div class="col-md-9">
		<a href="<?= base_url("cliente/mascotas/registro") ?>"><button type="button" class="btn btn-primary">
				Registrar una Mascota
			</button></a>
	</div>
</div>

<h4>
	<p style="text-align: center;">Tus Mascotas Registradas: </p>
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
				<h5 class="card-header" style="text-align: center;">
					ID: <?= $mascota->idmascota ?>
				</h5>
				<div class="card-body">
					<h5 class="card-text" style="text-align: center;">
						Nombre: <?= $mascota->nombremascota ?>
						<br>
						</br>
						<img class="img-fluid" alt="Responsive image" src="<?php echo base_url($mascota->ubicacionimagen); ?>"></br>
					</h5>
				</div>
				<div class="card-footer">
					<a href="<?= base_url("cliente/mascotas/detalle?detalle={$mascota->idmascota}") ?>"><button type="button" class="btn btn-info">Ver información</button></a></p>
					<a href="<?= base_url("cliente/mascotas/editar?detalle={$mascota->idmascota}") ?>"><button type="button" class="btn btn-info">Modificar datos de tu mascota</button></a></p>
					<button type="button" class="btn btn-info" onclick="javascript:eliminarmascota()">Eliminar mascota</button></a></p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

</div>

<script>
	function eliminarmascota() {

	}
</script>