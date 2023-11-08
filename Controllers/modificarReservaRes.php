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
    $dia_reserva = $_POST['dia_reserva'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_finalizacion = $_POST['hora_finalizacion'];
    $mesas = $_POST['mesas'];
    $sillas = $_POST['sillas'];
    $tipo_evento = $_POST['tipo_evento'];






    // ------------------------------------------
    // Verificamos que las claves coincidan

    //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
    if (
        strlen('identificacion') > 0 && strlen('dia_reserva') > 0 && strlen('hora_inicio') > 0 &&
        strlen('hora_finalizacion') > 0 && strlen('mesas') > 0 && strlen('sillas') > 0 && strlen('tipo_evento') > 0
    ) {

        //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
        //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

        $objConsultas = new Consultas();
        $result = $objConsultas->modificarReservaRes($dia_reserva, $identificacion, $hora_inicio, $hora_finalizacion, $mesas, $sillas, $tipo_evento);
    } else {
        echo '<script>alert("Por favor complete todos los campos")</script>';
        echo "<script>location.href='../Views/Residente/ver-reservaSC.php'</script>";
    }


    ?>

</body>
</html>
