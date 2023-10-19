<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadAdministrador.php");
    require_once ("../../Controllers/mostrarInfoAdmin.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <title>Paqueteria</title>
</head>

<body>
    <?php
    include 'menu-include.php';
    ?>

    <div class="content-wrap">
        <div class="main">
        <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e !important;">
                                    <img src="../../assets/icons/box-pack.png" alt="">
                                </div>
                                <h1 style="font-size: 1.5rem;" class="ms-4">Registro de paqueteria</h1>
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
                                    <li class="breadcrumb-item active">Registro de paqueteria</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- main content -->
            <div class="pt-3 ">
                <main class="w-100 row px-5 gap-4 flex-nowrap  py-5">
                    <form action="../../Controllers/registrarPaquete.php" class="col-md-5 p-5 pack-form" method="post">
                        <div class="d-flex flex-column mb-3">
                            <label for="" class="py-2">Torre</label>
                            <input type="text" name="torre" placeholder="1" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column mb-3">
                            <label for="" class="py-2">Apartamento</label>
                            <input type="text" name="apartamento" placeholder="a-12" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column mb-4">
                            <label for="" class="py-2">Remitente</label>
                            <input type="text" name="remitente" placeholder="Mercado libre" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column  mt-3">
                            <button class="p-2 register-btn rounded-2">Registrar</button>                        
                        </div>
                    </form>
                    <div id="grid" class="col-md-7 p-0 m-0 grid-collage">
                        <img src="./images/pack.jpg"  width="100%" height="100%" alt="">
                        <img src="./images/vertical-pack.png"  alt="">
                        <img src="./images/horizontal-pack.png" width="100%" height="100%"   alt="">
                    </div>
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