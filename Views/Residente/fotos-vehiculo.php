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

  <!-- Common -->
  <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
  <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
  <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
  <link href="../Dashboard/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="../../components/css/header.css">
  <link rel="stylesheet" href="../../components/css/menu.css">

  <!-- Transition.style website -->
  <link rel="stylesheet" href="https://unpkg.com/transition-style">

  <link rel="stylesheet" href="../../assets/css/pack-styles.css">
  <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="container-fluid p-0">

  <?php
  include '../../components/menu.php';
  include '../../components/headerInclude.php';


  ?>



  <div class="content-wrap">
    <div class="main">
      <div class="container mt-5">

        <?php
        cargarFotosVehiculoRes();
        ?>

      </div>
    </div>








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