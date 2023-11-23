<?php

require_once "../Models/conexion.php";
require_once "../Models/consultas.php";
require_once "mostrarInfoGuardaFilters.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
     $data = file_get_contents("php://input");
     if($data === 'hoy'){
        cargarPaquetesHoyPS();
     }else if($data == 'semana'){
        cargarPaquetesSemanaPS();
     }else if($data == 'mes'){
        cargarPaquetesMesPS();
     }else{
        cargarPaquetePS();
     }
}

?>