<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadPS.php");
require_once("../../Controllers/mostrarInfoGuarda.php");

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
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">

    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">



</head>

<body>

    <?php
    include '../../components/menuPS.php';
    include '../../components/headerIncludePS.php';
    ?>

    <div class="content-wrap container-fluid">
        <div class="main">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right" style="margin-top:15px; padding: 0 30px">
                    <div class="page-header">
                        <div class="page-title d-flex align-items-center">
                            <div class="icon-content p-2 rounded-circle" style="background-color: #18d26e !important;">
                                <img src="../../assets/icons/carro-ver.png" style="width: 48px; height: 48px !important"
                                    alt="">
                            </div>
                            <h1 style="font-size: 1.5rem;" class="ms-4">Registro de Novedades</h1>
                        </div>
                        <p style="margin-bottom: -20px; margin-top: 20px;">Utiliza esta herramienta para registrar y
                            reportar posibles daños o novedades en los vehículos. Tu contribución es esencial para
                            mantener un registro detallado de la seguridad de nuestras instalaciones y de los vehículos
                            registrados en el sistema.</p>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#" style="color: #18d26e">Guarda de Seguridad</a>
                                </li>
                                <li class="breadcrumb-item active">Registro de Novedades</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- main content -->
            <div class="pt-3 ">
                <main class="w-100 row px-5 gap-4 flex-nowrap  py-3 mt-4">
                    <div id="grid" class="col-md-5 p-0 m-0 grid-collage">
                        <img src="../Administrador/images/horizontal2.jpg" width="100%" height="100%" alt="">
                        <img src="../Administrador/images/vertical.jpg" alt="">
                        <img src="../Administrador/images/horizontal.jpg" width="100%" height="100%" alt="">
                    </div>
                    <form action="../../Controllers/registrarNovedad.php" class="col-md-7 p-5 pack-form" method="post"
                        style="height: 70%">
                        <div class="row">
                            <div class="d-flex flex-column mb-3">
                                <h2 style="font-size: 1.7em;">Registrar Novedad a Vehículo</h2>
                            </div>
                            <div class="form-group col-md-12 ">
                                <label>Placa:</label>
                                <input style="width:100%" type="text" class="rounded-3 input" placeholder="Ej: UZI974"
                                    name="placa">
                            </div>

                            <div class="form-group col-md-12  labelid" style="display:block">
                                <label>Descripción del reporte:</label>
                                <textarea style="width:100%; height: 150px" type="text" class="rounded-3 input"
                                    placeholder="Ej: El vehículo tiene un rayon en el costado derecho"
                                    name="novedad"></textarea>
                            </div>

                        </div>
                        <div class="d-flex flex-column  mt-3">
                            <button class="p-2 register-btn rounded-2 w-20">Registrar</button>
                        </div>
                    </form>

                </main>
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