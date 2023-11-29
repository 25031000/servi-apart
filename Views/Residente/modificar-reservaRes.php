<?php
// Enlazamos las dependencias necesario
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadResidente.php");
require_once("../../Controllers/mostrarInfoAdmin.php");
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

    <!-- Sweet Alert -->
    <link href="../dashboard/css/lib/sweetalert/sweetalert.css" rel="stylesheet">

    <!-- Common -->
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../client-site/assets/css/admin.css">
    <link href="../../assets/css/pack-styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">
    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">

    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">


</head>



<?php
include '../../components/menu.php';
include '../../components/headerInclude.php';

require '../../Controllers/mostrarInfoResidente.php';
?>

<div class="content-wrap container">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1 style="font-size:30px">Modificar Información de las Reservaciones
                            </h1>
                            <p style="font-size:15px; margin-top: 10px">En este módulo, puedes ajustar tus eventos
                                en el salón comunal de manera sencilla y conveniente. Personaliza tus reservas desde
                                cualquier lugar, adaptando los detalles según tus necesidades.</p>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="" style="color: #18d26e">Residente</a>
                                </li>
                                <li class="breadcrumb-item active">Modificar Reservas</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">

                <div class="row">
                    <div class="col-lg-5" style="display: flex;align-items: center;">
                        <img src="../../assets/img/salon_edit.svg" alt="" style="width:100%">
                    </div>
                    <div class="col-lg-7">
                        <div class="card vehiculos_ver mt-4" style="border:none">
                            <div class="card-body">
                                <div class="basic-elements">
                                    <?php
                                    modificarReservaRes();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
        </div>
    </div>
</div>




<!-- Common -->
<script src="../dashboard/js/lib/jquery.min.js"></script>
<script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
<script src="../dashboard/js/lib/menubar/sidebar.js"></script>
<script src="../dashboard/js/lib/preloader/pace.min.js"></script>
<script src="../dashboard/js/lib/bootstrap.min.js"></script>
<script src="../dashboard/js/scripts.js"></script>

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