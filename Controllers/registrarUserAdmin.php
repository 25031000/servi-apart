<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos

    $identificacion = $_POST['identificacion'];
    $tipo_doc = $_POST['tipo_doc'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $clave = $_POST['identificacion'];
    $rol = $_POST['Roles'];
    $estado = $_POST['Estado'];
    $torre = $_POST['torre'];
    $apartamento = $_POST['apartamento'];

     // ------------------------------------------
    // Verificamos que las claves coincidan

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (strlen($identificacion) > 0     && strlen($tipo_doc)> 0 
        && strlen($nombres) >0              && strlen($apellidos)> 0
        && strlen($email) > 0                && strlen($telefono)> 0
        && strlen($clave) > 0                && strlen($rol)> 0                 
        && strlen($estado)> 0               ){

            $claveMd = md5($clave);
            //CREAMOS UNA VARIABLE PARA DEFINIR LA RUTA DONDE QUEDARA ALOJADA LA IMAGEN
            $foto = "../Uploads/Usuarios/".$_FILES['foto']['name'];
            //MOVEMOS EL ARCHIVO A LA CARPETA UPLOADS Y LA CARPETA USUARIOS

            $mover = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

            //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();
            $result = $objConsultas -> insertarUserAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $claveMd, $rol, $estado, $torre, $apartamento, $foto);
        
            echo "<script>location.href='../Views/Administrador/registrar-usuario.php'</script>";
        }else{
            echo '<script>alert("Por favor complete todos los campos")</script>';
            echo "<script>location.href='../Views/Administrador/page-register.php'</script>";
        }


?>