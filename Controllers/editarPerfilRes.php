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
        $torre = $_POST["torre"] ?? "";
        $apartamento = $_POST["apartamento"] ?? "";
        $clave = $_POST["password"] ?? "";
        $clave_2 = $_POST["password-verifier"] ?? "";
        $tipo = $_POST["type"] ?? "";
        $id = $_GET["user"] ?? "";

        if (
            $nombres !== '' &&  $apellidos !== '' &&
            $email !== '' &&  $telefono !== '' &&
            $torre !== '' &&  $apartamento !== '' &&
            $clave === '' &&  $clave_2 === '' &&
            $tipo !== '' &&  $id !== '' && $clave === $clave_2
        ) {
            $objetoConsulta = new Consultas();

            $response = $objetoConsulta->modificarCuentaResidenteAlterna($id, $tipo, $nombres, $apellidos, $email, $telefono, $torre, $apartamento);

            if ($response) {
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
            } else {
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
        if (
            $nombres !== '' &&  $apellidos !== '' &&
            $email !== '' &&  $telefono !== '' &&
            $torre !== '' &&  $apartamento !== '' &&
            $clave !== '' &&  $clave_2 !== '' &&
            $tipo !== '' &&  $id !== '' && $clave == $clave_2
        ) {
            $hash = md5($clave);
            $objetoConsulta = new Consultas();

            $response = $objetoConsulta->modificarCuentaResidente($id, $tipo, $nombres, $apellidos, $email, $telefono, $hash, $torre, $apartamento);

            if ($response) {
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
            } else {
                echo "error";
            }
        }

        if (
            $nombres == '' ||  $apellidos == '' ||
            $email == '' ||  $telefono == '' ||
            $torre == '' ||  $apartamento == '' ||

            $tipo == '' ||  $id == '' || $clave !== $clave_2
        ) {

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