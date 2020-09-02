<?php 

	require_once '../Models/crud.php';
	require_once '../Models/dao.php';

	$crud=new CRUD();
	$Gs=new dao();
	
if (isset($_POST["Guardar"])) {
	
	$Gs->setUsu_docu($_POST['doc']);
	$Gs->setUsu_contra($_POST['contraseña']);

	$crud->contra($Gs);

	header('Location: ../views/perfil.php');
}

if (isset($_POST['img'])) {
	if ($_FILES) {
		$directorio='../img/';
		$copy=$directorio.$_FILES['imagen']['name'];

		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $copy)) {
		}
	}

	$Gs->setUsu_foto($copy);
	$Gs->setUsu_docu($_POST['doc']);
	
	$crud->foto($Gs);

	header('location: ../views/perfil.php');
}



 ?>