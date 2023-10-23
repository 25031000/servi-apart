<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>Servi-Apart</title>
</head>
<style>
    *, html, body{
        font-family: 'Varela Round', sans-serif;
    }
</style>

<body>
<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
//ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 
$placa = $_GET['placa'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarVehiculosAdmin($placa);

?>
        
</body>
</html>