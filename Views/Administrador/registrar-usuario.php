<?php
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
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
            <div class="container-fluid mt-0">
                <div class="row" style="margin: 0 120px">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e !important;">
                                    <img style="width: 40px; height: 40px;" src="../../assets/icons/usuario.png" alt="">
                                </div>
                                <h1 style="font-size: 1.5rem;" class="ms-4">Registro de usuario</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: #18d26e">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Registro de Usuario</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-10 container p-4 ">
                            <div class="card p-5 border border-light pack-form">
                                <form action="../../Controllers/registrarUserAdmin.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Identificación:</label>
                                            <input type="number" class="rounded-3 input" style="width:100%"
                                                placeholder="Ej: 23554535354" name="identificacion">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tipo de Documento:</label>
                                            <select name="tipo_doc" id="" class="input rounded-3" style="width:100%">
                                                <option value="CC">Seleccione una opcion</option>
                                                <option value="CC">CC</option>
                                                <option value="CE">CE</option>
                                                <option value="PASAPORTE">PASAPORTE</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nombres:</label>
                                            <input type="text" class="rounded-3 input" style="width:100%" placeholder="Ej: Miguel Angel"
                                                name="nombres">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Apellidos:</label>
                                            <input type="text" class="rounded-3 input" style="width:100%"
                                                placeholder="Ej: Gallejo Restrepo" name="apellidos">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email:</label>
                                            <input type="email" class="rounded-3 input" style="width:100%"
                                                placeholder="Ej: example@example.com" name="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Teléfono:</label>
                                            <input type="number" class="rounded-3 input" style="width:100%"
                                                placeholder="Ej: 323 233 2333" name="telefono">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Roles:</label>
                                            <select name="Roles" id="rolSelect" class="rounded-3 input" style="width:100%">
                                                <option value="CC">Seleccione una opcion</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Residente">Residente</option>
                                                <option value="Seguridad">Seguridad</option>
                                            </select>
                                        </div>



                                        <div class="form-group col-md-3">
                                            <label>Seleccione Estado:</label>
                                            <select name="Estado" id="" class="rounded-3 input" style="width:100%">
                                                <option value="CC">Seleccione una opción</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Pendiente">Pendiente</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Torre:</label>
                                            <input type="text" class="rounded-3 input" style="width:100%" id="torreInput"
                                                placeholder="Ej: A" name="torre">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Apartamento:</label>
                                            <input type="text" class="rounded-3 input" style="width:100%" id="apartamentoInput"
                                                placeholder="Ej: 302" name="apartamento">
                                        </div>
                                        <div class="form-group col-md-12 campos_vehiculo"> 
                                        <i class="fa-solid fa-upload"></i><label for="uploadBtn" class="archivo"> Foto de usuario:</label>
                                            <input type="file" id="uploadBtn" name="foto"
                                                accept=".jpeg, .jpg, .png, .gif" class="input-file rounded-3 input" style="width:100%">
                                        </div>

                                    </div>
                                    <button class="boton-btn">Registrar</button>
                                    <div class="register-link m-t-15 text-center">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /# column -->

            <!-- /# column -->
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



    <script src="../../assets/js/rol.js"></script>

</body>

</html>