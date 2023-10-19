<?php

//require_once("../../Models/conexion.php");
//require_once("../../Models/conexion.php");
//require("../../Models/consultas.php");

// ESTE ARCHIVO RECIBE TODAS LAS CONSULTAS DEL MODELO PARA MOSTRAR INFORMACION AL ADMINISTRADOR 

// ESTA FUNCION ES LA QUE SE LLAMA EN LA VISTA 

function cargarUsuarios(){


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarUsuariosAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY USUARIOS REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <td><img src="../' . $f['foto'] . '" alt="Foto" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;"></td>
                <td>' . $f['identificacion'] . '</td>
                <td>' . $f['tipo_doc'] . ' </td>
                <td>' . $f['nombres'] . '</td>
                <td>' . $f['apellidos'] . ' </td>
                <td>' . $f['email'] . ' </td>
                <td>' . $f['estado'] . ' </td>
                <td>' . $f['torre'] . ' </td>
                <td>' . $f['apartamento'] . ' </td>
                <td><a href="modificar-usuario.php?id=' . $f['identificacion'] . '" class="btn btn-primary"><i class="ti-pencil-alt">Editar</i></a></td>
                <td><a href="../../Controllers/eliminarUserAdmin.php?id=' . $f['identificacion'] . '" class="btn btn-danger"> <i class="ti-trash"></i>Eliminar</a></td>
            </tr>     
            ';
        }
    }
}

function cargarUsuariosexcel(){


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


// aterrizamos la pk enviada desde la tabla 
function cargarUsuarioEditar(){

    $identificacion = $_GET['id'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarUsuarioEditarAdmin($identificacion);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '
        
        <form action="../../Controllers/modificarCuentaAdmin.php" method="POST">
        <div class="row">
            <div class="form-group col-md-6">
                <label>identificacion:</label>
                <input type="number" value="' . $f['identificacion'] . '" class="form-control" readonly placeholder="Ej: 23554535354" name="identificacion">
            </div>
            <div class="form-group col-md-6">
                <label>Tipo de Documento:</label>
                <select name="tipo_doc" id="" class="form-control">
                    <option value="' . $f['tipo_doc'] . '"> ' . $f['tipo_doc'] . ' </option>
                    <option value="CC">CC</option>
                    <option value="CE">CE</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Nombres:</label>
                <input type="text" value="' . $f['nombres'] . '"  class="form-control" placeholder="Ej: Miguel Angel" name="nombres">
            </div>
            <div class="form-group col-md-6">
                <label>Apellidos:</label>
                <input type="text" value="' . $f['apellidos'] . '"  class="form-control" placeholder="Ej: Gallejo Restrepo" name="apellidos">
            </div>
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input type="email" value="' . $f['email'] . '" class="form-control" placeholder="Ej: example@example.com" name="email">
            </div>
            <div class="form-group col-md-6">
                <label>telefono:</label>
                <input type="number" value="' . $f['telefono'] . '" class="form-control" placeholder="Ej: 323 233 2333" name="telefono">
            </div>
            <div class="form-group col-md-6">
                <label>Roles:</label>
                <select name="Roles" id="rolSelect" class="form-control">
                    <option value="' . $f['rol'] . '"> ' . $f['rol'] . '</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Residente">Residente</option>
                    <option value="Seguridad">Seguridad</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Seleccione Estado:</label>
                <select name="Estado" id="" class="form-control">
                    <option value="' . $f['estado'] . '"> ' . $f['estado'] . ' </option>
                    <option value="Activo">Activo</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Bloqueado">Bloqueado</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Torre:</label>
                <input type="text" id="torreInput" value="' . $f['torre'] . '"  class="form-control" placeholder="Ej: A" name="torre">
            </div>
            <div class="form-group col-md-6">
                <label>Apartamento:</label>
                <input type="text" id="apartamentoInput" value="' . $f['apartamento'] . '"  class="form-control" placeholder="Ej: 101" name="apartamento">
            </div>

            
        </div>
        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Actualizar</button>
        <div class="register-link m-t-15 text-center">
            
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
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['identificacion'].'</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['tipo_doc'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['nombres'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['apellidos'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['email'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['telefono'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['rol'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['estado'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['torre'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['apartamento'].'</td>

            </tr>     
            ';
        }
    }
}



