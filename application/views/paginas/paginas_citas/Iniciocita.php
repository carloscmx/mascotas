<h1>
    <p style="text-align: center;"> Citas Boxni </p>
</h1>
<h4>

    <div class="row">
        <div class="col-md-9">
            <a href="<?= base_url("cliente/citas/registro") ?>"><button type="button" class="btn-lg btn-outline-primary btn-rounded">
                    Registrar una Cita
                </button></a>
        </div>
    </div>

    <br>
    </br>

    <?php
    if (empty($cita)) {
        echo "<div class='row'>
	<div class='col-md-12'>
		<div class='alert alert-success alert-dismissable'>
			<button type='button'class='close'data-dismiss='alert' aria-hidden='true'>
				×
			</button>
			<h4>
				No tienes ninguna cita registrada para eso selecciona el Boton <strong> Registrar una Cita</strong>
			</h4>
		</div>
	</div>
</div>";
    }
    ?>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Product
                        </th>
                        <th>
                            Payment Taken
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            01/04/2012
                        </td>
                        <td>
                            Default
                        </td>
                    </tr>
                    <tr class="table-active">
                        <td>
                            1
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            01/04/2012
                        </td>
                        <td>
                            Approved
                        </td>
                    </tr>
                    <tr class="table-success">
                        <td>
                            2
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            02/04/2012
                        </td>
                        <td>
                            Declined
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td>
                            3
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            03/04/2012
                        </td>
                        <td>
                            Pending
                        </td>
                    </tr>
                    <tr class="table-danger">
                        <td>
                            4
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            04/04/2012
                        </td>
                        <td>
                            Call in to confirm
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>