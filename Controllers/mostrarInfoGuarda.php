<?php

use function PHPSTORM_META\map;

require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");



function cargarPublicacionRes()
{


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADOS </h2>';

    } else {


        foreach ($result as $f) {

            echo '
                        <article id="art" class=" col-12 col-lg-4 col-md-6   p-4 mb-5 d-flex flex-column ms-2 justify-content-start h-auto border" style="-webkit-border-radius: 0.625rem; -moz-border-radius: 0.625rem; border-radius: 0.625rem; box-shadow: 6px 6px 36px #e3e3e3, -6px -6px 36px #ffffff" >
                            <div class=" p-2 d-flex " > 
                            <h2 class="fw-bold my-auto  w-100  text-wrap" style="font-size: 1rem; font-weight: 600 ">
                            ' . $f['titulo'] . '
                            </h2>
                            <div id="go_to" role="button" class="p-2 d-flex justify-content-center align-items-center flex-shrink rounded-5 ">
                                <img id="diagonal-arrow" width="20" height="20" src="./icons/arrow.png" >
                            </div> 
                            </div>
                            <main class=" p-2 d-flex flex-column justify-content-center">
                                <p class=" my-auto" style="font-size: 1rem">' . $f['descripcion'] . '</p>
                            </main>
                            <footer class=" p-2 m-0" style="background: transparent; height: 21%">
                            <section class="w-100 m-0 p-0 d-flex align-items-center ">
                                    <img style="width: 20px; height: 20px" src="./iconsR/calendario.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> ' . $f['fecha'] . '</small>
                                    <img style="width: 20px; height: 20px" src="./iconsR/reloj-bold.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> ' . $f['hora'] . '</small>
                            </section>
                            </footer>
                        </article>
                    ';

        }


    }
}


function cargarVehiculosPS()
{


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarVehiculosAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY VEHICULOS REGISTRADOS. </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr style="border:white"><td style="text-align:center;">' . $f['placa'] . '</td>
                <td style="text-align:center">' . $f['marca'] . ' </td>
                <td style="text-align:center">' . $f['referencia'] . '</td>
                <td style="text-align:center">' . $f['modelo'] . ' </td>
                <td style="text-align:center">' . $f['identificacion'] . ' </td>
                <td style="text-align:center">' . $f['fecha'] . ' </td>
                <td style="text-align:center"><a href="ver-novedades.php?placa=' . $f['placa'] . '" class="btn btn-dark"><img src="../../assets/icons/novedades.png" width="25px" style="margin-right:3px"> Ver Historial</a></td>
                <td style="text-align:center"><a href="fotos-vehiculo.php?placa=' . $f['placa'] . '" class="btn btn-detalles" style="width:45px"><img src="../../assets/icons/mas.png" width="20px" style="margin-right:3px"></a></td>

            </tr>     
            ';
        }
    }
}


