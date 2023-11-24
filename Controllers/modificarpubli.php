<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos



    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $id_publi = $_GET['id_publi'];



    // Verificamos que las claves coincidan

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (strlen($titulo)> 0  
        && strlen($descripcion) >0){

            //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();

            $result = $objConsultas->modificarPubli($id_publi, $titulo, $descripcion);    
            echo "<script>location.href='../Views/Administrador/ver-publicaciones.php'</script>";
        

        }else{
            echo '<script>alert("Por favor complete todos los campos")</script>';
            echo "<script>location.href='../Views/Administrador/ver-publicaciones.php'</script>";
        }


?>