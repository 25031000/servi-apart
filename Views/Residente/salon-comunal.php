<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadResidente.php");

$sesionId = $_SESSION['id'];


?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servi - Apart</title>

    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="../../assets/css/pack-styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">
    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <!--     <link rel="stylesheet" href="./css/paqueteria.css"> -->
    <style>


    </style>
</head>

<body>

    <?php
    include '../../components/menu.php';
    include '../../components/headerInclude.php';

    require '../../Controllers/mostrarInfoResidente.php';




    $result = cargarInfoUsuarios();

    /*  */
    ?>

    <div class="d-flex justify-content-center">
        <h4 class="mx-auto" style="margin-top:35px">Reserva Tu Dia</h4>
    </div>


    <section class=" main-content justify-content-center align-items-center resposive" style="padding: 40px">
        <div class="row">
            <!--  <div class="container-fluid"> -->
            <div class="col-md-6 ozuna" style="width:500px; margin-left:400px;">
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
 -->
            <div class="col-md-6 blees" style="width:500px">
                <form action="../../Controllers/registrarDiaSC.php?id=<?php echo $sesionId ?>" class="pack-form center adidas" method="post" autocomplete="off">

                    <div class="row ">
                        <div class="col-md">
                            <div class="d-flex flex-column col-md">
                                <label for="" class="horai"><b>Día de Reserva</b></label>
                                <input type="date" class="py-2 input  " id="dia_reserva" name="dia_reserva" readonly required>
                            </div>
                        </div>


                        <div class="col-md">
                            <div class="d-flex flex-column col-md">
                                <label for="" class="horai"><b>Hora de Inicio</b></label>
                                <input type="time" class="py-2 input  " id="hora_inicio" name="hora_inicio" required>

                            </div>
                        </div>
                    </div>



                    <div class="row ">
                        <div class="col-md">
                            <div class="d-flex flex-column col-md">
                                <label for="" class="horai"><b>Hora de Finalización</b></label>
                                <input type="time" class="py-2 input  " id="hora_finalizacion" name="hora_finalizacion" value="03:00:00" required>

                            </div>
                        </div>


                        <div class="col-md">
                            <div class="d-flex flex-column col-md">
                                <label for="" class="horai"><b>Mesas</b></label>
                                <input type="number" class="py-2 input  " id="mesas" name="mesas" required>

                            </div>
                        </div>
                    </div>



                    <div class="row ">
                        <div class="col-md-6">
                            <div class="d-flex flex-column col-md">
                                <label for="" class="horai"><b>Sillas</b></label>
                                <input type="number" class="py-2 input  " id="sillas" name="sillas" required>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column col-md">
                                <label for="" class="form-label horai"><b>Tipo de evento</b></label>
                                <select name="tipo_evento" id="disabledSelect" class="py-2 input ">
                                    <option value="" selected></option>
                                    <option value="Fiesta de cumpleaños">Fiesta de cumpleaños</option>
                                    <option value="Matrimonio">Matrimonio</option>
                                    <option value="Primera comunion">Primera comunion</option>
                                    <option value="Reunion comunitaria">Reunión comunitaria</option>
                                    <option value="Baby shower">Baby shower</option>
                                    <option value="Evento benefico">Evento benéfico</option>
                                    <option value="Presentacion teatral">Presentación teatral</option>
                                    <option value="Fiesta fin deaño">Fiesta fin de año</option>
                                    <option value="Aniversario">Fiesta de aniversario</option>
                                    <option value="Taller de arte">Taller de arte</option>
                                    <option value="Reunion corporativa">Reunión corporativa</option>
                                    <option value="Expocion artesanias">Exposición de artesanías</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success face" style="margin-top:10px">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- </div> -->


        </div>
        </div>
        </div>

        </div>

        </div>
        </div>
        </div>
        <!-- /# card -->
        </div>
        <!-- /# column -->
        </div>
        <section>
            <div class="  d-grid gap-2 col-6 mx-auto  bzrp " style="margin-top: 50px; ">
                <a href="ver-reservaRes.php?id=<?php echo $sesionId ?>" class="btn btn-secondary bzrp">Ver Reserva</a>
            </div>
        </section>

        <!-- /# row -->

        <!--   <div class="row">
            <div class="col-lg-12">
                <div class="footer">
                    <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                </div>
            </div>
        </div> -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>



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
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>


</body>

</html>