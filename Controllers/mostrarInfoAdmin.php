<?php

//require_once("../../Models/conexion.php");
//require_once("../../Models/conexion.php");
//require("../../Models/consultas.php");

// ESTE ARCHIVO RECIBE TODAS LAS CONSULTAS DEL MODELO PARA MOSTRAR INFORMACION AL ADMINISTRADOR 

// ESTA FUNCION ES LA QUE SE LLAMA EN LA VISTA 


function cargarUsuarios()
{


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarUsuariosAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY USUARIOS REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr style="border-bottom: #e7e7e7 1px solid">
                <td style="text-align:center"><img src="../' . $f['foto'] . '" alt="Foto" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;"></td>
                <td style="text-align:center">' . $f['identificacion'] . '</td>
                <td style="text-align:center">' . $f['tipo_doc'] . ' </td>
                <td style="text-align:center">' . $f['nombres'] . '</td>
                <td style="text-align:center">' . $f['apellidos'] . ' </td>
                <td style="text-align:center">' . $f['email'] . ' </td>
                <td style="text-align:center">' . $f['estado'] . ' </td>
                <td style="text-align:center">' . $f['torre'] . ' </td>
                <td style="text-align:center">' . $f['apartamento'] . ' </td>
                <td style="text-align:center; display:flex; justify-content:center; border:white"><a href="modificar-usuario.php?identificacion=' . $f['identificacion'] . '" class="btn btn-editar" style="margin-right:15px; border: none; color: white; display: flex; align-items: center; max-width:100px; margin-left:10px"><img src="../../assets/icons/edita.png" width="17px" style="margin-right:7px">  Editar</a>
                <a href="../../Controllers/eliminarUserAdmin.php?identificacion=' . $f['identificacion'] . '" class="btn btn-danger"data-toggle="tooltip" data-placement="left"   style="margin-left:15px; display: flex; align-items: center; max-width:120px"><img src="../../assets/icons/eliminar.png" width="20px" style="margin-right:7px">  Eliminar</a></td>
            </tr>     
            ';
        }
    }
}

function cargarUsuariosexcel()
{


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarUsuariosAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY USUARIOS REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <td>' . $f['identificacion'] . '</td>
                <td>' . $f['tipo_doc'] . ' </td>
                <td>' . $f['nombres'] . '</td>
                <td>' . $f['apellidos'] . ' </td>
                <td>' . $f['email'] . ' </td>
                <td>' . $f['telefono'] . ' </td>
                <td>' . $f['rol'] . ' </td>
                <td>' . $f['estado'] . ' </td>
                <td>' . $f['apartamento'] . ' </td>
            </tr>     
            ';
        }
    }
}

function cargarInfoAdmin()
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


