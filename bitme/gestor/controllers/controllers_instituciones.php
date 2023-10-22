<?php

	require_once("../models/models_instituciones.php");
	
	$objeto = new institucion_model();
	$instituciones = $objeto->getInstitucion();

	if(isset($_POST['ingresar'])){
		$nom = $_POST['nom'];
		$objeto->insertInstitucion($nom);
		header('location:../views/agregarinstituciones.php');
	}

	if(isset($_POST['eliminar'])){
		$ide = $_POST['ide'];
		$objeto->deleteInstitucion($ide);
		header('location:../views/eliinstituciones.php');
	}

	if(isset($_POST['modificar'])){
		$id = $_POST['id'];
		$nnom = $_POST['nnom'];
		$objeto->modInstitucion($id, $nnom);
		header('location:../views/modinstituciones.php');
	}

    require_once("../views/verinstituciones.php");
	

?>