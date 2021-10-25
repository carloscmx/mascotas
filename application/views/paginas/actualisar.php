<?php

$idmascota = $_POST['idmascota'];
$txtNombrepet = $_POST['txtNombrepet'];
$ddtFechanan = $_POST['ddtFechanan'];
$txtColor = $_POST['txtColor'];
$cboSexo = $_POST['cboSexo'];

$actualizar = "UPDATE mascotas SET txtNombrepet='$txtNombrepet', ddtFechanan='$ddtFechanan', txtColor='$txtColor',
cboSexo='$cboSexo' WHERE idmascota='$idmascota'";

$resultado = mysqli_query($conexion, $actualizar);

if ($resultado) {
	echo "<script>alert('Se guardo'); window.location='Tabla-datos-grid/edicion.php';</script>";
} else {
	echo "<script>alert('NO se guardo'); window.history.go(-1);</script>";
}