// aterrizamos la pk enviada desde la tabla 
function cargarUsuarioEditar()
{

    $identificacion = $_GET['identificacion'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarUsuarioEditarAdmin($identificacion);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '
        
        <form action="../../Controllers/modificarCuentaAdmin.php" method="POST"  class="p-5 pack-form">
        <div class="row">
        <div class="d-flex flex-column mb-3">
            <h2 style="font-size: 1.7em;">Datos de Usuario</h2>
        </div> 
            <div class="form-group col-md-3">
                <label>Identificación:</label>
                <input type="number" value="' . $f['identificacion'] . '" class="rounded-3 input" readonly placeholder="Ej: 23554535354" name="identificacion" style="width:100%">
            </div>
            <div class="form-group col-md-3">
                <label>Tipo de Documento:</label>
                <select name="tipo_doc" id="" class="rounded-3 input" style="width:100%">
                    <option value="' . $f['tipo_doc'] . '"> ' . $f['tipo_doc'] . ' </option>
                    <option value="CC">CC</option>
                    <option value="CE">CE</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Nombres:</label>
                <input type="text" value="' . $f['nombres'] . '"  class="rounded-3 input" style="width:100%" placeholder="Ej: Miguel Angel" name="nombres">
            </div>
            <div class="form-group col-md-3">
                <label>Apellidos:</label>
                <input type="text" value="' . $f['apellidos'] . '"  class="rounded-3 input" style="width:100%" placeholder="Ej: Gallejo Restrepo" name="apellidos">
            </div>
            <div class="form-group col-md-4">
                <label>Email:</label>
                <input type="email" value="' . $f['email'] . '" class="rounded-3 input" style="width:100%" placeholder="Ej: example@example.com" name="email">
            </div>
            <div class="form-group col-md-4">
                <label>Teléfono:</label>
                <input type="number" value="' . $f['telefono'] . '" class="rounded-3 input" style="width:100%" placeholder="Ej: 323 233 2333" name="telefono">
            </div>
            <div class="form-group col-md-4">
                <label>Rol:</label>
                <select name="Roles" id="rolSelect" class="rounded-3 input" style="width:100%">
                    <option value="' . $f['rol'] . '"> ' . $f['rol'] . '</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Residente">Residente</option>
                    <option value="Seguridad">Seguridad</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Seleccione Estado:</label>
                <select name="Estado" id="" class="rounded-3 input" style="width:100%">
                    <option value="' . $f['estado'] . '"> ' . $f['estado'] . ' </option>
                    <option value="Activo">Activo</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Bloqueado">Bloqueado</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Torre:</label>
                <input type="text" id="torreInput" value="' . $f['torre'] . '"  class="rounded-3 input" style="width:100%" placeholder="Ej: A" name="torre">
            </div>
            <div class="form-group col-md-4">
                <label>Apartamento:</label>
                <input type="text" id="apartamentoInput" value="' . $f['apartamento'] . '"  class="rounded-3 input" style="width:100%" placeholder="Ej: 101" name="apartamento">
            </div>

            
        </div>
        <div class="d-flex flex-column  mt-3">
                    <button class="boton-btn">Actualizar</button>
                </div>
    </form>

        ';

    }

}


function cargarUsuariosPDF()
{

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarUsuariosAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY USUARIOS REGISTRADAS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['identificacion'] . '</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['tipo_doc'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['nombres'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['apellidos'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['email'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['telefono'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['rol'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['estado'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['torre'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['apartamento'] . '</td>

            </tr>     
            ';
        }
    }
}



function cargarFotosVehiculo()
{

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




    <div class="col-lg-6 datos_vehiculo_propietario">
        <div class="row">
                    <div class="card modificar-user card-datos vehiculos_ver">
                        <div class=" modificar-user">
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="border:none; margin-left:1px">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active tl_datos_fotos" style="border:none; font-size: 18px; margin-top:7px" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Datos del Vehiculo</button>
                            </li>
                        </ul>
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                            <form action="../../Controllers/mofificarVehiculoAdmin.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Placa:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['placa'] . '"  readonly placeholder="Ej: 23554535354" name="placa" style="display:block; width:90%">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Marca:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['marca'] . '"  readonly placeholder="Ej: 23554535354" name="marca" style="display:block; width:90%">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Referencia:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['referencia'] . '" readonly placeholder="Ej: Miguel Angel" name="referencia" style="display:block; width:90%">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Modelo:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['modelo'] . '"  readonly placeholder="Ej: Gallejo Restrepo" name="modelo" style="display:block; width:90%">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Estacionamiento Asignado:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['parqueadero'] . '"  readonly name="parqueadero" style="display:block; width:90%">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Fecha Registro:</label>
                                <input type="text" class="rounded-3 input" value="' . $f['fecha'] . '" readonly placeholder="Ej: example@example.com" name="fecha" style="display:block; width:90%">
                            </div>
                            
                        </div>
                    </form>

                            </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
    <div class="card modificar-user vehiculos_ver" style="margin-top:30px;border:none">
        <div class=" modificar-user">
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="border:none; margin-left:1px">
            <li class="nav-item" role="presentation">
                <button class="nav-link active tl_datos_fotos" id="home-tab" style="border:none; font-size: 18px; margin-top:7px" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" >Datos de propietario</button>

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
                <label>Telefono:</label>
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

function cargarNovedades()
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
                <td style="text-align:center"><a href="" class="btn btn-detalles" style="width:45px"><img src="../../assets/icons/ver.png" width="20px"</a></td>
                <td style="text-align:center"><a href="modificar-novedad.php?id_nov=' . $f['id_nov'] . '&placa=' . $f['placa'] . '" class="btn btn-editar" style="margin-right:15px; border: none; background: #00BF63; color: white; align-items: center; max-width:100px; margin-left:10px"><img src="../../assets/icons/edita.png" width="17px" style="margin-right:7px">  Editar</a>
                <a href="../../Controllers/eliminarNovedadesAdmin.php?id_nov=' . $f['id_nov'] . '&placa=' . $f['placa'] . '" class="btn btn-danger"  style="margin-left:15px;max-width:120px"><img src="../../assets/icons/eliminar.png" width="20px" style="margin-right:7px">  Eliminar</a></td>

            </tr>   
            

            ';
        }


    }
}

