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

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Toastr -->
    <link href="../Dashboard/css/lib/toastr/toastr.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="../Dashboard/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="../Dashboard/css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="../Dashboard/css/lib/barRating/barRating.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="../Dashboard/css/lib/nestable/nestable.css" rel="stylesheet">
    <!-- JsGrid -->
    <link href="../Dashboard/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="../Dashboard/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="../Dashboard/css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../Dashboard/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="../Dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="../Dashboard/css/lib/weather-icons.css" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="../Dashboard/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../Dashboard/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Select2 -->
    <link href="../Dashboard/css/lib/select2/select2.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link href="../Dashboard/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Calender -->
    <link href="../Dashboard/css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">

    <link href="../../assets/css/pack-styles.css" rel="stylesheet">
    <link href="../client-site/assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/publicaciones-styles.css" rel="stylesheet">





</head>

<body>

    <?php
    include 'menu-include.php';
    ?>

    <!-- /# sidebar -->



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <div class="page-title d-flex align-items-center">
                                    <div class="icon-content p-2 rounded-circle"
                                        style="background-color: #18d26e !important; margin-left: 40px ">
                                        <img src="../../assets/icons/megafono.png" alt=""
                                            style="width: 50px; height: 50px;">
                                    </div>
                                    <h1 style="font-size: 2.5rem;" class="hola">Registro de publicaciones</h1>
                                </div>
                                <h1 style="margin-top: 30px; font-size: 30px; margin-left: 55px ">Crear Publicación</h1>
                                <p style="font-size: 20px; margin-left: 55px">Por favor rellena los campos</p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Crear Publicaciones</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>

                <!-- /# row -->
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row contImg">
            <div class="col-md-6">
                <form action="../../Controllers/crearPublicaciones.php" method="POST" style="margin-top: 90px;">
                    <div class="row">


                        <div class="form-group col-md-12">
                            <label><strong>Titulo:</strong></label>
                            <input type="text" class="form-control"
                                placeholder="Ej: No va haber luz de las 7pm a 10pm. " name="titulo">
                        </div>

                        <div class="form-group col-md-12 ">
                            <label><strong>Descripcion:</strong></label>
                            <!-- <input type="textarea" class="form-control des" placeholder="Ej: Profundiza la situacion" name="descripcion"> -->
                            <textarea name="descripcion" id="" class="form-control" cols="30" rows="3"
                                placeholder="Ej: Profundiza la situacion."></textarea>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Crear</button>
                    <div class="register-link m-t-15 text-center">

                    </div>
                </form>
            </div>
            <div class="col-md-6 ">
                <img src="../../assets/img/publi.png" class="img_publi" alt="">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>



</body>

</html>