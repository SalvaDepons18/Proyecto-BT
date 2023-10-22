<?php

	require_once("../models/models_deportista.php");
	
	$objeto = new deportista_model();
	$deportistas = $objeto->getDeportista();
	$deportista = $objeto->getDeportistaVencido();
	
	if(isset($_POST['ingresar'])){
		$ci = $_POST['ci'];
		$nom = $_POST['nom'];
		$ape = $_POST['ape'];
        $edad = $_POST['edad'];
		$num = $_POST['num'];
		$fecha = $_POST['fecha'];
		$idi = $_POST['idi'];
		$objeto->insertDeportista($ci, $nom, $ape, $edad, $fecha, $num, $idi);
		header('location:../views/agregardeportista.php');
	}

	if(isset($_POST['eliminar'])){
		$cie = $_POST['cie'];
		$objeto->deleteDeportista($cie);
		header('location:../views/elideportista.php');
	}

	if(isset($_POST['modificar'])){
		$cim = $_POST['cim'];
		$nci = $_POST['nci'];
		$nnom = $_POST['nnom'];
		$nape = $_POST['nape'];
        $nedad = $_POST['nedad'];
		$nfecha = $_POST['nfecha'];
		$nnum = $_POST['nnum'];
		$nidi = $_POST['nidi'];
		$objeto->modDeportista($cim, $nci ,$nnom, $nape, $nedad, $nfecha, $nnum, $nidi);
		header('location:../views/moddeportista.php');
	}

	require_once("../views/verdeportista.php");
	

?>