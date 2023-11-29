<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadAdministrador.php");
    require_once ("../../Controllers/mostrarInfoAdmin.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servi - Apart</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">

    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="../../assets/css/vehiculo-styles.css" rel="stylesheet">
    <link href="../client-site/assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
    
    
</head>

<body>

<?php
    include 'menu-include.php';
?>
    <!-- /# sidebar -->



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 style="font-size:24px">
                                    Datos de tu cuenta
                                </h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <!-- <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                
                            </div>
                        </div>
                    </div> -->
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                


                <?php

                    perfilEditar();

                ?>








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



</body>

</html>