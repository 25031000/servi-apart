<?php
// Enlazamos las dependencias necesario
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadAdministrador.php");
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

    <!-- Common -->
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link rel="stylesheet" href="../client-site/assets/css/admin.css">

    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
</head>

<body>
    <?php
    include 'menu-include.php';
    ?>



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 style="font-size:40px">Modificar Información de Usuarios</h1>
                                <p style="font-size:15px; margin-top: 10px">
                                    En este módulo, tienes el control total para editar y mantener actualizados los
                                    registros de los usuarios creados. Puedes modificar detalles como nombre, apellido,
                                    correo electrónico, entre otros, asegurando así que los datos
                                    de los usuarios sean precisos y seguros.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="" style="color: #18d26e">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Editar Usuarios</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">

                    <div class="row d-flex align-items-center">
                        <div class="col-lg-5 d-flex justify-content-center">
                            <img src="../../assets/img/user-edit.svg" alt="imagen de carro" style="width:70%">
                        </div>
                        <div class="col-lg-7">
                            <div class="card " style="border:none">
                                <div class="card-title">


                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <?php
                                        cargarUsuarioEditar();
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



    <script src="../../assets/js/rol.js"></script>

    <!-- Common -->
    <script src="../dashboard/js/lib/jquery.min.js"></script>
    <script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../dashboard/js/scripts.js"></script>

</body>

</html>