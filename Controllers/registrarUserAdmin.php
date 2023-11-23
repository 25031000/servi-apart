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
    $clave = $_POST['identificacion'];
    $estado = $_POST['Estado'];


    

    // ------------------------------------------
// Verificamos que las claves coincidan
    
    //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
    if (
        strlen($identificacion) > 0 && strlen($tipo_doc) > 0
        && strlen($nombres) > 0 && strlen($apellidos) > 0
        && strlen($email) > 0 && strlen($telefono) > 0
        && strlen($clave) > 0 && strlen($rol) > 0 
        && strlen($estado) > 0
    ) {

        $claveMd = md5($clave);


        if ($rol == "Residente") {
            $torre = $_POST['torre'];
            $apartamento = $_POST['apartamento'];
        } else {
            // Si no es residente, asignamos valores por defecto o como sea necesario
            $torre = null;
            $apartamento = null;
        }

        //CREAMOS UNA VARIABLE PARA DEFINIR LA RUTA DONDE QUEDARA ALOJADA LA IMAGEN
        $foto = "../Uploads/Usuarios/" . $_FILES['foto']['name'];
        //MOVEMOS EL ARCHIVO A LA CARPETA UPLOADS Y LA CARPETA USUARIOS
    
        $mover = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

        //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
        //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)
    
        $objConsultas = new Consultas();
        $result = $objConsultas->insertarUserAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $claveMd, $rol, $estado, $torre, $apartamento, $foto);

    } else {
        echo "
            
        <script>

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Error al registrar el usuario. Verifica que todos los campos estan completos',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = '../Views/Administrador/registrar-usuario.php';
            }

        })
        </script>
        ";
    }


    ?>

</body>

</html>