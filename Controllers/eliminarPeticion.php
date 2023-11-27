<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
//ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 
$id_peticion = $_GET['id_peticion'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarPeticion($id_peticion);





?>