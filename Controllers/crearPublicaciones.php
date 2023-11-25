

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    *, html, body{
        font-family: 'Montserrat', sans-serif;
    }
</style>
<body>
    <?php

require_once "../Models/conexion.php";
require_once "../Models/consultas.php";


$titulo = $_POST['titulo'] ?? null;
$descripcion = $_POST['descripcion'] ?? null;


if($titulo !== '' && $descripcion !== ''){
    $objConsultas = new Consultas();
    $response = $objConsultas->crearPublicacion($titulo, $descripcion);
    if(!$response) return;

    ?>
    <script>
        
        Swal.fire({
            icon: 'success',
            title: 'Publicacion creada exitosamente',
            showConfirmButton: false,
            timer: 2000
        }).then((result)=>{
            location.href='../Views/Administrador/ver-publicaciones.php';
        })
    </script>
    <?php 
    //echo "<script>location.href='../Views/Administrador/registrar-paquete.php'</script>";
}else{
    ?>
    <script>
        
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Error al crear la publicacion, verifica que todos los campos esten completos',
            confirmButtonText: 'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
               location.href='../Views/Administrador/crear-publicacion.php'; 
            }
            
        })
    </script>
    <?php 
}

?>


</body>
</html>

