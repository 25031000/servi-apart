

<?php
//session_start();
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
$id = $_SESSION['id'];

require_once "../../Models/conexion.php";
require_once "../../Models/consultas.php";
require_once "../../Controllers/mostrarInfoAdmin.php";

$objConsulta = new Consultas();
$result = $objConsulta->verPerfil($id);
?>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                        require_once ("../../Controllers/mostrarInfoAdmin.php");
                        perfil();
                    ?>
    

                    <li class="label">Módulos</li>
                    <li>
                        <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/usuarios.png" alt="icono usuarios" width="20px" style="margin-right:10px"> Usuarios
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="registrar-usuario.php"><img src="../../assets/icons/registrarUsuario.png" alt="icono registrar usuario" width="20px"  style="margin-right:10px"> Registrar </a>
                            </li>
                            <li>
                                <a href="ver-usuario.php"><img src="../../assets/icons/ver.png" alt="icono ver" width="20px"  style="margin-right:10px"> Ver</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/salon.png" alt="icono salon comunal" width="20px"  style="margin-right:10px">  Salón Comunal
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="ver-reservaSC.PHP"><img src="../../assets/icons/ver.png" alt="icono ver" width="20px"  style="margin-right:10px"> Ver reservas</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/paquete.png" alt="icono paqueteria" width="20px"  style="margin-right:10px">  Paquetería
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="registrar-paquete.php"><img src="../../assets/icons/agregar.png" alt="icono registrar paquete" width="20px"  style="margin-right:10px"> Registrar paquete </a>
                            </li>
                            <li>
                                <a href="ver-paquetes.php"><img src="../../assets/icons/ver.png" alt="icono ver" width="20px"  style="margin-right:10px"> Ver paquete</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/vehiculo.png" alt="icono vehiculos" width="20px"  style="margin-right:10px">  Vehículos
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="registrar-vehiculo.php"> <img src="../../assets/icons/agregar.png" alt="icono agregar vehiculo" width="20px"  style="margin-right:10px"> Registrar Vehículos</a>
                            </li>
                            <li>
                                <a href="ver-vehiculo.php"><img src="../../assets/icons/ver.png" alt="icono ver" width="20px"  style="margin-right:10px"> Ver Vehículos</a>
                            </li>


                        </ul>

                    <li>
                        <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/peticiones.png" alt="icono peticiones" width="20px"  style="margin-right:10px">  Peticiones
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="#"><img src="../../assets/icons/ver.png" alt="icono ver" width="20px"  style="margin-right:10px"> Ver Peticiones</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/publicaciones.png" alt="icono publicaciones" width="20px"  style="margin-right:10px">  Publicaciones
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>

                                <a href="crear-publicacion.php"><img src="../../assets/icons/agregar.png" alt="icono agregar" width="20px"  style="margin-right:10px"> Crear Publicación</a>

                        
                            </li>
                        
                            <li>
                                <a href="ver-publicaciones.php"><img src="../../assets/icons/ver.png" alt="icono ver" width="20px"  style="margin-right:10px"> Ver Publicaciones</a>
                            </li>
                        
                           
                        </ul>
                    </li>

                    <li>
                        <a class="sidebar-sub-toggle">
                        <img src="../../assets/icons/pagos.png" alt="icono pagos" width="20px"  style="margin-right:10px">  Pagos
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="pagos.php"><img src="../../assets/icons/gestionPagos.png" alt="icono gestion de pagos" width="20px"  style="margin-right:10px"> Gestión de pagos</a>
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
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../Dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../Dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../Dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../Dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../Dashboard/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../Dashboard/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../Dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="../Dashboard/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">
                                    <?php print_r($result[0]['nombres'] . ' ' .$result[0]['apellidos']); ?>
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Perfil</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Mensajes</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Cerrar Sesion</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>