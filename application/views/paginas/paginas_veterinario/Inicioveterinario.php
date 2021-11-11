<h3>Bienvenido a Boxni Veterinario</h3>

<br></br>

<div class="row">
	<div class="col-md-9">
	</div>
	<div class="col-md-9">

		<a href="<?= base_url("veterinario/registro") ?>"><button type="button" class="btn btn-lg btn-outline-info btn-rounded">
				Registrar datos de Veterinario
			</button></a>
	</div>
</div>

<br></br>

<?php
if ($certificados->num_rows() == 0) {
	echo "<div class='row'>
	<div class='col-md-12'>
		<div class='alert alert-success alert-dismissable'>
			<button type='button'class='close'data-dismiss='alert' aria-hidden='true'>
				×
			</button>
			<h4>
				Alerta!
			</h4> <strong>El veterinario no cuenta con ninguna información registrada.</strong> Para agregar información selecciona el botón de<strong> Registrar datos de Veterinario</strong>
		</div>
	</div>
</div>";
}
?>

<div class="row">
	<?php foreach ($certificados->result() as $veterinariosinfo) : ?>
		<div class="col-md-12">
			<div class="list-group">
				<h5 class="list-group-item list-group-item-action active">
					ID del Veterinario: <?= $veterinariosinfo->idveterinarioinfo ?>
				</h5>
				<div class="list-group-item">
					<h4 class="list-group-item-heading">
						Nombre del Veterinario: <?= $veterinariosinfo->nombreveterinario ?>
					</h4>
				</div>
			</div> <a href="<?= base_url("veterinario/detalle?detallevet={$veterinariosinfo->idveterinarioinfo}") ?>" class="list-group-item list-group-item-action active justify-content-between">Mi información <span class="badge badge-light badge-pill"></span></a>
		</div>
</div>
<?php endforeach; ?>
</div>