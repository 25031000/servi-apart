<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadResidente.php");
    require_once ("../../Controllers/mostrarInfoResidente.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
        <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">
    
    <link rel="stylesheet" href="../Residente/css/home.css">
    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
    
    
  
</head>

<body style="font-family: 'Varela Round', sans-serif !important; " >

<?php
    include '../../components/menu.php';
    include '../../components/headerInclude.php';
?>






    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 id="publi-title">Publicaciones Creadas</h1>
                                <p id="text-title">mostramos las tres publicaciones más recientes que han sido registradas en nuestro módulo </p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href=""  style="color: #18d26e">Residente</a>
                                    </li>
                                    <li class="breadcrumb-item active">Publicaciones Creadas</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                </div>

                     
                <section class="publi-grid row ps-2" id="publi-cars">
                    <?php
                        cargarPublicacionesRes();
                    ?>
                    
                </section>
                 <a href="ver-publicaciones.php">
                <button type="submit" class="bot-btn" style="margin-left: 650px; margin-top: -40px">ver todas las publicaciones </button> </a>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2023 © Admin Board. - <a href="#">Servi-Apart.</a></p>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>


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
    <!-- Common -->

    

</body>

</html>