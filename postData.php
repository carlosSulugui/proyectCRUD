<?php 
include 'impl/UpdateData.php';
include 'impl/CreateData.php';

if (isset($_POST['cambio'])) {

	$nombre = $_POST['nombre'];
	$Snombre = $_POST['lastName'];
	$correo = $_POST['email'];
	$estatus = $_POST['status'];
	$id = $_POST['id'];

    $cambio = new UpdateData($nombre, $apellido, $correo, $estatus, $id);

	$cambio->update();

}

 ?>