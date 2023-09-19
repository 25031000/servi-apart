<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos

    $id_nov = $_GET['id_nov'];
    $placa = $_GET['placa'];
    $identificacion = $_POST['identificacion'];
    $novedad = $_POST['novedad'];

    
     // ------------------------------------------
    // Verificamos que las claves coincidan

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (strlen($novedad)>0){

            //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();
            $result = $objConsultas -> modificarNovedadesAdmin($id_nov, $placa, $identificacion, $novedad);    
        

        }else{
            echo '<script>alert("Por favor complete todos los campos")</script>';
            echo '<script>location.href="../Views/Administrador/modificar-novedad.php?id_nov=' . $id_nov . '"</script>';
        }


?>