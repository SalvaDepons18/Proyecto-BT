<?php

	require_once("../models/models_equipos.php");
	
	$objeto = new equipo_model();
    $tiene = $objeto->getTiene();

    require_once("../views/verequipo.php");

?>