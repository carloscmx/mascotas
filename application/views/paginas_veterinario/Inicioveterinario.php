<h3>Bienvenido Veterinario</h3>

<div class="row">
	<div class="col-md-9">
	</div>
	<div class="col-md-9">

		<a href="<?= base_url("veterinario/registro") ?>"><button type="button" class="btn btn-success">
				Registrar datos Veterinario
			</button></a>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success alert-dismissable">

			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
				×
			</button>
			<h4>
				Alert!
			</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
		</div>
	</div>
</div>

<div class="row">
	<?php foreach ($certificados->result() as $veterinariosinfo) : ?>
		<div class="col-md-4 mt-4">
			<div class="card">
				<h5 class="card-header">
					ID del Veterinario: <?= $veterinariosinfo->idveterinarioinfo ?>
				</h5>
				<div class="card-body">
					<p class="card-text">
						Nombre del Veterinario: <?= $veterinariosinfo->nombreveterinario ?>
					</p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>