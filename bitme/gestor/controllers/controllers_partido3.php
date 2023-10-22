<?php

	include("../db/db.php");
	require_once("../models/models_deporte.php");
	
	$objeto1 = new deporte_model();
	$deporte = $objeto1->getDeporte();

    require_once("../views/modpartido.php");
	

?>