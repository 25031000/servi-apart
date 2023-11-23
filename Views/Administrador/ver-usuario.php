<?php

require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadAdministrador.php");
require_once("../../Controllers/mostrarInfoAdmin.php");


?>



<!DOCTYPE html>
<html lang="en" style="overflow-y:none">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servi - Apart</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">

    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="../client-site/assets/css/style.css" rel="stylesheet">

    <style>
        .card-publi {
            border-radius: 0.625rem;
            box-shadow: 6px 6px 36px #e3e3e3,
                -6px -6px 36px #ffffff;
            margin: 0 2em;
            margin-top: -50px;
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
                        <div class="page-header ml-3">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e !important;">
                                    <img src="../../assets/icons/carro-ver.png"
                                        style="width: 48px; height: 48px !important" alt="">
                                </div>
                                <h1 style="font-size: 1.5rem;" class="ms-4">Ver Usuarios</h1>
                            </div>
                            <p style="margin-bottom: -20px; margin-top: 20px;"> Puedes ver y gestionar a todos los
                                usuarios registrados en la plataforma. Puedes ver información básica sobre cada usuario,
                                como su nombre, correo electrónico, rol y estado. También puedes
                                editar la información del usuario o eliminarlo si es necesario.</p>
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
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: #18d26e">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ver Usuarios</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>

                
                <div style="display: flex; justify-content: end; width: 98%; background-color: none; margin: 20px 0 15px 0">
                    <button id="GenerarPDF" style="background: transparent"><a
                            class="btn p-2 btn-pdf mx-3" href="../../services/generatepdfusuarios.php" target="_blank">Generar
                            Reporte PDF</a></button>
                            <button id="GenerarExcel" style="background: transparent"><a
                            class="btn p-2 btn-excel" href="../../services/generarexcelusuarios.php" target="_blank">Generar
                            Reporte Excel</a></button>
                </div>




                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-publi" style="margin-left:25px">
                                <div class="card-title">

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr class="filas_vehiculos">
                                                    <th style="font-size:16px; padding: 0 0 15px 0">Foto</th>
                                                    <th style="font-size:16px; padding: 0 0 15px 0">Identificación</th>
                                                    <th style="font-size:16px; padding: 0 0 15px 0">Tipo de Documento</th>
                                                    <th style="font-size:16px; padding: 0 0 15px 0">Nombres</th>
                                                    <th style="font-size:16px; padding: 0 0 15px 0">Apellidos</th>
                                                    <th style="font-size:16px; padding: 0 0 15px 0">Correo</th>
                                                    <th style="font-size:16px; padding: 0 0 15px 0">Estado</th>
                                                    <th style="font-size:16px; padding: 0 0 15px 0">Torre</th>
                                                    <th style="font-size:16px; padding: 0 0 15px 0">Apartamento</th>
                                                    <th style="margi-right: 40px; font-size:16px; padding: 0 0 15px 0; text-align: center">Operaciones</th>

                                            </thead>
                                            <tbody>
                                                <?php

                                                cargarUsuarios();

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /# column -->




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

</body>

</html>