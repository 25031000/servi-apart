<?php
//session_start();
if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();
$id = $_SESSION['id'];

require_once "../../Models/conexion.php";
require_once "../../Models/consultas.php";
require_once "../../Controllers/mostrarInfoAdmin.php";

$objConsulta = new Consultas();
$result = $objConsulta->verPerfil($id);
?>

<head>

    <!-- Common -->
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
</head>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo">
                <a href="home.php">
                    <img src="../client-site/assets/img/logo1.png" width="200px" height="100px" alt="" />
                    <!-- <span>Focus</span> -->
                </a>
            </div>




            <ul>

                <?php
                require_once("../../Controllers/mostrarInfoAdmin.php");
                perfil();
                ?>


                <li class="label">Módulos</li>
                <li>
                    <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/usuarios.png" alt="icono usuarios" width="20px"
                            style="margin-right:10px"> Usuarios
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="registrar-usuario.php"><img src="../../assets/icons/registrarUsuario.png"
                                    alt="icono registrar usuario" width="20px" style="margin-right:10px"> Registrar </a>
                        </li>
                        <li>
                            <a href="ver-usuario.php"><img src="../../assets/icons/ver.png" alt="icono ver" width="20px"
                                    style="margin-right:10px"> Ver</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/salon.png" alt="icono salon comunal" width="20px"
                            style="margin-right:10px"> Salón Comunal
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="ver-reservaSC.PHP"><img src="../../assets/icons/ver.png" alt="icono ver"
                                    width="20px" style="margin-right:10px"> Ver </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/paquete.png" alt="icono paqueteria" width="20px"
                            style="margin-right:10px"> Paquetería
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="registrar-paquete.php"><img src="../../assets/icons/agregar.png"
                                    alt="icono registrar paquete" width="20px" style="margin-right:10px"> Registrar
                                paquete </a>
                        </li>
                        <li>
                            <a href="ver-paquetes.php"><img src="../../assets/icons/ver.png" alt="icono ver"
                                    width="20px" style="margin-right:10px"> Ver </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/vehiculo.png" alt="icono vehiculos" width="20px"
                            style="margin-right:10px"> Vehículos
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="registrar-vehiculo.php"> <img src="../../assets/icons/agregar.png"
                                    alt="icono agregar vehiculo" width="20px" style="margin-right:10px"> Registrar</a>
                        </li>
                        <li>
                            <a href="ver-vehiculo.php"><img src="../../assets/icons/ver.png" alt="icono ver"
                                    width="20px" style="margin-right:10px"> Ver </a>
                        </li>


                    </ul>

                <li>
                    <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/peticiones.png" alt="icono peticiones" width="20px"
                            style="margin-right:10px"> Peticiones
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="#"><img src="../../assets/icons/ver.png" alt="icono ver" width="20px"
                                    style="margin-right:10px"> Ver </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/publicaciones.png" alt="icono publicaciones" width="20px"
                            style="margin-right:10px"> Publicaciones
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li>

                            <a href="crear-publicacion.php"><img src="../../assets/icons/agregar.png"
                                    alt="icono agregar" width="20px" style="margin-right:10px"> Crear Publicación</a>


                        </li>

                        <li>
                            <a href="ver-publicaciones.php"><img src="../../assets/icons/ver.png" alt="icono ver"
                                    width="20px" style="margin-right:10px"> Ver </a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/pagos.png" alt="icono pagos" width="20px"
                            style="margin-right:10px"> Pagos
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="pagos.php"><img src="../../assets/icons/gestionPagos.png"
                                    alt="icono gestion de pagos" width="20px" style="margin-right:10px"> Gestión de
                                pagos</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->


<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <div class="dropdown dib">
                        <div class="header-icon">
                            <span class="user-avatar" style="font-size: 15px">
                                <?php print_r($result[0]['nombres'] . ' ' . $result[0]['apellidos'])?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style="font-size:12px; color: gray"><?php print_r($result[0]['rol']) ?></span>
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>