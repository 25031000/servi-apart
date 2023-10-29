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

  <!-- Common -->
  <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
  <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
  <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="../Dashboard/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="../../assets/css/pack-styles.css">
  <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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