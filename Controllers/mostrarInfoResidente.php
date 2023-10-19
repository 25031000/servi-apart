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
                        <article id="art" class=" col-12 col-lg-4 col-md-6   p-4 mb-5 d-flex flex-column ms-2 justify-content-start h-auto border">
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


function cargarInfoUsuarios(){
    $objConsultas = new Consultas();
   
    $identificacion = $_SESSION['id']; // Reemplaza 'valor_de_identificacion' con el ID que deseas buscar

    $result = $objConsultas->mostrarUsuarioRes($identificacion);

    if (!isset($result)) {
        echo '<h2> NO HAY USUARIOS REGISTRADOS </h2>';
    } else {
        /* foreach ($result as $f) {
            echo '
            <tr>
                
                <td>' . $f['nombres'] . '</td>
                <td>' . $f['apellidos'] . '</td>
            </tr>';
        } */
        return $result;
    }
}






function cargarVehiculosResidente(){
    $objConsultas = new Consultas();
    
    $identificacion = $_SESSION['id'];

    $result = $objConsultas->mostrarVehiculosRes($identificacion);

    if (!isset($result)) {
        echo '<h2>No hay vehiculos registrados en el sistema</h2>';
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
                <td style="text-align:center">' . $f['fecha'] . ' </td>
                <td style="text-align:center"><a href="ver-novedades.php?placa=' . $f['placa'] . '" class="btn btn-dark"><i class="ti-eye"></i> Ver Historial</a></td>
                <td style="text-align:center"><a href="fotos-vehiculo.php?placa=' . $f['placa'] . '" class="btn btn-primary btn-detalles"><i class="ti-eye"></i></a></td>

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

?>

