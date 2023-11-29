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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
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

    <div class="row conatiner">

        <h4 class="col-md-12" style="margin-top:35px; font-size:28px; text-align:center">Reserva Salón Comunal</h4>
        <p class="col-md-12" style="font-size:14px; text-align:center">¡Reserva fácilmente nuestro salón comunal para
            tus eventos y reuniones. Simplificamos el proceso para que
            disfrutes de un espacio conveniente y cómodo. ¡Aprovecha al máximo tu experiencia residencial!</p>
    </div>


    <section class="main-content container justify-content-center align-items-center resposive" style="padding: 40px">
        <div class="row">

            <div class="col-md-6 ozuna" style="margin-left:-20px">
                <div class="row">
                    <div class="card" style="box-shadow: 1px 6px 14px 3px rgba(0,0,0,0.18);
                                -webkit-box-shadow: 1px 6px 14px 3px rgba(0,0,0,0.18);
                                -moz-box-shadow: 1px 6px 14px 3px rgba(0,0,0,0.18);">

                        <!-- <div class="card-body"> -->
                        <div class="year-calendar">
                            <div id="detalles-reservacion">
                            </div>
                        </div>

                    </div>



                    <div class="  d-grid gap-2 col-6 w-100" style="margin-top: 50px;">
                        <a href="ver-reservaRes.php?id=<?php echo $sesionId ?>" class="btn btn-dark">Ver
                            Reservas Hechas</a>
                    </div>
                </div>
            </div>
            <!--  <div class="container-fluid"> -->


            <!--  </div> -->
            <!-- no borrar esos div de arriba -->
            <!-- Aquí se mostrarán los detalles de la reserva seleccionada -->
            <!--             <div class="container-fluid">-->
            <div class="col-md-6">
                <form action="../../Controllers/registrarDiaSC.php?id=<?php echo $sesionId ?>"
                    class="p-5 pack-form ml-4" method="post" autocomplete="off">


                    <div class="row ">
                        <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.7em;">Reserva tu Evento</h2>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Fecha</label>
                            <input type="date" class="rounded-3 input mi-input" style="width:100%" id="dia_reserva"
                                name="dia_reserva" readonly required>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="">Hora de Inicio</label>
                            <input type="time" class="rounded-3 input mi-input" style="width:100%" id="hora_inicio"
                                name="hora_inicio" required>
                        </div>




                        <div class="form-group  col-md-6">
                            <label for="">Hora de Finalización</label>
                            <input type="time" class="rounded-3 input mi-input" style="width:100%"
                                id="hora_finalizacion" name="hora_finalizacion"  required>
                        </div>


                        <div class="form-group  col-md-6">
                            <label for="">Mesas</label>
                            <input type="number" class="rounded-3 input mi-input" style="width:100%" id="mesas"
                                name="mesas" required>
                        </div>



                        <div class="form-group col-md-6">
                            <label for="">Sillas</label>
                            <input type="number" class="rounded-3 input mi-input" style="width:100%" id="sillas"
                                name="sillas" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Tipo de evento</label>
                            <select name="tipo_evento" id="disabledSelect" class="rounded-3 input" style="width:100%">
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
                        <div class="d-flex flex-column  mt-3">
                        <button class="boton-btn">Reservar</button>
                    </div>
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