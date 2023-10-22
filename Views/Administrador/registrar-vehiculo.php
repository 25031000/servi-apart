<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadAdministrador.php");
    require_once ("../../Controllers/mostrarInfoAdmin.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
    <title>Vehiculos</title>
</head>

<body>
    <?php
    include 'menu-include.php';
    ?>

    <div class="content-wrap">
        <div class="main">
        <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right" style="margin-top:20px">
                        <div class="page-header">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #18d26e !important; margin-left: 20px;">
                                    <img src="../../assets/icons/box-pack.png" alt="">
                                </div>
                                <h1 style="font-size: 1.5rem;" class="ms-4">Registro de Vehículos</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                            <p class="p_vehiculo">Este módulo te ofrece la posibilidad de registrar de manera rápida y
                                sencilla los detalles de los vehículos que ingresen a la propiedad, lo que
                                asegura un control eficiente y seguro de toda la información relevante para tu gestión.</p>   
                                </div>                             
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: #18d26e">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Registro de Vehículos</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- main content -->
            <div class="pt-3 ">
                <main class="w-100 row px-5 gap-4 flex-nowrap  py-5">
                <div id="grid" class="col-md-6 p-0 m-0 grid-collage">
                        <img src="./images/horizontal2.jpg"  width="100%" height="100%" alt="">
                        <img src="./images/vertical.jpg"  alt="">
                        <img src="./images/horizontal.jpg" width="100%" height="100%"   alt="">
                </div>
                    <form action="../../Controllers/registrarVehiculoAdmin.php" class="col-md-6 p-5 pack-form" method="post">
                    <div class="row">
                    <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.7em;">Registrar Vehiculo</h2>
                        </div>  
                                        <div class="form-group col-md-4 ">
                                            <label>Placa:</label>
                                            <input style="width:100%" type="text" class="rounded-3 input" placeholder="Ej: UZI974"
                                                name="placa">
                                        </div>
                                        <div class="form-group col-md-4 ">
                                            <label>Marca:</label>
                                            <select style="width:100%" name="marca" class="rounded-3 input" placeholder="Ej: Ford">
                                                <option value="marca">Marca</option>
                                                <optgroup label="Marcas de Vehículos">
                                                    <option value="chevrolet">Chevrolet</option>
                                                    <option value="renault">Renault</option>
                                                    <option value="mazda">Mazda</option>
                                                    <option value="toyota">Toyota</option>
                                                    <option value="nissan">Nissan</option>
                                                    <option value="honda">Honda</option>
                                                    <option value="suzuki">Suzuki</option>
                                                    <option value="kia">Kia</option>
                                                    <option value="hyundai">Hyundai</option>
                                                    <option value="volkswagen">Volkswagen</option>
                                                    <option value="ford">Ford</option>
                                                    <option value="jeep">Jeep</option>
                                                    <option value="subaru">Subaru</option>
                                                    <option value="volvo">Volvo</option>
                                                    <option value="peugeot">Peugeot</option>
                                                    <option value="fiat">Fiat</option>
                                                    <option value="land-rover">Land Rover</option>
                                                    <option value="jaguar">Jaguar</option>
                                                    <option value="porsche">Porsche</option>
                                                    <option value="lexus">Lexus</option>
                                                    <option value="cadillac">Cadillac</option>
                                                    <option value="buick">Buick</option>
                                                    <option value="lincoln">Lincoln</option>
                                                    <option value="infiniti">Infiniti</option>
                                                    <option value="acura">Acura</option>
                                                    <option value="tesla">Tesla</option>
                                                    <option value="ram">Ram</option>
                                                    <option value="gmc">GMC</option>
                                                    <option value="chrysler">Chrysler</option>
                                                    <option value="dodge">Dodge</option>
                                                    <option value="maserati">Maserati</option>
                                                    <option value="alfa-romeo">Alfa Romeo</option>
                                                </optgroup>
                                                <optgroup label="Marcas de Motos">
                                                    <option value="honda-motos">Honda Motos</option>
                                                    <option value="yamaha-motos">Yamaha Motos</option>
                                                    <option value="suzuki-motos">Suzuki Motos</option>
                                                    <option value="kawasaki-motos">Kawasaki Motos</option>
                                                    <option value="ktm">KTM</option>
                                                    <option value="bajaj">Bajaj</option>
                                                    <option value="royal-enfield">Royal Enfield</option>
                                                    <option value="husqvarna">Husqvarna</option>
                                                    <option value="aprilia">Aprilia</option>
                                                    <option value="mv-agusta">MV Agusta</option>
                                                    <option value="triumph">Triumph</option>
                                                    <option value="harley-davidson">Harley-Davidson</option>
                                                    <option value="vespa">Vespa</option>
                                                    <option value="scooters">Scooters</option>
                                                    <option value="indian-motos">Indian Motos</option>
                                                    <option value="bmw-motos">BMW Motos</option>
                                                    <option value="ducati-motos">Ducati Motos</option>
                                                    <option value="kymco-motos">Kymco Motos</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 ">
                                            <label>Referencia:</label>
                                            <input style="width:100%" type="text" class="rounded-3 input" placeholder="Ej: Explorer"
                                                name="referencia">
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label style="display:block;">Modelo:</label>
                                            <input style="width:100%" type="number" class="rounded-3 input" placeholder="Ej: 2013"
                                                name="modelo">
                                        </div>
                                        <div class="form-group col-md-6  labelid" style="display:block">
                                            <label>Identificación de Propietario:</label>
                                            <input style="width:100%" type="number" class="rounded-3 input" placeholder="Ej: 1516465400"
                                                name="identificacion">
                                        </div>
                                        <div class="form-group col-md-3 campos_vehiculo">
                                            <label for="uploadBtn" class="archivo"> <i class="fa-solid fa-upload"></i>Foto 1 de Vehiculo</label>
                                            <input type="file" id="uploadBtn"  name="foto1"
                                                accept=".jpeg, .jpg, .png, .gif">
                                        </div>
                                        <div class="form-group col-md-3 campos_vehiculo">
                                            <label for="uploadBtn" class="archivo"> <i class="fa-solid fa-upload"></i>Foto 2 de Vehiculo</label>
                                            <input type="file" id="uploadBtn" name="foto2"
                                                accept=".jpeg, .jpg, .png, .gif">
                                        </div>

                                        <div class="form-group col-md-3 campos_vehiculo">
                                            <label for="uploadBtn" class="archivo"> <i class="fa-solid fa-upload"></i>Foto 3 de Vehiculo</label>
                                            <input type="file" id="uploadBtn"  name="foto3"
                                                accept=".jpeg, .jpg, .png, .gif">
                                        </div>

                                        <div class="form-group col-md-3 campos_vehiculo">
                                            <label for="uploadBtn" class="archivo"> <i class="fa-solid fa-upload"></i>Foto 4 de Vehiculo</label>
                                            <input type="file" id="uploadBtn" name="foto4"
                                                accept=".jpeg, .jpg, .png, .gif">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column  mt-3">
                            <button class="p-2 register-btn rounded-2 w-30">Registrar</button>                        
                        </div>
                    </form>
                  
                </main>
            </div>
        </div>
    </div>


    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../Dashboard/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>