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


$destinatario = $_POST['destinatario'] ?? null;
$apartamento = $_POST['apartamento'] ?? null;
$torre = $_POST['torre'] ?? null;
$telDestinatario = $_POST['tel-destinatario'] ?? null;
$remitente = $_POST['remitente'] ?? null;


if($destinatario !== '' && $apartamento !== '' && $torre !== '' && $telDestinatario !== '' && $remitente !== ''){
    $objConsultas = new Consultas();
    $response = $objConsultas->registrarPaquete($destinatario, $remitente, $torre, $apartamento, $telDestinatario);
    if(!$response) return;

    ?>
    <script>
        
        Swal.fire({
            icon: 'success',
            title: 'Registro exitoso',
            showConfirmButton: false,
            timer: 2000
        }).then((result)=>{
            location.href='../Views/Administrador/registrar-paquete.php';
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
            text: 'Error al registrar paquete. Intentelo de nuevo',
            confirmButtonText: 'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
               location.href='../Views/Administrador/registrar-paquete.php'; 
            }
            
        })
    </script>
    <?php 
}

?>


</body>
</html>

