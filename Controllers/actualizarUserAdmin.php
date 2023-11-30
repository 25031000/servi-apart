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
    
    $identificacion = $_POST['identificacion'];
    $tipo_doc = $_POST['tipo_doc'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $rol = $_POST['Roles'];
    $estado = $_POST['Estado'];

    // ------------------------------------------
    // Verificamos que las claves coincidan
    
    //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
    if (
        strlen($identificacion) > 0 && strlen($tipo_doc) > 0
        && strlen($nombres) > 0 && strlen($apellidos) > 0
        && strlen($email) > 0 && strlen($telefono) > 0
        && strlen($rol) > 0 && strlen($estado) > 0
    ) {

        //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
        //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)
    
        $objConsultas = new Consultas();
        $result = $objConsultas->actualizarUserAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $rol, $estado);


    } else {

        echo "
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Error al modificar el usuario. Verifica que todos los campos estan completos',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = '../Views/Administrador/modificar-usuario.php?identificacion=$identificacion';
            }
        });
    </script>";
    }


    ?>

</body>

</html>