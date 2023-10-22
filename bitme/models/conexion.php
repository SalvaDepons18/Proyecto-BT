<?php

	$conexion = new mysqli('localhost', 'root', '', 'bitme');
	if ($conexion->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		exit;
	}
	
?>