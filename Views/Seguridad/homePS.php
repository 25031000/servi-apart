<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadPS.php");
require_once("../../Controllers/mostrarInfoAdmin.php");
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

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom styles -->
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">

    <!-- estilos seguridad home -->
    <link rel="stylesheet" href="../Seguridad/css/home.css">

    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">


</head>

<body>

    <?php
    include '../../components/menuPS.php';
    include '../../components/headerIncludePS.php';
    ?>

    <main id="dash" class="container position-relative">
        <div class="w-100 mt-5">
            <h2 style="font-size: 2.5rem; letter-spacing: 5px" class="text-center ">Personal de seguridad</h2>
            <p class="text-center" style="font-family: 'Roboto', sans-serif !important; font-weight: 300 !important;">Navega entre los distintos modulos en base a las actividades que necesisas realizar</p>
        </div>
        <section class="grid  mx-auto mt-5" style="height: 670px;">
            <div class="rounded-4 position-relative d-flex flex-column justify-content-center">
                <h2 class="ps-4">Vehiculos</h2>
                <p class="ps-4">Manten un registro minusioso de los vehiculos que se encuentran en la propiedad y controla su estado de una manera rapida</p>
                <span role="button" class="p-1 position-relative rounded-5 justify-content-center align-items-center ms-4 d-flex " style="width: 50px; height:50px; top: 30px; background: #FFA031">
                    <img src="./images/Next.png" alt="">
                </span>
                <img src="./images/carro.png" class="position-absolute" alt="">
            </div>
            <div class="rounded-4 position-relative d-flex flex-column justify-content-center">
                <h2 class="ps-4">Salon comunal</h2>
                <p class="ps-4">Mantente al tanto de que personas estan utilizando el salon comunal y cuales son sus horarios.</p>
                <span role="button" class="p-1 position-relative rounded-5 justify-content-center align-items-center ms-4 d-flex " style="width: 50px; height:50px; top: 30px; background: #05EB00">
                    <img src="./images/Next.png" alt="">
                </span>
                <img src="./images/calendar.png" style="width: 158px;" class="position-absolute" alt="">
            </div>
            <div class="rounded-4 position-relative d-flex flex-column justify-content-center">
                <h2 class="ps-4">Paqueteria</h2>
                <p class="ps-4">Registra cada paquete que llegue a porteria y hazle saber a los residentes su llegada.</p>
                <span role="button" class="p-1 position-relative rounded-5 justify-content-center align-items-center ms-4 d-flex " style="width: 50px; height:50px; top: 30px; background: #7D68FF">
               
                <a href="paqueteria.php"> 
                <img src="./images/Next.png" alt="">
                </a>
                </span>
                <img src="./images/paquete.png" style="width: 158px;" class="position-absolute" alt="">
            </div>
            <div class="rounded-4 position-relative d-flex flex-column justify-content-center">
                <h2 class="ps-4">Publicaciones</h2>
                <p class="ps-4">Visualiza las publicaciones que la administracion realiza para mantenerte al dia.</p>
                <span role="button" class="p-1 position-relative rounded-5 justify-content-center align-items-center ms-4 d-flex " style="width: 50px; height:50px; top: 30px; background: #2FA3FF">
                <a href="ver-publicaciones.php"> 
                <img src="./images/Next.png" alt="">
                </a>
                </span>
                <img src="./images/bocina.png" style="width: 158px;" class="position-absolute" alt="">
              
            </div>
        </section>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>



    <script src="../Dashboard/js/scripts.js"></script>

</body>

</html>