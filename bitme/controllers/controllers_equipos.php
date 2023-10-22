<?php

require_once("../db/db.php");
require_once("../models/models_equipos.php");
require_once("../models/models_tiene.php");

$objeto = new equipo_model();
$objeto2 = new deportista_model();

if(isset($_POST['buscare'])){
    $id = $_POST['ide'];
    $equipos = $objeto->getEquipo($id);
    $tienes = $objeto2->getTiene($id);
    require_once('../views/equipos_listado.php');
}