function cargarNovedadesEditar()
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
                            
                    <form action="../../Controllers/modificarNovedadAdmin.php?id_nov=' . $f['id_nov'] . '&placa=' . $f['placa'] . '" method="POST">
                    
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
                                            <textarea style="width:100%; max-height: 180px; min-height:45px" type="text" class="rounded-3 input" placeholder="Ej: El vehiculo tiene un rayón en el costado derecho"
                                                name="novedad">' . $f['novedad'] . '</textarea>
                                        </div>


                                
                                    </div>
                                    
                        </div>
                        <div class="d-flex flex-column  mt-3">
                        <button class="boton-btn">Registrar</button>
                    </div>
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

function cargarNovedadesPDF()
{
    $placa = $_GET['placa'];

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarNovedades($placa);

    if (!isset($result)) {
        echo '<h2> NO HAY NOVEDADES REGISTRADAS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['id_nov'] . '</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['placa'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['novedad'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['identificacion'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['nombres'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['fecha_rev'] . '</td>

            </tr>     
            ';
        }
    }
}


function cargarVehiculos()
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
                <td style="text-align:center">' . $f['parqueadero'] . ' </td>
                <td style="text-align:center">' . $f['fecha'] . ' </td>
                <td style="text-align:center; display:flex; justify-content:center; border:white"><a href="modificar-vehiculo.php?placa=' . $f['placa'] . '" class="btn btn-editar" style="margin-right:15px; border: none; color: white; display: flex; align-items: center; max-width:100px; margin-left:10px"><img src="../../assets/icons/edita.png" width="17px" style="margin-right:7px">  Editar</a>
                <a href="../../Controllers/eliminarVehiculosAdmin.php?placa=' . $f['placa'] . '" class="btn btn-danger"data-toggle="tooltip" data-placement="left" title="Estás seguro de eliminar el vehiculo? Esto también eliminará las novedades que este tenga"  style="margin-left:15px; display: flex; align-items: center; max-width:120px"><img src="../../assets/icons/eliminar.png" width="20px" style="margin-right:7px">  Eliminar</a></td>
                <td style="text-align:center"><a href="ver-novedades.php?placa=' . $f['placa'] . '" class="btn btn-dark"><img src="../../assets/icons/novedades.png" width="25px" style="margin-right:3px"> Ver Historial</a></td>
                <td style="text-align:center"><a href="fotos-vehiculo.php?placa=' . $f['placa'] . '" class="btn btn-primary btn-detalles"><i class="ti-more-alt"></i></a></td>

            </tr>     
            ';
        }
    }
}

