<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src="sweetalert2.all.min.js"></script>
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

    require_once "../Models/conexion.php";
    require_once "../Models/consultas.php";

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $identificacion = $_GET['id'];



    if (strlen($titulo) > 0 && strlen($descripcion) > 0 && strlen($identificacion) > 0) {

        $objConsultas = new consultas();
        $result = $objConsultas->insertarPeticion($titulo, $descripcion, $identificacion);


    } else {
        ?>
        <script>

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al registrar la petición. Verifica que todos los campos esten completos',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = '../Views/Residente/registrar-peticion.php';
                }

            })
        </script>
        <?php
    }

    ?>



</body>

</html>