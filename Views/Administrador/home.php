<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadAdministrador.php");
    require_once ("../../Controllers/mostrarInfoAdmin.php");

    $objecto_consulta = new Consultas(); 
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
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Chartist -->
    <link href="../Dashboard/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Common -->
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
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
                                <h1 class="animate__animated animate__fadeInLeft" style="font-size: 4rem; color: #232020;" >Hola,
                                    <span style="color: #ff914d; font-size: 4rem;">Bienvenido</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3 animate__animated animate__fadeIn animate__slow">
                            <div style="border-radius: 40px;" class="card p-2">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-car color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">N° de Vehiculos</div>
                                        <div class="stat-digit">
                                            <?php  
                                                $count = $objecto_consulta->registerCounter('vehiculo', 'identificacion');
                                                echo $count;                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 animate__animated animate__fadeIn animate__slow">
                            <div style="border-radius: 40px;" class="card p-2">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">N° Usuarios</div>
                                        <div class="stat-digit">
                                            <?php  
                                                $count = $objecto_consulta->registerCounter('usuarios', 'identificacion');
                                                echo $count;                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 animate__animated animate__fadeIn animate__slow">
                            <div style="border-radius: 40px;" class="card p-2">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-calendar color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Reservas de salon activas</div>
                                        <div class="stat-digit">
                                            <?php  
                                                $count = $objecto_consulta->registerCounter('reserva_salon', 'id_reserva');
                                                echo $count;                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 animate__animated animate__fadeIn animate__slow">
                            <div style="border-radius: 40px;" class="card p-2">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">N° de Peticiones</div>
                                        <div class="stat-digit">18</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 animate__animated animate__fadeIn animate__slow">
                            <div style="border-radius: 10px; padding: 30px;" class="card">
                                <div class="card-title">
                                    <h4>Promedio de usuarios nuevos</h4>

                                </div>
                                <div class="card-body">
                                    <div class="ct-bar-chart m-t-30"></div>
                                </div>
                            </div>
                        </div>

                       
                    </div>



                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2023 © Admin Board. - <a href="#">Servi-Apart.</a></p>
                            </div>
                        </div>
                    </div>
                </section>
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

    <!--  Chartist -->
    <script src="../Dashboard/js/lib/chartist/chartist.min.js"></script>
    <script src="../Dashboard/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>

    <!--  Dashboard 1 -->
    <script src="../Dashboard/js/dashboard2.js"></script>

</body>

</html>