function cargarVehiculoEditar()
{

    $placa = $_GET['placa'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarVehiculoEditarAdmin($placa);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '
        
            
 

        <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                    <form action="../../Controllers/modificarVehiculoAdmin.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="row">
                    <form action="../../Controllers/registrarVehiculoAdmin.php" class="col-md-6 p-5 pack-form" method="post">
                    <div class="row">
                    <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.7em;">Datos del Vehiculo</h2>
                        </div>  
                                        <div class="form-group col-md-4">
                                            <label>Placa:</label>
                                            <input style="width:100%" value="' . $f['placa'] . '" readonly type="text" class="rounded-3 input" placeholder="Ej: UZI974"
                                                name="placa">
                                        </div>
                                        <div class="form-group col-md-4  labelid" style="display:block">
                                        <label>ID Propietario:</label>
                                        <input style="width:100%" value="' . $f['identificacion'] . '" readonly type="number" class="rounded-3 input" placeholder="Ej: 1516465400"
                                            name="identificacion">
                                        </div>

                                        <div class="form-group col-md-4  labelid" style="display:block">
                                        <label>Estacionamiento:</label>
                                        <input style="width:100%" value="' . $f['parqueadero'] . '" type="text" class="rounded-3 input" placeholder="Ej: B17"
                                            name="parqueadero">
                                        </div>
                                        <div class="form-group col-md-4 ">
                                            <label>Marca:</label>
                                            <input style="width:100%" value="' . $f['marca'] . '"  type="text" class="rounded-3 input" placeholder="Ej: Chevrolet"
                                                name="marca">
                                        </div>
                                        <div class="form-group col-md-4 ">
                                            <label>Referencia:</label>
                                            <input style="width:100%" value="' . $f['referencia'] . '"  type="text" class="rounded-3 input" placeholder="Ej: Tracker"
                                                name="referencia">
                                        </div>
                                        <div class="form-group col-md-4 ">
                                            <label>Modelo:</label>
                                            <input style="width:100%" value="' . $f['modelo'] . '"  type="text" class="rounded-3 input" placeholder="Ej: 2015"
                                                name="modelo">
                                        </div>

                                
                                    </div>
                                    <div class="d-flex flex-column  mt-3">                       
                        </div>
                    </form>
                    <div class="d-flex flex-column  mt-3">
                    <button class="boton-btn">Registrar</button>
                </div>
                        
                    </div>
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

function cargarVehiculosPDF()
{
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarVehiculosAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY VEHICULOS REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['placa'] . '</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['marca'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['referencia'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['modelo'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['identificacion'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['parqueadero'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['fecha'] . '</td>

            </tr>     
            ';
        }
    }
}


function cargarPublicaciones()
{


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
            
            <td>' . $f['titulo'] . ' </td>
            <td>' . $f['descripcion'] . ' </td>
         
            <td><a href="modificar-publi.php?id_publi=' . $f['id_publi'] . '" class="btn btn-editar" style="margin-right:15px; border: none; color: white; display: flex; align-items: center; max-width:100px; margin-left:10px"><img src="../../assets/icons/edita.png" width="17px" style="margin-right:7px">  Editar</a>
            <td><a href="../../Controllers/eliminarPubli.php?id_publi=' . $f['id_publi'] . '" class="btn btn-danger"data-toggle="tooltip" data-placement="left"  style="margin-left:15px; display: flex; align-items: center; max-width:120px"><img src="../../assets/icons/eliminar.png" width="20px" style="margin-right:7px">  Eliminar</a></td>
        </tr>     
            ';
        }
    }
}


function cargarPubliEditar()
{

    $id_publi = $_GET['id_publi'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPubliEditar($id_publi);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '

        <div class="pt-4 ">
        <main class="w-100 row px-5 gap-5 flex-nowrap align-items-center py-4" >
            <form action="../../Controllers/modificarpubli.php?id_publi' . $f['id_publi'] . ' " class="col-md-6 p-5 pack-form h-75" method="post">
            <div class="d-flex flex-column mb-3">
                    <h2 style="font-size: 1.7em;">Crear publicación</h2>
                </div>  

                <div class="d-flex flex-column mb-3">
                    <label for="" class="py-2">Titulo</label>
                    <input type="text" name="titulo" value="' . $f['titulo'] . '" placeholder="Ej: acueducto " class="rounded-3 input">
                </div>

                <div class="d-flex flex-column mb-3">
                    <label for="" class="py-2">Descripcion</label>
                    <textarea name="descripcion" rows="5" cols="40" value="' . $f['descripcion'] . '" placeholder="Ej: Por motivos de tema acueducto el dia de hoy no tendremos agua" class="rounded-3 input"></textarea> 
                </div>

                <div class="d-flex flex-column  mt-3">
                    <button class="boton-btn">Registrar</button>                        
                </div>

                
            </form>
            
            </div>
        </main>
    </div>
</div>
</div>
                        ';






    }

}









