<?php

use function PHPSTORM_META\map;

require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadResidente.php");


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
                            <header class=" p-2 d-flex " > 
                            <h2 class="fw-bold my-auto  w-100  text-wrap" style="font-size: 1rem; font-weight: 600 ">
                            ' . $f['titulo'] . '
                            </h2>
                            <div id="go_to" role="button" class="p-2 d-flex justify-content-center align-items-center flex-shrink rounded-5 ">
                                <img id="diagonal-arrow" width="20" height="20" src="./icons/arrow.png" >
                            </div> 
                            </header>
                            <main class=" p-2 d-flex flex-column justify-content-center">
                                <p class=" my-auto" style="font-size: 1rem">' . $f['descripcion'] . '</p>
                            </main>
                            <footer class=" p-2 m-0" style="background: transparent; height: 21%">
                            <section class="w-100 m-0 p-0 d-flex align-items-center ">
                                    <img style="width: 20px; height: 20px" src="./icons/calendario.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> ' . $f['fecha'] . '</small>
                                    <img style="width: 20px; height: 20px" src="./icons/reloj-bold.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> ' . $f['hora'] . '</small>
                            </section>
                            </footer>
                        </article>
                    ';

        }


    }
}

function cargarPublicacionesRes()
{


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADOS </h2>';

    } else {
        $count = count($result);
        $start = max(0, $count - 3);

        foreach (array_slice($result, $start, 3) as $f) {
            echo '
                            
                         <article class="col-md-12  box-cont p-4 px-4 my-5 h-auto border" style="-webkit-border-radius: 0.625rem; margin-left: 30%; width: 770px; -moz-border-radius: 0.625rem; border-radius: 0.625rem; box-shadow: 6px 6px 36px #e3e3e3, -6px -6px 36px #ffffff">

                            <header class=" p-2 d-flex " > 
                            <h2 class="fw-bold my-auto  w-100  text-wrap" style="font-size: 1rem; font-weight: 600 ">
                            ' . $f['titulo'] . '
                            </h2>

                            <a href="ver-publicaciones.php">  
                            <div id="go_to" role="button" class="p-2 d-flex justify-content-center align-items-center flex-shrink rounded-5 ">
                                <img id="diagonal-arrow" width="20" height="20" src="./icons/arrow.png" >
                            </div> </a>

                            </header>
                            <main class=" p-2 d-flex flex-column justify-content-center">
                                <p class=" my-auto" style="font-size: 1rem">' . $f['descripcion'] . '</p>
                            </main>
                            <footer class=" p-2 m-0" style="background: transparent; height: 21%">
                            <section class="w-100 m-0 p-0 d-flex align-items-center ">
                                    <img style="width: 20px; height: 20px" src="./icons/calendario.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> ' . $f['fecha'] . '</small>
                                    <img style="width: 20px; height: 20px" src="./icons/reloj-bold.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> ' . $f['hora'] . '</small>
                            </section>
                            </footer>
                        </article>
                    ';

        }

    }
}



function cargarInfoUsuarios()
{
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





//pruebaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa


function cargarVehiculosResidente()
{
    $objConsultas = new Consultas();

    $identificacion = $_SESSION['id'];

    $result = $objConsultas->mostrarVehiculosRes($identificacion);

    if (!isset($result)) {
        echo '<h2>No tienes vehículos registrados en el sistema</h2>';
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
                <td style="text-align:center"><a href="fotos-vehiculo.php?placa=' . $f['placa'] . '" class="btn btn-detalles" style="width:45px"><img src="../../assets/icons/mas.png" width="20px" style="margin-right:3px"></a></td>

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
            
            <tr><td style="text-align:center">' . $f['placa'] . '</td>
                <td style="text-align:center">' . $f['novedad'] . ' </td>
                <td style="text-align:center">' . $f['fecha_rev'] . '</td>
                <td style="text-align:center">' . $f['identificacion'] . ' </td>
                <td style="text-align:center">' . $f['nombres'] . ' </td>


            </tr>   

            
            

            ';
        }


    }
}


