<?php

	require_once("../models/models_partido.php");
	require_once("../models/models_deporte.php");

	$objeto = new partido_model();
	$objeto1 = new partido_model();
	$objeto2 = new deporte_model();
	$deporte = $objeto2->getDeporte();
	$partidos = $objeto->getPartido();
	$partidos1 = $objeto1->getPartido2022();

	if(isset($_POST['ingresar'])){
		$id1 = $_POST['id1'];
		$id2 = $_POST['id2'];
		$pun1 = $_POST['pun1'];
		$pun2 = $_POST['pun2'];
		$fecha = $_POST['fecha'];
		$lugar = $_POST['lugar'];
		$dep = $_POST['dep'];
		$objeto->insertPartido($id1, $id2, $pun1, $pun2, $fecha, $lugar, $dep);
		header('location:../controllers/controllers_partido2.php');
	}

	if(isset($_POST['eliminar'])){
		$ide = $_POST['ide'];
		$objeto->deletePartido($ide);
		header('location:../views/elipartido.php');
	}

	if(isset($_POST['modificar'])){
		$id = $_POST['nid'];
		$nid1 = $_POST['nid1'];
		$nid2 = $_POST['nid2'];
		$npun1 = $_POST['npun1'];
		$npun2 = $_POST['npun2'];
		$nfecha = $_POST['nfecha'];
		$nlugar = $_POST['nlugar'];
		$ndep = $_POST['ndep'];
		$objeto->modPartido($id, $nid1, $nid2, $npun1, $npun2, $nfecha, $nlugar, $ndep);
		header('location:../controllers/controllers_partido3.php');
	}

    require_once("../views/verpartido.php");
	

?>