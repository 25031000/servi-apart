<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadPS.php");
    require_once ("../../Controllers/mostrarInfoAdmin.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <!-- <link href="../../assets/css/style.css" rel="stylesheet"> -->

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
    include '../../components/menu.php';
    include '../../components/headerInclude.php';
?>
    <div class="custom-mouse d-flex justify-content-center align-items-center">
        <span class="text-black fw-bolder clicki">CLICK</span>
    </div>


    <main id="dash-container" class="container-fluid position-relative">
        <section class="mt-5">
            <div class="portada text-center d-flex align-items-center justify-content-center">
                <h3 class="seguridad-titulo text-center w-100">SEGURIDAD</h3>
            </div>
        </section>
        <section class="mt-5 pt-5">
            <div class="row px-3   justify-content-center gap-5">
                <section role="button" class="col-md-5 module  p-0  d-flex flex-column justify-content-center ">
                    <div class="">
                        <img class="w-100  rounded-top img-module h-100" src="./images/estacionamiento.jpg" alt="">
                    </div>
                    <div class="border text-center  align-items-center fs-3 d-flex  rounded-bottom py-3">
                        <p class="  p-0  w-100 mb-0">Vehiculos</p>

                    </div>
                </section>
                <section role="button" class="col-md-5 module  p-0 d-flex flex-column ">
                    <div class="m-0">
                        <img class="w-100  rounded-top img-module h-100" src="./images/paqueteria.jpg" alt="">
                    </div>
                    <div class="border  text-center align-items-center  fs-3 d-flex rounded-bottom m-0  py-3">
                        <p class=" p-0  w-100 mb-0">Paqueteria</p>

                    </div>
                </section>

            </div>
            <div class="row px-3 mt-5 justify-content-center gap-5">
                <section role="button" class="col-md-5 module  p-0 d-flex flex-column justify-content-center ">
                    <div class="">
                        <img class="w-100  rounded-top img-module h-100" src="./images/saloncomunal.jpg" alt="">
                    </div>
                    <div class="border text-center  align-items-center fs-3 d-flex  rounded-bottom py-3">
                        <p class="  p-0  w-100 mb-0">Salon comunal</p>

                    </div>
                </section>


                <section role="button" class="col-md-5 module   p-0 d-flex flex-column ">
                    <div class="">
                        <a href="ver-publicaciones.php">
                            <img class="w-100  rounded-top img-module h-100" src="./images/publicaciones.jpg" alt="">
                    </div>
                    <div class="border  text-center align-items-center  fs-3 d-flex rounded-bottom  py-3">
                        <p class=" p-0  w-100 mb-0">Publicaciones</p> </a>

                    </div>
                </section>
            </div>
        </section>
    </main>
    <footer class=" border container-fluid py-3 mt-5 bg-light">
        <div class="w-100">
            <p>2023 © Admin Board. - <a href="#">Servi-Apart.</a></p>
        </div>
    </footer>





    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>


    <script>
        document.addEventListener("mousemove", (e) => {
            let mouseX = e.clientX;
            let mouseY = e.clientY;

            $('.custom-mouse').css({
                transform: `translate(${mouseX}px, ${mouseY}px)`,
            })
        })

        $('.img-module').mouseover((e) => {
            $('.custom-mouse').css({
                opacity: 1
            })
        })

        $('.img-module').mouseleave((e) => {
            $('.custom-mouse').css({
                opacity: 0
            })
        })



    </script>
    <script src="../Dashboard/js/scripts.js"></script>
   
</body>

</html>