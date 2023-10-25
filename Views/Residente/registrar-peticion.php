<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadResidente.php");
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
    <link rel="stylesheet" href="../../assets/css/peticiones-styles.css">
    <title>Peticiones</title>
</head>

<body>
    <?php
    include 'menu-include-residente.php';
    ?>

    <div class="content-wrap">
        <div class="main">
        <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header ms-4">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e !important;">
                                    <img src="../../assets/icons/box-pack.png" alt="">
                                </div>
                                <h1 style="font-size: 1.7em;" class="ms-4">Registro de Peticiones</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: #18d26e">Residente</a>
                                    </li>
                                    <li class="breadcrumb-item active">Registro de peticiones</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- main content -->
         <div class="container">
            <div class="pt-3 ">
                <main class="w-100 row px-5 gap-4 flex-nowrap contenedor align-items-center py-4">
                <div class="col-md-4 circulos">
                       <article class="circulo1"></article>
                       <article class="circulo2"></article>
                       <article class="circulo3"></article>
                       <article class="circulo4"></article>
                       <article class="circulo5"></article>
                    </div>
                    <form action="../../Controllers/registrarPeticion.php" class="col-md-8 p-5 pack-form formulario h-75" method="post">
                    <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.7em;">Registrar peticion</h2>
                        </div>  

                        <div class="d-flex flex-column mb-3">
                            <label for="" class="py-2">Nombre</label>
                            <input type="text" name="torre" placeholder="" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column mb-3">
                            <label for="" class="py-2">Título</label>
                            <input type="text" name="apartamento" placeholder="Título" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column mb-4">
                            <label for="" class="py-2">Descripción</label>
                            <input type="text" name="remitente" placeholder="Descripción de la solicitud" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column  mt-3">
                            <button class="p-2 register-btn boton-registro rounded-2">Registrar</button>                        
                        </div>
                    </form>
                 
                </main>
            </div>
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