function cargarFotosVehiculoRes()
{

    $placa = $_GET['placa'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarFotosVehiculoAdmin($placa);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '        
        
        
        <div class="row container-fluid">
            <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                <h1 style="font-size:50px">Vehículo con placa <span style="font-size:50px; font-weight: 800; color:#FF914D">' . $f['placa'] . '</span>
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
                <li class="breadcrumb-item active">Ver datos de vehículo</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /# column -->
      </div>
      <!-- /# row -->




      <div class="row mt-4" style="display:flex; align-items:center; margin-left:20px">
      <div class="col-lg-5">
      <div id="carouselExampleDark" class="carousel slide" >
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




    <div class="col-lg-6 datos_vehiculo_propietario">
        <div class="row">
                        <div class=" modificar-user">
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                            <form action="../../Controllers/mofificarVehiculoAdmin.php" method="POST" enctype="multipart/form-data"  class="p-5 pack-form" style="margin-top:3%">
                        <div class="row">
                        <div class="row">
                    <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.6em;">Datos del vehículo</h2>
                        </div>  
                            <div class="form-group col-md-4">
                                <label>Placa:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['placa'] . '"  readonly placeholder="Ej: 23554535354" name="placa" style="width:100%">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Marca:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['marca'] . '"  readonly placeholder="Ej: 23554535354" name="marca" style="width:100%">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Referencia:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['referencia'] . '" readonly placeholder="Ej: Miguel Angel" name="referencia" style="width:100%">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Modelo:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['modelo'] . '"  readonly placeholder="Ej: Gallejo Restrepo" name="modelo" style="display:block; width:100%">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Fecha de Registro:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['fecha'] . '" readonly placeholder="Ej: example@example.com" name="fecha" style="display:block; width:100%">
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


function cargarPaquetesRes(string $identificacion)
{
    $objConsultas = new Consultas();
    $arr = $objConsultas->mostrarPaqueteRes($identificacion);
    if (count($arr) == 0) {
        echo '
            <section class="container d-flex flex-column align-items-center">
                <img src="./images/empty-mailbox.svg" width="500" height="500" />
                <h5>Parece que no tienes paquetes registrados</h5>
            </section>
        ';
    } else {
        array_map(function ($item) {
            $months = array("01" => "Enero", "02" => "Febrero", "03" => "Marzo", "04" => "Abril", "05" => "Mayo", "06" => "Junio", "07" => "Julio", "08" => "Agosto", "09" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12" => "Diciembre");

            echo '
            <section class="p-3 rounded-3 row custom-card my-3 mx-2" style="min-width: 31%">
               <div class="col-5 border rounded-3 text-white align-items-center d-flex py-4 flex-column justify-content-center" style="background: #18d26e;">
                    <p class=" m-0 position-relative" style="font-size: 3rem; top: 8px;">' . explode("-", $item['fecha'])[2] . '</p>
                    <small class=" m-0 fw-light" style="font-size: 0.8rem; font-weight: 100;">' . $months[explode("-", $item['fecha'])[1]] . '</small>
               </div>           
               <div class="col-7  align-items-center d-flex flex-column justify-content-center">
                    <div >
                        <strong style="font-size: 1.5rem !important;">' . $item['remitente'] . '</strong>
                    </div>
                    <div class="border rounded-2 py-1 px-3 my-2" style="background: #18d26e;">
                        <div class="text-white">' . $item['torre'] . '-' . $item['apartamento'] . '</div>
                    </div>
                    <div >
                        <small class="text-alternative" style="font-size: 0.8rem">Apartamento - Torre</small>
                    </div>
               </div>           
            </section>
        ';
        }, $arr);

    }


}


function cargarTotalPaquetesRes(string $identificacion)
{
    $objConsultas = new Consultas();
    $arr = $objConsultas->mostrarPaqueteRes($identificacion);
    if (count($arr) == 0) {
        echo '
            <section class="container d-flex flex-column align-items-center">
            <img src="./images/empty-mailbox.svg" width="500" height="500" />
            <h5>Parece que no tienes paquetes registrados</h5>
            </section>
            ';
        } else {
        $months = array("01" => "Enero", "02" => "Febrero", "03" => "Marzo", "04" => "Abril", "05" => "Mayo", "06" => "Junio", "07" => "Julio", "08" => "Agosto", "09" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12" => "Diciembre");
        array_map(function ($item) {
            $months = array("01" => "Enero", "02" => "Febrero", "03" => "Marzo", "04" => "Abril", "05" => "Mayo", "06" => "Junio", "07" => "Julio", "08" => "Agosto", "09" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12" => "Diciembre");

            echo '
            <section class="p-3 rounded-3 row custom-card my-3 mx-2" style="min-width: 31%">
               <div class="col-5 border rounded-3 text-white align-items-center d-flex py-4 flex-column justify-content-center" style="background: #18d26e;">
                    <p class=" m-0 position-relative" style="font-size: 3rem; top: 8px;">' . explode("-", $item['fecha'])[2] . '</p>
                    <small class=" m-0 fw-light" style="font-size: 0.8rem; font-weight: 100;">' . $months[explode("-", $item['fecha'])[1]] . '</small>
               </div>           
               <div class="col-7  align-items-center d-flex flex-column justify-content-center">
                    <div >
                        <strong style="font-size: 1.5rem !important;">' . $item['remitente'] . '</strong>
                    </div>
                    <div class="border rounded-2 py-1 px-3 my-2" style="background: #18d26e;">
                        <div class="text-white">' . $item['torre'] . '-' . $item['apartamento'] . '</div>
                    </div>
                    <div >
                        <small class="text-alternative" style="font-size: 0.8rem">Apartamento - Torre</small>
                    </div>
               </div>           
            </section>
        ';
        }, $arr);
    }
}





















function cargarReservaRes(string $identificacion)
{
    $objConsultas = new Consultas();
    $arr = $objConsultas->mostrarReservaRes($identificacion);
    if (count($arr) == 0) {
        echo '
            <section class="container d-flex flex-column align-items-center">
                <img src="./images/empty-mailbox.svg" width="500" height="500" />
                <h5>Parece que no tienes reservas</h5>
            </section>
        ';
    } else {
        array_map(function ($item) {
            $months = array("01" => "Enero", "02" => "Febrero", "03" => "Marzo", "04" => "Abril", "05" => "Mayo", "06" => "Junio", "07" => "Julio", "08" => "Agosto", "09" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12" => "Diciembre");

            // Convertir la hora a un formato con AM y PM
            $hora_inicio = date('g:i A', strtotime($item['hora_inicio']));
            $hora_finalizacion = date('g:i A', strtotime($item['hora_finalizacion']));

            echo '
            <section class="p-3 rounded-3 row custom-card my-3 mx-2" style="min-width: 31%">
                <div class="col-5 border rounded-3 text-black align-items-center d-flex py-4 flex-column justify-content-center" style="background: #FF914D;">
                    <p class="m-0 position-relative" style="font-size: 3rem; top: 8px;">' . explode("-", $item['dia_reserva'])[2] . '</p>
                    <small class="m-0 fw-light" style="font-size: 0.8rem; font-weight: 100;">' . $months[explode("-", $item['dia_reserva'])[1]] . '</small>
                </div>           
                <div class="col-7  align-items-center d-flex flex-column justify-content-center">
        
                    <div class="rounded-2 py-1 px-3 my-2" style="font-size: 1.2rem; font-weight: bold;"> 
                        <div class="text-black">' . $item['tipo_evento'] . '</div>
                    </div>
        
                    <div class="rounded-2 py-1 px-3 my-2">
                        <img src="../../assets/icons/iconSalonComunal/mesas.png" style="width: 25px; height: 25px;">
                        <div class="text-black">' . $item['mesas'] . '-' . $item['sillas'] . '
                        <img src="../../assets/icons/iconSalonComunal/silla.png" style="width: 25px; height: 25px;">
                        </div>
                    </div>
        
                    <div class="rounded-2 py-1 px-3 my-2" >
                        <div class="text-black">' . $hora_inicio . ' - ' . $hora_finalizacion . '</div>
                    </div>
        
                    <div class="btn-container">
                    <a href="../../Views/Residente/modificar-reservaRes.php?id=' . $item['identificacion'] . '&reservaid='.$item['id_reserva'] .'" class="btn btn-primary btn-sm">Modificar</a>
                        <button type "button" class="btn btn-danger btn-sm">Cancelar</button>
                    </div>
                    
               </div>           
            </section>
        ';
        
        }, $arr);
    }
}

function modificarReservaRes()
{
    
    $identificacion= $_GET['id'];


    $objConsultas = new Consultas();
    $result = $objConsultas-> mostrarReservaRes($identificacion);



    foreach ($result as $f) {
        echo '
            
            <div class="card text-center" >
                
             <div class="card-body" style="-webkit-box-shadow: 16px 14px 17px -8px rgba(0,0,0,0.75);
             -moz-box-shadow: 16px 14px 17px -8px rgba(0,0,0,0.75);
             box-shadow: 16px 14px 17px -8px rgba(0,0,0,0.75);  border-radius: 15px;" >
                <form action="../../Controllers/modificarReservaRes.php" method="POST" >
                <div class="row g-2">
               
                 
                <div class="col-md-6">
                    <div class="">
                    <label for="identificacion" style="font-weight: bold; color: #333;">Identificacion</label>
                        <input type="number" class="form-control" value="' . $f['identificacion'] . '" id="identificacion" name="identificacion"  required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="">
                    <label for="dia_reserva" style="font-weight: bold; color: #333;">Día de Reserva</label>
                        <input type="date" class="form-control" value="' . $f['dia_reserva'] . '" id="dia_reserva" name="dia_reserva"  required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="">
                    <label for="hora_inicio" style="font-weight: bold; color: #333;">Hora de Inicio</label>
                        <input type="time" class="form-control" value="' . $f['hora_inicio'] . '" id="hora_inicio" name="hora_inicio" required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                    <label for="hora_finalizacion" style="font-weight: bold; color: #333;">Hora de Finalización</label>
                        <input type="time" class="form-control" value="' . $f['hora_finalizacion'] . '" id="hora_finalizacion" name="hora_finalizacion" value="03:00:00" required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                    <label for="mesas" style="font-weight: bold; color: #333;">Mesas</label>
                        <input type="number" class="form-control"  value="' . $f['mesas'] . '" id="mesas" name="mesas" required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                    <label for="sillas" style="font-weight: bold; color: #333;">Sillas</label>
                        <input type="number" class="form-control" value="' . $f['sillas'] . '" id="sillas" name="sillas" required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;" >
                        
                    </div>
                </div>
                <div class="col-md-6">
                <div>
                    <label for="tipo_evento" style="font-weight: bold; color: #333;">Tipo de evento</label>
                    <div>
                        <select class="form-control" id="tipo_evento" name="tipo_evento" required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                            <option value="' . $f['tipo_evento'] . '">' . $f['tipo_evento'] . '</option>
                            <option value="" selected></option>
                            <option value="Fiesta de cumpleaños">Fiesta de cumpleaños</option>
                            <option value="Matrimonio">Matrimonio</option>
                            <option value="Primera comunión">Primera comunión</option>
                            <option value="Reunión comunitaria">Reunión comunitaria</option>
                            <option value="Baby shower">Baby shower</option>
                            <option value="Evento benéfico">Evento benéfico</option>
                            <option value="Presentación teatral">Presentación teatral</option>
                            <option value="Fiesta fin de año">Fiesta fin de año</option>
                            <option value="Aniversario">Fiesta de aniversario</option>
                            <option value="Taller de arte">Taller de arte</option>
                            <option value="Reunión corporativa">Reunión corporativa</option>
                            <option value="Exposición de artesanías">Exposición de artesanías</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>
            </div>
            
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Actualizar Informacion</button>
                </div>
            </div>
        </form>
         </div>
                </div>
                
                ';
    }
}























function cargarFotosRes()
{

    $placa = $_GET['placa'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarFotosVehiculoAdmin($placa);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '        
        

      <div class="row" style="margin-left:40px">
          <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel" style="width: 650px">
  <div class="carousel-indicators" style="width: 500px">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner carrusel" style="width: 650px">
    <div class="carousel-item active">
        <img src="../' . $f['foto1'] . '" class="d-block w-100" alt="..." style="border-radius: 8px; max-height: 500px; max-width: 650px">
    </div>
    <div class="carousel-item" >
        <img src="../' . $f['foto2'] . '" class="d-block w-100" alt="..." style="border-radius: 8px; max-height: 500px; max-width: 650px">
    </div>
    <div class="carousel-item" >
        <img src="../' . $f['foto3'] . '" class="d-block w-100" alt="..." style="border-radius: 8px; max-height: 500px; max-width: 650px">
    </div>
    <div class="carousel-item" >
        <img src="../' . $f['foto4'] . '" class="d-block w-100" alt="..." style="border-radius: 8px; max-height: 500px; max-width: 650px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
  <img src="../../assets/icons/prev.png">
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <img src="../../assets/icons/next.png">
  </button>
 </div>





        ';




    }

}

?>

<!-- <div>'. $item['torre']. '</div>
                <div>'. $item['apartamento']. '</div>
                <div>'. $item['remitente']. '</div>
                <div>'. $item['fecha']. '</div>  -->