function cargarFotosVehiculo(){

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
                                <input type="text" class="form-control" value="' . $f['placa'] . '"  readonly placeholder="Ej: 23554535354" name="placa">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Marca:</label>
                                <input type="text" class="form-control" value="' . $f['marca'] . '"  readonly placeholder="Ej: 23554535354" name="marca">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Referencia:</label>
                                <input type="text" class="form-control" value="' . $f['referencia'] . '" readonly placeholder="Ej: Miguel Angel" name="referencia">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Modelo:</label>
                                <input type="text" class="form-control" value="' . $f['modelo'] . '"  readonly placeholder="Ej: Gallejo Restrepo" name="modelo">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Fecha Registro:</label>
                                <input type="text" class="form-control" value="' . $f['fecha'] . '" readonly placeholder="Ej: example@example.com" name="fecha">
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
                <input type="text" class="form-control" value="' . $f['nombres'] . '"  readonly placeholder="Ej: 23554535354" name="placa">
            </div>
            <div class="form-group col-md-6">
                <label>Apellidos:</label>
                <input type="text" class="form-control" value="' . $f['apellidos'] . '"  readonly placeholder="Ej: 23554535354" name="marca">
            </div>
            <div class="form-group col-md-6">
                <label>Correo:</label>
                <input type="email" class="form-control" value="' . $f['email'] . '" readonly placeholder="Ej: Miguel Angel" name="referencia">
            </div>
            <div class="form-group col-md-6">
                <label>Telefono:</label>
                <input type="text" class="form-control" value="' . $f['telefono'] . '"  readonly placeholder="Ej: Gallejo Restrepo" name="modelo">
            </div>
            
        </div>
                </div>
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
                <td style="text-align:center"><a href="modificar-novedad.php?id_nov=' . $f['id_nov'] . '&placa=' . $f['placa'] . '" class="btn btn-primary btn-editar" style="margin-right:15px"><i class="ti-pencil-alt">Editar</i></a><a href="../../Controllers/eliminarNovedadesAdmin.php?id_nov=' . $f['id_nov'] . '&placa=' . $f['placa'] . '" class="btn btn-danger"  style="margin-left:15px"> <i class="ti-trash"></i>Eliminar</a></td>

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
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="border:none">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="border:none; font-size: 18px">Información de Novedad</button>
                    </li>
                </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                    <form action="../../Controllers/modificarNovedadAdmin.php?id_nov=' . $f['id_nov'] . '&placa=' . $f['placa'] . '" method="POST">
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Placa:</label>
                            <input type="text" class="form-control" value="' . $f['placa'] . '"  readonly placeholder="Ej: 23554535354" name="placa">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Identificación del Personal de Seguridad:</label>
                            <input type="text" class="form-control" value="' . $f['identificacion'] . '"  readonly placeholder="Ej: 23554535354" name="identificacion">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Novedad:</label>
                            <input type="text" class="form-control" value="' . $f['novedad'] . '" placeholder="Ej: Espejo roto" name="novedad">
                        </div>

                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-editar" style="margin-left:7px">Modificar datos de la Novedad</button>
                    <div class="register-link m-t-15 text-center">
                        
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
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['id_nov'].'</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['placa'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['novedad'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['identificacion'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['nombres'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['fecha_rev'].'</td>

            </tr>     
            ';
        }
    }
}


function cargarVehiculos(){
    

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarVehiculosAdmin();

    if (!isset($result)) {
        echo '<h2> NO HAY VEHICULOS REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr><td style="text-align:center">' . $f['placa'] . '</td>
                <td style="text-align:center">' . $f['marca'] . ' </td>
                <td style="text-align:center">' . $f['referencia'] . '</td>
                <td style="text-align:center">' . $f['modelo'] . ' </td>
                <td style="text-align:center">' . $f['identificacion'] . ' </td>
                <td style="text-align:center">' . $f['fecha'] . ' </td>
                <td style="text-align:center"><a href="modificar-vehiculo.php?placa=' . $f['placa'] . '" class="btn btn-primary btn-editar" style="margin-right:15px"><i class="ti-pencil-alt"> Editar</i></a>
                <a href="../../Controllers/eliminarVehiculosAdmin.php?placa=' . $f['placa'] . '" class="btn btn-danger"data-toggle="tooltip" data-placement="left" title="Estás seguro de eliminar el vehiculo? Esto también eliminará las novedades que este tenga"  style="margin-left:15px;"> <i class="ti-trash"></i>Eliminar</a></td>
                <td style="text-align:center"><a href="ver-novedades.php?placa=' . $f['placa'] . '" class="btn btn-dark"><i class="ti-eye"></i> Ver Historial</a></td>
                <td style="text-align:center"><a href="fotos-vehiculo.php?placa=' . $f['placa'] . '" class="btn btn-primary btn-detalles"><i class="ti-eye"></i></a></td>

            </tr>     
            ';
        }
    }
}

