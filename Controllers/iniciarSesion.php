<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Servi - Apart</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../assets/icons/ico.ico">
</head>

<body>

<?php
    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    $email = $_POST['email'];
    $clave = md5($_POST['clave']);

    if (strlen($email) > 0 && strlen($clave)> 0) {
        
        $objValidar = new ValidarSesion();
        $result = $objValidar->iniciarSesion($email, $clave);
    } else {
        echo '<script>alert("Ingrese el usuario y contraseña")</script>';
        echo "<script>location.href='../Views/client-site/page-login.html'</script>";
    }
?>

</body>

</html>
