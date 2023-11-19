<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadPS.php");
require_once("../../Controllers/mostrarInfoGuarda.php");
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
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">

    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">



</head>

<body>

    <?php
    include '../../components/menuPS.php';
    include '../../components/headerIncludePS.php';
    ?>




    <div class="content-wrap container-fluid">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e !important;">
                                    <img src="../../assets/icons/carro-ver.png"
                                        style="width: 48px; height: 48px !important" alt="">
                                </div>
                                <h1 style="font-size: 1.5rem;" class="ms-4">Ver Vehículos</h1>
                            </div>
                            <p class="mt-4" style="margin-bottom: -20px; margin-top: 20px;">Este módulo te permite acceder a la
                                información de los vehículos registrados en nuestro sistema, brindándote las
                                herramientas necesarias para una supervisión efectiva y un control integral de la
                                seguridad en nuestras instalaciones.</p>

                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 ">
                        <div class="page-header">
                            <div class="page-title" style="display:flex; justify-content: end;">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a style="color: #18d26e">Guarda de Seguridad</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ver Vehículos</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>



                <!-- /# row -->
                <section id="main-content" class="lista_vehiculos mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card vehiculos_ver">
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr class="filas_vehiculos">
                                                    <th style="font-size:17px">Placa</th>
                                                    <th style="font-size:17px">Marca</th>
                                                    <th style="font-size:17px">Referencia</th>
                                                    <th style="font-size:17px">Modelo</th>
                                                    <th style="font-size:17px">Identificación Propietario</th>
                                                    <th style="font-size:17px">Estacionamiento</th>
                                                    <th style="font-size:17px">Fecha de Registro</th>
                                                    <th style="text-align:center; font-size:17px">Novedades</th>
                                                    <th style="text-align:center; font-size:17px">Más detalles</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                cargarVehiculosPS();
                                                
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
        //menu icon on Navbar
        $('#menu-btn').click(() => {

            $('#menu-modal').attr('transition-style', 'in:wipe:down')
            $('#menu-modal').css({
                display: 'block'
            })
            $('body').css({
                overflowX: "hidden"
            })
        })

        //close icon on modal
        $('#close').click(() => {

            $('#menu-modal').attr('transition-style', 'out:wipe:down')
            $('html').css({
                overflow: "scroll"
            })

        })
    </script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>