<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
//ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 
$id_reserva = $_GET['id'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarDiaReservaPSE($id_reserva);





?>