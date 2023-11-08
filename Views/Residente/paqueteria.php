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
    <title>Paqueteria</title>
</head>

<body>
    <?php
            session_start();    
            $id = $_SESSION['id'];
    //menu
    include '../../components/menu.php';
    //header
    include '../../components/headerInclude.php';
?>

    <main class="container rimary d-flex flex-wrap justify-content-center">
        <h2 class="my-5 ms-5 mb-3 d-block w-100"><strong>Paquetes recibidos</strong></h2>
        <div class="d-flex w-100 mb-2 ms-5 my-3 align-items-center history-content">
            <box-icon role="button" name='history' class=" d-inline-flex my-auto history-icon"
                color='#a8a6a6'></box-icon>
            <small role="button" class=" d-inline-flex ms-2 history-text" style="color: #a8a6a6;">Limpiar
                historial</small>
        </div>
        <?php
            require_once "../../Controllers/mostrarInfoResidente.php";
            
            cargarPaquetesRes($id);
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