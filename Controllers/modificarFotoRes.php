<?php

require_once("../Models/conexion.php");
require_once("../Models/consultas.php");


if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $fileName = $_POST['filename'];
    $userId = $_POST['userId'];
    $file = $_FILES['file']['tmp_name'];
    
    $picture = "../Uploads/Usuarios/" . $fileName;
    $resultado = move_uploaded_file($file, $picture);

    $objConsultas = new Consultas();
    $result = $objConsultas->actualizarFotoAdmin($userId, $picture);

    echo "1";
}
