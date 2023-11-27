<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadAdministrador.php");
require_once("../../Controllers/mostrarInfoAdmin.php");

$objecto_consulta = new Consultas();
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
    <!-- Bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Chartist -->
    <link href="../Dashboard/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Common -->
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
</head>

<body>

    <?php
    include 'menu-include.php';


    $result = cargarInfoAdmin();
    if (!empty($result)) {
        // Asegúrate de iniciar la sesión
    
        $sesionId = $_SESSION['id']; // Obtén el ID del usuario que ha iniciado sesión
    
        $usuarioEnSesion = null;
        // Busca el usuario actual en el array de resultados
        foreach ($result as $usuario) {
            if ($usuario['identificacion'] == $sesionId) {
                $usuarioEnSesion = $usuario;
                break;
            }
        }
        if ($usuarioEnSesion !== null) {
            $nombres = $usuarioEnSesion['nombres'];
        }
    }
    ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid" style="height: 100%">
                <div class="row">
                    <div class="col-xl-8 p-r-3 title-margin-right ">
                        <div>
                            <div class="mt-4 ml-3">
                                <h1 class="animate__animated animate__fadeInLeft msg_bienvenido" style="color: #232020">
                                    Hola
                                    <?php echo $nombres;
                                    ?>,<span style="color: #ff914d"> bienvenido</span>
                                </h1>
                            </div>
                        </div>
                        <div>
                            <p class="msg_intro">Aquí, tienes acceso a las
                                funciones necesarias para gestionar el lugar. Desde la coordinación de eventos hasta el
                                manejo de solicitudes de mantenimiento, esta plataforma está diseñada para hacer tu
                                trabajo más fácil. Mantente informado, gestiona eficientemente y haz que las cosas
                                funcionen sin complicaciones. Estamos encantados de tenerte aquí, y confiamos en que
                                esta herramienta facilitará la administración para crear un entorno residencial aún más
                                acogedor.</p>
                        </div>
                        <div class="">
                            <img src="../../assets/img/home.svg" alt="" height="450px" width="100%" class="img_home">
                        </div>
                    </div>


                    <div class="col-xl-4 ctn-etts" style="background-color: #f2f2f2">
                        <h2 class="msg_bienvenido ettc">Estadísticas del sistema</h2>
                        <div class="row fila_etts">
                            <div class="col-md-6 col-xl-8 ctn_datos">
                                <div style="border-radius: 35px; border-color:transparent" class="card p-2">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-car color-success border-success"></i>
                                        </div>
                                        <div class="dib ml-2">
                                            <div class="stat-text">
                                                <h3 class="ttl_datos">N° de Vehiculos</h3>
                                            </div>
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
                            <br>


                            <div class="col-md-6 col-xl-8 animate__animated animate__fadeIn animate__slow ctn_datos"
                                style="display:block">
                                <div style="border-radius: 35px; border-color:transparent" class="card p-2">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                        </div>
                                        <div class="dib ml-2">
                                            <div class="stat-text">
                                                <h3 class="ttl_datos">N° Usuarios</h3>
                                            </div>
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
                            <br>

                            <div class="col-md-6 col-xl-8 animate__animated animate__fadeIn animate__slow ctn_datos">
                                <div style="border-radius: 35px; border-color:transparent" class="card p-2">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-calendar color-pink border-pink"></i>
                                        </div>
                                        <div class="dib ml-2">
                                            <div class="stat-text">
                                                <h3 class="ttl_datos ttl_reservas">N° de Reservas de Salón</h3>
                                            </div>
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
                            <br>

                            <div class="col-md-6 col-xl-8 animate__animated animate__fadeIn animate__slow ctn_datos">
                                <div style="border-radius: 35px; border-color:transparent" class="card p-2">
                                    <div class="stat-widget-one">

                                        <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i>
                                        </div>
                                        <div class="dib ml-2">
                                            <div class="stat-text">
                                                <h3 class="ttl_datos"">N° de Peticiones</h3>
                                        </div>
                                        <div class=" stat-digit">18
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>
    </div>
    </div>

    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <!-- Bootstrap v5 JS (Bundle incluye Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../Dashboard/js/scripts.js"></script>

</body>

</html>