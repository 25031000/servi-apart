<?php
// Enlazamos las dependencias necesario
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

    <!-- ================= Favicon ================== -->
    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">

    <!-- Common -->
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
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
                                <h1 style="font-size:40px">Modificar Novedades</h1>
                                <p style="font-size:15px; padding-right: 300px; margin-top: 10px">En este módulo,
                                    puedes editar las novedades hechas por el personal de seguridad con los vehículos de
                                    nuestros
                                    residentes en caso de daños o incidencias. Realiza actualizaciones o correcciones, y
                                    garantiza un ambiente
                                    residencial seguro y bien gestionado para todos nuestros residentes."</p>
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
                                    <li class="breadcrumb-item active">Editar Vehiculos</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">


                    <div class="row"
                        style="display: flex; justify-content: center; align-items: center; margin-top:50px">
                        <div class="col-lg-6" style="display: flex;align-items: center;">
                            <img src="../../assets/img/car_edit.svg" alt="imagen de carro" style="width:100%">
                        </div>

                        <div class="col-lg-5">
                            <div class="card vehiculos_ver" style="border:none">
                                <div class="card-title">


                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">


                                        <?php
                                        cargarNovedadesEditar();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </section>
            </div>
        </div>
    </div>



    <!-- Common -->
    <script src="../dashboard/js/lib/jquery.min.js"></script>
    <script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../dashboard/js/scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>