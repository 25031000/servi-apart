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
    require_once("../Models/generarClaveModel.php");

    $identificacion = $_POST['identificacion'];
    $email = $_POST['email'];

    $objClave = new GenerarCLave();
    $result = $objClave->enviarNuevaClave($identificacion, $email);


?>
</body>

</html>