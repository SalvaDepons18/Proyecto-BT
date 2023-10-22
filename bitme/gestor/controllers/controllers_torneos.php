<?php

	require_once("../models/models_torneos.php");
	require_once("../models/models_deporte.php");
	
	
	$objeto = new torneo_model();
	$objeto1 = new deporte_model();	
	$deporte = $objeto1->getDeporte();
    $equipos = $objeto->getEquipos();
	

	if(isset($_POST['ingresar'])){
		$nom = $_POST['nom'];
		$fechainicio = $_POST['fechainicio'];
		$fechafin = $_POST['fechafin'];
		$dept = $_POST['dept'];
		$objeto->insertTorneos($nom, $fechainicio, $fechafin, $dept);
		header('location:../controllers/controllers_torneos.php');
	}

	if (isset($_POST['equipos'])){
		$torneo = $_POST['torneo'];
		$objeto->insertEquipos($torneo, $_POST['seleccionados']);
		header('location:../controllers/controllers_torneos.php');
	}

	if(isset($_POST['eliminar'])){
		$ide = $_POST['ide'];
		$objeto->deleteTorneos($ide);
		header('location:../views/elitorneo.php');
	}

	require_once("../views/agregartorneo.php");
?>


