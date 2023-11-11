<?php
            require_once("../../Models/seguridadResidente.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../components/css/header.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../../components/css/menu.css">
    <link rel="stylesheet" href="./css/paqueteria.css">
    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <!-- boxicons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Ver reservas</title>
</head>

<body>
    <?php
    
            /* session_start(); */
            $identificacion = $_SESSION['id'];

            

    //menu
    include '../../components/menu.php';
    //header
    include '../../components/headerInclude.php';
?>

<main class="container-fluid primary d-flex flex-wrap justify-content-between"> <!-- Cambia 'rimary' por 'primary' en la clase -->
    <div class="col-md-6">
        <h2 class="my-5 ms-5 mb-3 d-block w-100"><strong>Reservas realizadas</strong></h2>
    </div>
    <div class="col-md-6 text-md-end">
        <a href="salon-comunal.php" class="btn btn-outline-info mt-4 me-5">Regresar</a>
    </div>

        <?php
            require_once "../../Controllers/mostrarInfoResidente.php";
            require_once("../../Models/seguridadResidente.php");
            require_once("../../Models/consultas.php");

            
            cargarReservaRes($identificacion);
        ?>

    </main>




    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>

    <script src="./js/paqueteria.js">

    </script>
</body>

</html>