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
    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">
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

  <link rel="stylesheet" href="../../assets/css/pack-styles.css">
  <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  <?php
  include 'menu-include.php';
  ?>



  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">

        <?php
        cargarFotosVehiculo();
        ?>

      </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <script src="js/scripts.js"></script>


    <!--  flot-chart js -->
    <script src="js/lib/flot-chart/excanvas.min.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="js/lib/flot-chart/curvedLines.js"></script>
    <script src="js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="js/lib/flot-chart/flot-chart-init.js"></script>


</body>

</html>