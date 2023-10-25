<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");


 function cargarPublicacionRes(){


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADOS </h2>';

    } else {
        
    
        foreach ($result as $f) {
           
            echo '
                        <article id="art" class=" col-12 col-lg-4 col-md-6   p-4 mb-5 d-flex flex-column ms-2 justify-content-start h-auto border">
                            <header class=" p-2 d-flex " > 
                            <h2 class="fw-bold my-auto  w-100  text-wrap" style="font-size: 1rem; font-weight: 600 ">
                            '. $f['titulo'] .'
                            </h2>
                            <div id="go_to" role="button" class="p-2 d-flex justify-content-center align-items-center flex-shrink rounded-5 ">
                                <img id="diagonal-arrow" width="20" height="20" src="./icons/arrow.png" >
                            </div> 
                            </header>
                            <main class=" p-2 d-flex flex-column justify-content-center">
                                <p class=" my-auto" style="font-size: 1rem">'. $f['descripcion'] .'</p>
                            </main>
                            <footer class=" p-2 m-0">
                            <section class="w-100 m-0 p-0 d-flex align-items-center ">
                                    <img style="width: 20px; height: 20px" src="./icons/calendario.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> '. $f['fecha'] .'</small>
                                    <img style="width: 20px; height: 20px" src="./icons/reloj-bold.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> '. $f['hora'] .'</small>
                            </section>
                            </footer>
                        </article>
                    ';
                
            }
            
        
    }
}

function cargarPublicacionesRes(){


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADOS </h2>';

    } else {
        $count = count ($result);
        $start = max(0, $count - 3);
        
        foreach (array_slice($result, $start, 3) as $f){
            echo '
                            
                            
            <article class="col-md-12 box-cont p-4 px-4 my-5" style="-webkit-border-radius:  0.625rem;  width: 700px; -moz-border-radius:  0.625rem; border-radius:  0.625rem; box-shadow: 6px 6px 36px #e3e3e3,
            -6px -6px 36px #ffffff">
                            <header class=" p-2 d-flex " > 
                            <h2 class="fw-bold my-auto  w-100  text-wrap" style="font-size: 1rem; font-weight: 600 ">
                            '. $f['titulo'] .'
                            </h2>

                            <a href="ver-publicaciones.php">  
                            <div id="go_to" role="button" class="p-2 d-flex justify-content-center align-items-center flex-shrink rounded-5 ">
                                <img id="diagonal-arrow" width="20" height="20" src="./icons/arrow.png" >
                            </div> </a>

                            </header>
                            <main class=" p-2 d-flex flex-column justify-content-center">
                                <p class=" my-auto" style="font-size: 1rem">'. $f['descripcion'] .'</p>
                            </main>
                            <footer class=" p-2 m-0" style="background: transparent; height: 21%">
                            <section class="w-100 m-0 p-0 d-flex align-items-center ">
                                    <img style="width: 20px; height: 20px" src="./icons/calendario.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> '. $f['fecha'] .'</small>
                                    <img style="width: 20px; height: 20px" src="./icons/reloj-bold.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> '. $f['hora'] .'</small>
                            </section>
                            </footer>
                        </article>
                    ';
             
            }
            
        }
    }



    function cargarInfoUsuarios(){
        $objConsultas = new Consultas();

        // session_start();
       
        $identificacion = $_SESSION['id'];
         // Reemplaza 'valor_de_identificacion' con el ID que deseas buscar
    
        $result = $objConsultas->verPerfil($identificacion);
    
        if (!isset($result)) {
            echo '<h2> NO HAY USUARIOS REGISTRADOS </h2>';
        } else {
    
            return $result;
        }
    }








