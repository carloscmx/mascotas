<h1>
	<p style="text-align: center;"> Bienvenido a Boxni. </p>
</h1>
<h4>
	<p style="text-align: center;"> Boxni es el primer administrador de mascotas, donde cada persona puede registrar a sus mascotas y dar recomendaciones para ir al veterinario más cercano. </p>
</h4>
<h5>
	<p style="text-align: center;">Recuerda que puedes descargar nuestra
		<a href="<?= base_url('resources/assets/docs/BoxniApp_beta.apk') ?>" download="Boxni">App</a>
</h5>

<br>
</br>

<div class="row">
	<div class="col-md-9">
		<a href="<?= base_url("cliente/mascotas/registro") ?>"><button type="button" class="btn btn-outline-primary btn-rounded">
				Registrar una Mascota Nueva
			</button></a>
	</div>
</div>

<form>
	<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
	<input type="submit" value="Buscar" class="btn-search">
</form>

<br>
</br>

<h3>
	<p style="text-align: center;">Tus Mascotas Registradas: </p>
</h3>


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
					Nombre: <?= $mascota->nombremascota ?>
				</h5>
				<div class="card-body">
					<h5 class="card-text" style="text-align: center;">
						<br>
						</br>
						<img class="rounded-circle" alt="Responsive image" src="<?php echo base_url($mascota->ubicacionimagen); ?>" style=" width: 250px; height: 200px;"></br>
					</h5>
				</div>
				<div class="card-footer">
					<a href="<?= base_url("cliente/mascotas/detalle?detalle={$mascota->idmascota}") ?>" class="btn btn-outline-info btn-rounded btn-purple mr-2 mt-2">Ver información</button></a></p>
					<a href="<?= base_url("cliente/mascotas/editar?detalle={$mascota->idmascota}") ?>" class="btn btn-outline-warning btn-rounded btn-purple mr-2 mt-2">Modificar datos</button></a></p>
					<a button type="button" class="btn btn-outline-danger btn-rounded btn-purple mr-2 mt-2" onclick="javascript:eliminarmascota()">Eliminar mascota</button></a></p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

</div>

<script>
	function eliminarmascota() {

	}
</script>