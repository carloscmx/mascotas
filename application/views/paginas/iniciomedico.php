<h3>Bienvenido medico</h3>

<div class="row">
	<div class="col-md-10">
	</div>
	<div class="col-md-2">

		<a href="<?= base_url("cliente/mascotas/registro") ?>"><button type="button" class="btn btn-success">
				Registrar mascota
			</button></a>
	</div>
</div>



<?php
if (empty($mascotas)) {
	echo "	<div class='row'>
		<div class='col-md-12'>
			<p>
				Muchas gracias por registrarte, ahora puedes agregar a tus mascotas.
			</p>
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
					<a href="<?= base_url("cliente/mascotas/detalle?detalle={$mascota->idmascota}") ?>">Ver detalles</a>
					<a href="<?= base_url("cliente/mascotas/actualisarmascotas?detalle={$mascota->idmascota}") ?>">actualisar</a>
					<a href="<?= base_url("cliente/mascotas/borrarmascota?detalle={$mascota->idmascota}") ?>">eliminar</a>
				
				</div>
			</div>
		</div>
	<?php endforeach; ?>

</div>
