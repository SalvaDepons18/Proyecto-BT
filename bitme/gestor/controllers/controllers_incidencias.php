<?php

	require_once("../models/models_incidencias.php");
	
	$objeto = new incidencias_model();
	$incidencias = $objeto->getIncidencia();
    

	if(isset($_POST['ingresar'])){
		$ci = $_POST['ci'];
        $idp = $_POST['idp'];
        $gol = $_POST['gol'];
		$exp = $_POST['exp'];
        $roja = $_POST['roja'];
        $ama = $_POST['ama'];
		$dep = $_POST['dep'];
		$objeto->insertIncidencia($ci, $idp, $gol, $exp, $roja, $ama, $dep);
		header('location:../views/agregarincidencia.php');
	}

	if(isset($_POST['eliminar'])){
		$id = $_POST['id'];
		$objeto->deleteIncidencia($id);
		header('location:../views/eliincidencia.php');
	}

	if(isset($_POST['modificar'])){
		$idm = $_POST['idm'];
		$cim = $_POST['cim'];
        $idpm = $_POST['idpm'];
        $golm = $_POST['golm'];
		$expm = $_POST['expm'];
        $rojam = $_POST['rojam'];
        $amam = $_POST['amam'];
		$depm = $_POST['depm'];
		$objeto->modIncidencia($idm, $cim, $idpm, $golm, $expm, $rojam, $amam, $depm);
		header('location:../views/modincidencia.php');
	}

    require_once("../views/verincidencia.php");

?>