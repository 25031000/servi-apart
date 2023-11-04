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

    <title>Paqueteria</title>


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom styles -->
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">


    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">


</head>

<body>

    <?php
    include '../../components/menu.php';
    include '../../components/headerIncludePS.php';
?>

    <div class="content-wrap mt-4">
        <div class="main">
            <div class="row justify-content-between">
                <div class="col-lg-8 p-r-0 title-margin-right align-items-center">
                    <div class="page-header ms-4 ">
                        <div class="page-title d-flex ms-3 r align-items-center">
                            <div class="icon-content p-2 rounded-circle" style="background-color: #18d26e !important;">
                                <img src="../../assets/icons/box-pack.png" alt="">
                            </div>
                            <h1 style="font-size: 1.7em;" class="ms-4  my-auto">Registro de paqueteria</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left  d-flex align-items-center justify-content-center">
                    <div class="page-header d-flex align-items-center ">
                        <div class="page-title  " style="display: flex; align-items: center !important;">
                            <ol class="breadcrumb  m-0">
                                <li class="breadcrumb-item">
                                    <a href="#" style="color: #18d26e">Residente</a>
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
                <main class="w-100 row px-5 gap-4 flex-nowrap align-items-center py-4">
                    <form action="../../Controllers/registrarPaquete.php" class="col-md-5 p-5 pack-form-ps h-75"
                        method="post">
                        <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.7em;">Registrar paquete</h2>
                        </div>

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
                            <button class="p-2 register-btn border border-none rounded-2">Registrar</button>
                        </div>
                    </form>
                    <div id="grid" class="col-md-7 p-0 m-0 grid-collage-ps">
                        <img src="./images/pack.jpg" width="100%" height="100%" alt="">
                        <img src="./images/vertical-pack.png" alt="">
                        <img src="./images/horizontal-pack.png" width="100%" height="100%" alt="">
                    </div>
                </main>
            </div>
        </div>
    </div>
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
    <script src="../Dashboard/js/scripts.js"></script>

<<<<<<< HEAD
=======
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    

    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>


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
>>>>>>> 1adf09d89b9083757725e08947c8442eb98fab24
</body>

</html>