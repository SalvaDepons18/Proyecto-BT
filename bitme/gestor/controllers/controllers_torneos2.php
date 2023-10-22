<?php

	require_once("../models/models_torneos.php");
	
	$objeto = new torneo_model();
    $tiene = $objeto->getTiene();

    require_once("../views/vertorneo.php");

?>