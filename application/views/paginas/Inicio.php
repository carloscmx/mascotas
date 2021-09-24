<h3>Bienvenido</h3>


<div class="row">
	<!--	<div class="col-md-4 mt-4">
			<div class="card">
				<h5 class="card-header">
					Card title
				</h5>
				<div class="card-body">
					<p class="card-text">
						Card content
					</p>
				</div>
				<div class="card-footer">
					Card footer
				</div>
			</div>
		</div>
-->


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
					Ver detalles
				</div>
			</div>
		</div>
	<?php endforeach; ?>

</div>