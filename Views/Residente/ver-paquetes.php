<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">
    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <title>Paueteria</title>
</head>
<body>
<?php
    include '../../components/menu.php';
?>
    <!-- /# sidebar -->
    <?php
    include '../../components/headerInclude.php';
?>

<?php

    $closure = fn(int $num_one, int $num_two) => $num_one + $num_two; 
     $result  = $closure(23, 23);
     echo $result;
?>


<!-- Common -->
<script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>


    <!-- custom -->
<script>
    //menu icon on Navbar
    $('#menu-btn').click(() => {

$('#menu-modal').attr('transition-style', 'in:wipe:down')
$('#menu-modal').css({
    display: 'block'
})
$('body').css({
    overflowY: "hidden"
})
})

//close icon on modal
$('#close').click(() => {

$('#menu-modal').attr('transition-style', 'out:wipe:down')
$('body').css({
    overflowY: "scroll"
})

})
</script>
</body>
</html>