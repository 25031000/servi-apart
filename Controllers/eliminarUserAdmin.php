<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
//ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 
$id = $_GET['identificacion'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarUserAdmin($id);





?>