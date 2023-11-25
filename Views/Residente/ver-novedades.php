<?php

require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadResidente.php");
require_once("../../Controllers/mostrarInfoResidente.php");


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
    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
</head>

<body style="height:1200px" class="container-fluid p-0">

    <?php
    include '../../components/menu.php';
    include '../../components/headerInclude.php';


    ?>

    <style>
        .swal-title {
            padding: 0;
        }
        .swal-wide-popup {
            width: 650px;
            /* Ajusta este valor según tus necesidades */
        }
    </style>




    <div class="content-wrap">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 id="tl_v_vehiculos">Novedades</h1>
                                <p>Como residente y propietario, accede al historial de novedades de tus vehículos
                                    realizadas por el
                                    personal de seguridad de nuestro conjunto</p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: #18d26e">Residente</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ver novedades</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content" class="lista_vehiculos" style="padding: 20px 0; margin-left:15px">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card vehiculos_ver" style="width:100%">
                                <div class="card-body card-ver">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr class="filas_vehiculos">
                                                    <th style="font-size:17px">Placa</th>
                                                    <th style="font-size:17px">Descripción de novedad</th>
                                                    <th style="font-size:17px">Fecha Revisión</th>
                                                    <th style="font-size:17px">Identificación guarda</th>
                                                    <th style="font-size:17px; text-align: center">Guarda encargado(a)</th>
                                                    <th style="font-size:17px; text-align: center">Ver Foto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $arreglo = cargarNovedadesResidente();

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- /# column -->


                        <!-- /# column -->
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




    <!-- <script>
    var foto = document.getElementById("fotoReporte")
    setTimeout(function(){
        foto.src="../../Uploads/novedades/2019-10-10-para-quitar-los-rayones-en-la-moto-01.jpg  "
    },500 )
</script> -->

    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../Dashboard/js/scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


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