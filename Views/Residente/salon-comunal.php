<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadResidente.php");


?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servi - Apart</title>
    <link href="../../assets/css/style.css" rel="stylesheet">

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="../dashboard/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet"> <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="../../assets/css/pack-styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">

    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <style>
        /* Estilo para la sección principal */
        /* #main-content {
            padding: 20px;
        }

        .year-calendar {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }

        form {
            border-radius: 5px;
            padding: 20px;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .form-floating input[type="number"],
        .form-floating input[type="date"],
        .form-floating input[type="time"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-floating label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 7px;
            pointer-events: none;
            transition: 0.3s;
        }

        .form-floating input:focus~label {
            top: -20px;
            background-color: #fff;
            color: #333;
        }

        #dia_reserva:read-only {
            background-color: #fff;
        } */
    </style>
</head>

<body>

    <?php
    include '../../components/menu.php';
    include '../../components/headerInclude.php';

    require '../../Controllers/mostrarInfoResidente.php';




    $result = cargarInfoUsuarios();

    if (!empty($result)) {
        // Asegúrate de iniciar la sesión
    
        $sesionId = $_SESSION['id']; // Obtén el ID del usuario que ha iniciado sesión
    ?> <div class="ms-5"> <?php echo $sesionId; ?></div> <?php 
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
            $apellidos = $usuarioEnSesion['apellidos'];

            ?>
            <!-- /# sidebar -->
            <div class="content-wrap">
                <div class="main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 p-r-0 title-margin-right">
                                <div class="page-header">
                                    <div class="page-title">
                                        <h1 style="font-size: 36px;">Bienvenido,
                                            <?php
                                            echo $nombres . ' ' . $apellidos;
                                            ?>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } else {
            echo '<h2> El usuario de la sesión no se encontró en los resultados.</h2>';
        }
    } else {
        echo '<h2> NO HAY USUARIOS REGISTRADOS </h2>';
    }
    ?>

    <div class="d-flex justify-content-center">
        <h4 class="mx-auto">Reserva Tu Dia</h4>
    </div>


    <section id="main-content">
        <div class="row">
           <!--  <div class="container-fluid"> -->
                <div class="col-md-6 ozuna">
                    <div class="card" style="box-shadow: 1px 6px 14px 3px rgba(0,0,0,0.18);
                                -webkit-box-shadow: 1px 6px 14px 3px rgba(0,0,0,0.18);
                                -moz-box-shadow: 1px 6px 14px 3px rgba(0,0,0,0.18);">

                        <!-- <div class="card-body"> -->
                        <div class="year-calendar">
                            <div id="detalles-reservacion">
                            </div>
                        </div>

                    </div>
                </div>
           <!--  </div> -->
            <!-- no borrar esos div de arriba -->
            <!-- Aquí se mostrarán los detalles de la reserva seleccionada -->
<!--             <div class="container-fluid">
 -->                <div class="col-md-6 adi ">
                    <form action="../../Controllers/registrarDiaSC.php?id=<?php echo $sesionId?>" class="pack-form adidas"
                        method="post" autocomplete="off">
                        <div class="row g-2">


                            <div class="col-md-6">
                                <div class="d-flex flex-column col-md-6">
                                    <label for=""><b>Día de Reserva</b></label>
                                    <input type="date" class="py-2 input  " id="dia_reserva" name="dia_reserva" readonly
                                        required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column col-md-6">
                                    <label for=""><b>Hora de Inicio</b></label>
                                    <input type="time" class="py-2 input " id="hora_inicio" name="hora_inicio" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column col-md-6">
                                    <label for=""><b>Hora de Finalización</b></label>
                                    <input type="time" class="py-2 input " id="hora_finalizacion"
                                        name="hora_finalizacion" value="03:00:00" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column col-md-6">
                                    <label for=""><b>Mesas</b></label>
                                    <input type="number" class="py-2 input " id="mesas" name="mesas" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column col-md-6">
                                    <label for=""><b>Sillas</b></label>
                                    <input type="number" class="py-2 input " id="sillas" name="sillas" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column col-md-6">
                                    <label for="" class="form-label"><b>Tipo de evento</b></label>
                                    <select name="tipo_evento" id="disabledSelect" class="py-2 input ">
                                        <option value="" selected></option>
                                        <option value="cumpleaños">Fiesta de cumpleaños</option>
                                        <option value="arte">Matrimonio</option>
                                        <option value="arte">Primera comunion</option>
                                        <option value="comunitaria">Reunión comunitaria</option>
                                        <option value="shower">Baby shower</option>
                                        <option value="benefico">Evento benéfico</option>
                                        <option value="teatral">Presentación teatral</option>
                                        <option value="fin_año">Fiesta de fin de año</option>
                                        <option value="aniversario">Fiesta de aniversario</option>
                                        <option value="arte">Taller de arte</option>
                                        <option value="reu_corporativa">Reunión corporativa</option>
                                        <option value="expo_artesanias">Exposición de artesanías</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success face">Enviar</button>
                            </div>
                        </div>

                </div>
            <!-- </div> -->


        </div>
        </div>
        </div>
        </form>
        </div>

        </div>
        </div>
        </div>
        <!-- /# card -->
        </div>
        <!-- /# column -->
        </div>

        <!-- /# row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="footer">
                    <p>2018 © Admin Board. - <a href="#">example.com</a></p>
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
    <!-- jquery vendor -->
    <script src="../dashboard/js/lib/jquery.min.js"></script>
    <script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../dashboard/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>



    <script src="../dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="../dashboard/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="../dashboard/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="../dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="../dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="../dashboard/js/lib/calendar-2/pignose.init.js"></script>


    <!-- scripit init-->
    <script src="../dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../dashboard/js/scripts.js"></script>
    <!-- scripit init-->

    <!-- js del salon comunal -->
    <script src="../client-site/assets/js/salon-comunal.js"></script>

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

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>


</body>

</html>