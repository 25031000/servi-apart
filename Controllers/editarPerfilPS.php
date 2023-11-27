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
                    alert("successfully update one");
                    window.history.back();
                </script>
            ';
        }else{
            echo "error";
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
                    alert("successfully update two");
                    window.history.back();
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
            alert("Te falta un valor o tus contrasenas no coinciden, intentalo de nuevo.")
            window.history.back();
        </script>
        ';
    }
}

modifyAccount()

?>