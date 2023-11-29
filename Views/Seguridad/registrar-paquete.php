<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadPS.php");
require_once("../../Controllers/mostrarInfoAdmin.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servi - Apart</title>

    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom styles -->
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">


    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');

        * {
            box-sizing: border-box;
        }

        label {
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

<div class="content-wrap  container d-flex align-items-center" style="height: 92vh; margin-top:-20px">
            <div class="row ">
                    <div class=" d-md-flex justify-content-between me-5 px-5">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header ms-4">
                                <div class="page-title d-flex align-items-center">
                                    <div class="icon-content p-2 rounded-circle"
                                        style="background-color: #18d26e !important;">
                                        <img src="../../assets/icons/box-pack.png" alt="">
                                    </div>
                                    <h1 style="font-size: 1.7em;" class="ms-4 mb-0">Registro de paqueteria</h1>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left  ms-5 ms-md-0 mt-3 mt-md-0 justify-content-center justify-content-md-end d-flex align-items-center">
                                    <ol class="breadcrumb mb-0 ">
                                        <li class="breadcrumb-item">
                                            <a href="" style="color: #18d26e; text-decoration:none">Administrador</a>
                                        </li>
                                        <li class="breadcrumb-item active">Registro de paqueteria</li>
                                    </ol>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- main content -->
                <div class="pt-3 ">
                    <main class="w-100 row px-5 gap-5 flex-nowrap justify-content-center align-items-center py-4">
                        <form action="../../Controllers/registrarPaquete.php" class="col-md-6 p-5  pack-form h-75" method="post">
                        <div class="d-flex flex-column mb-3">
                                <h2 style="font-size: 1.7em;">Formulario de registro</h2>
                            </div>  

                            <div class="d-flex flex-column mb-3">
                                <label for="" class="py-2">Torre</label>
                                <input type="text" name="torre" placeholder="1" class="rounded-3 input">
                            </div>

                            <div class="d-flex flex-column mb-3">
                                <label for="" class="py-2">Apartamento</label>
                                <input type="text" name="apartamento" placeholder="a-12" class="rounded-3 input">
                            </div>

                            <div class="d-flex flex-column mb-4">
                                <label for="" class="py-2">Remitente</label>
                                <input type="text" name="remitente" placeholder="Mercado libre" class="rounded-3 input">
                            </div>

                            <div class="d-flex flex-column  mt-3">
                            <button class="boton-btn">Registrar</button>                           
                            </div>
                        </form>
                        <div class="col-md-6 m-0  h-100 img_wrapper" style="padding: 30px !important;">
                            <img src="./images/drone.svg" class="drone_img d-flex mx-auto"  alt="">
                            
                        </div>
                    </main>
                </div>
            </div>
    </div>





    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../Dashboard/js/scripts.js"></script>

</body>

</html>