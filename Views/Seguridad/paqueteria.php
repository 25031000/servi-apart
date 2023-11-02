<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paqueteria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">
    
    <link rel="stylesheet" href="../Residente/css/home.css">
    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
    
    
  
</head>

<body style="font-family: 'Varela Round', sans-serif !important;" >
    <header>
        <h1 class="text-center">Paqueteria</h1>
        <?php
              
              include '../../components/menuPS.php';
              include '../../components/headerIncludePS.php';
        ?>
    </header>

    <main></main>

    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    

    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>


    <script>
    //menu icon on Navbar
    $('#menu-btn').click(() => {

$('#menu-modal').attr('transition-style', 'in:wipe:down')
$('#menu-modal').css({
    display: 'block'
})
$('body').css({
    overflowX: "hidden"
})
})

//close icon on modal
$('#close').click(() => {

$('#menu-modal').attr('transition-style', 'out:wipe:down')
$('html').css({
    overflow: "scroll"
})

})
</script>
</body>

</html>