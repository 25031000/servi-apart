<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadPS.php");
require_once("../../Controllers/mostrarInfoGuarda.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paqueteria</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom styles -->
    <link rel="stylesheet" href="./css/paqueteria.css">
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');

        * {
            box-sizing: border-box;
        }

        label,
        p,
        small {
            font-family: 'Roboto', sans-serif !important;
            font-weight: 300 !important;
        }
    </style>
</head>

<body>
    <?php
    include '../../components/menuPS.php';
    include '../../components/headerIncludePS.php';
    ?>

    <main class="container d-flex flex-wrap justify-content-center mt-5">
        <h1 class="w-100 ms-5 text-center"><strong>Paqueteria registrada</strong></h1>
        <div class="para_wrapper me-5 d-flex justify-content-end align-items-center w-100">

            <a href="registrar-paquete.php" style="text-decoration: none;" data-toggle="tooltip" data-placement="left" title="Registrar paquete">
                <div role="button" class="p-2 d-flex justify-content-center  align-items-center" style="border-radius: 50%; background: #00BF63">
                    <i class='bx bx-plus bx-sm p-0 m-0' style='color:#ffffff'></i>
                </div>
            </a>
        
        </div>

        <?php

        cargarPaquetePS()
        ?>

    </main>

    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../Dashboard/js/scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>