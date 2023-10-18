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
            <div class="col-lg-12 w-100 p-l-0 title-margin-left ">
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
            <div class="  px-0 mt-5">
                <div class="mb-5 d-flex text-center border  w-100 "> 
                    <h2>Paqueteria</h2>
                 </div>
                <main class="  main-content h-auto d-flex border justify-content-center">
                        <form class="  m-0 p-5 d-flex flex-column form-pack  " action="../../Controllers/registrarPaquete.php" method="post">
                            <div class="mb-5 d-flex  w-100 justify-content-around">                                
                                <input type="text" placeholder="~ Apartamento" class="py-3 border-none ps-3 input" name="apartamento">
                            </div>
                            <div class="mb-5 d-flex  w-100 justify-content-around">                                
                                <input type="text" placeholder="~ Torre" class="py-3 border-none input ps-3" name="torre">
                               
                            </div>
                            <div class="mb-5 d-flex  w-100 justify-content-around">
                                <input type="text" placeholder="~ Remitente" class="py-3 border-none ps-3 input" name="remitente">
                            </div>
                            <div class="mb-5 d-flex  w-100 justify-content-around">
                                <button id="btn-signup" type="submit" class="w-25 py-3">Registrar</button>
                            </div>
                        </form>
                        <div class="content-img d-none  d-md-flex align-items-center justify-content-center">
                            <img class="w-100 h-100" src="../Administrador/images/pack.jpg" alt="">
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