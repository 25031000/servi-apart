
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
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
   

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

<div class="container">
<h2 class="my-5 ms-5 mb-3 d-block w-100 text-center"><strong>Registrar Petición</strong></h2>
<p class="text-center" style="padding-bottom:30px">Aquí puedes presentar todas tus peticiones, quejas o preguntas a los administradores de tu conjunto.</p>
<div class="row">
  <div class="col-md-6">
    <img src="images/PeticionBack.svg" alt="" style="with: 400px; height: 400px">
  </div>
  <div class="col-md-6">
<form class="row g-3 pack-form" action="../../Controllers/registrarPeticion.php?id=<?php echo $id;?>" method="post">
  <div class="d-flex flex-column mb-3">
    <label class="form-label">Título</label>
    <input type="text" name="titulo" class="form-control input" id="inputEmail4">
  </div>
  <div class="d-flex flex-column mb-3">
    <label class="form-label">Descripción</label>
    <textarea name="descripcion" rows="4" cols="40" placeholder="" class="rounded-3 input" style="max-height:300px"></textarea> 
    <div class="d-flex flex-column  mt-3">
     <div class="row">
     <div class="col-md-6">
        <button type="submit" class="btn" style="background-color: #00BF63; color: #FFFFFF">Enviar</button>                           
      </div>
      <div class="col-md-6">
        <button class="btn btn-warning"><a href="ver-peticiones.php?id=<?php echo $id;?>" style="color: #FFFFFF; text-decoration: none">Mis peticiones </a></button>                              
      </div>
        </div>
    </div>
    </div>

    </div>
    
  </div>

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