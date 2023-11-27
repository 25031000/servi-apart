
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../components/css/header.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../../components/css/menu.css">
    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <!-- boxicons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Servi - Apart</title>
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">
    <link rel="stylesheet" href="../../assets/css/stylesPagoss.css">
   

</head>
<?php
            session_start();    
            $id = $_SESSION['id'];
    //menu
    include '../../components/menu.php';
    //header
    include '../../components/headerInclude.php';
?>

<body>
<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">Información personal</h3>

                <div class="inputBox">
                    <span>Nombre completo:</span>
                    <input type="text" placeholder="john doe">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>Dirección :</span>
                    <input type="text" placeholder="Calle 10 #65-14">
                </div>
                <div class="inputBox">
                    <span>Ciudad :</span>
                    <input type="text" placeholder="Bogota">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Barrio :</span>
                        <input type="text" placeholder="Kennedy">
                    </div>
                    <div class="inputBox">
                        <span>Código postal :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Pago</h3>

                <div class="inputBox">
                    <span>Tarjetas aceptadas :</span>
                    <img src="../../assets/img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nombre de la tarjeta :</span>
                    <input type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>Número de la tarjeta :</span>
                    <input type="number" placeholder="0000-0000-0000-0000">
                </div>
                <div class="inputBox">
                    <span>Mes de expedición :</span>
                    <input type="text" placeholder="Enero">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Año expedición :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="Proceder con el pago" class="submit-btn">

    </form>

</div>    


    <!-- Common -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>

    <script src="./js/paqueteria.js">

    </script>
</body>

</html>