function cargarUsuariosReportes()
{



    if (!isset($result)) {
        echo '<h2> NO HAY USUARIOS REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <td>' . $f['identificacion'] . '</td>
                <td>' . $f['nombres'] . '</td>
                <td>' . $f['apellidos'] . ' </td>
                <td>' . $f['email'] . '</td>
                <td>' . $f['telefono'] . '</td>
                <td>' . $f['rol'] . '</td>
                <td>' . $f['estado'] . ' </td>
            </tr>     
            ';
        }
    }
}

function cargarPublicacionesPDF()
{
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADAS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['id_publi'] . '</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['titulo'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['descripcion'] . '</td>
               
            </tr>     
            ';
        }
    }
}


function perfil()
{

    //Variable de sesion de login
    if (session_status() !== PHP_SESSION_ACTIVE)
        session_start();
    $id = $_SESSION['id'];

    $objConsultas = new Consultas();
    $result = $objConsultas->verPerfil($id);

    foreach ($result as $f) {
        echo '


        <li class="label">' . $f['rol'] . '</li>
        <li>
            <a class="sidebar-sub-toggle">
            <img style="border-radius: 50%; width: 40px; height: 40px;" src="../' . $f['foto'] . '" class="foto_user_servi ">     ' . $f['nombres'] . '
            <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
            <li >
            <a href="perfil.php?id=' . $f['identificacion'] . '"><img src="../../assets/icons/editCuenta.png" alt="icono editar cuenta" width="18px" class="iconos"  style="margin-right:5px">  Editar Cuenta</a>
        </li>
        <li>
        <a href="../../Controllers/cerrarSesion.php">
        <img src="../../assets/icons/cerrarSesion.png" alt="icono cerrar sesion" width="18px" class="iconos"  style="margin-right:5px">    Cerrar Sesion</a>
    </li>

            </ul>
        </li>














        
        ';
    }
}



