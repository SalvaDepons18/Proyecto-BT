<?php

require_once("../db/db.php");
require_once("../models/models_partidos.php");

$objeto = new partido_model();

if(isset($_POST['buscar'])){
    $id = $_POST['id'];
    $partido = $objeto->getPartido($id);
    require_once('../views/partidos_listado.php');
}
?>