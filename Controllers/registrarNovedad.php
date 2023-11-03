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

    // Enlazamos las dependencias necesarias
    require_once("../Models/conexion.php");
    require_once("../Models/consultas.php");
    

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos
    $placa = $_POST['placa'];
    $novedad = $_POST['novedad'];

    //capturamos la identificacion del guarda para enviarla al registro de la novedad
    session_start();
    $identificacion = $_SESSION['id'];

    if (
        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        strlen($placa) > 0 && strlen($novedad) > 0
    ) {

        $objConsultas = new Consultas();
        $result = $objConsultas->registrarNovedadPS($placa, $novedad, $identificacion);

    } else {
        ?>
        <script>

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al registrar la novedad. Verifica que todos los campos estan completos',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = '../Views/Seguridad/registrar-novedad.php';
                }

            })
        </script>
        <?php
    }

    ?>


</body>

</html>