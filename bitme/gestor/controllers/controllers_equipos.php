<?php

	require_once("../models/models_equipos.php");
	require_once("../models/models_deporte.php");
	
	$objeto = new equipo_model();
	$objeto1 = new deporte_model();
	$deporte = $objeto1->getDeporte();
    $nombres = $objeto->getNombres();


	if(isset($_POST['ingresar'])){
		$nom = $_POST['nom'];
		$idin = $_POST['idin'];
		$dep = $_POST['dep'];
		$cidt = $_POST['cidt'];
		$objeto->insertEquipos($nom, $idin, $dep, $cidt);
		header('location:../controllers/controllers_equipos.php');
	}

	if (isset($_POST['jugadores'])){
		$eq = $_POST['eq'];
		$objeto->insertJugadores($eq, $_POST['seleccionados']);
		header('location:../controllers/controllers_equipos.php');
	}

	if(isset($_POST['eliminar'])){
		$a = $_POST['ide'];
		$objeto->deleteEquipos($a);
		header('location:../views/eliequipo.php');
	}
	
	require_once("../views/agrequipo.php");
?>


