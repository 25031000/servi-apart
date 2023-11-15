<?php
/* require_once("../../../Models/conexion.php");
require_once("../../Models/consultas.php"); */
require_once "../Models/conexion.php";
require_once "../Models/consultas.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = file_get_contents('php://input');
    if($data == 'true'){
        $objConsultas = new Consultas();
        session_start();
        $id = $_SESSION['id'];
        $response = $objConsultas->eliminarPaqueteRes($id);
        echo $response === true ? 1 : 0;
    }
}else{
    http_response_code(405);
}

?>

