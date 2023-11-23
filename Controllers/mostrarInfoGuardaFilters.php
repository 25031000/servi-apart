<?php


require_once("../Models/conexion.php");
require_once("../Models/consultas.php");

function cargarPaquetePS()
{
    $objConsultas = new Consultas();
    $arr = $objConsultas->mostrarPaquetePs();
    if (count($arr) == 0) {
        echo '
            <section class="container d-flex flex-column align-items-center">
                <img src="./images/empty-mailbox.svg" width="500" height="500" />
                <h5>Parece que no existen paquetes registrados</h5>
            </section>
        ';
    } else {
        array_map(function ($item) {
            $months = array("01" => "Ene", "02" => "Feb", "03" => "Mar", "04" => "Abr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Ago", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dic");

            echo '
            <section class="px-3 py-5 rounded-3 row position-relative custom-card my-3 mx-2" style="min-width: 400px !important;">
                
                <a aria-label="Chat on WhatsApp" target="_blank" data-bs-toggle="tooltip" class="position-absolute w-auto" style="top: 30px; right: 20px;" data-bs-title="Default tooltip" href="https://wa.me/57' . $item['telefono'] . '"><img class="whatsapp" style="width: 30px; height: 30px; "  alt="Chat on WhatsApp" src="../../assets/icons/whatsapp.png" /><a />
                
               <div class="d-flex align-items-end mb-3">
                    <h2 class="m-0 me-2 p-0 " style="font-size: 30px">' . $item['remitente'] . '</h2>
                    <small class="p-0 m-0 position-relative" style="font-size: 12px; bottom: 4px">' . explode('-', $item['fecha'])[2] . ' ' . $months[explode("-", $item['fecha'])[1]] . ' ' . explode('-', $item['fecha'])[0] . '</small>
               </div>       
               <hr />   
               <div class="d-flex flex-column">
                    <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['nombres'] . ' ' . $item['apellidos'] . '</p>
                    <small class="m-0 p-0">Residente</small>
               </div>      

               <div class="d-flex">
                    <div class="d-flex me-2 flex-column">
                        <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['apartamento'] . '</p>
                        <small class="m-0 p-0">Apartamento</small>
                    </div>
                    <div class="d-flex  flex-column">
                        <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['torre'] . '</p>
                        <small class="m-0 p-0">Torre</small>    
                    </div>
               </div>          
            </section>
        ';
        }, $arr);
    }
}


function cargarPaquetesHoyPS(){
    $objConsultas = new Consultas();
    $arr = $objConsultas->mostrarPaquetesHoyPs();
    if (count($arr) == 0) {
        echo '
            <section class="container d-flex flex-column align-items-center">
                <img src="./images/empty-mailbox.svg" width="500" height="500" />
                <h5>Parece que no existen paquetes registrados el dia de hoy</h5>
            </section>
        ';
    } else {
        array_map(function ($item) {
            $months = array("01" => "Ene", "02" => "Feb", "03" => "Mar", "04" => "Abr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Ago", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dic");

            echo '
            <section class="px-3 py-5 rounded-3 row position-relative custom-card my-3 mx-2" style="min-width: 400px !important;">
                
                <a aria-label="Chat on WhatsApp" target="_blank" data-bs-toggle="tooltip" class="position-absolute w-auto" style="top: 30px; right: 20px;" data-bs-title="Default tooltip" href="https://wa.me/57' . $item['telefono'] . '"><img class="whatsapp" style="width: 30px; height: 30px; "  alt="Chat on WhatsApp" src="../../assets/icons/whatsapp.png" /><a />
                
               <div class="d-flex align-items-end mb-3">
                    <h2 class="m-0 me-2 p-0 " style="font-size: 30px">' . $item['remitente'] . '</h2>
                    <small class="p-0 m-0 position-relative" style="font-size: 12px; bottom: 4px">' . explode('-', $item['fecha'])[2] . ' ' . $months[explode("-", $item['fecha'])[1]] . ' ' . explode('-', $item['fecha'])[0] . '</small>
               </div>       
               <hr />   
               <div class="d-flex flex-column">
                    <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['nombres'] . ' ' . $item['apellidos'] . '</p>
                    <small class="m-0 p-0">Residente</small>
               </div>      

               <div class="d-flex">
                    <div class="d-flex me-2 flex-column">
                        <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['apartamento'] . '</p>
                        <small class="m-0 p-0">Apartamento</small>
                    </div>
                    <div class="d-flex  flex-column">
                        <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['torre'] . '</p>
                        <small class="m-0 p-0">Torre</small>    
                    </div>
               </div>          
            </section>
        ';
        }, $arr);
    }
}

function cargarPaquetesSemanaPS(){
    $objConsultas = new Consultas();
    $arr = $objConsultas->mostrarPaquetesSemanaPs();
    if (count($arr) == 0) {
        echo '
            <section class="container d-flex flex-column align-items-center">
                <img src="./images/empty-mailbox.svg" width="500" height="500" />
                <h5>Parece que no existen paquetes registrados el dia de hoy</h5>
            </section>
        ';
    } else {
        array_map(function ($item) {
            $months = array("01" => "Ene", "02" => "Feb", "03" => "Mar", "04" => "Abr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Ago", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dic");

            echo '
            <section class="px-3 py-5 rounded-3 row position-relative custom-card my-3 mx-2" style="min-width: 400px !important;">
                
                <a aria-label="Chat on WhatsApp" target="_blank" data-bs-toggle="tooltip" class="position-absolute w-auto" style="top: 30px; right: 20px;" data-bs-title="Default tooltip" href="https://wa.me/57' . $item['telefono'] . '"><img class="whatsapp" style="width: 30px; height: 30px; "  alt="Chat on WhatsApp" src="../../assets/icons/whatsapp.png" /><a />
                
               <div class="d-flex align-items-end mb-3">
                    <h2 class="m-0 me-2 p-0 " style="font-size: 30px">' . $item['remitente'] . '</h2>
                    <small class="p-0 m-0 position-relative" style="font-size: 12px; bottom: 4px">' . explode('-', $item['fecha'])[2] . ' ' . $months[explode("-", $item['fecha'])[1]] . ' ' . explode('-', $item['fecha'])[0] . '</small>
               </div>       
               <hr />   
               <div class="d-flex flex-column">
                    <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['nombres'] . ' ' . $item['apellidos'] . '</p>
                    <small class="m-0 p-0">Residente</small>
               </div>      

               <div class="d-flex">
                    <div class="d-flex me-2 flex-column">
                        <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['apartamento'] . '</p>
                        <small class="m-0 p-0">Apartamento</small>
                    </div>
                    <div class="d-flex  flex-column">
                        <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['torre'] . '</p>
                        <small class="m-0 p-0">Torre</small>    
                    </div>
               </div>          
            </section>
        ';
        }, $arr);
    }
}

function cargarPaquetesMesPS(){
    $objConsultas = new Consultas();
    $arr = $objConsultas->mostrarPaquetesMesPs();
    if (count($arr) == 0) {
        echo '
            <section class="container d-flex flex-column align-items-center">
                <img src="./images/empty-mailbox.svg" width="500" height="500" />
                <h5>Parece que no existen paquetes registrados el dia de hoy</h5>
            </section>
        ';
    } else {
        array_map(function ($item) {
            $months = array("01" => "Ene", "02" => "Feb", "03" => "Mar", "04" => "Abr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Ago", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dic");

            echo '
            <section class="px-3 py-5 rounded-3 row position-relative custom-card my-3 mx-2" style="min-width: 400px !important;">
                
                <a aria-label="Chat on WhatsApp" target="_blank" data-bs-toggle="tooltip" class="position-absolute w-auto" style="top: 30px; right: 20px;" data-bs-title="Default tooltip" href="https://wa.me/57' . $item['telefono'] . '"><img class="whatsapp" style="width: 30px; height: 30px; "  alt="Chat on WhatsApp" src="../../assets/icons/whatsapp.png" /><a />
                
               <div class="d-flex align-items-end mb-3">
                    <h2 class="m-0 me-2 p-0 " style="font-size: 30px">' . $item['remitente'] . '</h2>
                    <small class="p-0 m-0 position-relative" style="font-size: 12px; bottom: 4px">' . explode('-', $item['fecha'])[2] . ' ' . $months[explode("-", $item['fecha'])[1]] . ' ' . explode('-', $item['fecha'])[0] . '</small>
               </div>       
               <hr />   
               <div class="d-flex flex-column">
                    <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['nombres'] . ' ' . $item['apellidos'] . '</p>
                    <small class="m-0 p-0">Residente</small>
               </div>      

               <div class="d-flex">
                    <div class="d-flex me-2 flex-column">
                        <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['apartamento'] . '</p>
                        <small class="m-0 p-0">Apartamento</small>
                    </div>
                    <div class="d-flex  flex-column">
                        <p class="m-0 p-0" style="font-size: 20px; font-weight: 600 !important; ">' . $item['torre'] . '</p>
                        <small class="m-0 p-0">Torre</small>    
                    </div>
               </div>          
            </section>
        ';
        }, $arr);
    }
}
?>