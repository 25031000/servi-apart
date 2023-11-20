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

    <title>Servi - Apart</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">


    <!-- Common -->
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
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
                            <div class="page-title">
                                <h1 id="tl_v_vehiculos">Novedades</h1>
                                <p>Como administrador, accede al historial de novedades de vehículos realizadas por el
                                    personal de seguridad de nuestro conjunto</p>
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
                                    <li class="breadcrumb-item active">Ver novedades</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content" class="lista_vehiculos">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card vehiculos_ver">
                                <div class="card-title">

                                </div>
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr class="filas_vehiculos">
                                                    <th style="font-size:17px">ID Novedad</th>
                                                    <th style="font-size:17px">Placa</th>
                                                    <th style="font-size:17px">Novedad</th>
                                                    <th style="font-size:17px">Fecha Revision</th>
                                                    <th style="font-size:17px">Identificación guarda</th>
                                                    <th style="font-size:17px">Nombre de guarda encargado</th>
                                                    <th style="font-size:17px; text-align: center">Ver Foto</th>
                                                    <th style="text-align:center; font-size:17px">Operaciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                cargarNovedades();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /# column -->

                        <!-- /# column -->
                    </div>

                    <?php
                    $placa = $_GET['placa'];

                    echo '<button id="GenerarPDF" class="btn p-2 btn-pdf " style="margin-top:20px; margin-right:20px;margin-left:10px;"><a class="text-light" href="../../services/generatepdfnovedades.php?placa=' . $placa . '" target="_blank">Generar Reporte de novedades en PDF</a></button>';
                    echo '<button id="GenerarPDF" class="btn p-2 btn-excel " style="margin-top:20px"><a class="text-light" href="../../services/generarexcelnovedades.php?placa=' . $placa . '" target="_blank">Generar Reporte de novedades en Excel</a></button>';
                    ?>


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