function cargarVehiculoEditar(){

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
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="border:none">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="border: none; font-size:20px">Datos del vehiculo</button>
                    </li>
                </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                    <form action="../../Controllers/modificarVehiculoAdmin.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Placa:</label>
                            <input type="text" class="form-control" value="' . $f['placa'] . '"  readonly placeholder="Ej: 23554535354" name="placa">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Identificación de propietario:</label>
                            <input type="text" class="form-control" value="' . $f['identificacion'] . '"  readonly placeholder="Ej: 23554535354" name="identificacion">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Marca:</label>
                            <select name="marca" id="" class="form-control">
                                <option value="' . $f['marca'] . '">' . $f['marca'] . '</option>
                                <optgroup label="Marcas de Vehículos">
                        <option value="chevrolet">Chevrolet</option>
                        <option value="renault">Renault</option>
                        <option value="mazda">Mazda</option>
                        <option value="toyota">Toyota</option>
                        <option value="nissan">Nissan</option>
                        <option value="honda">Honda</option>
                        <option value="suzuki">Suzuki</option>
                        <option value="kia">Kia</option>
                        <option value="hyundai">Hyundai</option>
                        <option value="volkswagen">Volkswagen</option>
                        <option value="ford">Ford</option>
                        <option value="jeep">Jeep</option>
                        <option value="subaru">Subaru</option>
                        <option value="volvo">Volvo</option>
                        <option value="peugeot">Peugeot</option>
                        <option value="fiat">Fiat</option>
                        <option value="land-rover">Land Rover</option>
                        <option value="jaguar">Jaguar</option>
                        <option value="porsche">Porsche</option>
                        <option value="lexus">Lexus</option>
                        <option value="cadillac">Cadillac</option>
                        <option value="buick">Buick</option>
                        <option value="lincoln">Lincoln</option>
                        <option value="infiniti">Infiniti</option>
                        <option value="acura">Acura</option>
                        <option value="tesla">Tesla</option>
                        <option value="ram">Ram</option>
                        <option value="gmc">GMC</option>
                        <option value="chrysler">Chrysler</option>
                        <option value="dodge">Dodge</option>
                        <option value="maserati">Maserati</option>
                        <option value="alfa-romeo">Alfa Romeo</option>
                    </optgroup>
                    <optgroup label="Marcas de Motos">
                        <option value="honda-motos">Honda Motos</option>
                        <option value="yamaha-motos">Yamaha Motos</option>
                        <option value="suzuki-motos">Suzuki Motos</option>
                        <option value="kawasaki-motos">Kawasaki Motos</option>
                        <option value="ktm">KTM</option>
                        <option value="bajaj">Bajaj</option>
                        <option value="royal-enfield">Royal Enfield</option>
                        <option value="husqvarna">Husqvarna</option>
                        <option value="aprilia">Aprilia</option>
                        <option value="mv-agusta">MV Agusta</option>
                        <option value="triumph">Triumph</option>
                        <option value="harley-davidson">Harley-Davidson</option>
                        <option value="vespa">Vespa</option>
                        <option value="scooters">Scooters</option>
                        <option value="indian-motos">Indian Motos</option>
                        <option value="bmw-motos">BMW Motos</option>
                        <option value="ducati-motos">Ducati Motos</option>
                        <option value="kymco-motos">Kymco Motos</option>
                        </optgroup>
                            </select>
                        </div>
                        

                        <div class="form-group col-md-6">
                            <label>Referencia:</label>
                            <input type="text" class="form-control" value="' . $f['referencia'] . '" placeholder="Ej: Miguel Angel" name="referencia">

                        </div>
                        <div class="form-group col-md-6">
                            <label>Modelo:</label>
                            <input type="number" class="form-control" value="' . $f['modelo'] . '"  laceholder="Ej: Gallejo Restrepo" name="modelo">
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-editar" style="margin-left:7px">Modificar datos del Vehiculo</button>
                    <div class="register-link m-t-15 text-center">
                        
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


function cargarPublicaciones(){


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr style="">
               
              
                <td style="color: black">' . $f['titulo'] . ' </td>
                <td style="color: black">' . $f['descripcion'] . '</td>
             
                <td class="d-flex gap-3" style="margin-left: 170px ">
                <a href="modificar-publi.php?id_publi=' . $f['id_publi'] . '" class="btn btn-editar"><i class="ti-pencil-alt" >Editar</i></a> 
                 <a href="../../Controllers/eliminarPubli.php?id_publi=' . $f['id_publi'] . '" class="btn btn-danger" style="margin-left: 50px"> <i class="ti-trash"></i>Eliminar</a>
                 </td>
            </tr>     
            ';
        }
    }
}


