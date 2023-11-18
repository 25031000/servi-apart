<?php
require_once "../Models/conexion.php";
require_once "../Models/consultas.php";

function verifyData()
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
        $nombres === '' || $apellidos === '' ||
        $email === '' || $telefono === '' ||
        $torre === '' || $apartamento === '' ||
        $clave === '' || $clave_2 === '' ||
        $tipo === '' || $id === ''
    ) {
        return 0;
    } else {
        $isValid = $clave === $clave_2 ? 1 : 0;
        if ($isValid) {
            $hash = md5($clave);
            $objetoConsulta = new Consultas();

            $response = $objetoConsulta->modificarCuentaResidente($id, $tipo, $nombres, $apellidos, $email, $telefono, $hash, $torre, $apartamento);
            echo $response;
        } else {
            echo "las constrasenas no coinciden";
        }
    }
}

//verifyData();

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
    if (
        $nombres !== '' &&  $apellidos !== '' &&
        $email !== '' &&  $telefono !== '' &&
        $torre !== '' &&  $apartamento !== '' &&
        $clave !== '' &&  $clave_2 !== '' &&
        $tipo !== '' &&  $id !== '' && $clave === $clave_2
    ) {
        $hash = md5($clave);
        $objetoConsulta = new Consultas();

        $response = $objetoConsulta->modificarCuentaResidente($id, $tipo, $nombres, $apellidos, $email, $telefono, $hash, $torre, $apartamento);

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
    
    if(
        $nombres == '' ||  $apellidos == '' ||
        $email == '' ||  $telefono == '' ||
        $torre == '' ||  $apartamento == '' ||

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