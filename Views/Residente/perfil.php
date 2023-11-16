<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">

    <!-- Custom styles -->
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">
    <link rel="stylesheet" href="./css/perfil.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php
    include '../../components/menuPS.php';
    include '../../components/headerIncludePS.php';
    ?>


    <main class="container-fluid content row p- mx-auto">
        <section class="picture_wrapper col-lg-5  d-flex justify-content-center align-items-center">
            <div class="img_content w-75 d-flex flex-column h-75 justify-content-center align-items-center">
                <div class="gray_radius position-relative">
                    <div class="camera_wrapper">
                        <img src="./images/camera-icon.png" alt="">
                        <input role="button" onchange="getData(this)" type="file">
                    </div>
                    <div class="white_radius ">
                        <img style="width: 290px; height: 290px;" src="./images/profile.png" alt="">
                    </div>
                </div>
                <div class="username_wrapper">
                    <div class="w-100 text-center">
                        <h4>Camilo Pinilla</h4>
                    </div>
                    <div class="w-100 text-center">
                        <h6>Residente</h6>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="form_wrapper p-0 col-lg-7 border position-relative border-primary d-flex flex-column justify-content-center">

            <form action="../../Controllers/modificarFotoPerfil.php" method="post"
                class="border border-success p-0 py-4 d-flex flex-column gap-5">
                <section class="desicion_icons_wrp justify-content-end d-flex">
                    <button type="submit">
                        <img src="./icons/Tick.png" role="button" class="m-2" alt="">
                    </button>
                    <img src="./icons/Cancel.png" role="button" type="reset" class="m-2" alt="">
                </section>
                <div class="w-100 row px-2 m-0 ">
                    <div class="input_wrapper col-md-4 mb-3">
                        <label for="" class="mb-2">Nombres</label>
                        <input type="text" name="nombres" placeholder="Ronald">
                    </div>
                    <div class="input_wrapper col-md-4 mb-3">
                        <label for="" class="mb-2">Apellidos</label>
                        <input type="text" name="apellidos" placeholder="Rodriguez">
                    </div>
                    <div class="input_wrapper col-md-4 mb-3">
                        <label for="" class="mb-2">Email</label>
                        <input type="text" name="email" placeholder="ronal@gmail.com">
                    </div>
                </div>
                <div class="w-100 row px-2 m-0 ">
                    <div class="input_wrapper col-md-4 mb-3">
                        <label for="" class="mb-2">Telefono</label>
                        <input type="text" name="telefono" placeholder="32111445">
                    </div>
                    <div class="input_wrapper col-md-4 mb-3">
                        <label for="" class="mb-2">Torre</label>
                        <input type="text" name="torre" placeholder="1">
                    </div>
                    <div class="input_wrapper col-md-4 mb-3">
                        <label for="" class="mb-2">Apartamento</label>
                        <input type="text" name="apartamento" placeholder="234">
                    </div>
                </div>
                <div>
                    <p class="ps-4 m-0">Restablecer contrasena</p>
                    <section
                        class="pass_edit w-100 row p-4 m-0 justify-content-between gap-3 flex-nowrap align-items-center">
                        <div
                            class="pass_section rounded-4 justify-content-around p-3 gap-3 col-md-8 d-flex flex-nowrap">
                            <div class="input_wrapper  mb-3 col-md-5">
                                <label for="" class="mb-2">Contrasena nueva</label>
                                <input type="password" name="password" placeholder="******">
                            </div>
                            <div class="input_wrapper  mb-3 col-md-5">
                                <label for="" class="mb-2">Confirmar contrasena</label>
                                <input type="password" name="password-verifier" placeholder="******">
                            </div>
                        </div>

                        <div class="type_wrapper rounded-3 col-md-4 text-center py-3 d-flex flex-column">
                            <label for="" class="mb-2 w-100">Tipo de documento</label>
                            <section style="min-height: 48px;"
                                class="inputs_wrapper px-3 w-100 d-flex flex-nowrap justify-content-center gap-2">
                                <div onclick="checked(this)" role="button" class="check_wrapper border rounded-3 p-2 ">
                                    <small>CC</small>
                                    <input type="radio" name="type" value="cc">
                                </div>
                                <div onclick="checked(this)" role="button" class="check_wrapper border rounded-3 p-2 ">
                                    <small>CE</small>
                                    <input type="radio" name="type" value="ce">
                                </div>
                                <div onclick="checked(this)" role="button" class="check_wrapper border rounded-3 p-2 ">
                                    <small>PS</small>
                                    <input type="radio" name="type" value="ps">
                                </div>
                            </section>

                        </div>
                    </section>

                </div>
            </form>

        </section>
    </main>


    <script>

        const radioBtnContainer = document.querySelectorAll(".check_wrapper")

        window.onload = () => {
            const file = document.querySelector("input[type=file]")

            function getData(item) {
                console.log(item.files[0]);
            }



            const radioBtnContainer = document.querySelectorAll(".check_wrapper")
            const radioInput = document.querySelectorAll("input[type=radio]")

            radioBtnContainer.forEach(item => {
                item.addEventListener('click', () => {
                    radioInput.forEach(i => {
                        i.checked = false;
                      
                    })

                    const input = item.childNodes[3]

                    input.checked ? input.checked = false : input.checked = true;
                })
            });


        }


        function checked(i) {
            radioBtnContainer.forEach(element => {
                element.style.boxShadow = "none";
                element.style.boderColor = "transparent"
            });
            //i.classList.add("border-primary")

            i.style.boxShadow = "0 0 0 0.2rem rgba(0, 255, 98, 0.308)";
            i.style.boderColor = "#00ff37"
        }

    </script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>



    <script src="../Dashboard/js/scripts.js"></script>
</body>

</html>