function cargarPubliEditar(){

    $id_publi = $_GET['id_publi'];

    //enviamos la pk A UNA funcion de la clase consultas 

    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPubliEditar($id_publi);

    //pintamos la informacion  consultada en el artefacto (FORM)

    foreach ($result as $f) {
        echo '

                        <section id="main-content">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-publi">
                                        <div class="card-title">
                                            
                                            
                                        </div>


                        <form action="../../Controllers/modificarpubli.php?id_publi='.$id_publi.'" method="POST">
                        <div class="row">


                            <div class="form-group col-md-12">
                                <label><strong>Titulo:</strong></label>
                                <input type="text" class="form-control" value="' . $f['titulo'] . '" placeholder="Ej: No va haber luz de las 7pm a 10pm. " name="titulo">
                            </div>
                        
                            <div class="form-group col-md-12 ">
                                <label><strong>Descripcion:</strong></label>
                                <input type="textarea" class="form-control des" cols="30" rows="3" value="' . $f['descripcion'] . '"  placeholder="Ej: Profundiza la situacion" name="descripcion">
                            
                            </div>

                            
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Actualizar</button>
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

function cargarPublicacionesPDF(){
    $objConsultas = new Consultas();
    $result = $objConsultas-> mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADAS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">'. $f['id_publi'].'</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['titulo'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['descripcion'].'</td>
               
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

                <ul>
                    <li>
                        <a href="perfil.php?id=' . $f['identificacion'] . '"><i class="ti-write"></i>Editar Cuenta</a>
                    </li>
                    <li>
                        <a href="../../Controllers/cerrarSesion.php">
                        <i class="ti-close"></i>Cerrar Sesion</a>
                    </li>
                </ul>

            </a>
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
                <td class="d-flex col-md-2 justify-content-center">' . $f['torre'] . '</td>
                <td class="d-flex col-md-2 justify-content-center">' . $f['apartamento'] . ' </td>
                <td class="d-flex col-md-2 justify-content-center">' . $f['fecha'] . '</td>
                <td class="d-flex col-md-2 justify-content-center">' . $f['remitente'] . ' </td>
                <td class="d-flex col-md-2 justify-content-center">' . $f['nombres'] . ' ' . $f['apellidos'].' </td> 
                <td class="d-flex col-md-2 justify-content-center"><a aria-label="Chat on WhatsApp" target="_blank" data-bs-toggle="tooltip" data-bs-title="Default tooltip" href="https://wa.me/57' . $f['telefono'] . '"><img class="whatsapp" style="width: 30px; height: 30px; "  alt="Chat on WhatsApp" src="../../assets/icons/whatsapp.png" />
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
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">'. $f['id'].'</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['torre'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['apartamento'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['fecha'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['remitente'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['nombres']. ' ' . $f['apellidos'] .'</td>
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
            <article class="box-cont p-4 px-4 my-5" style="-webkit-border-radius:  0.625rem; -moz-border-radius:  0.625rem; border-radius:  0.625rem; box-shadow: 6px 6px 36px #e3e3e3,
            -6px -6px 36px #ffffff">
                <header class="w-100 p-2 border-2 border-bottom border-dark">
                    <h3>' . $f['id_reserva'] . '</h3>
                </header>
                <div class="h-auto row d-flex p-2">
                                <section class="col p-2 border-end border-primary">
                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/tarjeta.png"  alt="building" class="imgSC" style="width: 30px; height: 30px;" >
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Identificacion</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['identificacion'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/usuario.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Nombre</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['nombres'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/firma.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Apellidos</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['apellidos'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/telefono.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Telefono</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['telefono'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/correo.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Correo</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['email'] . '</p>
                                        </div>
                                    </div>
                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/diaReserva.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Dia Reserva</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['dia_reserva'] . '</p>
                                        </div>
                                    </div>
                                </section>
                                <section class="col p-2">
                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/torre.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Torre</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['torre'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/apartamento.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Apartamento</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['apartamento'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/horaInicio.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Hora Inicio</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['hora_inicio'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/123.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Hora Finalización</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['hora_finalizacion'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/1.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Mesas</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['mesas'] . '</p>
                                        </div>
                                    </div>
                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/iconSalonComunal/silla.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Sillas</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['sillas'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                    <div class"w-50 d-flex p-2" style="align-items: center;">
                                        <img  src="../../assets/icons/iconSalonComunal/cartel.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                        <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Tipo de Evento</p>
                                    </div>
                                    <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                        <p class="fs-6" style="position:relative; top: 9px">' . $f['tipo_evento'] . '</p>
                                    </div>
                                </div>

                                    <div class="h-auto row d-flex p-2">
                                    <section class="col p-2 border-end border-primary">
                                        <!-- Botón "Eliminar" en la esquina superior izquierda -->
                                        <div style="position: absolute; top: 10px; left: 10px;">
                                         <a href="../../Controllers/eliminarDiaReservadoSC.php?id=' . $f['id_reserva'] . '" class="btn btn-danger">Eliminar</a>

                                        </div>


                                    <section class="col p-2">
                                        <!-- Botón "Modificar" en la esquina superior derecha -->
                                        <div style="position: absolute; top: 10px; right: 10px;">
                                        <a href="modificar-reservaSC.php?id=' . $f['id_reserva'] . '" class="btn btn-primary">Modificar</a>
                                            
                                        </div>
                                        
                                </section>
                         </div>
              </article>
            ';
        }
    }
}
    function cargarReservaEditar(){
        $id_reserva =$_GET['id'];

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
                    <div class="form-floating">
                    <label for="identificacion" style="font-weight: bold; color: #333;">Identificación</label>
                        <input type="number" class="form-control" value="'.$f['identificacion'] .'" id="identificacion" name="identificacion" placeholder="0123456789" readonly style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;" >
                        
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-floating">
                    <label for="dia_reserva" style="font-weight: bold; color: #333;">Día de Reserva</label>
                        <input type="date" class="form-control" value="'.$f['dia_reserva'] .'" id="dia_reserva" name="dia_reserva" readonly required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="form-floating">
                    <label for="hora_inicio" style="font-weight: bold; color: #333;">Hora de Inicio</label>
                        <input type="time" class="form-control" value="'.$f['hora_inicio'] .'" id="hora_inicio" name="hora_inicio" required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                    <label for="hora_finalizacion" style="font-weight: bold; color: #333;">Hora de Finalización</label>
                        <input type="time" class="form-control" value="'.$f['hora_finalizacion'] .'" id="hora_finalizacion" name="hora_finalizacion" value="03:00:00" required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                    <label for="mesas" style="font-weight: bold; color: #333;">Mesas</label>
                        <input type="number" class="form-control"  value="'.$f['mesas'] .'" id="mesas" name="mesas" required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                    <label for="sillas" style="font-weight: bold; color: #333;">Sillas</label>
                        <input type="number" class="form-control" value="'.$f['sillas'] .'" id="sillas" name="sillas" required style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;" >
                        
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
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">'. $f['id_reserva'].'</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['identificacion'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['nombres'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['apellidos'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['telefono'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['email'].'</td>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">'. $f['dia_reserva'].'</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['torre'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['apartamento'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['hora_inicio'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['hora_finalizacion'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['mesas'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['sillas'].'</td>

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
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">'. $f['id_reserva'].'</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['identificacion'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['nombre'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['apellidos'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['telefonos'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['correo'].'</td>
                <th style="padding: 8px; border-top: 1px solid #dee2e6;">'. $f['dia_reserva'].'</th>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['torre'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['apartamento'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['hora_inicio'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['hora_finalizacion'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['mesas'].'</td>
                <td style="padding: 8px; border-top: 1px solid #dee2e6;">'.$f['sillas'].'</td>

            </tr>       
            ';
        }
    }
}

?>