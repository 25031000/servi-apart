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
    *,
    html,
    body {
        font-family: 'Varela Round', sans-serif;
    }
</style>

<body>
    <?php

    // Enlazamos las dependencias necesario
    require_once("../Models/conexion.php");
    require_once("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos
    
    $id_peticion = $_GET['id_peticion'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
   

    // ------------------------------------------
    // Verificamos que las claves coincidan
    
    //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
    if (
        strlen($id_peticion) > 0 && strlen($titulo) > 0
         && strlen($descripcion) > 0
    ) {

        //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
        //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)
    
        $objConsultas = new Consultas();
        $result = $objConsultas->modificarPeticion($id_peticion, $titulo, $descripcion);


    } else {
        echo '<script>
                
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Error al editar la petición. Verifica que todos los campos esten completos",
                confirmButtonText: "Ok"
            }).then((result)=>{
                if(result.isConfirmed){
                   location.href="../Views/Residente/modificar-peticion.php?id_peticion='.$id_peticion.'"; 
                }
                
            })
        </script>';
    }


    ?>




</body>

</html>