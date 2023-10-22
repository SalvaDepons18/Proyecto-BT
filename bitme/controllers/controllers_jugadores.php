<?php

require_once("../db/db.php");
require_once("../models/models_jugadores.php");

$objeto = new deportista_model();

if(isset($_POST['buscarj'])){
    $ci = $_POST['ci'];
    $deportistas = $objeto->getDeportista($ci);
    require_once('../views/jugadores_listado.php');
}
?>