function cargarFotosVehiculoPS()
{

    $placa = $_GET['placa'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarFotosVehiculoAdmin($placa);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '        
        
        
        <div class="row container-fluid" style="margin-top: -20px">
            <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                <h1 style="font-size:50px">Vehículo con placa <span style="font-size:50px; font-weight: 800; color:#FF914D">' . $f['placa'] . '</span>
                </h1>
                </div>
            </div>
            </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 ">
                        <div class="page-header">
                            <div class="page-title" style="display:flex; justify-content: end;">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a style="color: #18d26e">Guarda de Seguridad</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ver datos de vehículo</li>
                                </ol>
                            </div>
                        </div>
                    </div>
        <!-- /# column -->
      </div>
      <!-- /# row -->




      <div class="row" style="display:flex; align-items:center; margin-left:20px">
      <div class="col-lg-5">
          <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators" >
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner carrusel" style="">
    <div class="carousel-item active">
        <img src="../' . $f['foto1'] . '" class="d-block w-100" alt="..." style="border-radius: 8px; max-height: 640px">
    </div>
    <div class="carousel-item" >
        <img src="../' . $f['foto2'] . '" class="d-block w-100" alt="..." style="border-radius: 8px; max-height: 640px">
    </div>
    <div class="carousel-item" >
        <img src="../' . $f['foto3'] . '" class="d-block w-100" alt="..." style="border-radius: 8px; max-height: 640px">
    </div>
    <div class="carousel-item" >
        <img src="../' . $f['foto4'] . '" class="d-block w-100" alt="..." style="border-radius: 8px; max-height: 640px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
  <img src="../../assets/icons/prev.png">
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <img src="../../assets/icons/next.png">
  </button>
 </div>
    </div>




    <div class="col-lg-6" style="margin-left:70px">
        <div class="row">
                    <div class="card modificar-user card-datos vehiculos_ver" style="padding:18px">
                        <div class=" modificar-user">
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="border:none; margin-left:1px">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active tl_datos_fotos" style="border:none; font-size: 18px; margin-top:7px" id="home-tab" data-toggle="tab" >Datos del Vehículo</a>
                            </li>
                        </ul>
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                            <form action="../../Controllers/mofificarVehiculoAdmin.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Placa:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['placa'] . '"  readonly placeholder="Ej: 23554535354" name="placa" style="display:block; width:100%">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Marca:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['marca'] . '"  readonly placeholder="Ej: 23554535354" name="marca" style="display:block; width:100%">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Referencia:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['referencia'] . '" readonly placeholder="Ej: Miguel Angel" name="referencia" style="display:block; width:100%">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Modelo:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['modelo'] . '"  readonly placeholder="Ej: Gallejo Restrepo" name="modelo" style="display:block; width:100%">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Fecha Registro:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['fecha'] . '" readonly placeholder="Ej: example@example.com" name="fecha" style="display:block; width:100%">
                            </div>
                            
                        </div>
                    </form>

                            </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
    <div class="card modificar-user vehiculos_ver" style="margin-top:30px;border:none; padding:18px">
        <div class=" modificar-user">
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="border:none; margin-left:1px">
            <li class="nav-item" role="presentation">
                <a class="nav-link active tl_datos_fotos" id="home-tab" style="border:none; font-size: 18px; margin-top:7px">Datos de propietario</a>

        </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
            <form action="../../Controllers/mofificarVehiculoAdmin.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-md-6">
                <label>Nombres:</label>
                <input type="text" class="rounded-3 input" value="' . $f['nombres'] . '"  readonly placeholder="Ej: 23554535354" name="placa" style="display:block; width:90%">
            </div>
            <div class="form-group col-md-6">
                <label>Apellidos:</label>
                <input type="text" class="rounded-3 input" value="' . $f['apellidos'] . '"  readonly placeholder="Ej: 23554535354" name="marca" style="display:block; width:90%">
            </div>
            <div class="form-group col-md-6">
                <label>Correo:</label>
                <input type="email" class="rounded-3 input" value="' . $f['email'] . '" readonly placeholder="Ej: Miguel Angel" name="referencia" style="display:block; width:90%">
            </div>
            <div class="form-group col-md-6">
                <label>Teléfono:</label>
                <input type="text" class="rounded-3 input" value="' . $f['telefono'] . '"  readonly placeholder="Ej: Gallejo Restrepo" name="modelo" style="display:block; width:90%">
            </div>
            
        </div>
                </div>
    </form>

            </div>
            </div>
        </div>
    </div>
        </div>

        </div>





        ';




    }

}



function cargarNovedadesPS()
{
    $placa = $_GET['placa'];

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarNovedades($placa);

    if (!isset($result)) {
        echo '<h2> Este vehículo no presenta novedades o reportes realizados.</h2>';
        echo '
            <script>
                let head = document.querySelector(".filas_vehiculos");
                head.style.display = "none";
            </script>
        ';

    } else {

        foreach ($result as $f) {


            echo '
            
            <tr>
                <td style="text-align:center">' . $f['placa'] . ' </td>
                <td style="text-align:center; max-width:600px">' . $f['novedad'] . '</td>
                <td style="text-align:center">' . $f['fecha_rev'] . ' </td>
                <td style="text-align:center">' . $f['nombres'] . ' ' . $f['apellidos'] . '</td>
                <td style="text-align:center"><a href="modificar-novedad.php?id_nov=' . $f['id_nov'] . '&placa=' . $f['placa'] . '" class="btn btn-editar" style="margin-right:15px; border: none; background: #00BF63; color: white; align-items: center; max-width:100px; margin-left:10px"><img src="../../assets/icons/edita.png" width="17px" style="margin-right:7px">  Editar</a>
                <a href="../../Controllers/eliminarNovedadesPS.php?id_nov=' . $f['id_nov'] . '&placa=' . $f['placa'] . '" class="btn btn-danger"  style="margin-left:15px;max-width:120px"><img src="../../assets/icons/eliminar.png" width="20px" style="margin-right:7px">  Eliminar</a></td>

            </tr>   
            

            ';
        }


    }
}



