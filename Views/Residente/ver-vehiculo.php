<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadResidente.php");
require_once("../../Controllers/mostrarInfoResidente.php");
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">

    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">

    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">



</head>

<body class="container-fluid">

    <?php
    include '../../components/menu.php';
    include '../../components/headerInclude.php';


    ?>





    <div class="content-wrap " style="margin-left:43px;">
        <div class="main">
            <div class="">
                <div class="row">
                    <div class="col-lg-6 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 id="tl_v_vehiculos">Mis Vehículos</h1>
                                <p>Visualiza y gestiona tus vehículos registrados en el sistema. Además, podrás ver las
                                    novedades realizadas por el personal de seguridad para cada uno de tus vehículos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb" style="margin-left:72%">
                                    <li class="breadcrumb-item">
                                        <a style="color: #18d26e">Residente</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ver Vehículos</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content" class="lista_vehiculos" style="padding: 20px 0">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card vehiculos_ver" style="width:95%">
                                <div class="card-body card-ver">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr class="filas_vehiculos">
                                                    <th style="font-size:18px">Placa</th>
                                                    <th style="font-size:18px">Marca</th>
                                                    <th style="font-size:18px">Referencia</th>
                                                    <th style="font-size:18px">Modelo</th>
                                                    <th style="text-align:center; font-size:18px">Novedades</th>
                                                    <th style="text-align:center; font-size:18px">Más detalles</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                cargarVehiculosResidente();

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- /# column -->
                        <div id="grid" class="col-lg-5 grid-collage" style="margin-left:-50px; padding-left:40px">
                            <img src="../administrador/images/horizontal2.jpg" width="100%" height="100%" alt="">
                            <img src="../administrador/images/vertical.jpg" alt="">
                            <img src="../administrador/images/horizontal.jpg" width="100%" height="100%" alt="">
                        </div>

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