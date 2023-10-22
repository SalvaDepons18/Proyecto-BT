<?php

	require_once("../models/models_equipos.php");
	require_once("../models/models_deporte.php");
	
	$objeto = new equipo_model();
	$objeto1 = new deporte_model();
	$deporte = $objeto1->getDeporte();
    $nombres = $objeto->getNombres();

    if(isset($_POST['modificar'])){
		$idm = $_POST['idm'];
		$nom = $_POST['nomm'];
		$cidt = $_POST['cidtm'];
		$dep = $_POST['depm'];
		$objeto->modEquipos($idm, $nom, $dep, $cidt);
		header('location:../controllers/controllers_equipos3.php');
	}

	if (isset($_POST['jugadores'])){
		$eq = $_POST['id'];
		$objeto->insertJugadores($eq, $_POST['seleccionados']);
		header('location:../controllers/controllers_equipos3.php');
	}

    require_once("../views/modequipo.php");

?>