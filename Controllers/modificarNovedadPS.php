<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <title>Servi - Apart</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../assets/icons/ico.ico">
</head>
<style>
    *, html, body{
        font-family: 'Varela Round', sans-serif;
    }
</style>

<body>
<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos

    $id_nov = $_GET['id_nov'];
    $placa = $_GET['placa'];
    $identificacion = $_POST['identificacion'];
    $novedad = $_POST['novedad'];

    
       // ------------------------------------------
    // Verificamos que las claves coincidan
    
    //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
    if (strlen($novedad) > 0) {
        if ($_FILES['fotoR']['size'] > 0) {
            $fotoR = "../Uploads/Novedades/" . $_FILES['fotoR']['name'];
            $mover = move_uploaded_file($_FILES['fotoR']['tmp_name'], $fotoR);
        }
        else {
            // Si no se ha seleccionado un archivo, seleccionar la fotoR antigua
            $objConsultas = new Consultas();
            $fotoR = $objConsultas->obtenerFotoAntigua($id_nov);
            
        }

        //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
        //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)
        $objConsultas = new Consultas();
        $result = $objConsultas->modificarNovedadesPS($id_nov, $placa, $identificacion, $novedad, $fotoR);



        }else{
            echo '<script>
                
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Verifica que todos los campos estan completos",
                confirmButtonText: "Ok"
            }).then((result)=>{
                if(result.isConfirmed){
                   location.href="../Views/Seguridad/modificar-novedad.php?id_nov='.$id_nov.'"; 
                }
                
            })
        </script>';
        }


?>
</body>
</html>