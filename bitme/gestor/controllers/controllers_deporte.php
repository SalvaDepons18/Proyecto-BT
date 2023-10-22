<?php

    include("../db/db.php");
	require_once("../models/models_deporte.php");
	
	$objeto = new deporte_model();
	$deporte = $objeto->getDeporte();

    if(isset($_POST['ingresar'])){
		$nom = $_POST['nom'];
		$objeto->insertDeporte($nom);
		header('location:../views/agregardeporte.php');
	}

	if (isset($_POST['modificar'])){
		$idm = $_POST['idm'];
        $nomb = $_POST['nomb'];
		$objeto->modDeporte($idm, $nomb);
		header('location:../views/moddeporte.php');
	}

	if(isset($_POST['eliminar'])){
		$ide = $_POST['ide'];
		$objeto->deleteDeporte($ide);
		header('location:../views/elideporte.php');
    }

    require_once("../views/verdeporte.php");

?>