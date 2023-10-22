<?php

	require_once("../models/models_torneos.php");
	require_once("../models/models_deporte.php");
	
	$objeto = new torneo_model();
	$objeto1 = new deporte_model();
	$deporte = $objeto1->getDeporte();
    $equipo = $objeto->getEquipos();

    if(isset($_POST['modificar'])){
		$idm = $_POST['idm'];
		$nomm = $_POST['nomm'];
		$fechainiciom = $_POST['fechainiciom'];
        $fechafinm = $_POST['fechafinm'];
		$deptm = $_POST['deptm'];
		$objeto->modTorneos($idm, $nomm, $fechainiciom, $fechafinm, $deptm);
		header('location:../controllers/controllers_torneos3.php');
	}

	if (isset($_POST['equipos'])){
		$eq = $_POST['id'];
		$objeto->insertEquipos($eq, $_POST['seleccionados']);
		header('location:../controllers/controllers_torneos3.php');
	}

    require_once("../views/modtorneo.php");

?>