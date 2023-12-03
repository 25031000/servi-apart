<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auth</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
       *,
    html,
    body {
        font-family: 'Varela Round', sans-serif;
    } 
    </style>
    
</head>

<body>
   
</body>

</html>

<?php
require_once "../Models/conexion.php";
require_once "../Models/consultas.php";



function modifyAccount()
{
    $nombres = $_POST['nombres'] ?? "";
    $apellidos = $_POST["apellidos"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefono = $_POST["telefono"] ?? "";
    $clave = $_POST["password"] ?? "";
    $clave_2 = $_POST["password-verifier"] ?? "";
    $tipo = $_POST["type"] ?? "";
    $id = $_GET["user"] ?? "";

    //primer caso, todos los valores, contrasenas vacias e iguales
    if (
        $nombres !== '' &&  $apellidos !== '' &&
        $email !== '' &&  $telefono !== '' &&
        $clave === '' &&  $clave_2 === '' &&
        $tipo !== '' &&  $id !== '' && $clave === $clave_2
    ) {
        $objetoConsulta = new Consultas();

        $response = $objetoConsulta->modificarCuentaPSAlterna($id, $tipo, $nombres, $apellidos, $email, $telefono);

        if($response){
            echo '
            <script>
        
            Swal.fire({
                icon: "success",
                title: "Hecho!",
                text: "Actualizacion de perfil exitosa",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                window.history.back();
            })
        </script>
            ';
        }else{
            echo '
            <script>
        
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Error al actualizar la cuenta, verifica que todos los campos esten completos",
                        confirmButtonText: "Ok"
                    }).then((result)=>{
                        if(result.isConfirmed){
                            window.history.back();
                        }
                        
                    })
                </script>
            ';
        }
    }
    //segundo caso, todos los valores y contrasenas iguales
    if (
        $nombres !== '' &&  $apellidos !== '' &&
        $email !== '' &&  $telefono !== '' &&
        $clave !== '' &&  $clave_2 !== '' &&
        $tipo !== '' &&  $id !== '' && $clave === $clave_2
    ) {
        $hash = md5($clave);
        $objetoConsulta = new Consultas();

        $response = $objetoConsulta->modificarCuentaPS($id, $tipo, $nombres, $apellidos, $email, $telefono, $hash);

        if($response){
            echo '
            <script>
        
            Swal.fire({
                icon: "success",
                title: "Hecho!",
                text: "Actualizacion de clave exitosa",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                window.history.back();
            })
        </script>
            ';
        }else{
            echo "error";
        }
    }
    //tercer caso, alguno de los valores no fue rellenado o las claves no coinciden
    if(
        $nombres == '' ||  $apellidos == '' ||
        $email == '' ||  $telefono == '' ||
        $tipo == '' ||  $id == '' || $clave !== $clave_2
    ){
        echo '
        
        <script>
        
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Error al actualizar la cuenta, verifica que las claves coincidan y los campos esten completos",
                    confirmButtonText: "Ok"
                }).then((result)=>{
                    if(result.isConfirmed){
                        window.history.back();
                    }
                    
                })
            </script>
        ';
    }
}

modifyAccount()

?>