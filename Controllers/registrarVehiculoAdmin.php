<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src="sweetalert2.all.min.js"></script>
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

    // Enlazamos las dependencias necesarias
    require_once("../Models/conexion.php");
    require_once("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos
    
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $referencia = $_POST['referencia'];
    $modelo = $_POST['modelo'];
    $identificacion = $_POST['identificacion'];
    $foto1 = $_POST['foto1'];
    $foto2 = $_POST['foto2'];
    $foto3 = $_POST['foto3'];
    $foto4 = $_POST['foto4'];

    // ------------------------------------------
    
    //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
    if (
        strlen($placa) > 0 && strlen($marca) > 0
        && strlen($referencia) > 0 && strlen($modelo) > 0
        && strlen($identificacion) > 0 && strlen($foto1) > 0
        && strlen($foto2) > 0 && strlen($foto3) > 0
        && strlen($foto4) > 0
    ) {


        //CREAMOS UNA VARIABLE PARA DEFINIR LA RUTA DONDE QUEDARA ALOJADA LA IMAGEN
        //MOVEMOS EL ARCHIVO A LA CARPETA UPLOADS Y LA CARPETA USUARIOS
        $foto1 = "../Uploads/vehiculos/" . $_FILES['foto1']['name'];
        $mover = move_uploaded_file($_FILES['foto1']['tmp_name'], $foto1);

        $foto2 = "../Uploads/vehiculos/" . $_FILES['foto2']['name'];
        $mover = move_uploaded_file($_FILES['foto2']['tmp_name'], $foto2);

        $foto3 = "../Uploads/vehiculos/" . $_FILES['foto3']['name'];
        $mover = move_uploaded_file($_FILES['foto3']['tmp_name'], $foto3);

        $foto4 = "../Uploads/vehiculos/" . $_FILES['foto4']['name'];
        $mover = move_uploaded_file($_FILES['foto4']['tmp_name'], $foto4);


        //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
        //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)
    
        $objConsultas = new Consultas();
        $result = $objConsultas->registrarVehiculoAdmin($placa, $marca, $referencia, $modelo, $identificacion, $foto1, $foto2, $foto3, $foto4);

    } else {
        ?>
        <script>

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error al registrar el vehiculo. Verifica que todos los campos estan completos',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = '../Views/Administrador/registrar-vehiculo.php';
                }

            })
        </script>
    <?php
    }

    ?>


</body>

</html>