function perfilEditar()
{


    $id = $_GET['id'];

    $objConsultas = new Consultas();
    $result = $objConsultas->verPerfil($id);

    foreach ($result as $f) {

        echo '
            

            <section id="main-content">
            <div class="row">
                <div class="col-lg-4">
                            <div class="card perfil-user d-flex justify-content-center align-items-center py-3">
                                <img style="border-radius: 50%; width: 280px; height: 280px; border: 4px solid #00bf63; object-fit: cover;"  src="../' . $f['foto'] . '" alt="Foto Usuario">
                                <h3 style="padding-top: 20px;">' . $f['nombres'] . ' ' . $f['apellidos'] . '</h3>
                                <small class="text-light-subtle" style="font-size: 1.2rem; padding: 5px;">' . $f['rol'] . ' </small>
                                
                            </div>
                </div>
                <div class="col-lg-8">
                    <div class="card modificar-user">
                        <div class="card modificar-user">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Perfil</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Cambiar foto</button>

                                
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Cambiar Clave</button>
                            </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                            <form action="../../Controllers/modificarCuentaAdmin.php" method="POST" enctype="multipart/form-data">
                        <div class="row px-4">
                            <div class="form-group col-md-6">
                                <label>Identificacion:</label>
                                <input type="number" class="form-control" value="' . $f['identificacion'] . '"  readonly placeholder="Ej: 23554535354" name="identificacion">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tipo de Documento:</label>
                                <select name="tipo_doc" id="" class="form-control">
                                    <option value="' . $f['tipo_doc'] . '">' . $f['tipo_doc'] . '</option>
                                    <option value="CC">CC</option>
                                    <option value="CE">CE</option>
                                    <option value="PASAPORTE">PASAPORTE</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nombres:</label>
                                <input type="text" class="form-control" value="' . $f['nombres'] . '" placeholder="Ej: Miguel Angel" name="nombres">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Apellidos:</label>
                                <input type="text" class="form-control" value="' . $f['apellidos'] . '"  laceholder="Ej: Gallejo Restrepo" name="apellidos">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email:</label>
                                <input type="email" class="form-control" value="' . $f['email'] . '" placeholder="Ej: example@example.com" name="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telefono:</label>
                                <input type="number" class="form-control" value="' . $f['telefono'] . '" placeholder="Ej: 323 233 2333" name="telefono">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Torre:</label>
                                <input type="text" class="form-control" value="' . $f['torre'] . '" placeholder="Ej: 323 233 2333" name="torre">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Apartamento:</label>
                                <input type="text" class="form-control" value="' . $f['apartamento'] . '" placeholder="Ej: 323 233 2333" name="apartamento">
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-success  w-25 ms-4   btn-flat m-b-30 m-t-30" style="margin: 0 auto">Modificar Cuenta</button>
                        <div class="register-link m-t-15 text-center">
                            
                        </div>
                    </form>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group col-md-12">
                            <form action="../../Controllers/modificarFotoAdmin.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Identificacion:</label>
                                <input type="number" class="form-control" value="' . $f['identificacion'] . '"  readonly placeholder="Ej: 23554535354" name="identificacion" required >
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label>Foto:</label>
                                <input type="file"  class="form-control"  name="foto" accept=".jpeg, .jpg, .png, .gif">
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Modificar Foto</button>
                        <div class="register-link m-t-15 text-center">
                            
                        </div>
                    </form>
                            </div>
                            </div>



                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <form action="../../Controllers/modificarClaveAdmin.php"  method="POST">

                                   <div class="form-group col-md-6">
                                    <label>Identificacion:</label>
                                     <input type="number" class="form-control" value="' . $f['identificacion'] . '"  readonly placeholder="Ej: 23554535354" name="identificacion" required >
                                     </div>
                                    <div class="form-group col-md-12">
                                        <label>Nueva Clave:</label>
                                        <input type="password" class="form-control" placeholder="Ej: **********" name="clave" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Confirmar Nueva Clave:</label>
                                        <input type="password" class="form-control" placeholder="Ej: ********" name="clave2" required>
                                    </div>
                                     <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30 ms-4">Modificar Clave</button>

                                </form>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                



            <div class="row">
                <div class="col-lg-12">
                    <div class="footer">
                        <p>2023 © Admin Board. - <a href="#">Servi-Apart.</a></p>
                    </div>
                </div>
            </div>
        </section>
            
            
            
            
            
            ';
    }


}

function cargarPaquetes()
{
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPaquetesAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY PAQUETES REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr class="d-flex row"> 
                <td class="d-flex col-md-2 justify-content-start ps-3">' . $f['torre'] . '</td>
                <td class="d-flex col-md-2 justify-content-start ps-3">' . $f['apartamento'] . ' </td>
                <td class="d-flex col-md-2 justify-content-start ps-3">' . $f['fecha'] . '</td>
                <td class="d-flex col-md-2 justify-content-start ps-3">' . $f['remitente'] . ' </td>
                <td class="d-flex col-md-2 justify-content-start ps-3">' . $f['nombres'] . ' ' . $f['apellidos'] . ' </td> 
                <td class="d-flex col-md-2 justify-content-start ps-3"><a aria-label="Chat on WhatsApp" target="_blank" data-bs-toggle="tooltip" data-bs-title="Default tooltip" href="https://wa.me/57' . $f['telefono'] . '"><img class="whatsapp" style="width: 30px; height: 30px; "  alt="Chat on WhatsApp" src="../../assets/icons/whatsapp.png" />
                <a /> </td>
           </tr>     
            ';
        }
    }
}

function cargarPaquetesPDF()
{
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPaquetesAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY PAQUETES REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['id'] . '</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['torre'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['apartamento'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['fecha'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['remitente'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['nombres'] . ' ' . $f['apellidos'] . '</td>
            </tr>     
            ';
        }
    }
}

