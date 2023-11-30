<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servi - Apart</title>

    <!-- icono -->
    <link rel="shortcut icon" href="../../assets/icons/ico.ico">

    <!-- Custom styles -->
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">
    <link rel="stylesheet" href="./css/perfil.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- BOXICONS CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    require_once "../../Models/seguridadPS.php";
    require_once "../../Models/conexion.php";
    require_once "../../Models/consultas.php";
    $user_id = $_SESSION['id'];

    $objetoConsulta = new Consultas();
    $userInfo = $objetoConsulta->mostrarUsuarioEditarAdmin($user_id)[0];
    include '../../components/menu.php';
    include '../../components/headerIncludePS.php';

    ?>


    <main class="container-fluid content row p- mx-auto">
        <section class="picture_wrapper col-lg-5  d-flex justify-content-center align-items-center">
            <form class="img_content w-75 d-flex flex-column h-75 mt-5 mt-lg-0 justify-content-center align-items-center" enctype="multipart/form-data">
                <div class="gray_radius position-relative">
                    <div class="camera_wrapper">
                        <img src="./images/camera-icon.png" alt="">
                        <input role="button" id="input_img" accept=".jpeg, .jpg, .png, .gif" type="file">
                    </div>
                    <div class="white_radius ">
                    <?php
                        if (!$userInfo['foto']) {
                        ?>
                            <div style="width: 290px; height: 290px; border-radius: 50%; font-size: 5rem" class=" ml-5 bg bg-primary d-flex align-items-center justify-content-center text-white"><?php echo $userInfo['nombres'][0] ?></div>
                        <?php
                        } else {
                        ?>
                            <img width="290" height="290" style="border-radius: 50%;" class="ml-3 ml-5" src="../<?php echo $userInfo['foto'] ?>" alt="">
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="username_wrapper">
                    <div class="w-100 text-center">
                        <h4><?php echo $userInfo['nombres'] . " " . $userInfo['apellidos'] ?></h4>
                    </div>
                    <div class="w-100 text-center">
                        <h6><?php echo $userInfo['rol'] ?></h6>
                    </div>
                </div>
            </form>
        </section>
        <section class="form_wrapper p-0 col-lg-7 position-relative  d-flex flex-column justify-content-center">

            <form action="../../Controllers/editarPerfilPS.php?user=<?php echo $user_id ?>" method="post" class="border border border-top-0 border-bottom-0 border-end-0  p-0 py-4 d-flex flex-column gap-5">
                <section class="desicion_icons_wrp justify-content-end d-flex">
                    <button type="submit" class="submit-btn me-2 bg-transparent">
                        <!-- <img src="./icons/Tick.png" role="button" class="m-2" alt=""> -->
                        <i class='bx bx-check bx-md'></i>
                    </button>
                    <button type="reset" class="reset-btn me-2 bg-transparent ">
                        <i onclick="reset(this)" class='bx bx-x bx-md'></i>
                    </button>
                </section>
                <div class="w-100 row px-2 m-0 ">
                    <div class="input_wrapper col-md-6  mb-3">
                        <label for="" class="mb-2">Nombres</label>
                        <input type="text" value="<?php echo $userInfo['nombres'] ?>" name="nombres" placeholder="Ronald">
                    </div>
                    <div class="input_wrapper col-md-6  mb-3">
                        <label for="" class="mb-2">Apellidos</label>
                        <input type="text" value="<?php echo $userInfo['apellidos'] ?>" name="apellidos" placeholder="Rodriguez">
                    </div>
                    
                </div>
                <div class="w-100 row px-2 m-0 ">
                    <div class="input_wrapper col-md-6  mb-3">
                        <label for="" class="mb-2">Telefono</label>
                        <input type="text" value="<?php echo $userInfo['telefono'] ?>" name="telefono" placeholder="32111445">
                    </div>
                    <div class="input_wrapper col-md-6  mb-3">
                        <label for="" class="mb-2">Email</label>
                        <input type="text" value="<?php echo $userInfo['email'] ?>" name="email" placeholder="ronal@gmail.com">
                    </div>
                </div>
                <div>
                    <p class="ps-4 m-0">Restablecer contrasena</p>
                    <section class="pass_edit w-100 row p-4 m-0 justify-content-between gap-3 flex-md-nowrap align-items-center">
                        <div class="pass_section rounded-4 justify-content-around p-3 gap-3 col-12 col-md-8 d-flex flex-column flex-md-row flex-md-nowrap">
                            <div class="input_wrapper  mb-3 col-md-5">
                                <label for="" class="mb-2">Contrasena nueva</label>
                                <input type="password" name="password" placeholder="******">
                            </div>
                            <div class="input_wrapper  mb-3  col-md-5">
                                <label for="" class="mb-2">Confirmar contrasena</label>
                                <input type="password" name="password-verifier" placeholder="******">
                            </div>
                        </div>

                        <div class="type_wrapper rounded-3 col-md-4 col-12 text-center py-3 d-flex flex-column">
                            <label for="" class="mb-2 w-100">Tipo de documento</label>
                            <section style="min-height: 48px;" class="inputs_wrapper px-3 w-100 d-flex flex-nowrap justify-content-center gap-2">
                                <div onclick="checked(this)" role="button" class="check_wrapper border rounded-3 p-2 ">
                                    <small>CC</small>
                                    <input type="radio" name="type" value="CC">
                                </div>
                                <div onclick="checked(this)" role="button" class="check_wrapper border rounded-3 p-2 ">
                                    <small>CE</small>
                                    <input type="radio" name="type" value="CE">
                                </div>
                                <div onclick="checked(this)" role="button" class="check_wrapper border rounded-3 p-2 ">
                                    <small>PS</small>
                                    <input type="radio" name="type" value="PASAPORTE">
                                </div>
                            </section>

                        </div>
                    </section>

                </div>
            </form>

        </section>
    </main>


    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <?php
    switch ($userInfo['tipo_doc']) {
        case 'CC':
            echo '
                <script>
                    const item = document.querySelector("input[value=CC]");
                    item.checked = true;
                    item.parentElement.style.boxShadow = "0 0 0 0.2rem rgba(0, 255, 98, 0.308)";
                    item.parentElement.style.boderColor = "#00ff37"
                </script>
                    
                ';
            break;
        case 'CE':
            echo '
                <script>
                    const item = document.querySelector("input[value=CE]");
                    item.checked = true;
                    item.parentElement.style.boxShadow = "0 0 0 0.2rem rgba(0, 255, 98, 0.308)";
                    item.parentElement.style.boderColor = "#00ff37"
                </script>
                ';
            break;

        case 'PASAPORTE':
            echo '
                <script>
                    const item = document.querySelector("input[value=PASAPORTE]");
                    item.checked = true;
                    item.parentElement.style.boxShadow = "0 0 0 0.2rem rgba(0, 255, 98, 0.308)";
                    item.parentElement.style.boderColor = "#00ff37"
                </script>
                ';
            break;

        default:
            # code...
            break;
    }

    echo '
        <script>
            

            $("#input_img").change(function(){
                const file = $(this)[0].files[0];
                let userId = ' . $user_id . ';
                const fileName= file.name; 
            
                const formData = new FormData()
            
                formData.append("file", file)
                formData.append("filename", fileName)
                formData.append("userId", userId)
            
                $.ajax({
                    url: "../../Controllers/modificarFotoRes.php",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response){
                        if(response){
                            window.location.reload()
                        }else{
                            console.log("BYeeeeeee")
                        }
                    },
                    error: function (err) {
                        console.log(err);
                    }
                })
            
            
            })

        </script>
    '
    ?>

    <script>
        const radioBtnContainer = document.querySelectorAll(".check_wrapper")

        window.onload = () => {
            const file = document.querySelector("input[type=file]")

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

        function reset(e) {
            radioBtnContainer.forEach(element => {
                element.style.boxShadow = "none";
                element.style.boderColor = "transparent"
            });

        }

        function checked(i) {
            radioBtnContainer.forEach(element => {
                element.style.boxShadow = "none";
                element.style.boderColor = "transparent"
            });

            i.style.boxShadow = "0 0 0 0.2rem rgba(0, 255, 98, 0.308)";
            i.style.boderColor = "#00ff37"
        }
    </script>

    <script src="./js/perfil.js"></script>

    <script src="../Dashboard/js/scripts.js"></script>


</body>

</html>