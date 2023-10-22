<?php

	require_once("../models/models_usuarios.php");
	
	$usuario = new usuarios_model();
	$usuarios = $usuario->getUsuarios();
	
	if(isset($_POST['ingresar'])){
		$ci = $_POST['ci'];
		$nom = $_POST['nom'];
		$ape = $_POST['ape'];
        $pass = MD5($_POST['pass']);
        $tipo = $_POST['tipo'];
		$usuario->insertUsuarios($ci, $nom, $ape, $pass, $tipo);
		header('location:../views/agregarusuario.php');
	}

	if(isset($_POST['eliminar'])){
		$cie = $_POST['cie'];
		$usuario->deleteUsuarios($cie);
		header('location:../views/eliusuario.php');
	}

	if(isset($_POST['modificar'])){
		$cim = $_POST['cim'];
		$nci = $_POST['nci'];
		$nnom = $_POST['nnom'];
		$nape = $_POST['nape'];
        $npass = MD5($_POST['npass']);
        $ntipo = $_POST['ntipo'];
		$usuario->modUsuarios($cim, $nci, $nnom, $nape, $npass, $ntipo);
		header('location:../views/modusuario.php');
	}

	require_once("../views/verusuario.php");
	

?>