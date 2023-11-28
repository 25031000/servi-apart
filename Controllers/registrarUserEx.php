<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <title>Servi - Apart</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../assets/icons/ico.ico">
</head>
<style>
    *,
    html,
    body {
        font-family: 'Varela Round', sans-serif;
    }
</style>

<body>
<?php

$identificacion = $_POST['identificacion'];
$tipo_doc = $_POST['tipo_doc'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];
$estado = "Pendiente";
$torre = $_POST['torre'];
$apartamento = $_POST['apartamento'];
define('ROL', 'residente');



    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a través del metodo POST y name de los campos

    

     // ------------------------------------------
    // Verificamos que las claves coincidan

    if ($clave == $clave2) {

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (strlen($identificacion) > 0     && strlen($tipo_doc)> 0 
        && strlen($nombres) >0              && strlen($apellidos)>0
        && strlen($email)>0                 && strlen($telefono)>0
        && strlen($clave)>0                 && strlen($torre)>0
        && strlen($apartamento)>0){

            //ENCRIPTAMOS LA CLAVE
            $claveMd = md5($clave);

            //CREAMOS EL OBHETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();
            $result = $objConsultas -> insertarUserEx($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $claveMd, ROL ,$estado, $torre, $apartamento);
        }

        else{
            echo "
            <script>

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor complete todos los campos',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = '../Views/client-site/register-view.html';
                }

            })
        </script>
        ";
        }
    
        
    }else{
        echo "
            <script>

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Las claves no coinciden',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = '../Views/client-site/register-view.html';
                }

            })
        </script>
        ";
        
    }

?>
</body>

</html>