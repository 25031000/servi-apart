<?php

require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadAdministrador.php");
require_once("../../Controllers/mostrarInfoAdmin.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Salon Comunal</title>


    <!-- Standard -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">

    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="../../assets/css/pack-styles.css" rel="stylesheet">
        <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">
    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <style>
        .box-cont {
            box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25);
        }
    </style>
</head>

<body>

    <?php
    include 'menu-include.php';
    ?>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e; padding:25px; ">
                                    <img src="../../assets/icons/hogar.png" alt="" style="width: 40px; height: 40px">
                                </div>
                                <h1 style="font-size: 1.5rem;" class="ms-4">Visualizacion de Reservas</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: #18d26e">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ver Reservas</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="box-head">
                                    <div class="p-2  d-flex justify-content-end">

                                        <button id="GenerarPDF" class="btn p-2 btn-pdf mx-3"><a class=""
                                                href="../../services/generatepdfSalonComunal.php"
                                                target="_blank">Generar PDF</a></button>
                                        <button id="GenerarExcel" class="btn btn-excel"><a
                                                class="" href="../../services/generateexcelSalonComunal.php"
                                                target="_blank">Generar Excel</a></button>

                                    </div>
                                </div>

                                <article>
                                    <?php
                                    mostrarReservas();
                                    ?>

                                </article>

                            </div>
                        </div>
                        <!-- /# column -->

                        <!-- /# column -->
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2023 © Admin Board. - <a href="#">Servi-Apart.</a></p>
                            </div>
                        </div>
                    </div>
                </section>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>