function mostrarReservas()
{
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarReservasAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY RESERVAS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <article class="col-md-12 box-cont p-4 px-4 my-5" style=" -webkit-border-radius:  0.625rem; -moz-border-radius:  0.625rem; border-radius:  0.625rem; box-shadow: 6px 6px 36px #e3e3e3,
            -6px -6px 36px #ffffff">
                <header class="w-100 p-2 border-2 border-bottom border-dark">
                    <h3> # ' . $f['id_reserva'] . ' </h3>
                    <h3 style="position:absolute; left: 100px; top:30px; left: 630px;"> ' . $f['tipo_evento'] . '</h3>
                </header>
                <div class="h-auto row d-flex p-2">
                                <section class="col p-2">
                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/tarjetas.png"  alt="building" class="imgSC" style="width: 30px; height: 30px; " >
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Identificacion</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px; ">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['identificacion'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/usuarios.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Nombre</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['nombres'] .' '. $f['apellidos'] . '</p>
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
                                            <img  src="../../assets/icons/iconSalonComunal/correo.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Correo</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['email'] . '</p>
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

                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/mesas.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Mesas</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['mesas'] . '</p>
                                        </div>
                                    </div>
                                    <div style="display: flex" class=" justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/silla.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Sillas</p>
                                        </div>
                                        <div class"w-50 p-2  d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['sillas'] . '</p>
                                        </div>
                                    </div>


                                    <div class="h-auto row d-flex p-2">
                                    <section class="col p-2 ">
                                        <!-- Botón "Eliminar" en la esquina superior izquierda -->
                                        <div style="position: absolute; top: 13px; left: 10px;">
                                         <a href="../../Controllers/eliminarDiaReservadoSC.php?id=' . $f['id_reserva'] . '" class="btn btn-danger">Eliminar</a>

                                        </div>


                                    <section class="col p-2">
                                        <!-- Botón "Modificar" en la esquina superior derecha -->
                                        <div style="position: absolute; top: 9px; right: 10px;">
                                        <a href="modificar-reservaSC.php?id=' . $f['id_reserva'] . '" class="btn btn-success">Editar</a>
                                            
                                        </div>
                                        
                                </section>
                         </div>
              </article>
            ';
        }
    }
}
function cargarReservaEditar()
{
    $id_reserva = $_GET['id'];

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarReservaEditarAdmin($id_reserva);


    foreach ($result as $f) {
        echo '
            
            <div class="card text-center" >
                
             <div class="card-body" style="-webkit-box-shadow: 16px 14px 17px -8px rgba(0,0,0,0.75);
             -moz-box-shadow: 16px 14px 17px -8px rgba(0,0,0,0.75);
             box-shadow: 16px 14px 17px -8px rgba(0,0,0,0.75);  border-radius: 15px;" >
                <form action="../../Controllers/modificarReservaAdminSC.php" method="POST" >
                <div class="row g-2">
                <div class="col-md-6">
                    <div class="">
                    <label for="" style="font-weight: bold; color: #333;">Identificación</label>
                        <input type="number" class="form-control" value="' . $f['identificacion'] . '" id="identificacion" name="identificacion" placeholder="0123456789" readonly style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;" >
                        
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="">
                    <label for="dia_reserva" style="font-weight: bold; color: #333;">Día de Reserva</label>
                        <input type="date" class="form-control" value="' . $f['dia_reserva'] . '" id="dia_reserva" name="dia_reserva" readonly required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
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
                        <select class="form-control" id="tipo_evento" name="tipo_evento"  style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;" placeholder="' . $f['tipo_evento'] . '">
                            <option value="">' . $f['tipo_evento'] . '</option>
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
function cargarReservasPDF()
{
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarReservasAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY RESERVAS REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['id_reserva'] . '</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['identificacion'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['nombres'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['apellidos'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['telefono'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['email'] . '</td>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['dia_reserva'] . '</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['torre'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['apartamento'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['hora_inicio'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['hora_finalizacion'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['mesas'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['sillas'] . '</td>

            </tr>     
            ';
        }
    }
}
function cargarReservasEX()
{
    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarReservasAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY PAQUETES REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['id_reserva'] . '</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['identificacion'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['nombre'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['apellidos'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['telefonos'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['correo'] . '</td>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['dia_reserva'] . '</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['torre'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['apartamento'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['hora_inicio'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['hora_finalizacion'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['mesas'] . '</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">' . $f['sillas'] . '</td>

            </tr>       
            ';
        }
    }
}

?>