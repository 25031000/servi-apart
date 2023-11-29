<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadPS.php");
require_once("../../Controllers/mostrarInfoGuarda.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servi - Apart</title>

    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom styles -->
    <link rel="stylesheet" href="./css/paqueteria.css">
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">

    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- boxicons
 -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');

        * {
            box-sizing: border-box;
        }

        label,
        p,
        small {
            font-family: 'Roboto', sans-serif !important;
            font-weight: 300 !important;
        }

        .empty_mailbox{
                max-width: 500px;
                max-height: 500px ;
            }

        @media (max-width: 764px){
            .empty_mailbox{
                max-width: 200px !important;
                max-height: 200px !important;
            }
        }


        @media (max-width: 768px){
            .filters_wrapper{
                width: 100%;
                margin-top: 50px;
            }
        }
    </style>
</head>

<body>
    <?php
    include '../../components/menuPS.php';
    include '../../components/headerIncludePS.php';
    ?>

    <main class="container d-flex flex-wrap justify-content-center mt-5 ">
        <h1 class="w-100 ms-md-5 text-center mb-3"><strong>Paqueteria registrada</strong></h1>
        <div class="para_wrapper px-md-4 d-flex position-relative  justify-content-between align-items-center w-100">
            <section class="filters_wrapper  p-0 m-0 ">
                <ul class="d-md-flex gap-2 h-100 p-0 m-0 mt-3 mt-md-0 align-items-center justify-content-center">
                    <li class="py-2 px-3  rounded-2 d-flex align-items-center gap-1" style="list-style: none;"><i id="filter_btn" role="button" class='bx bx-filter  pt-1' style='color:#141313; font-size: 1.8rem !important; transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1)'></i><small>Filtros</small></li>
                    <li data-mood="hoy" class="py-2 px-3  rounded-2 filter_item " role="button" style="list-style: none; display: none;" onclick="filterSearch(this)">Hoy</li>
                    <li data-mood="semana" class="py-2 px-3  rounded-2 filter_item " role="button" style="list-style: none; display: none;" onclick="filterSearch(this)">Esta semana</li>
                    <li data-mood="mes" class="py-2 px-3  rounded-2 filter_item " role="button" style="list-style: none; display: none;" onclick="filterSearch(this)">Este mes</li>
                    <li data-mood="todos" class="py-2 px-3  rounded-2 filter_item " role="button" style="list-style: none; display: none;" onclick="filterSearch(this)">Todos</li>
                </ul>
            </section>

            <a href="registrar-paquete.php" class="my-2 position-md-relative position-absolute top-0 end-0" style="text-decoration: none;" data-toggle="tooltip" data-placement="left" title="Registrar paquete">
                <div role="button" class="p-2 d-flex justify-content-center  align-items-center" style="border-radius: 50%; background: #00BF63">
                    <i class='bx bx-plus bx-sm p-0 m-0' style='color:#ffffff'></i>
                </div>
            </a>

        </div>
        <section class="container d-flex flex-wrap justify-content-center mt-3  registers_wrapper">
            <?php
            cargarPaquetePS();

            ?>
        </section>


    </main>

    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../Dashboard/js/scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })


        $("#filter_btn").on('click', function() {
            $(".filter_item").fadeToggle({
                easing: "linear"
            })
            let icon = $(this)[0]
            icon.classList.toggle("filter_icon")
        })

        //filter fetch

        //const dataType = document.querySelector("li").dataset.mood;
        const fetchFilter = async (options) => {
            try {
                const response = await (await fetch('../../Controllers/packageFilter.php', options)).text();
                console.log(response);
                document.querySelector(".registers_wrapper").innerHTML = response;

            } catch (error) {
                console.log(error);
            }
        }

        function filterSearch(i) {
            console.log(i);
            let value = i.dataset.mood;

            const fetchOptions = {
                "method": "POST",
                "headers": {
                    "content-type": "text/plane"
                },
                "body": value
            }

            fetchFilter(fetchOptions)
        }
    </script>


</body>

</html>