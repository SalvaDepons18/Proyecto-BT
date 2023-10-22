<?php

	require_once("../models/models_sanciones.php");
	
	$objeto = new sancion_model();
	$sanciones = $objeto->getSancion();

	if(isset($_POST['ingresar'])){
		$ci_sancionado = $_POST['ci'];
		$tipo = $_POST['tipo'];
		$fecha = $_POST['fecha'];
		$objeto->insertSancion($ci_sancionado, $tipo, $fecha);
		header('location:../views/agregarsanciones.php');
	}

	if(isset($_POST['eliminar'])){
		$ide = $_POST['ide'];
		$objeto->deleteSancion($ide);
		header('location:../views/elisanciones.php');
	}

	if(isset($_POST['modificar'])){
		$id = $_POST['id'];
		$nci_sancionado = $_POST['nci'];
		$ntipo = $_POST['ntipo'];
		$nfecha = $_POST['nfecha'];
		$objeto->modSancion($id, $nci_sancionado, $ntipo, $nfecha);
		header('location:../views/modsanciones.php');
	}

    require_once("../views/versanciones.php");
	
?>