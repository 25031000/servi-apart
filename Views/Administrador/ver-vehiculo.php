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

    <title>Servi-Apart</title>

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
                    <div class="col-lg-8 p-r-0 title-margin-right" style="margin-top:15px; padding: 0 30px">
                        <div class="page-header">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e !important;">
                                    <img src="../../assets/icons/carro-ver.png"
                                        style="width: 48px; height: 48px !important" alt="">
                                </div>
                                <h1 style="font-size: 1.5rem;" class="ms-4">Ver Vehículos</h1>
                            </div>
                            <p style="margin-bottom: -20px; margin-top: 20px;">Visualiza y gestiona los vehículos
                                registrados en el sistema. Además visualiza las
                                novedades hechas por el personal de seguridad para cada uno de los vehiculos</p>
                            <!-- <div class="row">
                            <div class="col-md-10">
                                <p class="p_vehiculo">Este módulo te ofrece la posibilidad de registrar de manera rápida
                                    y
                                    sencilla los detalles de los vehículos que ingresen a la propiedad, lo que
                                    asegura un control eficiente y seguro de toda la información relevante para tu
                                    gestión.</p>
                            </div>
                        </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e !important;">
                                    <img src="../../assets/icons/carro-ver.png"
                                        style="width: 48px; height: 48px !important" alt="">
                                </div>
                                <h1 style="font-size: 1.5rem;" class="ms-4">Ver Vehiculos</h1>
                            </div>

                            <p style="margin-bottom: -20px; margin-top: 20px;">Visualiza y gestiona los vehículos
                                registrados en el sistema. Además visualiza las
                                novedades hechas por el personal de seguridad para cada uno de los vehiculos</p>
                        </div>

                    </div> -->
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a style="color: #18d26e">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ver Vehiculos</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>

                <div style="display: flex; justify-content: end; width: 99%">
                    <button id="GenerarPDF" class="btn p-2 btn-danger btn-pdf"
                        style="margin-top:40px; margin-right:15px; background: #FF914D; border: 1px solid #FF914D"><a
                            class="txt-pdf" href="../../services/generatepdfvehiculos.php" target="_blank">Generar
                            Reporte PDF</a></button>
                    <button id="GenerarExcel" class="btn p-2 btn-success btn-excel" style="margin-top:40px"><a
                            class="txt-excel" href="../../services/generarexcelvehiculos.php" target="_blank">Generar
                            Reporte Excel</a></button>
                </div>

                <!-- /# row -->
                <section id="main-content" class="lista_vehiculos">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card vehiculos_ver">
                                <div class="card-body card-ver">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr class="filas_vehiculos">
                                                    <th style="font-size:17px">Marca</th>
                                                    <th style="font-size:17px">Placa</th>
                                                    <th style="font-size:17px">Referencia</th>
                                                    <th style="font-size:17px">Modelo</th>
                                                    <th style="font-size:17px">Identificación Propietario</th>
                                                    <th style="font-size:17px">Fecha de Registro</th>
                                                    <th style="font-size:17px">Operaciones</th>
                                                    <th style="text-align:center; font-size:17px">Novedades</th>
                                                    <th style="text-align:center; font-size:17px">Más detalles</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                cargarVehiculos();

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



    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

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