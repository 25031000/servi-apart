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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">

    <link rel="stylesheet" href="../Residente/css/home.css">
    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">


</head>

<body style="font-family: 'Varela Round', sans-serif !important;">

    <?php
    include '../../components/menu.php';
    include '../../components/headerInclude.php';


    ?>


    <div class="content-wrap">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 style="font-size: 35px">Modificar Peticiones
                                </h1>
                                <p>Por favor edita los campos para actualizar la información de tu petición</p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#"  style="color: #18d26e">Residente</a>
                                    </li>
                                    <li class="breadcrumb-item active">Modificar Petición</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">

                <div class="row" style="display: flex; justify-content: center; align-items: center; margin-left:30px">
                    <div class="col-lg-4" style="display: flex;align-items: center;">
                        <img src="../../assets/img/publicaciones.svg" alt="" style="width:100%">
                    </div>

                        <div class="col-lg-8">

                              


                                        <?php
                                        cargarPeticionEditar();
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