function cargarVehiculosResidente(){
    $objConsultas = new Consultas();
    
    $identificacion = $_SESSION['id'];

    $result = $objConsultas->mostrarVehiculosRes($identificacion);

    if (!isset($result)) {
        echo '<h2>No tienes vehiculos registrados en el sistema</h2>';
        echo '
            <script>
                let head = document.querySelector(".filas_vehiculos");
                head.style.display = "none";
            </script>
        ';

    } else {
        foreach ($result as $f) {
            echo '
            <tr><td style="text-align:center">' . $f['placa'] . '</td>
                <td style="text-align:center">' . $f['marca'] . ' </td>
                <td style="text-align:center">' . $f['referencia'] . '</td>
                <td style="text-align:center">' . $f['modelo'] . ' </td>
                <td style="text-align:center"><a href="ver-novedades.php?placa=' . $f['placa'] . '" class="btn btn-dark"><img src="../../assets/icons/novedades.png" width="25px" style="margin-right:3px"> Ver Historial</a></td>
                <td style="text-align:center"><a href="fotos-vehiculo.php?placa=' . $f['placa'] . '" class="btn btn-primary btn-detalles"><i class="ti-more-alt"></i></a></td>

            </tr>     
            ';
        }
    }
}

function cargarNovedadesResidente()
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
            
            <tr><td style="text-align:center">' . $f['id_nov'] . '</td>
                <td style="text-align:center">' . $f['placa'] . ' </td>
                <td style="text-align:center">' . $f['novedad'] . '</td>
                <td style="text-align:center">' . $f['fecha_rev'] . ' </td>
                <td style="text-align:center">' . $f['identificacion'] . ' </td>
                <td style="text-align:center">' . $f['nombres'] . ' </td>


            </tr>   
            

            ';
        }

        
    }
}

function cargarVehiculosPDFR()
{    
    $identificacion = isset($_SESSION['id']);

    $objConsultas = new Consultas();

    $result = $objConsultas->mostrarVehiculosRes($identificacion);

    if (!isset($result)) {
        echo '<h2> NO HAY VEHICULOS REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">'. $f['placa'].'</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['marca'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['referencia'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['modelo'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['identificacion'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['fecha'].'</td>

            </tr>     
            ';
        }
    }
}

function cargarFotosVehiculoRes(){

    $placa = $_GET['placa'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarFotosVehiculoAdmin($placa);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '        
        
        
        <div class="row container-fluid" style="margin-top:20px">
            <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                <h1 style="font-size:50px">Vehiculo con placa <span style="font-size:50px; font-weight: 800; color:#FF914D">' . $f['placa'] . '</span>
                </h1>
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
                <li class="breadcrumb-item active">Ver datos de vehiculo</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /# column -->
      </div>
      <!-- /# row -->




      <div class="row" style="display:flex; align-items:center; margin-left:30px">
      <div class="col-lg-5">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" >
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
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
 </div>
    </div>




    <div class="col-lg-6 datos_vehiculo_propietario">
        <div class="row">
                        <div class=" modificar-user">
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                            <form action="../../Controllers/mofificarVehiculoAdmin.php" method="POST" enctype="multipart/form-data"  class="p-5 pack-form" style="margin-top:15%">
                        <div class="row">
                        <div class="row">
                    <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.6em;">Datos del vehículo</h2>
                        </div>  
                            <div class="form-group col-md-4">
                                <label>Placa:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['placa'] . '"  readonly placeholder="Ej: 23554535354" name="placa">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Marca:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['marca'] . '"  readonly placeholder="Ej: 23554535354" name="marca">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Referencia:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['referencia'] . '" readonly placeholder="Ej: Miguel Angel" name="referencia">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Modelo:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['modelo'] . '"  readonly placeholder="Ej: Gallejo Restrepo" name="modelo" style="display:block; width:90%">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Fecha Registro:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['fecha'] . '" readonly placeholder="Ej: example@example.com" name="fecha" style="display:block; width:90%">
                            </div>
                            

                    </form>

                            </div>
                        
                            </div>
                        </div>
                    </div>
                </div>





        ';




    }

}

?>