function cargarNovedadesEditarPS()
{

    $id_nov = $_GET['id_nov'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarNovedadEditarAdmin($id_nov);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '
        
            

        <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                    <form action="../../Controllers/modificarNovedadPS.php?id_nov=' . $f['id_nov'] . '&placa=' . $f['placa'] . '" method="POST">
                    
                    <div class="row">
                    <form action="../../Controllers/registrarVehiculoAdmin.php" class="col-md-6 p-5 pack-form" method="post">
                    <div class="row">
                    <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.7em;">Datos del Reporte</h2>
                        </div>  
                                        <div class="form-group col-md-5">
                                            <label>Placa:</label>
                                            <input style="width:100%" value="' . $f['placa'] . '" readonly type="text" class="rounded-3 input" placeholder="Ej: UZI974"
                                                name="placa">
                                        </div>
                                        <div class="form-group col-md-7  labelid" style="display:block">
                                        <label>Identificación del Personal de Seguridad:</label>
                                        <input style="width:100%" value="' . $f['identificacion'] . '" readonly type="number" class="rounded-3 input" placeholder="Ej: 1516465400"
                                            name="identificacion">
                                        </div>
                                        <div class="form-group col-md-12 ">
                                            <label>Novedad:</label>
                                            <input style="width:100%" value="' . $f['novedad'] . '"  type="text" class="rounded-3 input" placeholder="Ej: Chevrolet"
                                                name="novedad">
                                        </div>


                                
                                    </div>
                                    
                        </div>
                        <button type="submit" class="p-2 mt-2 btn btn-primary btn-editar" style="width:180px">Modificar Novedad</button>                    
                </form>

                        </div>
                       



                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
            



    </section>


        ';




    }

}
function mostrarReservas()
{
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarReservasPS();

    if (!isset($result)) {
        echo '<h2> NO HAY RESERVAS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <article class="col-md-12 box-cont p-4 px-4 my-5" style="style=" -webkit-border-radius: 0.625rem; -moz-border-radius: 0.625rem; border-radius: 0.625rem; box-shadow: 6px 6px 36px #e3e3e3, -6px -6px 36px #ffffff">
                <header class="w-100 p-2 border-2 border-bottom border-dark">
                    <h3> Numero de Reserva ' . $f['id_reserva'] . '</h3>
                </header>
                <div class="h-auto row d-flex p-2">
                                <section class="col p-2">
                                    

                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/usuarios.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Nombre</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['nombres'] .' '.$f['apellidos'].'</p>
                                        </div>
                                    </div>


                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/telefono.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Telefono</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['telefono'] . '</p>
                                        </div>
                                    </div>

                                   
                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/diaReserva.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Dia Reserva</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['dia_reserva'] . '</p>
                                        </div>
                                    </div>
                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                    <div class"w-50 d-flex p-2" style="align-items: center;">
                                        <img  src="../../assets/icons/iconSalonComunal/cartel.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                        <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Tipo de Evento</p>
                                    </div>
                                    <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                        <p class="fs-6" style="position:relative; top: 9px">' . $f['tipo_evento'] . '</p>
                                    </div>
                                </div>
                                </section>

                                <section class="col p-2">
                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/torres.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Torre</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['torre'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/puerta.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Apartamento</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['apartamento'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/horaInicio.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Hora Inicio</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['hora_inicio'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/reloj.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Hora Finalización</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['hora_finalizacion'] . '</p>
                                        </div>
                                    </div>

                         </div>
              </article>
            ';
        }
    }
}




?>