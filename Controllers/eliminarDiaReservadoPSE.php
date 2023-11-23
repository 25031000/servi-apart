<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Incluye la fuente Varela Round -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap">

    <style>
        body {
            font-family: 'Varela Round', sans-serif;
        }
    </style>

    <title>Servi - Apart</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../assets/icons/ico.ico">
</head>

<body>

<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
//ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 
$id_reserva = $_GET['id'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarDiaReservaPSE($id_reserva);





?>
</body>
</html>