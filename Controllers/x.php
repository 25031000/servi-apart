<?php

require_once ("../Models/consultas.php");
require_once ("../Models/conexion.php");


if($_SERVER['REQUEST_METHOD'] === "POST"){
    $data = file_get_contents('php://input');

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarFotoRes($data);
    echo $result[0];
}


?>