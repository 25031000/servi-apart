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

    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">
    <!-- Common -->
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
    <link href="../../assets/css/pack-styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../client-site/assets/css/admin.css">
    
    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
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
                                <h1 style="font-size:30px">Modificar Información de las Reservaciones
                                </h1>
                                <p style="font-size:15px; margin-top: 10px">En este módulo, puedes editar las reservas
                                    hechas por los residentes en el salón comunal de manera sencilla y conveniente.
                                    Personaliza las reservas desde
                                    cualquier lugar, adaptando los detalles según sus necesidades.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="" style="color: #18d26e">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Modificar Reservas</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">

                <div class="row">
                    <div class="col-lg-5 p-5" style="display: flex;align-items: center;">
                        <img src="../../assets/img/salon_edit.svg" alt="" style="width:100%">
                    </div>
                    <div class="col-lg-7 p-4">
                        <div class="card vehiculos_ver mt-4" style="border:none">
                            <div class="card-body">
                                <div class="basic-elements">
                                    <?php
                                    cargarReservaEditar();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2023 © Admin Board. - <a href="#">Servi - Apart</a></p>
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

</body>

</html>