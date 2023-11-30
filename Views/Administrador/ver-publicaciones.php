<?php

require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once ("../../Models/seguridadAdministrador.php");
require_once("../../Controllers/mostrarInfoAdmin.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servi-Apart</title>

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
    <link href="../../assets/css/vehiculo-styles.css" rel="stylesheet">
    <link href="../client-site/assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/publicaciones-styles.css" rel="stylesheet">
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
                        <div class="page-header">
                            <div class="page-title d-flex align-items-center">
                            <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e !important;">
                                    <img src="../../assets/icons/promocion.png" width= "48px" height= "48px" alt="">
                                </div>
                                <h1 style="font-size: 1.5rem;" class="ms-4">Publicaciones Creadas</h1>
                               

                               
                            </div>

                        </div >
                        <p id="text-title" style="margin-left: 100px">Se visualizara todas las publicaciones  que han sido creadas en nuestro módulo </p>
                    </div>

                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                    <a href="#" style="color: #18d26e">Administrador</a>

                                    </li>
                                    <li class="breadcrumb-item active">Publicaciones Creadas</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                </div>

                <div style="display: flex; justify-content: end; width: 98%">
                
                <button id="GenerarPDF" class="btn p-2 btn-pdf "><a class="text-light"
                        href="../../services/generarpdfpubli.php" target="_blank">Generar Reporte
                        PDF</a></button>
                <button id="GenerarExcel" class="btn p-2 btn-excel mx-3 "><a class="text-light"
                        href="../../services/generarexcelpubli.php" target="_blank">Generar Excel</a></button>
               

                </div>

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
                                                <tr style="font-size:15px">
                                                    <th>Titulo</th>
                                                    <th>Descripción</th>
                                                    <th>Operaciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                cargarPublicaciones();

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




    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../Dashboard/js/scripts.js"></script>


</body>

</html>