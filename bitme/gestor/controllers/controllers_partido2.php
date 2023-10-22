<?php

	include("../db/db.php");
	require_once("../models/models_deporte.php");

	$objet = new deporte_model();
	$deporte = $objet->getDeporte();
	
    require_once("../views/agregarpartido.php");
	

?>