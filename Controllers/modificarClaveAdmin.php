<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <title>Servi - Apart</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../assets/icons/ico.ico">
</head>
<style>
    *,
    html,
    body {
        font-family: 'Varela Round', sans-serif;
    }
</style>

<body>

<?php

require_once("../Models/conexion.php");
require_once("../Models/consultas.php");

$identificacion = $_POST['identificacion'];
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];

if ($clave == $clave2) {

    $claveMd = md5($clave);

    $objConsultas = new Consultas();
    $result = $objConsultas->actualizarClaveAdmin($identificacion, $claveMd);

} else {
    echo "
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Las claves no coinciden',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = '../Views/Administrador/perfil.php?id=$identificacion';
            }
        });
    </script>";
}
?>

</body>

</html>