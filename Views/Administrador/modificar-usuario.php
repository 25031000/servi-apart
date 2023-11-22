<?php
    // Enlazamos las dependencias necesario
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

    <title>Servia_Apart</title>

    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">

    <!-- Common -->
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../client-site/assets/css/admin.css">
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
                                <h1>Modificar Información de usuarios
                                </h1>
                                <p>Por favor edita los campos para actualizar la información de un usuario.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">UI-Blak</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="card">
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

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer">
                                    <p>2023 © Admin Board. - <a href="#">Servi - Apart</a></p>
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